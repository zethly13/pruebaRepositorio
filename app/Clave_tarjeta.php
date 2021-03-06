<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clave_tarjeta extends Model
{
    protected $table = 'clave_tarjetas';

    protected $fillable = ['activo_notas','A1','A2','A3','A4','A5','B1','B2','B3','B4','B5','C1','C2','C3','C4','C5','D1','D2','D3','D4','D5','E1','E2','E3','E4','E5','F1','F2','F3','F4','F5','G1','G2','G3','G4','G5','H1','H2','H3','H4','H5','I1','I2','I3','I4','I5','J1','J2','J3','J4','J5','id_usuario'];

    public function usuario()
	{
		return $this->belongsTo('App\Usuario', 'id_usuario', 'id');
	}

}
