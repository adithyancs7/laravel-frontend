<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\masterController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SocialAppController;

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


Route::get('index',[masterController::class,'index']);
Route::get('eco',[PageController::class,'eco']);


Route::post('logout',[AuthController::class,'logout'])->name('logout');
Route::get('login',function(){ return view('auth\login'); })->name('login');
Route::get('register',function(){ return view('auth\register'); });
Route::post('create',[AuthController::class,'register']);
Route::post('access',[AuthController::class,'login']);
#-------
Route::get('dashboard',[PageController::class,'dashboard']);


Route::group([
    'prefix'=>'social',
    'controller'=>SocialAppController::class,
],function(){
    Route::get('feed','feed');
});