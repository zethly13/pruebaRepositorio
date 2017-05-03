<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

	protected $fillable = ['doc_identidad', 'login', 'clave', 'apellidos', 'nombres', 'sexo', 'fecha_nac', 'usuario_activo', 'inscribir_adm', 'estilo', 'subir_foto', 'id_estado_civil', 'id_provincia', 'id_ciudad', 'id_tipo_doc_identidad']; 

	public function tipo_doc_identidad()
	{
		return $this->belongsTo('App\Tipo_doc_identidad');
	}

	public function ciudad()
	{
		return $this->belongsTo('App\Ciudad');
	}

	public function estado_civil()
	{
		return $this->belongsTo('App\Estado_civil');
	}

	public function provincia()
	{
		return $this->belongsTo('App\Provincia');
	}

	public function usuario_direcciones()
	{
		return $this->hasMany('App\Usuario_direccion');
	}

	public function usuario_fotografias()
	{
		return $this->hasMany('App\Usuario_fotografia');
	}

	public function usuario_telefonos()
	{
		return $this->hasMany('App\Usuario_telefono');
	}

	public function usuario_emails()
	{
		return $this->hasMany('App\Usuario_email');
	}
	public function usuario_asignar_sub_roles()
	{
		return $this->hasMany('App\Usuario_asignar_sub_rol');
	}

}
