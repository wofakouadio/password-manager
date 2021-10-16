<?php

use Illuminate\Support\Facades\Route;
use Admin\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// route to index page
Route::get('/', function(){
    return view('index');
});

// Route::resource('/admin/users', UserController::class);

// admin routes
Route::prefix('admin')->name('admin.')->group(function(){

    Route::resource('/users', UserController::class);

});
 

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');