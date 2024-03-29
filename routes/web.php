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

// Route::get('/demo', function () {
//     return view('frontend.about');
// });

Route::get('/', [App\Http\Controllers\Frontend\MainController::class, 'index'])->name('front.index');
Route::get('contact', [App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [App\Http\Controllers\Frontend\ContactController::class, 'store'])->name('contact.store');
Route::get('about', [App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about.index');
Route::get('res', [App\Http\Controllers\Frontend\AboutController::class, 'getDownload'])->name('about.res');


// error pages start
// route::get('error_403', [App\Http\Controllers\Backend\ErrorPageController::class, 'error_403']);
// route::get('error_404', [App\Http\Controllers\Backend\ErrorPageController::class, 'error_404']);
// route::get('error_405', [App\Http\Controllers\Backend\ErrorPageController::class, 'error_405']);
// route::get('error_500', [App\Http\Controllers\Backend\ErrorPageController::class, 'error_500']);
// route::get('error_503', [App\Http\Controllers\Backend\ErrorPageController::class, 'error_503']);
// route::get('error_offline', [App\Http\Controllers\Backend\ErrorPageController::class, 'error_offline']);
// error pages end

Auth::routes([
    // 'register' => false, // Registration Routes...
    //'reset' => false, // Password Reset Routes...
    //'verify' => false, // Email Verification Routes...
]);


Route::group(['prefix' => 'provider', 'as' => 'provider.'], function () {
    Route::get('dashboard', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('dashboard');
    Route::get('home/edit', [App\Http\Controllers\Backend\HomePageController::class, 'edit'])->name('home.index');
    Route::resource('employee', App\Http\Controllers\Backend\EmployeeController::class);
    Route::post('home/update', [App\Http\Controllers\Backend\HomePageController::class, 'update'])->name('home.update');
    Route::resource('service', App\Http\Controllers\Backend\ServicePageController::class);
    Route::resource('experience', App\Http\Controllers\Backend\ExperiencePageController::class);
    Route::resource('testimonial', App\Http\Controllers\Backend\TestimonialsPageController::class);
    Route::get('about/edit', [App\Http\Controllers\Backend\AboutPageController::class, 'edit'])->name('about.index');
    Route::post('about/update', [App\Http\Controllers\Backend\AboutPageController::class, 'update'])->name('about.update');
    // Route::resource('contact', App\Http\Controllers\Backend\ContactPageController::class);
    Route::get('contact', [App\Http\Controllers\Backend\ContactPageController::class, 'index'])->name('contact.index');
    Route::delete('contact/{id}', [App\Http\Controllers\Backend\ContactPageController::class, 'destroy'])->name('contact.destroy');
    Route::resource('category', App\Http\Controllers\Backend\CategoryPageController::class);
    Route::resource('blog', App\Http\Controllers\Backend\BlogPageController::class);
    Route::resource('icon', App\Http\Controllers\Backend\PickIconPageController::class);
});
