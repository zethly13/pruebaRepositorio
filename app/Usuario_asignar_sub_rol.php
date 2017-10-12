<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario_asignar_sub_rol extends Model
{
    protected $table = 'usuario_asignar_sub_roles';
    
    protected $fillable = ['cod_sis', 'fecha_inicio', 'fecha_fin', 'activo', 'id_funcion', 'id_sub_rol', 'id_unidad', 'id_usuario'];

    public function usuario()
	{
		return $this->belongsTo('App\Usuario', 'id_usuario', 'id');
	}

	public function sub_rol()
	{
		return $this->belongsTo('App\Sub_rol', 'id_sub_rol','id');
	}
	public function funcion()
	{
		return $this->belongsTo('App\Funcion', 'id_funcion','id');
	}
	public function unidad()
	{
		return $this->belongsTo('App\Unidad','id_unidad','id');
	}
	
}
