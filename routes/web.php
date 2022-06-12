<?php

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

Auth::routes(['register' => false]);
// Route::group(['prefix' => 'provider', 'as' => 'provider.'], function () {
// });


Route::get('/home', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('home');
// Auth::routes();
