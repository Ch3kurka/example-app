<?php
use App\Http\Controllers\sliderController;
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



Route::post('/sliderform',[sliderController::class, 'store'])->name('slider.form');
Route::get('/sliderEdit',[sliderController::class, 'index']);
Route::post('/sliderEdit/{delete}',[sliderController::class, 'delete']);
Route::post('/formEditPage/{edit}',[sliderController::class, 'edit']);
//Route::put('/formEditPage/{id}',[sliderController::class,'update']);
