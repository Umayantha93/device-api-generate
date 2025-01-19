<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OwnerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'billing_name' => $this->billing_name,
            'address_country' => $this->address_country,
            'address_zip' => $this->address_zip,
            'address_city' => $this->address_city,
            'address_street' => $this->address_street,
            'vat_number' => $this->vat_number,
        ];
    }
}
