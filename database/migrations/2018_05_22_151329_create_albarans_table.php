<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albarans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_name');
            $table->string('customer_identity',100)->unique();//dni
            $table->string('customer_identity_type',100);
            $table->string('serial',100);
            $table->string('number',100)->unique();
            $table->string('date',100);
            $table->decimal('total_net_amount',10,2);
            $table->decimal('total_amount',10,2);
            $table->integer('included_vat');
            $table->string('observations',100);
            $table->string('lines',100);
            $table->integer('send');
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
        Schema::dropIfExists('albarans');
    }
}
