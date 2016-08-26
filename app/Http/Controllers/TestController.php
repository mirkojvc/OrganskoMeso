<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Providers\EmailService;
use App\Models\Recepie;
use App\Models\RecepiePicture;
//use Mail;

class TestController extends Controller
{
    public function index() {
        $response = Mail::send('emails.welcome', ['key' => 'value'], function($message)
                {
                $message->to('mirkojovic1996@gmail.com', 'John Smith')->subject('Welcome!');
            });
        var_dump($response);
    }
}
