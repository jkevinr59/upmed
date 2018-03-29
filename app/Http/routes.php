<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', 'HomeController@index'
);
Route::get('/to_time', 'HomeController@to_time'
);
Route::post('/trial',['before'=>'csrf','uses'=> 'HomeController@register']
);
Route::post('/dashboard', 'HomeController@dummy_login');

Route::post('/home', 'HomeController@login');
Route::get('/home', 'HomeController@home');
Route::get('/input','InputController@showView');
Route::post('/input','InputController@inputData');
Route::get('/lab','InputController@showViewLab');
Route::get('/trauma','InputController@showViewTrauma');
Route::get('/dokter','InputController@showViewDokter');
Route::get('/track', 'TrackController@initialTrack');
Route::get('/service','ServiceController@show_view');
Route::get('/logout','HomeController@logout');
Route::get('/old', 'HomeController@dummy');
Route::get('/profile', 'ProfilController@show_view');
Route::get('/edit', 'ProfilController@edit_show_view');
Route::get('/track2', function () {
	return view('track2');
});
Route::get('/resetpassword', "ProfilController@reset_password");
Route::post('/resetpassword',['before'=>'csrf','uses'=> 'ProfilController@reset_password']
);
Route::get('/newhome',function(){
	return view('prototype');
});
Route::get('/track/{id}/{id2}/{id3}', 'TrackController@single_track');


//Route::get('/validateuser', 'HomeController@validate_user');
Route::auth();
