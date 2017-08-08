<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends User
{

    protected $table = 'usuarios';

	protected $fillable = ['doc_identidad', 'login', 'clave', 'apellidos', 'nombres', 'sexo', 'fecha_nac', 'usuario_activo', 'inscribir_adm', 'estilo', 'subir_foto', 'id_estado_civil', 'id_provincia', 'id_ciudad', 'id_tipo_doc_identidad']; 
	protected $hidden = array('clave');

	protected $primaryKey = "doc_identidad";

	public function setPasswordAttribute($value)
    {
    	if($value !== null)
    		$this->attributes['clave'] = bcrypt($value);
    }
	public function tipo_doc_identidad()
	{
		return $this->belongsTo('App\Tipo_doc_identidad', 'id_tipo_doc_identidad','id');
	}

	public function ciudad()
	{
		return $this->belongsTo('App\Ciudad', 'ciudad_expedido_doc','id');
	}

	public function estado_civil()
	{
		return $this->belongsTo('App\Estado_civil', 'id_estado_civil','id');
	}

	public function provincia()
	{
		return $this->belongsTo('App\Provincia', 'id_provincia', 'id');
	}

	public function usuario_direcciones()
	{
		return $this->hasMany('App\Usuario_direccion','id_usuario','id');
	}

	public function usuario_fotografias()
	{
		return $this->hasMany('App\Usuario_fotografia', 'id_usuario','id');
	}

	public function usuario_telefonos()
	{
		return $this->hasMany('App\Usuario_telefono', 'id_usuario','id');
	}

	public function usuario_emails()
	{
		return $this->hasMany('App\Usuario_email','id_usuario', 'id');
	}
	public function usuario_asignar_sub_roles()
	{
		return $this->hasMany('App\Usuario_asignar_sub_rol', 'id_usuario', 'id');
	}

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->clave;
	}

}
