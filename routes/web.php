<?php

use App\Http\Controllers\articleController;
use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
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

Route::get('/index',[homeController::class,'index']);

/* guest */

Route::middleware('guest')->group(function (){

    Route::get('/signup', function () {return view('signUp');});
    Route::post('/signAction',[authController::class,'register']);
    Route::get('/login', function () {return view('sign');});
    Route::post('/loginAction',[authController::class,'login']);

});

/* auth */

Route::middleware(['auth','admin'])->group(function (){

    Route::get('/dashboard',[articleController::class,'dashboard']);
    //route crud
    Route::get('/card',[articleController::class,'card']);
    Route::get('/form',[articleController::class,'form']);
    Route::post('/store',[articleController::class,'store']);
    Route::get('/updateForm/{id}',[articleController::class,'updateForm']);
    Route::post('/update/{id}',[articleController::class,'update']);
    Route::get('/delete/{id}',[articleController::class,'delete']);
    
});

Route::get('/more/{id}',[homeController::class,'more'])->middleware('auth');

Route::get('/logout',[authController::class,'logout'])->middleware('auth');
