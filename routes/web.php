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

Route::get('/', 'PagesController@showIndex');

Auth::routes();

Route::get('/home', function (){
    return redirect('/user/profile');
});

Route::get('ad/search', 'AdsController@search');
Route::resource('ads','AdsController');

Route::get('/user/profile', 'UsersController@showMyProfile');
Route::get('/user/completeprofile', 'UsersController@showCompleteProfile');
Route::post('/user/completeprofile', 'UsersController@CompleteProfile')->name('completeprofile');
Route::get('/user/view/{id}', 'UsersController@ViewUserProfile');
Route::get('/user/editprofile', 'UsersController@showEditProfile');
Route::put('/user/editprofile', 'UsersController@updateProfile')->name('EditProfile');
