<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\ValidationService;
use App\Models\Recepie;

class RecepieService
{
	public static function getRecepies() {
		return Recepie::get();
	}

	public static function getRecepie($recepie_id) {
		try {
			$recepie_id = ValidationService::validateInt($recepie_id, ValidationService::$RANGE_INTEGER_UNSIGNED['min'], ValidationService::$RANGE_INTEGER_UNSIGNED['max']);
			if ($recepie_id === false) throw new \Exception("Id recepta nije odgovarajućeg formata", 4);

			return Recepie::find($recepie_id);
		} catch (\Exception $e) {
			return $e->getCode();
		}
	}
}
