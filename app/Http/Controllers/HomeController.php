<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\EmailService;

class HomeController extends Controller
{
    
    public function index() {
        return View('index');
    }
     public function contact() {
        return View('contact');
    }
     public function order() {
        return View('order');
    }
    public function recepies() {
        return View('recepies');
    }
     public function recept() {
        return View('recept');
    }
     public function farms() {
        return View('farms');
    }
    public function emailContact(Request $request) {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');
        $response = EmailService::contactMessage($first_name, $last_name, $email, $phone, $message);
        var_dump($response);
        if ($response === true) {
            return View('messagesuccses'); //napravi pogled za uspešno poslat email
        } 
        else {
            return View('messagefailed') ;//napravit pogled za neuspešno poslta email
        }
    }
}
