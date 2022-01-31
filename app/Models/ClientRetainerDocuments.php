<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ClientRetainerDocuments extends Model
{
    protected $guarded = [];
	protected $table='tbl_clients_retainer_documents';
	public $timestamps = false;		
	
/* 	public function getUsers()
    {
        return $this->belongs(User::class,'user_id','id');
    }
	public function designer()
    {
        return $this->belongs(User::class,'designer','id');
    }
	public function assign_designer()
    {
        return $this->hasOne(User::class,'id','designer');
    } */
}
