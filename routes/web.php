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
Route::get('/create/store', 'StoreController@createStoreView');

Route::get('/search/{category_id}', 'HomeController@search');

Route::get('/kost', 'KostController@index');
Route::get('/kost/price/{sort}', 'KostController@sortKostPrice');
Route::get('/kost/type/campur', 'KostController@index');
Route::get('/kost/type/{name}', 'KostController@filterCategory');
Route::get('/kost/detail/{kost_id}', 'KostController@show');

Route::get('/foodndrink', 'FoodDrinkController@index');

Route::get('/cafe', 'FoodDrinkController@cafe');
Route::get('/cafe/price/{sort}', 'FoodDrinkController@sortCafePrice');
Route::get('/cafe/detail/{cafe_id}', 'FoodDrinkController@cafeDetail');

Route::get('/makanan', 'FoodDrinkController@makanan');
Route::get('/makanan/berat/price/{sort}', 'FoodDrinkController@sortMakananPrice');
Route::get('/makanan/berat/detail/{food_id}', 'FoodDrinkController@foodDetail');

Route::get('/atk', 'ATKController@index');
Route::get('/alat/tulis/kantor/price/{sort}', 'ATKController@sortATKPrice');
Route::get('/alat/tulis/kantor/detail/{atk_id}', 'ATKController@show');

Route::get('/toserba', 'ToserbaController@index');
Route::get('/toserba/price/{sort}', 'ToserbaController@sortToserbaPrice');
Route::get('/toserba/detail/{toserba_id}', 'ToserbaController@show');


//ResetPassword
Route::get('/resetPass', 'UserController@vresetPassword');
Route::post('/resetPass', 'UserController@resetPassword');


Route::group(['middleware' => ['auth', 'admin']], function(){
    //just admin can access
    Route::get('/viewAllUser', 'UserController@index');
    
});


Route::group(['middleware' => ['auth', 'member']], function(){
    //just member can access
    
});


Route::group(['middleware' => ['auth']], function(){
    //must login to access
    Route::get('/profile', 'UserController@viewProfile');
    Route::get('/updateProfile', 'UserController@vUpdateProfile');
    Route::post('/updateProfile', 'UserController@postUpdateProfile');
    Route::get('/changePass', 'UserController@vchangePassword');
    Route::post('/changePass', 'UserController@changePassword');
    
});