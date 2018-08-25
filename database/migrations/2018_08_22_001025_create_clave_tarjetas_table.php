<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaveTarjetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('clave_tarjetas', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('activo_notas',['SI','NO'])->default('NO');
            $table->string('A1',2);
            $table->string('A2',2);
            $table->string('A3',2);
            $table->string('A4',2);
            $table->string('A5',2);
            $table->string('B1',2);
            $table->string('B2',2);
            $table->string('B3',2);
            $table->string('B4',2);
            $table->string('B5',2);
            $table->string('C1',2);
            $table->string('C2',2);
            $table->string('C3',2);
            $table->string('C4',2);
            $table->string('C5',2);
            $table->string('D1',2);
            $table->string('D2',2);
            $table->string('D3',2);
            $table->string('D4',2);
            $table->string('D5',2);
            $table->string('E1',2);
            $table->string('E2',2);
            $table->string('E3',2);
            $table->string('E4',2);
            $table->string('E5',2);
            $table->string('F1',2);
            $table->string('F2',2);
            $table->string('F3',2);
            $table->string('F4',2);
            $table->string('F5',2);
            $table->string('G1',2);
            $table->string('G2',2);
            $table->string('G3',2);
            $table->string('G4',2);
            $table->string('G5',2);
            $table->string('H1',2);
            $table->string('H2',2);
            $table->string('H3',2);
            $table->string('H4',2);
            $table->string('H5',2);
            $table->string('I1',2);
            $table->string('I2',2);
            $table->string('I3',2);
            $table->string('I4',2);
            $table->string('I5',2);
            $table->string('J1',2);
            $table->string('J2',2);
            $table->string('J3',2);
            $table->string('J4',2);
            $table->string('J5',2);

            $table->integer('id_usuario')->unsigned();

            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clave_tarjetas');
    }
}
