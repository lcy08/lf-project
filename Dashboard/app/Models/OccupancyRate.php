<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

                    class OccupancyRate extends Model
{
    protected $table = 'occupancy_rate';
    public $timestamps = false;
    protected $fillable = [
        'Month',
        'OccupiedArea_sqm',
        'TotalArea_sqm',
        'OccupancyRate_percent',
    ];
}
