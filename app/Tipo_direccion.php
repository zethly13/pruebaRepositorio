<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_direccion extends Model
{
    protected $table = 'tipo_direcciones';
    
    protected $fillable = ['nombre_tipo_direccion', 'peso_direccion'];

    public function usuario_direcciones()
	{
		return $this->hasMany('App\Usuario_direccion');
	}
}
