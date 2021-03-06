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
        // crear la taula users.
        Schema::create('users',function($table){
            $table->increments('id');
            $table->string('name',100);
            $table->string('email',100)->unique();
            $table->string('password');
            $table->integer('rol');
            $table->rememberToken();
            $table->timestamps();
        });;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //eliminar
        Schema::dropIfExists('users');
    }
}
