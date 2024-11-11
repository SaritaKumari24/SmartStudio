<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController; 
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController; 
use App\Http\Controllers\contactController; 

Route::get('/', function () {
    return view('public.home');
})->name('home');

Route::get('/portfolio', function () {
    return view('public.portfolio');
})->name('portfolio');

Route::get('/gallery', function () {
    return view('public.gallery');
})->name('gallery');


Route::get('/service', function () {
    return view('public.service');
})->name('service');

Route::get('/about', function () {
    return view('public.about');
})->name('about');

Route::get('/contact', function () {
    return view('public.contact');
})->name('contact');
Route::post('/contact',[ContactController::class,'store'])->name('contact.store');

Route::get('/create-users', [UserController::class, 'createUsers']);

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); 
Route::post('/login', [LoginController::class, 'login'])->name('login.submit'); 

// Register Routes
Route::get('/register', [RegisterController::class, 'signupform'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// Logout Route





// admin category

Route::prefix("admin")->group(function(){
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');  
        })->name('dashboard');
    });
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); 
    

    Route::controller(CategoryController::class)->group(function(){
        Route::prefix("category")->group(function(){
            Route::match(["get","post"],'/', "manageCategory")->name("category");
            Route::get('/delete/{id}',"deleteCategory")->name("category.delete");

        });
    });
   

});
// Route::prefix('admin')->name('admin.')->group(function() {
//     Route::get('/about/create', [AboutController::class, 'create'])->name('about.create');
//     Route::post('/about/store', [AboutController::class, 'store'])->name('about.store');
// });
