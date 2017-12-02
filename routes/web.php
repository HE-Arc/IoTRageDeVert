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
    return view("home");
});

Route::get('/about', function () {
    return view("about");
});

Route::get('/contact', function () {
    return view("contact");
});

Route::get('/myReviews', function () {
    return view("myReviews");
});

Route::get('/reviewEditor', function () {
    return view("reviewEditor");
});

Route::get('/articles', 'ArticlesController@showAll');
Route::get('/articles/{id}', 'ArticlesController@showOne');
Route::get('/articles/{id}/reviews', 'ReviewsController@showAll');
Route::get('/articles/{id}/newreview', 'ReviewsController@showNew');

Route::get('/debug','DebugController@show');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
