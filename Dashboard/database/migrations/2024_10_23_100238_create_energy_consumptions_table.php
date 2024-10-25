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
        Schema::create('energy_consumption', function (Blueprint $table) {
            $table->string('Month');
            $table->float('EnergyConsumption_kWh');
            $table->float('EnergyCost_IDR');
        });
        DB::table('energy_consumption')->insert([
    ['Month' => 'January', 'EnergyConsumption_kWh' => 45000, 'EnergyCost_IDR' => 900000000],
    ['Month' => 'February', 'EnergyConsumption_kWh' => 44500, 'EnergyCost_IDR' => 890000000],
    ['Month' => 'March', 'EnergyConsumption_kWh' => 46200, 'EnergyCost_IDR' => 924000000],
    ['Month' => 'April', 'EnergyConsumption_kWh' => 45500, 'EnergyCost_IDR' => 910000000],
    ['Month' => 'May', 'EnergyConsumption_kWh' => 46800, 'EnergyCost_IDR' => 936000000],
    ['Month' => 'June', 'EnergyConsumption_kWh' => 46000, 'EnergyCost_IDR' => 920000000]
]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('energy_consumptions');
    }
};
