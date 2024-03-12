<?php

use App\Http\Controllers\Dashboard\TestController;
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
Route::get('/custom', function () {
    $mej1= "mensaje del servidor";
   return view('custom', ['mej'=> $mej1, 'edad' => 15]);
});
Route::get('/escribeme', function () {
 
    return view('contacto');
})->name('contacto');

//Route::get('/Test', [TestController::class,'test']);
Route::get('/Test', [App\Http\Controllers\Dashboard\TestController::class,'test']);

Route::get('/User', [App\Http\Controllers\UserController::class,'test']);
Route::get('/UserInf', [App\Http\Controllers\Dashboard\TestController::class,'index']);
