<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_rol extends Model
{
    protected $table = 'sub_roles';
   
    protected $fillable = ['nombre_sub_rol', 'descripcion_sub_rol', 'id_rol']; 

  
    public function usuario_asignar_sub_roles()
	{
		return $this->hasMany('App\Usuario_asignar_sub_rol');
	}

	public function rol()
	{
		return $this->belognsTo('App\Rol');
	}

	public function accesos()
	{
		return $this->belongsToMany('App\Acceso');
	}

}
