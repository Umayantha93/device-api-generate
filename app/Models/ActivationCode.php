<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivationCode extends Model
{
    protected $fillable = ['code', 'leasing_plan_id', 'assigned_to'];

    public function leasingPlan()
    {
        return $this->belongsTo(LeasingPlan::class);
    }

    public function device()
    {
        return $this->belongsTo(Device::class, 'assigned_to');
    }
}
