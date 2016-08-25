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
	'test',
	[
		'as'	=>	"test",
		'uses'	=>	"TestController@index",
	]
);
//
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
$app->get(
	'recepies',
	[
		'as'	=>	"recepies",
		'uses'	=>	"HomeController@recepies",
	]
);
$app->get(
	'admin',
	[
		'as'	=>	"admin",
		'uses'	=>	"HomeController@admin",
	]
);
$app->get(
	'farms',
	[
		'as'	=>	"farms",
		'uses'	=>	"HomeController@farms",
	]
);
$app->get(
	'recepie_form',
	[
		'as'	=>	"recepie_form",
		'uses'	=>	"HomeController@recepie_form",
	]
);

$app->post(
    'emailContact',
    [
        'uses' => 'HomeController@emailContact',
    ]
);

$app->post(
	'sendOrder',
	[
		'uses'	=>	'HomeController@sendOrder',
	]
);

$app->get(
	'recepie/{id}',
	[
		'uses'	=>	"HomeController@getRecepie",
	]
);
