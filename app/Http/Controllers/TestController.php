<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\EmailService;
use App\Models\Recepie;
use App\Models\RecepiePicture;

class TestController extends Controller
{
    public function index() {
        $recepie = Recepie::find(1);
        foreach ($recepie->pictures as $picture) {
            var_dump($picture->picture);
        }
        $picture = RecepiePicture::find(1);
        var_dump($picture->recepie->heading);
    }
}
