<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Migrar_incripcion extends Model
{
    protected $table = 'migrar_inscripciones';

	protected $fillable = ['cod_estudiante','ci','apellidos','nombres','fecha_nac','sexo','cod_plan','nombre_plan','nivelMat','cod_materia','nombreMat','tipoMateria','grupoMat','codDocente','ciDoc','apellidosDocente','nombresDocente','genero','fecha','titulo']; 
}
