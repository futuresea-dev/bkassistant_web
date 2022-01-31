<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class AttorneyDocuments extends Model
{
    protected $guarded = [];
	protected $table='tbl_attorney_documents';
	public $timestamps = false;		
	

}
