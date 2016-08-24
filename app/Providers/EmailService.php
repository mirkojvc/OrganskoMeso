<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EmailService
{
    public static function contactMessage($first_name, $last_name, $email, $phonenumber, $message) {
	    try {
	    	$to = "mirkojovic1996@gmail.com"; // this is your Email address
		    $subject = "Form submission";
		    $subject2 = "Copy of your form submission";
		    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $message;
		    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $message;

		    $headers = "From:" . $email;
		    $headers2 = "From:" . $to;
		    mail($to,$subject,$message,$headers);
		    mail($email,$subject2,$message2,$headers2); // sends a copy of the message to the sender
		    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
		    // You can also use header('Location: thank_you.php'); to redirect to another page.
		    // You cannot use header and echo together. It's one or the other.
		    return true;
	    } catch (\Exception $e) {
	    	return $e->getCode();
	    }
    }
}
