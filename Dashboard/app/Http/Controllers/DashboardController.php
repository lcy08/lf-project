<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OccupancyRate;
use App\Models\RevenuePerSqm;
use App\Models\EnergyConsumption;
use App\Models\MaintenanceCost;
use App\Models\ContractRenewal;

class DashboardController extends Controller
{
    public function index()
    {
        $occupancyData = OccupancyRate::all();
        $revenueData = RevenuePerSqM::all();
        $energyData = EnergyConsumption::all();
        $maintenanceData = MaintenanceCost::all();
        $contractRenewals = ContractRenewal::all();


        $contractData = $contractRenewals->map(function($item) {
        return [
            'month' => $item->Month,
            'contracts_expiring' => $item->ContractsExpiring,
            'contracts_renewed' => $item->ContractsRenewed,
            'new_leases' => $item->NewLeases,
        ];
    })->toArray();

        return view('dashboard', compact(
            'occupancyData',
            'revenueData',
            'energyData',
            'maintenanceData',
            'contractData',
        ));
    }
}
