<?php

use Illuminate\Support\Facades\Auth;
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

// error pages start
route::get('error_403', [App\Http\Controllers\Backend\ErrorPageController::class, 'error_403']);
route::get('error_404', [App\Http\Controllers\Backend\ErrorPageController::class, 'error_404']);
route::get('error_405', [App\Http\Controllers\Backend\ErrorPageController::class, 'error_405']);
route::get('error_500', [App\Http\Controllers\Backend\ErrorPageController::class, 'error_500']);
route::get('error_503', [App\Http\Controllers\Backend\ErrorPageController::class, 'error_503']);
route::get('error_offline', [App\Http\Controllers\Backend\ErrorPageController::class, 'error_offline']);
// error pages end

Auth::routes(['register' => false]);
// Route::group(['prefix' => 'provider', 'as' => 'provider.'], function () {
// });

Route::get('dashboard', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('dashboard');
Route::resource('home', App\Http\Controllers\Backend\HomePageController::class);
