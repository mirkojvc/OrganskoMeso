<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\ValidationService;
use App\Models\Order;

class EmailService
{
    private static function getAdminMail() {
        return 'mirkojovic1996@gmail.com';
    }

    public static function contactMessage($first_name, $last_name, $email, $phonenumber, $message) {
	    try {
	    	$to = self::getAdminMail();
		    $subject = "Upit";
		    $subject2 = "Kopija upita";
		    $message = $first_name . " " . $last_name . " je napisao:" . "\n\n" . $message;
		    $message2 = "Kopija vaseg upita" . $first_name . "\n\n" . $message;

		    $headers = "From:" . $email;
		    $headers2 = "From:" . $to;
		    mail($to,$subject,$message,$headers);
		    return mail($email,$subject2,$message2,$headers2);
	    } catch (\Exception $e) {
	    	return $e->getCode();
	    }
    }

    public static function sendOrder($package, $quantity, $f_name, $s_name, $email, $phone, $place, $street, $post_code, $spec_req) {
    	try {
    		$order = new Order();

    		$package = ValidationService::validateString($package, 16);
    		if ($package === false) throw new \Exception("Paket nije odgovarajućeg formata", 6);
    		$packages = ['eight', 'quater', 'half', 'one'];
    		if (in_array($package, $packages) === false) throw new \Exception("Niste izabrali paket", 5);

    		$order->package = $package;

    		$quantity = ValidationService::validateInt($quantity, ValidationService::$RANGE_SMALLINTEGER_UNSIGNED['min'], ValidationService::$RANGE_SMALLINTEGER_UNSIGNED['max']);
    		if ($quantity === false) throw new \Exception("Količina nije odgovarajućeg formata", 7);

    		$order->quantity = $quantity;

    		$f_name = ValidationService::validateString($f_name, 63);
    		if ($f_name === false) throw new \Exception("Ime nije odgovarajućeg formata", 8);

    		$order->f_name = $f_name;

    		$s_name = ValidationService::validateString($s_name, 63);
    		if ($s_name === false) throw new \Exception("Prezime nije odgovarajućeg formata", 9);

    		$order->s_name = $s_name;

    		$email = ValidationService::validateEmail($email, 127);
    		if ($email === false) throw new \Exception("Email nije odogovarajućeg formata", 10);

    		$order->email = $email;

    		$phone = ValidationService::validatePhoneNumber($phone);
    		if ($phone === false) throw new \Exception("Telefon nije odgovarajućeg formata", 11);

    		$order->phone = $phone;

    		$place = ValidationService::validateString($place, 127);
    		if ($place === false) throw new \Exception("Mesto nije odgovarajućeg formata", 12);

    		$order->place = $place;

    		$street = ValidationService::validateString($street, 127);
    		if ($street === false) throw new \Exception("Ulica i broj nisu odgovarajućeg formata", 13);

    		$order->street = $street;

    		$post_code = ValidationService::validateInt($post_code, ValidationService::$RANGE_SMALLINTEGER_UNSIGNED['min'], ValidationService::$RANGE_SMALLINTEGER_UNSIGNED['max']);
    		if ($post_code === false) throw new \Exception("Poštanski kod nije odgovarajućeg formata", 14);

    		$order->post_code = $post_code;

    		$spec_req = ValidationService::validateString($spec_req);
    		if ($spec_req === false) throw new \Exception("Poruka sa specijalnim zahtevima nije odgovarajućeg formata", 15);

    		$order->spec_req = $spec_req;

            $order->date = date("Y-m-d");

            $order->time = date("H:i:s");

    		$order->save();

    		//slanje mejla

            $adminMail = self::getAdminMail();

    		$to = $adminMail;
		    $subject = "Narudzbina";
		    $subject2 = "Kopija narudžbine";
		    $message = $f_name . " " . $s_name . "Je narucio:" . "\n\n". $quantity . "kutija od po" . $package . "krave" . "\n\n" . "Licne informacije su:". $email . $phone . $place . $street . $post_code . $spec_req;
		    $message2 = "Kopija narudžbine koju ste porucili ". $f_name . " " . $s_name . "Je narucio:" . "\n\n". $quantity . "kutija od po" . $package . "krave" . "\n\n" . "Licne informacije su:". $email . $phone . $place . $street . $post_code . $spec_req;
		    $headers = "From:" . $email;
		    $headers2 = "From:" . $to;
		    //$mail1 = mail($to,$subject,$message,$headers);
		    //$mail2 = mail($email,$subject2,$message2,$headers2);

    		//if ($mail1 === false) throw new \Exception("Neuspešno poslata narudžbina", 26);
            return true;
    	} catch (\Exception $e) {
    		return $e->getCode();
    	}
    }
}
