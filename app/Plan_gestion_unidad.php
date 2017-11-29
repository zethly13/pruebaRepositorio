<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan_gestion_unidad extends Model
{
    protected $table = 'plan_gestion_unidades';

    protected $fillable = [ 'id_gestion','id_plan','id_unidad'];

    public function planes()
	{
		return $this->belongsTo('App\Plan', 'id_plan', 'id');
	}

	public function gestiones()
	{
		return $this->belongsTo('App\Gestion', 'id_gestion', 'id');
	}

	public function unidades()
	{
		return $this->belongsTo('App\Unidad', 'id_unidad', 'id');
	}
}
