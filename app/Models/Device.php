<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = ['device_id', 'device_type', 'activation_code_id', 'device_api_key'];

    public function activationCode()
    {
        return $this->belongsTo(ActivationCode::class);
    }

    public function leasingPeriods()
    {
        return $this->hasMany(LeasingPeriod::class);
    }

    public function deviceOwner()
    {
        return $this->belongsTo(DeviceOwner::class);
    }
}
