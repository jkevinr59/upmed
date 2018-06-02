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

Route::get('/', 'HomeController@index');
Route::post('/trial',['before'=>'csrf','uses'=> 'HomeController@register']);
Route::post('/dashboard', 'HomeController@dummy_login');
Route::post('/home', 'HomeController@login');
Route::get('/home', 'HomeController@home');
Route::get('/logout','HomeController@logout');
Route::get('/old', 'HomeController@dummy');

Route::get('/input','InputController@showView');
Route::post('/input','InputController@inputData');
Route::get('/lab','InputController@showViewLab');
Route::get('/trauma','InputController@showViewTrauma');
Route::get('/dokter','InputController@showViewDokter');

Route::get('/track', 'TrackController@initialTrack');
Route::get('/track/filter', 'TrackController@filterTrack');
Route::get('/getdetail', 'TrackController@getDetail');
Route::get('track/getdetail', 'TrackController@getDetail');
Route::get('track/recom', 'TrackController@getRecommendation');
Route::get('/recom', 'TrackController@getRecommendation');

Route::get('/service','ServiceController@show_view');

Route::get('/profile', 'ProfilController@show_view');
Route::get('/edit', 'ProfilController@edit_show_view');
Route::get('/resetpassword', "ProfilController@reset_password");
Route::post('/resetpassword',['before'=>'csrf','uses'=> 'ProfilController@reset_password']);

Route::get('/mail', 'MailController@newMail');
Route::post('/mail','MailController@saveMail');
Route::get('/inbox','MailController@inbox');
Route::post('/inbox/view','MailController@mailView');

Route::get('/newhome',function(){
	return view('prototype');
});




//Route::get('/validateuser', 'HomeController@validate_user');
Route::auth();
