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
        DB::table('revenue_per_sqm')->insert([
    ['Month' => 'January', 'Revenue_IDR' => 3600000000, 'TotalArea_sqm' => 50000, 'RevenuePerSqM_IDR' => 75000],
    ['Month' => 'February', 'Revenue_IDR' => 3562500000, 'TotalArea_sqm' => 50000, 'RevenuePerSqM_IDR' => 75000],
    ['Month' => 'March', 'Revenue_IDR' => 3675000000, 'TotalArea_sqm' => 50000, 'RevenuePerSqM_IDR' => 75000],
    ['Month' => 'April', 'Revenue_IDR' => 3615000000, 'TotalArea_sqm' => 50000, 'RevenuePerSqM_IDR' => 75000],
    ['Month' => 'May', 'Revenue_IDR' => 3690000000, 'TotalArea_sqm' => 50000, 'RevenuePerSqM_IDR' => 75000],
    ['Month' => 'June', 'Revenue_IDR' => 3660000000, 'TotalArea_sqm' => 50000, 'RevenuePerSqM_IDR' => 75000]
]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revenue_per_sqms');
    }
};
