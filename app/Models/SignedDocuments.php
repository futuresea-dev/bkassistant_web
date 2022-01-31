<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class SignedDocuments extends Model
{
    protected $guarded = [];
	protected $table='tbl_signed_documents';
	public $timestamps = false;		
}
