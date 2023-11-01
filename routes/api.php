<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//get user details

Route::get('get-user',[UserController::class,'getUser']);
Route::get('get-qualification',[UserController::class,'getQaulification']);


Route::group(['middleware' => 'api'], function($routes){
    Route::post('register', [LoginController::class,'register'])->name('register');
    Route::post('login', [LoginController::class,'login'])->name('login');
    Route::post('profile', [LoginController::class,'profile'])->name('profile');
    Route::post('refresh', [LoginController::class,'refresh'])->name('refresh');
    Route::post('logout', [LoginController::class,'logout'])->name('logout');
});


