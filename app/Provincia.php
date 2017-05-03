<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'provincias';

    protected $fillable = ['nombre_provincia', 'peso_provincia', 'id_ciudad'];

    public function usuarios()
	{
		return $this->hasMany('App\Usuario');
	}

	public function ciudad()
	{
		return $this->belongsTo('App\Ciudad');
	}
}

