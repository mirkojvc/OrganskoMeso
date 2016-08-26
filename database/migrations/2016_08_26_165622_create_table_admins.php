<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdmins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Admins', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('username', 63);
            $table->string('email', 63);
            $table->string('passwordSalt', 63);
            $table->string('password', 63);
            $table->string('reset_token', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Admins');
    }
}
