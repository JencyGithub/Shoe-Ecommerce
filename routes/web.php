<?php

use App\Http\Controllers\DatasaveController;
use App\Http\Controllers\ZayController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ZayController::class, 'login'])->name('login');


// Registration page datasave Route
Route::get('registration', [ZayController::class, 'registration'])->name('registration');

Route::post('RegDataSave', [DatasaveController::class, 'RegDataSave'])->name('RegDataSave');

Route::post('LoginCheck', [DatasaveController::class, 'login'])->name('LoginCheck');

// logout 


//Update



Route::group(['middleware' => 'logedin'], function () {

    Route::get('index', [ZayController::class, 'index'])->name('index');

    Route::get('about', [ZayController::class, 'about'])->name('about');

    Route::get('shop', [ZayController::class, 'shop'])->name('shop');

    Route::get('shopitem', [ZayController::class, 'shopitem'])->name('shopitem');

    Route::get('contact', [ZayController::class, 'contact'])->name('contact');


    Route::get('profile', [ZayController::class, 'profile'])->name('profile');

    Route::get('Logout', [DatasaveController::class, 'Logout'])->name('Logout');

    Route::get('update', [ZayController::class, 'update'])->name('update');

    Route::post('UpdateSave{id}', [DatasaveController::class, 'UpdateSave'])->name('UpdateSave');

    Route::get('delete{id}', [DatasaveController::class, 'delete'])->name('delete');
    
});
