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
        Schema::create('contract_renewals', function (Blueprint $table) {
            $table->string('Month');
            $table->integer('ContractsExpiring');
            $table->integer('ContractsRenewed');
            $table->integer('NewLeases');
        });
        DB::table('contract_renewals')->insert([
    ['Month' => 'January', 'ContractsExpiring' => 5, 'ContractsRenewed' => 3, 'NewLeases' => 2],
    ['Month' => 'February', 'ContractsExpiring' => 4, 'ContractsRenewed' => 3, 'NewLeases' => 1],
    ['Month' => 'March', 'ContractsExpiring' => 7, 'ContractsRenewed' => 6, 'NewLeases' => 1],
    ['Month' => 'April', 'ContractsExpiring' => 6, 'ContractsRenewed' => 4, 'NewLeases' => 2],
    ['Month' => 'May', 'ContractsExpiring' => 5, 'ContractsRenewed' => 5, 'NewLeases' => 0],
    ['Month' => 'June', 'ContractsExpiring' => 6, 'ContractsRenewed' => 5, 'NewLeases' => 1]
]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contract_renewals');
    }
};
