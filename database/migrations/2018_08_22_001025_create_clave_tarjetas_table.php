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
            $table->enum('activo_notas',['SI','NO'])->default('SI');
            $table->string('A1',50);
            $table->string('A2',50);
            $table->string('A3',50);
            $table->string('A4',50);
            $table->string('A5',50);
            $table->string('B1',50);
            $table->string('B2',50);
            $table->string('B3',50);
            $table->string('B4',50);
            $table->string('B5',50);
            $table->string('C1',50);
            $table->string('C2',50);
            $table->string('C3',50);
            $table->string('C4',50);
            $table->string('C5',50);
            $table->string('D1',50);
            $table->string('D2',50);
            $table->string('D3',50);
            $table->string('D4',50);
            $table->string('D5',50);
            $table->string('E1',50);
            $table->string('E2',50);
            $table->string('E3',50);
            $table->string('E4',50);
            $table->string('E5',50);
            $table->string('F1',50);
            $table->string('F2',50);
            $table->string('F3',50);
            $table->string('F4',50);
            $table->string('F5',50);
            $table->string('G1',50);
            $table->string('G2',50);
            $table->string('G3',50);
            $table->string('G4',50);
            $table->string('G5',50);
            $table->string('H1',50);
            $table->string('H2',50);
            $table->string('H3',50);
            $table->string('H4',50);
            $table->string('H5',50);
            $table->string('I1',50);
            $table->string('I2',50);
            $table->string('I3',50);
            $table->string('I4',50);
            $table->string('I5',50);
            $table->string('J1',50);
            $table->string('J2',50);
            $table->string('J3',50);
            $table->string('J4',50);
            $table->string('J5',50);

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
