<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\EmailService;
use App\Providers\RecepieService;
use App\Providers\AdminService;
use App\Models\Recepie;

class AdminController extends Controller
{
    public static function getLogIn() {
        return View('admin_login');
    }

    public static function postLogIn(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');
        $response = AdminService::logIn($username, $password);
        if (is_numeric($response)) return View('response', ['code' => $response]);
        else return redirect ('adminPanel');
    }

    public static function getAdminPanel() {
        $response = AdminService::getCurrentAdmin();
        if ($response === false) {
            return View('response', ['code' => 19]);
        }
        else return View('admin_panel');
    }

    public static function postRecepie() {

    }
}
