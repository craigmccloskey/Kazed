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

Route::get('/'welcome', function () {
    return view('welcome');
});

Route::get('/about us', function () {
    return view('about us');
});


Route::get('/previous', function () {
    return view('previous work');
});


Route::get('/Equipment', function () {
    return view('equipment');
});


Route::get('/location', function () {
    return view('location');
});


Route::get('/contact us', function () {
    return view('contact us');
});


Route::get('/about', function () {
    return view('about');
});



Auth::routes();





Route::get('/', 'PagesController@welcome');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/about us', 'PagesController@about us')->middleware('auth');
Route::get('/previous work', 'PagesController@previous work')->middleware('auth');
Route::get('/equipment', 'PagesController@equipment')->middleware('auth');
Route::get('/location', 'PagesController@location')->middleware('auth');
Route::get('/enquires', 'PagesController@enquires')->middleware('auth');
Route::get('/contact us/{id}' , 'PagesController@contact us');


});
