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

Route::get('locale/{locale}',function($locale){
    Session::put('locale',$locale);
    return redirect()->back();
});


// Facebook
Route::get('/fbredirect', 'SocialAuthController@fbredirect');
Route::get('/fbcallback', 'SocialAuthController@fbcallback');
// Google
Route::get('/gredirect', 'SocialAuthController@gredirect');
Route::get('/gcallback', 'SocialAuthController@gcallback');
// Instagram
Route::get('/instaredirect', 'SocialAuthController@instaredirect');
Route::get('/instacallback', 'SocialAuthController@instacallback');

// User
Route::post('/signup', 'UserController@signup');
Route::post('/userlogin', 'UserController@userlogin');
Route::get('/userLogout', 'UserController@userLogout');
Route::get('/ajaxRequest', 'UserController@ajaxRequest');

// User Password Reset
Route::get('/reset_password', 'UserController@resetPassword');
Route::post('/resetTokenPssword', 'UserController@resetTokenPssword');
Route::post('/resetPasswordSubmit', 'UserController@resetPasswordSubmit');


// Tournament
Route::get('/tornei', 'TournamentController@index');
Route::get('/tournaments_club', 'TournamentController@tournaments_club');

// Young Athletes
Route::get('/atleti', 'AthleteController@index');

// Sport Associations
Route::get('/società', 'SportAssociationController@index');

// SportCamp
Route::get('/sportCamp', 'SportCampController@index');
Route::get('/sports_club', 'SportCampController@sports_club');
Route::get('/athelets_club', 'SportCampController@athelets_club');
Route::get('/sport-detail','SportCampController@sportDetail');
Route::post('/searchCamp','SportCampController@searchCamp');

//Web Static Pages
Route::get('/chi-siamo', 'WebPagesController@whoWeAre');
Route::get('/come-funziona', 'WebPagesController@howItWorks');
Route::get('/st-square', 'WebPagesController@stSquare');

//Subscribe For NewsLetter
Route::post('/newsletter', 'SubscribeNewsController@index');



//Blog 
Route::get('/blog', 'BlogController@index');
Route::get('/blog/{slug}', 'BlogController@blogDetail');



//Admin Routing
Route::group(['middleware' => 'usersession'], function () {

    Route::get('/showNewsletter', 'SubscribeNewsController@show');
    Route::post('/postSubmission','BlogController@postSubmission');

    Route::get('/clubform', 'SportCampController@clubForm');
    Route::post('/clubformsubmit', 'SportCampController@clubFormSubmit');
    Route::post('/ratingSubmt', 'SportCampController@ratingSubmt');

    Route::post('/blogComments', 'BlogController@blogComments');

});


//
Route::group(['middleware' => 'adminsession'], function () {
    Route::get('/adminDashboard','AdminController@adminDashboard');
    Route::get('/athletesListing','AdminController@athletesListing');
    Route::get('/blogManagment', 'BlogController@blogManagment');
    Route::get('/blogManagment/{slug}', 'BlogController@blogPreview');
    //Route::get('/athletesListing',['as'=>'ajax.pagination','uses' => 'AdminController@athletesListing']);
    Route::get('/companiesListing','AdminController@companiesListing');
});

// Ajax Csrf 
/*
Route::group(['middleware' => 'csrftoken'], function () {


}); */