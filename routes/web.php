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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/meetings','App\Http\Controllers\MeetController@index')->name('meetings');
Route::get('/meeting/{id}','App\Http\Controllers\MeetController@show')->name('show.meeting');
