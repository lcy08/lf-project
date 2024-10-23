<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RevenuePerSqm extends Model
{
    protected $table = 'revenue_per_sqm';
    public $timestamps = false;
    protected $fillable = [
        'Month',
        'Revenue_IDR',
        'TotalArea_sqm',
        'RevenuePerSqM_IDR',
    ];
}
