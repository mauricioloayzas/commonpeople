<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::controller(App\Http\Controllers\HomeController::class)->group(function (){
    Route::get('/home','index')->name('home');
    Route::get('/list','list')->name('list');
    Route::get('/form','form')->name('form');
    Route::post('/save-project','newProject')->name('save-project');
    Route::get('/load-slider-data','loadSliderData')->name('load-slider-data');
    Route::get('/slider','slider')->name('slider');
});

