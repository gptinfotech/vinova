<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserLoginController;


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



Route::get('/',[App\Http\Controllers\HomeController:: Class, 'homePage']);
Route::get('/home',[App\Http\Controllers\HomeController:: Class, 'homePage']);
Route::get('/products',[App\Http\Controllers\HomeController:: Class, 'ourProducts']);
Route::get('/animation',[App\Http\Controllers\HomeController:: Class, 'animation']);
Route::get('/analytics',[App\Http\Controllers\HomeController:: Class, 'analytics']);
Route::get('/digital/marketing',[App\Http\Controllers\HomeController:: Class, 'digitalMarketing']);

Route::get('/ai/home',[App\Http\Controllers\AIController:: Class, 'artifitialIntelligence']);

Route::get('/user/login',[App\Http\Controllers\user\UserLoginController:: Class, 'login']);
Route::get('/apiService',[App\Http\Controllers\ApiIntegrationController:: Class, 'apiService']);





Route::get('/source', function () {
    return view('source');
});