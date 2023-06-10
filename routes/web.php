<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController; 
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
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

  

    /* |--------------------------------------------------------------------------
   |  Post and Review Routes 
   |-------------------------------------------------------------------------- */ 

// Manage Post
Route::get("/myReview", [PostController::class, 'create'])->name('post.create');
Route::post('/post-store',[PostController::class, 'store'])->name('post.store');
Route::get('/post-list',[PostController::class, 'list'])->name('post.list');
Route::get('/post-view/{id}',[PostController::class, 'view'])->name('post.view');
 
// Manage Review
Route::post('/review-store',[PostController::class, 'reviewstore'])->name('review.store');


