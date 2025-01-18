<?php

namespace App\Http\Controllers;

use App\Models\ActivationCode;
use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DeviceController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'deviceId' => 'required|exists:devices,device_id',
            'activationCode' => 'nullable|exists:activation_codes,code',
        ]);
        
        $device = Device::with('activationCode')->where('device_id', $validated['deviceId'])->first();
        
        if ($device->device_type == 'restricted') {
            return response()->json(['error' => 'The device has been suspended'], 400);
        }
    
        if ($validated['activationCode']) {

            $activationCode = ActivationCode::where('code', $validated['activationCode'])->first();

            if ($activationCode->code === $device->activationCode->code) {
                return response()->json(['error' => 'Activation code is being used'], 400);
            }

            if ($device->device_type === 'leasing') {
                return response()->json(['error' => 'This device already have a leasing plan'], 400);
            }

            $device->update([
                'device_type' => 'leasing',
                'activation_code_id' => $activationCode->id,
                'device_api_key' => Str::random(32),
            ]);

        } else {
            $device->update([
                'device_type' => 'free',
                'device_api_key' => Str::random(32),
            ]);
        }
    
        return response()->json([
            'deviceId' => $device->device_id,
            'deviceType' => $device->device_type,
            'deviceAPIKey' => $device->device_api_key,
            'timestamp' => $device->created_at,
        ]);
    }
    
}
