<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('containers.home');
});
Route::get('/adopt', 'SponsorController@viewAdopt');
Route::get('/register', function () {
    return view('containers.register');
});

Route::group(['middleware' => ['admin']],function(){
    Route::get('/backend/dashboard','AdminController@dashboard');
    Route::post('/backend/adopt/action','AdminController@adoptAction');
});

Route::post('/register/save','SponsorController@save');
Route::post('/adopt/save','SponsorController@saveAdopt');
Route::get('/backend/login','AdminController@login');
Route::post('/backend/postlogin','AdminController@postlogin');
Route::get('/backend/logout','AdminController@logout');
