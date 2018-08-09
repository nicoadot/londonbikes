<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion')->nullable(false);
            $table->float('preciounitario',8,2)->nullable(false);
            $table->integer('idcategoria')->nullable(false);
            $table->string('avatar');
            $table->timestamps();
        });

        DB::table('productos')->insert(
       ['descripcion' => 'Vintage2018',
        'preciounitario' => 12000,
        'idcategoria'=> 2,
        'avatar' =>'BICI1.JPG',
       ]
     );
     DB::table('productos')->insert(
    ['descripcion' => 'Plegable2018',
     'preciounitario' => 12000,
     'idcategoria'=> 1,
     'avatar' =>'BICI9.JPG',
    ]
    );
      DB::table('productos')->insert(
     ['descripcion' => 'ModelX2018',
      'preciounitario' => 12000,
      'idcategoria'=> 2,
      'avatar' =>'BICI4.jpg',
     ]
    );
    DB::table('productos')->insert(
    ['descripcion' => 'ModelY2018',
    'preciounitario' => 12000,
    'idcategoria'=> 2,
    'avatar' =>'BICI8.JPG',
    ]
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
