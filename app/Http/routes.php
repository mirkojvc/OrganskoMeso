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
//Test rute

if (session_status() === PHP_SESSION_NONE) session_start();

$app->get(
	'test',
	[
		'as'	=>	"test",
		'uses'	=>	"TestController@index",
	]
);
//User rute
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
	'recepie_form_post',
	[
		'as'	=>	"recepie_form_post",
		'uses'	=>	"HomeController@recepie_form_post",
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
//Admin rute
$app->get(
	'admin',
	[
		'as'	=>	"admin",
		'uses'	=>	"AdminController@getLogIn",
	]
);

$app->post(
	'adminLogIn',
	[
		'uses'	=>	'AdminController@postLogIn',
	]
);

$app->get(
	'adminPanel',
	[
		'uses'	=>	"AdminController@getAdminPanel",
	]
);

$app->get(
	'resetPassword',
	[
		'uses'	=>	"AdminController@getResetPassword",
	]
);

$app->get(
	'approveRecepie',
	[
		'uses'	=>	"AdminController@getApproveRecepie",
	]
);


$app->post(
	'newRecepie',
	[
		'uses'	=>	'AdminController@postNewRecepie',
	]
);
