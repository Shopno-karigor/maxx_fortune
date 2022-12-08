<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FaqController;

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

Route::get('/',[IndexController::class, 'home_index'])->name('/');
Route::get('About_Us',[IndexController::class, 'about_us_index'])->name('about-us');
Route::get('Contact',[IndexController::class, 'contact_index'])->name('contact');
Route::get('FAQ',[FaqController::class, 'show'])->name('faq');
Route::get('Terms&Condition',[IndexController::class, 'terms_index'])->name('terms');
