<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('occupancy_rate', function (Blueprint $table) {
            $table->string('Month');
            $table->float('OccupiedArea_sqm');
            $table->float('TotalArea_sqm');
            $table->float('OccupancyRate_percent');
        });
        DB::table('occupancy_rate')->insert([
    ['Month' => 'January', 'OccupiedArea_sqm' => 48000, 'TotalArea_sqm' => 50000, 'OccupancyRate_percent' => 96],
    ['Month' => 'February', 'OccupiedArea_sqm' => 47500, 'TotalArea_sqm' => 50000, 'OccupancyRate_percent' => 95],
    ['Month' => 'March', 'OccupiedArea_sqm' => 49000, 'TotalArea_sqm' => 50000, 'OccupancyRate_percent' => 98],
    ['Month' => 'April', 'OccupiedArea_sqm' => 48200, 'TotalArea_sqm' => 50000, 'OccupancyRate_percent' => 96.4],
    ['Month' => 'May', 'OccupiedArea_sqm' => 49200, 'TotalArea_sqm' => 50000, 'OccupancyRate_percent' => 98.4],
    ['Month' => 'June', 'OccupiedArea_sqm' => 48800, 'TotalArea_sqm' => 50000, 'OccupancyRate_percent' => 97.6]
]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('occupancy_rates');
    }
};
