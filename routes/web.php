<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

//all can access
Route::get('/', function () {
    return view('index');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/createshop', function () {
    return view('create_shop');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'UserController@index');

Route::get('/kost', 'KostController@index');
Route::get('/kost/detail', 'KostController@show');

Route::get('/food&drink', 'FoodDrinkController@index');


Route::group(['middleware' => ['auth', 'admin']], function(){
    //just admin can access

});


Route::group(['middleware' => ['auth', 'member']], function(){
    //just member can access

});


Route::group(['middleware' => ['auth']], function(){
    //must login to access

});