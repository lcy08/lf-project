<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnergyConsumption extends Model
{
    protected $table = 'energy_consumption';
    public $timestamps = false;
    protected $fillable = ['Month', 'EnergyConsumption_kWh', 'EnergyCost_IDR'];
}
