<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario_Rol extends Model
{
    protected $table='usuarios_roles';

    protected $fillable=['usuario_id','rol_id'];
	
    public function user()
    {
    	return $this->belongsTo('App\Usuario','id','usuario_id');
    }

     public function rol()
    {
    	return $this->belongsTo('App\Rol','id','rol_id');
    }
}
