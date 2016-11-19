<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\ValidationService;
use App\Providers\ImageService;
use App\Models\Recepie;

class RecepieService
{
	public static function getRecepies() {
		return Recepie::where('approved', '=', true)->orderBy('date', 'DESC')->get();
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

	public static function createRecepie($heading, $ingredients, $how_to_make, $picture) {
		try {
			$validation = new ValidationService();
			$heading = $validation::validateString($heading, 63);
			if ($heading === false) throw new \Exception("Naslov nije odgovarajućeg formata", 22);

			$ingredients = $validation::validateString($ingredients);
			if ($ingredients === false) throw new \Exception("Sastojci recepta nisu odgovarajućeg formata", 23);

			$how_to_make = $validation::validateString($how_to_make);
			if ($how_to_make === false) throw new \Exception("Način spremanja nije odgovarajućeg formata", 24);

			$recepie = new Recepie();
			$recepie->heading = $heading;
			$recepie->ingredients = $ingredients;
			$recepie->how_to_make = $how_to_make;
			$recepie->picture = ImageService::uploadImage($picture);
			$recepie->save();
			return true;
		} catch (\Exception $e) {
			return $e->getCode();
		}
	}
}
