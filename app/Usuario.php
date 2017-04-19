<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	protected $table='usuarios';

    protected $fillable = [
        'nombre', 'apellido', 'email','clave','activacion'
    ];

     protected $hidden = [
        'clave', 'remember_token',
    ];

    public function roles()
    {
    	return $this->hasMany('App\Usuario_Rol');
    }

    public function tiendas()
    {
    	return $this->hasMany('App\Tienda');
    }

    public function comentarios_tiendas()
    {
    	return $this->hasMany('App\Comentario_Tienda');
    }

}
