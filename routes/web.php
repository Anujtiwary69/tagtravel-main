<?php

use App\Http\Controllers\AllPagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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



Route::get('/',[HomeController::class,'index']);
// Route::get('/holiday','PageController@dynamic');

Route::get('/home',[HomeController::class,'index']);
Route::get('/top-tours/{uri}',[PageController::class,'dynamic']);
Route::get('/top-destinations/{uri}',[PageController::class,'index']);
Route::group(
    ['prefix' => 'central-asia'], function () {
        Route::get('/{id}',['as'=>'centralasia','uses'=>[AllPagesController::class,'index']]);
     });
Route::get('/{uri}',[PageController::class,'index']);
Route::get('holiday-types/{uri}',[PageController::class,'holidayTypes']);
Route::get('offers/{uri}',[PageController::class,'dynamic']);
Route::get('tour-detail/{id}',[PageController::class,'tourDetailPage']);
Route::get('/press/view/{id}',[PageController::class,'newsDetail']);

// Route::get('/historical-tours-in-uzbekistan','PageController@dynamic');
// Route::get('/classic-uzbekistan','PageController@dynamic');


//Auth::routes();

Route::get('/home', [HomeController::class,'index'])->name('home');
