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

// Route::get('/', function () {
//     return view('welcome');
// });


/*
* -----------------------------Auth route----------------------------------
*/
Auth::routes();

/*
* -----------------------------Frontend routes----------------------------------
*/

Route::get('/', 'FrontController@index')->name('home');
Route::get('terms-conditions', 'FrontController@termsConditions')->name('terms-conditions');

Route::get('press', 'FrontController@press')->name('press');
Route::get('news', 'FrontController@news')->name('news');
Route::get('single-news', 'FrontController@singleNews')->name('single-news');
Route::get('single-page', 'FrontController@singlePage')->name('single-page');
Route::get('single-page-one', 'FrontController@singlepageOne')->name('single-page-one');
Route::get('single-page-two', 'FrontController@singlepageTwo')->name('single-page-two');

Route::get('mission-vission', 'FrontController@missionVission')->name('mission-vission');
