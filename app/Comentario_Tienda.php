<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario_Tienda extends Model
{
    protected $table='comentarios_tiendas';

    protected $fillable=['fecha','texto','usuario_id','tienda_id'];

    public function usuario()
    {
       return $this->belongsTo('App\Usuario');
    }

    public function tienda()
    {
       return $this->belongsTo('App\Tienda');
    }
}
