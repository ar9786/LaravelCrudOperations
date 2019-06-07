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
    return Redirect::to('/');
});
Route::get('/', 'UserController@index');
Route::get('/fbredirect', 'SocialAuthController@fbredirect');
Route::get('/fbcallback', 'SocialAuthController@fbcallback');

Route::post('/signup', 'UserController@signup');
Route::post('/userlogin', 'UserController@userlogin');
Route::get('userLogout', 'UserController@userLogout');

//Admin Routing
Route::group(['middleware' => 'usersession'], function () {
    Route::get('/adminDashboard','AdminController@adminDashboard');
    Route::get('/athletesListing','AdminController@athletesListing');
    //Route::get('/athletesListing',['as'=>'ajax.pagination','uses' => 'AdminController@athletesListing']);
    Route::get('/companiesListing','AdminController@companiesListing');
});
