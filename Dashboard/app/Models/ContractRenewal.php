<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContractRenewal extends Model
{
    protected $table = 'contract_renewals';
    public $timestamps = false;
    protected $fillable = [
        'Month',
        'ContractsExpiring',
        'ContractsRenewed',
        'NewLeases',
    ];
}