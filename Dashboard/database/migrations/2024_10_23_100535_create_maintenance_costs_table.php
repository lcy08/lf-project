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
        Schema::create('maintenance_costs', function (Blueprint $table) {
            $table->string('Month');
            $table->float('MaintenanceCosts_IDR');
            $table->float('UtilityCosts_IDR');
            $table->float('OtherCosts_IDR');
            $table->float('TotalCosts_IDR');
        });
        DB::table('maintenance_costs')->insert([
    ['Month' => 'January', 'MaintenanceCosts_IDR' => 150000000, 'UtilityCosts_IDR' => 75000000, 'OtherCosts_IDR' => 50000000, 'TotalCosts_IDR' => 275000000],
    ['Month' => 'February', 'MaintenanceCosts_IDR' => 140000000, 'UtilityCosts_IDR' => 78000000, 'OtherCosts_IDR' => 55000000, 'TotalCosts_IDR' => 273000000],
    ['Month' => 'March', 'MaintenanceCosts_IDR' => 160000000, 'UtilityCosts_IDR' => 76000000, 'OtherCosts_IDR' => 52000000, 'TotalCosts_IDR' => 288000000],
    ['Month' => 'April', ' MaintenanceCosts_IDR' => 145000000, 'UtilityCosts_IDR' => 80000000, 'OtherCosts_IDR' => 55000000, 'TotalCosts_IDR' => 280000000],
    ['Month' => 'May', 'MaintenanceCosts_IDR' => 155000000, 'UtilityCosts_IDR' => 82000000, 'OtherCosts_IDR' => 60000000, 'TotalCosts_IDR' => 297000000],
    ['Month' => 'June', 'MaintenanceCosts_IDR' => 150000000, 'UtilityCosts_IDR' => 80000000, 'OtherCosts_IDR' => 60000000, 'TotalCosts_IDR' => 290000000]
]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_costs');
    }
};
