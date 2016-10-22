<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Hash;
use App\Providers\ValidationService;
use App\Models\Admin;
use App\Models\Recepie;
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

    public static function getRecepies() {
        if (AdminService::getCurrentAdmin() === true) return Recepie::get();
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

    public static function newRecepie($heading, $ingredients, $how_to_make, $picture) {
        try {
            if (self::getCurrentAdmin() === false) $approved = false;
            else $approved = true;

            $recepie = new Recepie();

            $heading = ValidationService::validateString($heading, 63);
            if ($heading === false) throw new \Exception("Naslov recepta nije odgovarajućeg formata", 22);
            $recepie->heading = $heading;

            $ingredients = ValidationService::validateString($ingredients);
            if ($ingredients === false) throw new \Exception("Sastojci nisu odogovarajućeg formata", 23);
            $recepie->ingredients = $ingredients;

            $how_to_make = ValidationService::validateString($how_to_make);
            if ($how_to_make === false) throw new \Exception("Način spremanja nije odgovarajućeg formata", 24);
            $recepie->how_to_make = $how_to_make;

            $recepie->picture = '/src/img/recepie.jpg';

            $recepie->save();

            return true;
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }
}
