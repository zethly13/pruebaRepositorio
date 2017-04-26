<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_acceso', 100);
            $table->string('ruta_acceso', 70);
            $table->text('descripcion_acceso');
            $table->string('icono_acceso', 50);
            $table->enum('defecto_acceso',['SI','NO']);
            $table->integer('peso_acceso');    
        
            $table->timestamps();

        });
        Schema::create('acceso_sub_rol', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('id_acceso')->unsigned();
            $table->integer('id_sub_rol')->unsigned();

            $table->foreign('id_acceso')->references('id')->on('accesos')->onDelete('cascade');
            $table->foreign('id_sub_rol')->references('id')->on('sub_roles')->onDelete('cascade');

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
        Schema::dropIfExists('accesos');
    }
}
