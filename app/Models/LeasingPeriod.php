<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeasingPeriod extends Model
{
    use HasFactory;

    protected $fillable = ['device_id', 'leasing_plan_id', 'trainings_completed', 'start_date', 'next_check'];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    public function leasingPlan()
    {
        return $this->belongsTo(LeasingPlan::class);
    }
}
