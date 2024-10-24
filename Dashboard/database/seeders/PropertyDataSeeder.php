<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyDataSeeder extends Seeder
{
    public function run()
    {
        $jsonData = '{"OccupancyRate": [{"Month": "January", "OccupiedArea_sqm": 48000, "TotalArea_sqm": 50000, "OccupancyRate_percent": 96}, {"Month": "February", "OccupiedArea_sqm": 47500, "TotalArea_sqm": 50000, "OccupancyRate_percent": 95}, {"Month": "March", "OccupiedArea_sqm": 49000, "TotalArea_sqm": 50000, "OccupancyRate_percent": 98}, {"Month": "April", "OccupiedArea_sqm": 48200, "TotalArea_sqm": 50000, "OccupancyRate_percent": 96.4}, {"Month": "May", "OccupiedArea_sqm": 49200, "TotalArea_sqm": 50000, "OccupancyRate_percent": 98.4}, {"Month": "June", "OccupiedArea_sqm": 48800, "TotalArea_sqm": 50000, "OccupancyRate_percent": 97.6}], "RevenuePerSqM": [{"Month": "January", "Revenue_IDR": 3600000000, "TotalArea_sqm": 50000, "RevenuePerSqM_IDR": 75000}, {"Month": "February", "Revenue_IDR": 3562500000, "TotalArea_sqm": 50000, "RevenuePerSqM_IDR": 75000}, {"Month": "March", "Revenue_IDR": 3675000000, "TotalArea_sqm": 50000, "RevenuePerSqM_IDR": 75000}, {"Month": "April", "Revenue_IDR": 3615000000, "TotalArea_sqm": 50000, "RevenuePerSqM_IDR": 75000}, {"Month": "May", "Revenue_IDR": 3690000000, "TotalArea_sqm": 50000, "RevenuePerSqM_IDR": 75000}, {"Month": "June", "Revenue_IDR": 3660000000, "TotalArea_sqm": 50000, "RevenuePerSqM_IDR": 75000}], "MaintenanceCosts": [{"Month": "January", "MaintenanceCosts_IDR": 150000000, "UtilityCosts_IDR": 75000000, "OtherCosts_IDR": 50000000, "TotalCosts_IDR": 275000000}, {"Month": "February", "MaintenanceCosts_IDR": 140000000, "UtilityCosts_IDR": 78000000, "OtherCosts_IDR": 55000000, "TotalCosts_IDR": 273000000}, {"Month": "March", "MaintenanceCosts_IDR": 160000000, "UtilityCosts_IDR": 76000000, "OtherCosts_IDR": 52000000, "TotalCosts_IDR": 288000000}, {"Month": "April", "MaintenanceCosts_IDR": 145000000, "UtilityCosts_IDR": 80000000, "OtherCosts_IDR": 55000000, "TotalCosts_IDR": 280000000}, {"Month": "May", "MaintenanceCosts_IDR": 155000000, "UtilityCosts_IDR": 82000000, "OtherCosts_IDR": 60000000, "TotalCosts_IDR": 297000000}, {"Month": "June", "MaintenanceCosts_IDR": 150000000, "UtilityCosts_IDR": 80000000, "OtherCosts_IDR": 60000000, "TotalCosts_IDR": 290000000}], "EnergyConsumption": [{"Month": "January", "EnergyConsumption_kWh": 45000, "EnergyCost_IDR": 900000000}, {"Month": "February", "EnergyConsumption_kWh": 44500, "EnergyCost_IDR": 890000000}, {"Month": "March", "EnergyConsumption_kWh": 46200, "EnergyCost_IDR": 924000000}, {"Month": "April", "EnergyConsumption_kWh": 45500, "EnergyCost_IDR": 910000000}, {"Month": "May", "EnergyConsumption_kWh": 46800, "EnergyCost_IDR": 936000000}, {"Month": "June", "EnergyConsumption_kWh": 46000, "EnergyCost_IDR": 920000000}], "ContractRenewals": [{"Month": "January", "ContractsExpiring": 5, "ContractsRenewed": 3, "NewLeases": 2}, {"Month": "February", "ContractsExpiring": 4, "ContractsRenewed": 3, "NewLeases": 1}, {"Month": "March", "ContractsExpiring": 7, "ContractsRenewed": 6, "NewLeases": 1}, {"Month": "April", "ContractsExpiring": 6, "ContractsRenewed": 4, "NewLeases": 2}, {"Month": "May", "ContractsExpiring": 5, "ContractsRenewed": 5, "NewLeases": 0}, {"Month": "June", "ContractsExpiring": 6, "ContractsRenewed": 5, "NewLeases": 1}]}';

        $data = json_decode($jsonData, true);

        foreach ($data['OccupancyRate'] as $item) {
            DB::table('occupancy_rates')->insert([
                'month' => $item['Month'],
                'occupied_area_sqm' => $item['OccupiedArea_sqm'],
                'total_area_sqm' => $item['TotalArea_sqm'],
                'occupancy_rate_percent' => $item['OccupancyRate_percent'],
            ]);
        }

        foreach ($data['RevenuePerSqM'] as $item) {
            DB::table('revenue_per_sqm')->insert([
                'month' => $item['Month'],
                'revenue_idr' => $item['Revenue_IDR'],
                'total_area_sqm' => $item['TotalArea_sqm'],
                'revenue_per_sqm_idr' => $item['RevenuePerSqM_IDR'],
            ]);
        }

        foreach ($data['MaintenanceCosts'] as $item) {
            DB::table('maintenance_costs')->insert([
                'month' => $item['Month'],
                'maintenance_costs_idr' => $item['MaintenanceCosts_IDR'],
                'utility_costs_idr' => $item['UtilityCosts_IDR'],
                'other_costs_idr' => $item['OtherCosts_IDR'],
                'total_costs_idr' => $item['TotalCosts_IDR'],
            ]);
        }

        foreach ($data['EnergyConsumption'] as $item) {
            DB::table('energy_consumption')->insert([
                'month' => $item['Month'],
                ' energy_consumption_kwh' => $item['EnergyConsumption_kWh'],
                'energy_cost_idr' => $item['EnergyCost_IDR'],
            ]);
        }

        foreach ($data['ContractRenewals'] as $item) {
            DB::table('contract_renewals')->insert([
                'month' => $item['Month'],
                'contracts_expiring' => $item['ContractsExpiring'],
                'contracts_renewed' => $item['ContractsRenewed'],
                'new_leases' => $item['NewLeases'],
            ]);
        }
    }
}