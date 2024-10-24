<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Models\OccupancyRate;

Route::get('/', [DashboardController::class, 'index']);

Route::get('/occupancy', function () {
    return OccupancyRate::all();
});