<?php

use App\Http\Controllers\sectionController;
use App\Http\Controllers\sliderController;
use App\Http\Controllers\videoController;
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

Route::view('/admin','123');
Route::view('/','kickMain');
Route::view('/slider','adminka/admPages/sliderApp');
Route::view('/sliderEdit','adminka/admPages/pagesCont/Slider/sliderEdit');
Route::view('/formEditPage','adminka/admPages/pagesCont/Slider/formEditPage');
Route::view('/video','adminka/admPages/videoApp');
Route::view('/videoEdit', 'adminka/admPages/pagesCont/Video/videoSmpl');
Route::view('/gallery', 'adminka/admPages/galleryApp');
Route::view('/gallerySection', 'adminka/admPages/pagesCont/Gallery/createS');
Route::view('/galleryEdit', 'adminka/admPages/pagesCont/Gallery/editS');



Route::post('/sliderform',[sliderController::class, 'store'])->name('slider.form');
Route::get('/sliderEdit',[sliderController::class, 'index']);
Route::post('/sliderEdit/{delete}',[sliderController::class, 'delete']);
Route::post('/formEditPage/{edit}',[sliderController::class, 'edit']);
Route::put('/formEditPage/{edit}',[sliderController::class,'update']);


Route::post('/video', [videoController::class, 'store'])->name('video');
Route::get('/videoEdit', [videoController::class, 'index']);
Route::post('/videoEdit',[videoController::class, 'index']);
Route::put('/videoEdit',[videoController::class,'update'])->name('videoUpd');

Route::post('/gallerySection', [sectionController::class, 'store'])->name('create');
Route::get('/galleryEdit', [sectionController::class, 'index']);
