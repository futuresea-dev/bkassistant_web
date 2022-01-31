<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AdminPaymentSettings extends Model
{
    protected $guarded = [];
	protected $table='tbl_payment_settings';
	public $timestamps = false;	
}
