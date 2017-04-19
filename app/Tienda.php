<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
     protected $table='tiendas';

     protected $fillable=['nombre','promedio_calificacion','calle','numero','hora_inicio','hora_cierre','hora_almuerzo','hora_dalmuerzo','dia_inicio','dia_termino','cant_favoritos','usuario_id'];

     public function usuario()
     {
     	return $this->belongsTo('App\Usuario');
     }

     public function comentarios_usuarios()
    {
    	return $this->hasMany('App\Comentario_Tienda');
    }
}
