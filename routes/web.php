<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TermsController;

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
Route::get('about_us',[IndexController::class, 'about_us_index'])->name('about-us');
Route::get('contact',[ContactController::class, 'show'])->name('contact');
Route::post('contact_store',[ContactController::class, 'store'])->name('store-customer-query');
Route::get('faq',[FaqController::class, 'show'])->name('faq');
Route::get('privacy_and_policy',[TermsController::class, 'index'])->name('terms');
