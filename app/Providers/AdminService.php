<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Hash;
use App\Providers\ValidationService;
use App\Models\Admin;
use App\Models\Recepie;
use App\Models\Order;

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
        if (isset($_SESSION['current_admin'])) return true;
        else return false;
    }

    public static function getRecepies() {
        try {
            if (self::getCurrentAdmin() === false) throw new Exception("Nemate dozvolu za trenutnu operaciju", 27);

            return Recepie::orderBy('date', 'DESC')->get();
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }

    public static function newRecepie($heading, $ingredients, $how_to_make, $picture) {
        try {
            if (self::getCurrentAdmin() === false) throw new Exception("Nemate dozvolu za trenutnu operaciju", 27);

            $heading = ValidationService::validateString($heading, 63);
            if ($heading === false) throw new \Exception("Naslov recepta nije odgovarajućeg formata", 22);

            $ingredients = ValidationService::validateString($ingredients);
            if ($ingredients === false) throw new \Exception("Sastojci nisu odogovarajućeg formata", 23);

            $how_to_make = ValidationService::validateString($how_to_make);
            if ($how_to_make === false) throw new \Exception("Način spremanja nije odgovarajućeg formata", 24);

            $recepie = new Recepie();
            $recepie->heading = $heading;
            $recepie->ingredients = $ingredients;
            $recepie->how_to_make = $how_to_make;
            $recepie->picture = ImageService::uploadImage($picture);
            $recepie->approved = true;
            $recepie->save();

            return true;
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }

    public static function recepieStatus($id) {
        try {
            if (self::getCurrentAdmin() === false) throw new Exception("Nemate dozvolu za trenutnu operaciju", 27);

            $recepie = Recepie::find($id);
            if (empty($recepie)) throw new \Exception("Nepostojeći recept", 3);

            $recepie->approved = boolval($recepie->approved) === false ? true : false;

            $recepie->save();

            return $recepie->approved;
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }

    public static function getOrders() {
        try {
            if (self::getCurrentAdmin() === false) throw new Exception("Nemate dozvolu za trenutnu operaciju", 27);

            return Order::orderBy('date', 'DESC')->get();
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }

    public static function orderStatus($id) {
        try {
            if (self::getCurrentAdmin() === false) throw new Exception("Nemate dozvolu za trenutnu operaciju", 27);

            $order = Order::find($id);
            if (empty($order)) throw new \Exception("Narudžbina nije pronađena", 28);

            $order->delivered = boolval($order->delivered) === false ? true : false;

            $order->save();

            return $order->delivered;
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }
}
