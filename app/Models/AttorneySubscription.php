<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class AttorneySubscription extends Model
{
    protected $guarded = [];
	protected $table='tbl_attorney_subscription';
	public $timestamps = false;		
	

}
