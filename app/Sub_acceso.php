<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_acceso extends Model
{
    protected $table = 'sub_accesos';

    protected $fillable = ['nombre_sub_acceso', 'ruta_sub_acceso', 'descripcion_sub_acceso', 'icono_sub_acceso', 'defecto_sub_acceso', 'peso_sub_acceso', 'id_acceso'];

    public function acceso()
	{
		return $this->belongsTo('App\Acceso', 'id_acceso', 'id');
	}
}
