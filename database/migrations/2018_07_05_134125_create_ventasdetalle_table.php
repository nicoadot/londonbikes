<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasdetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventasdetalle', function (Blueprint $table) {
            $table->integer('id')->nullable(false);
            $table->integer('idproducto')->nullable(false);
            $table->integer('cantidad')->nullable(false);
            $table->float('preciounitario',8,2)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventasdetalle');
    }
}
