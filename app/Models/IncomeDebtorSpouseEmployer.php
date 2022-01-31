<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class IncomeDebtorSpouseEmployer extends Model
{
    protected $guarded = [];
	protected $table='tbl_income_debtor_spouse_employer';
	public $timestamps = false;	
}
