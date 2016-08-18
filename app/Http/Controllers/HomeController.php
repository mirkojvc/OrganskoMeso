<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    
    public function index() {
        return View('index');
    }
     public function contact() {
        return View('contact');
    }
}
