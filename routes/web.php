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
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

// Route::get('/createshop', function () {
//     return view('create_shop');
// });
Route::get('/createshop', 'StoreController@createStoreView');

Route::get('/kost', 'KostController@index');
Route::get('/kost/price/{sort}', 'KostController@sortPrice');
Route::get('/kost/type/campur', 'KostController@index');
Route::get('/kost/type/{name}', 'KostController@filterCategory');
Route::get('/kost/detail/{kost_id}', 'KostController@show');

Route::get('/food', 'FoodDrinkController@index');
Route::get('/food/cafe', 'FoodDrinkController@cafe');
Route::get('/food/cafe/detail/{cafe_id}', 'FoodDrinkController@show');

Route::get('/food/makanan', 'FoodDrinkController@makanan');

Route::get('/atk', 'ATKController@index');

Route::get('/toserba', 'ToserbaController@index');

Route::group(['middleware' => ['auth', 'admin']], function(){
    //just admin can access
    
});


Route::group(['middleware' => ['auth', 'member']], function(){
    //just member can access
    
});


Route::group(['middleware' => ['auth']], function(){
    //must login to access
    Route::get('/profile', 'UserController@viewProfile');
    Route::get('/updateProfile', 'UserController@vUpdateProfile');
    Route::post('/updateProfile', 'UserController@postUpdateProfile');
    
});