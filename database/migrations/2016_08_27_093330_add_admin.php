<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;

class AddAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $salt = str_random(31);
        $password = 'lozinka';
        echo 'Ovo je nasumican password molim vas zapisite ga negde -> '.$password."\n";
        DB::table('Admins')
        ->insert(
            [
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'passwordSalt' => $salt,
            'password' => Hash::make($password.$salt),
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
