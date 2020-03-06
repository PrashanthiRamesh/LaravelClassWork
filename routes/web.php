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

Route::get('/', function(){
    return view('home');
});

// route to go to about us page - /about
Route::get('/about', function(){
    return view('about');
});

// route to go to contact us page - /contact
Route::get('/contact', function(){
    return view('contact');
});

Route::post('/contact', 'ContactController@validateContacts');