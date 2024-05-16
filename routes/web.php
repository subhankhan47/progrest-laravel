<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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
// Home Route
Route::get('/', function () {
    return view('pages.welcome');
});
// About Us Route
Route::get('/about', function () {
    return view('pages.about');
});
// Blog Route
Route::get('/blog', function () {
    return view('pages.blog');
});
// FAQ Route
Route::get('/faq', function () {
    return view('pages.faq');
});
// Contact Us Route
Route::get('/contact', function () {
    return view('pages.contact');
});
// Send Email - Contact Details Route
Route::post('/contact', [ContactController::class, 'sendContactEmail']);
