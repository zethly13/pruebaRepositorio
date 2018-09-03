<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    protected $table = 'gestiones';

    protected $fillable = [ 'anio', 'periodo', 'fecha_inicio', 'fecha_fin', 'activo', 'id_tipo_gestion'];

    public function tipo_gestiones()
	{
		return $this->belongsTo('App\Tipo_gestion', 'id_tipo_gestion', 'id');
	}

	public function plan_gestion_unidades()
	{
		return $this->hasMany('App\Plan_gestion_unidad', 'id_gestion', 'id');
	}
	public function getAnioGestionTipoAttribute()
	{
		return $this->periodo." ".$this->anio." -> ".$this->tipo_gestiones->nombre_tipo_gestion;
	}

	public function titulacion_gestion_plan_areas()
	{
		return $this->hasMany('App\Titulacion_gestion_plan_area', 'id_gestion', 'id');
	}
}
