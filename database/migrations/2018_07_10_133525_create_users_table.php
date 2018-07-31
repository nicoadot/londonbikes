<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(false);
            $table->string('lastname')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('password')->nullable(false);
            $table->string('remember_token');
            $table->integer('isAdmin')->nullable(false);
            $table->timestamps();
        });

        DB::table('users')->insert(
       ['name' => 'Administrador',
        'lastname' => 'Administrador',
        'email' => 'admin@londonbikes.com',
        'remember_token'=> 'nose',
        'password' => bcrypt('12345678'),
        'isAdmin' => 1
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
        Schema::dropIfExists('users');
    }
}
