<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\EmailService;
use App\Providers\RecepieService;

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

    public function recepie_form() {
        return View('recepie_form');
    }

    public function admin() {
        return View('admin_panel');
    }

    public function recepies() {
        $response = RecepieService::getRecepies();
        return View('recepies', ['recepies' => $response]);
    }

    public function getRecepie($id) {
        $response = RecepieService::getRecepie($id);
        if (empty($response)) return View('response', ['code' => 3]);
        else return View('recepie', ['recepie' => $response]);
    }

    public function recepie_form_post(Request $request) {
        $heading = $request->input('heading');
        $ingredients = $request->input('ingredients');
        $how_to_make = $request->input('how_to_make');
        $picture = $request->file('picture');
        $response = RecepieService::createRecepie($heading, $ingredients, $how_to_make, $picture);
        if (is_numeric($response)) return View('response', ['code' => $response]);
        else return View('response', ['code' => 25]);
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
        if ($response === true) return View('response', ['code' => 1]);
        else return View('response', ['code' => 2]);
    }

    public function sendOrder(Request $request) {
        $package = $request->input('cow');
        $quantity = $request->input('quantity');
        $f_name = $request->input('f_name');
        $s_name = $request->input('s_name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $place = $request->input('place');
        $street = $request->input('street');
        $post_code = $request->input('post_code');
        $spec_req = $request->input('spec_req');
        $response = EmailService::sendOrder($package, $quantity, $f_name, $s_name, $email, $phone, $place, $street, $post_code, $spec_req);
        if (is_numeric($response)) return View('response', ['code' => $response]);
        else return View('response', ['code' => 16]);
    }
}
