<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceOwner extends Model
{
    protected $fillable = ['billing_name', 'address_country', 'address_zip', 'address_city', 'address_street', 'vat_number'];

    public function device()
    {
        return $this->hasOne(Device::class);
    }

}
