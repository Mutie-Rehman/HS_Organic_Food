<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController; 

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


   /* |--------------------------------------------------------------------------
   |  Main Routes 
   |-------------------------------------------------------------------------- */ 

    Route::get("/myHome", [MainController::class, 'home']);
    Route::get("/myPrice", [MainController::class, 'price']);
    Route::get("/myAbout", [MainController::class, 'about']);
    Route::get("/myItem", [MainController::class, 'item']);


   /* |--------------------------------------------------------------------------
   |  Contact Routes 
   |-------------------------------------------------------------------------- */ 
   Route::get('/contact-us', [ContactController::class, 'index']);
   Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.us.store');
//    Route::get("/myHome", [MainController::class, 'home']);
//    Route::get("/myPrice", [MainController::class, 'price']);
//    Route::get("/myAbout", [MainController::class, 'about']);
//    Route::get("/myItem", [MainController::class, 'item']);




