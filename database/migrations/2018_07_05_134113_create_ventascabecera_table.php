<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentascabeceraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventascabecera', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcliente')->nullable(false);
            $table->dateTime('fechaventa')->nullable(false);
            $table->float('total',8,2)->nullable(false);
            $table->integer('idformapago')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventascabecera');
    }
}
