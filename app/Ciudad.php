<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudades';

    protected $fillable = [ 'nombre_ciudad', 'peso_ciudad', 'id_pais'];

    public function usuarios()
	{
		return $this->hasMany('App\Usuario');
	}

	public function pais()
	{
		return $this->belongTo('App\Pais');
	}

	public function provincias()
	{
		return $this->hasMany('App\Provincia');
	}
    
}
