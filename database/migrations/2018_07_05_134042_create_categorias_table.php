<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion')->nullable(false);
        });

        DB::table('categorias')->insert(
       ['descripcion' => 'Plegable']
     );
       DB::table('categorias')->insert(
      ['descripcion' => 'Vintage']
      );
      DB::table('categorias')->insert(
     ['descripcion' => 'Mountain Bike']
      );
     DB::table('categorias')->insert(
    ['descripcion' => 'Carrera']
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
