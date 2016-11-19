<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Providers\EmailService;
use App\Providers\ImageService;
use App\Models\Recepie;
use App\Models\RecepiePicture;
//use Mail;

class TestController extends Controller
{
    public function index() {
    	$_SESSION['current_admin'] = 1;
    }
}
