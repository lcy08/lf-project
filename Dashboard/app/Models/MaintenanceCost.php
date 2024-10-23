<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceCost extends Model
{
    protected $table = 'maintenance_costs';
    public $timestamps = false;
    protected $fillable = ['Month', 'MaintenanceCosts_IDR', 'UtilityCosts_IDR', 'OtherCosts_IDR', 'TotalCosts_IDR'];

}
