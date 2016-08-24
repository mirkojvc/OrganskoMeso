<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Recepie;

class RecepieService
{
	public static function getRecepies() {
		return Recepie::get();
	}
}
