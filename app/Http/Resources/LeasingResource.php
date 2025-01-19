<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LeasingResource extends JsonResource
{
    public $computed;

    public function __construct($resource, $computedData = null)
    {
        parent::__construct($resource);
        $this->computed = $computedData;
    }
    public function toArray(Request $request): array
    {
        return [
            'deviceId' => $this->device_id,
            'deviceType' => $this->device_type,
            'deviceOwner' => $this->deviceOwner->billing_name ?? null,
            'deviceOwnerDetails' => new OwnerResource($this->deviceOwner) ?? null,
            'leasingPeriodsComputed' => $this->computed ?? null,
            'leasingPeriods' => LeasingPeriodsResource::collection($this->leasingPeriods),
            'timestamp' => now()->toDateTimeString(),
        ];
    }
}
