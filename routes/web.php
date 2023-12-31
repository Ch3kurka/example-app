<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\photoController;
use App\Http\Controllers\sectionController;
use App\Http\Controllers\sliderController;
use App\Http\Controllers\videoController;
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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';*/




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

Route::view('/admin', '123');
Route::view('/', 'kickMain');
Route::view('/slider', 'adminka/admPages/sliderApp');
Route::view('/sliderEdit', 'adminka/admPages/pagesCont/Slider/sliderEdit');
Route::view('/formEditPage', 'adminka/admPages/pagesCont/Slider/formEditPage');
Route::view('/video', 'adminka/admPages/videoApp');
Route::view('/videoEdit', 'adminka/admPages/pagesCont/Video/videoSmpl');
Route::view('/gallery', 'adminka/admPages/galleryApp');
Route::view('/gallerySection', 'adminka/admPages/pagesCont/Gallery/createS');
Route::view('/galleryEdit', 'adminka/admPages/pagesCont/Gallery/editS');
Route::view('/galleryPhoto', 'adminka/admPages/pagesCont/Gallery/createPh');
Route::view('/photos', 'adminka/admPages/pagesCont/Gallery/allPhoto');
Route::view('/editphcat', 'adminka/admPages/pagesCont/Gallery/editPhS');
Route::view('/cat', 'adminka/admPages/pagesCont/Gallery/showPhAndCat');



Route::post('/sliderform', [sliderController::class, 'store'])->name('slider.form');
Route::get('/sliderEdit', [sliderController::class, 'index']);
Route::post('/sliderEdit/{delete}', [sliderController::class, 'delete']);
Route::post('/formEditPage/{edit}', [sliderController::class, 'edit']);
Route::put('/formEditPage/{edit}', [sliderController::class, 'update']);


Route::post('/video', [videoController::class, 'store'])->name('video');
Route::get('/videoEdit', [videoController::class, 'index']);
Route::post('/videoEdit', [videoController::class, 'index']);
Route::put('/videoEdit', [videoController::class, 'update'])->name('videoUpd');

Route::post('/gallerySection', [sectionController::class, 'store'])->name('create');
Route::get('/galleryEdit', [sectionController::class, 'index']);
Route::post('galleryEdit/{delete}', [sectionController::class, 'delete']);
Route::put('/galleryEdit/{update}', [sectionController::class, 'update']);

Route::get('/galleryPhoto', [photoController::class, 'index']);
Route::post('/galleryPhoto', [photoController::class, 'createPhoto'])->name('createPhoto');
Route::get('/photos',[photoController::class, 'showPhoto']);
Route::get('/editphcat', [photoController::class, 'showCategories']);
Route::get('/cat/{section}/photos', [photoController::class,'ShowPhotoInCategory'])->name('showPhoto');
Route::delete('/cat/{delete}/photos', [photoController::class, 'detach'])->name('detachPhoto');
/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
