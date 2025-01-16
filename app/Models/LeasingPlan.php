<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeasingPlan extends Model
{
    protected $fillable = ['name', 'maximum_training', 'maximum_date'];

    public function activationCodes()
    {
        return $this->hasMany(ActivationCode::class);
    }

    public function leasingPeriods()
    {
        return $this->hasMany(LeasingPeriod::class);
    }
}
