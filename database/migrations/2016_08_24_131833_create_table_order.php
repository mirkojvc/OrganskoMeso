<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Orders', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('package', 16);
            $table->smallInteger('quantity');
            $table->string('f_name', 63);
            $table->string('s_name', 63);
            $table->string('email', 127);
            $table->string('phone', 31);
            $table->string('place', 127);
            $table->string('street', 127);
            $table->smallInteger('post_code');
            $table->text('spec_req');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Orders');
    }
}
