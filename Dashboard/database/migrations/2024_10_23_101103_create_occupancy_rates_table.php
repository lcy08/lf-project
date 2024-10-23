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
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('occupancy_rates');
    }
};
