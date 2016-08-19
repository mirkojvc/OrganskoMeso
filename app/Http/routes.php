<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get(
	'/',
	[
		'as'	=>	"index",
		'uses'	=>	"HomeController@index",
	]
);
$app->get(
	'contact',
	[
		'as'	=>	"contact",
		'uses'	=>	"HomeController@contact",
	]
);
$app->get(
	'order',
	[
		'as'	=>	"order",
		'uses'	=>	"HomeController@order",
	]
);
