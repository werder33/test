<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('project_id');
            $table->string('title');
            $table->string('img');
            $table->string('url');
            $table->string('size');
            $table->string('roofing');
            $table->string('cover');
            $table->string('fundametn');
            $table->string('wall');
            $table->string('overlap');
            $table->string('socle');
            $table->string('room');
            $table->string('finishing');
            $table->string('footer');
            $table->string('garage');
            $table->string('sauna');
            $table->string('level');
            $table->string('mansard');
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
        Schema::drop('projects');
    }
}
