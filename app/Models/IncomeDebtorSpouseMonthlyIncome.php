<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class IncomeDebtorSpouseMonthlyIncome extends Model
{
    protected $guarded = [];
	protected $table='tbl_income_debtor_spouse_monthly_income';
	public $timestamps = false;	
}
