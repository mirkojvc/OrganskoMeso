<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableRecepiePictures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RecepiePictures', function($table) 
        {
            $table->increments('id')->unsigned();
            $table->integer('recepie_id')->unsigned();
            $table->foreign('recepie_id')->references('id')->on('Recepies');
            $table->string('picture', 127);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('RecepiePictures');
    }
}
