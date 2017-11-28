<?php 
 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestiones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('anio',10);
            $table->string('periodo',10);
            $table->date('fecha-inicio');
            $table->date('fecha_fin');
            $table->enum('activo',['SI','NO']);
            $table->integer('peso_gestion');

            $table->integer('id_tipo_gestion')->unsigned();

            $table->foreign('id_tipo_gestion')->references('id')->on('tipo_gestiones')->onDelete('cascade');
            
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
        Schema::dropIfExists('gestiones');
    }
}
