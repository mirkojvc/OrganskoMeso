<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Hash;
use App\Providers\ValidationService;
use App\Models\Admin;
//use App\Models\Order;

class AdminService
{
    public static function logIn($username, $password) {
        try {
            $admin = Admin::where('username', '=', $username)
            ->orWhere('email', '=', $username)->first();
            if (empty($admin)) throw new \Exception("Korisnik sa tim korinsikčim imenom nije pronađen", 17);

            if (Hash::check($password.$admin->passwordSalt, $admin->password) === false) throw new \Exception("Pogrešno ste ukucali lozinku", 18);

            $_SESSION['current_admin'] = $admin->id;

            return true;
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }

    public static function getCurrentAdmin() {
        $admin = Admin::find($_SESSION['current_admin']);
        if (empty($admin)) return false;
        else return true;
    }

    public static function resetPassword($email) {
        try {
            $admin = Admin::where('email', '=', $email)->first();

            if (empty($admin)) throw new \Exception("Korisnik sa tim email-om ne postoji", 20);

            $admin->reset_token = str_random(16);

            $admin->save();

            Mail::send('emails.welcome', ['key' => 'value'], function($message)
                {
                $message->to('foo@example.com', 'John Smith')->subject('Welcome!');
            });

        } catch (\Exception $e) {
            return $e->getCode();
        }
    }

    public static function resetToken($token) {
        try {
            $admin = Admin::where('reset_token', '=', $token)->first();

            if (empty($admin)) throw new \Exception("Nepostojeći token", 21);


        } catch (\Exception $e) {
            return $e->getCode();
        }
    }
}
