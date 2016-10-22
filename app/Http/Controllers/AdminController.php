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

    public static function getApproveRecepie() {
        if (AdminService::getCurrentAdmin() === false) {
            return View('response', ['code' => 19]);
        } else {
            $recepies = AdminService::getRecepies();
            return View('admin_approve', ['recepies' => $recepies]);
        }
    }

    public static function postNewRecepie(Request $request) {
        $heading = $request->input('heading');
        $ingredients = $request->input('ingredients');
        $how_to_make = $request->input('how_to_make');
        $picture = $request->input('picture');
        $response = AdminService::newRecepie($heading, $ingredients, $how_to_make, $picture);
        if (is_numeric($response)) return View('admin_response', ['code' => $response]);
        else return View('admin_recepie', ['response' => 'Uspešno ste dodali novi recept']);
    }
}
