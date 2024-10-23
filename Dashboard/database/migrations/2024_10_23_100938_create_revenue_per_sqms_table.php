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
        Schema::create('revenue_per_sqm', function (Blueprint $table) {
            $table->string('Month');
            $table->float('Revenue_IDR');
            $table->float('TotalArea_sqm');
            $table->float('RevenuePerSqM_IDR');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revenue_per_sqms');
    }
};
