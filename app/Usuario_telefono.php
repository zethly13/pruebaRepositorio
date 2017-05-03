<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario_telefono extends Model
{
    protected $table = 'usuario_telefonos';

    protected $fillable = ['numero_telefono', 'id_usuario', 'id_tipo_telefono'];

    public function tipo_telefono()
	{
		return $this->belongsTo('App\Tipo_telefono');
	}
	public function usuario()
	{
		return $this->belongsTo('App\Usuario');
	}
}
