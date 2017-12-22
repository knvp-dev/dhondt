<?php

use Illuminate\Http\File;
use Illuminate\Filesystem\Filesystem;

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
    return redirect('/metselwerken');
});

Route::get('/metselwerken', function(){
    
    return view('pages.metselwerken');
});

Route::get('/tegelwerken', function(){
    return view('pages.tegelwerken');
});

Route::get('/maatwerk', function(){
    return view('pages.maatwerk');
});

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@send');