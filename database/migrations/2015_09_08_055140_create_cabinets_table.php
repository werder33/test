<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCabinetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabinets', function (Blueprint $table) {
            $table->increments('id');
            $table ->integer('user_id');
            $table->text('telefon');
            $table->text('address');
            $table->date('putdate');
            $table->enum('sex',['не определен','м','ж']);
            $table->text('osebe');
            $table->text('avatar');
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
        Schema::drop('cabinets');
    }
}
