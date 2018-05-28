<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturesLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures_lines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('facturaID')->references('number')->on('factures');
            $table->string('description',100);
            $table->integer('units');
            $table->decimal('unit_price',15,6);
            $table->decimal('total_line',15,6);
            $table->decimal('taxa',15,6);
            $table->decimal('price_cost',15,6);
            $table->integer('linea'); 
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
        Schema::dropIfExists('factures_lines');
    }
}
