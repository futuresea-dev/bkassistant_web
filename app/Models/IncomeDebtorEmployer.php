<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class IncomeDebtorEmployer extends Model
{
    protected $guarded = [];
	protected $table='tbl_income_debtor_employer';
	public $timestamps = false;	
}
