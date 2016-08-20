<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Recepies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Recepies', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('heading', 63);
            $table->text('ingredients');
            $table->text('how_to_make');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Recepies');
    }
}
