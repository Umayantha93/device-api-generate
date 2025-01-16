<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\LeasingPeriod;
use Illuminate\Http\Request;

class LeasingController extends Controller
{
    public function getInfo($id)
    {
        $device = Device::with(['activationCode.leasingPlan', 'leasingPeriods'])->where('device_id', $id)->first();
    
        if (!$device) {
            return response()->json(['error' => 'Device not found'], 404);
        }
    
        return response()->json([
            'deviceId' => $device->device_id,
            'deviceType' => $device->device_type,
            'leasingPeriods' => $device->leasingPeriods,
            'timestamp' => now(),
        ]);
    }

    public function updateLeasing(Request $request, $id)
    {
        $validated = $request->validate([
            'deviceId' => 'required|exists:devices,device_id',
            'deviceTrainings' => 'required|integer|min:0',
        ]);

        $leasingPeriod = LeasingPeriod::where('id', $id)->first();

        if (!$leasingPeriod) {
            return response()->json(['error' => 'Leasing period not found'], 404);
        }

        $leasingPeriod->update(['trainings_completed' => $validated['deviceTrainings']]);

        return response()->json(['success' => true, 'message' => 'Leasing period updated']);
    }

    
}
