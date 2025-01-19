<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LeasingPeriodsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'leasingConstructionId' => $this->leasing_construction_id,
            'leasingConstructionMaximumTraining' => $this->leasing_construction_maximum_training,
            'leasingConstructionMaximumDate' => $this->leasing_construction_maximum_date,
        ];
    }
}
