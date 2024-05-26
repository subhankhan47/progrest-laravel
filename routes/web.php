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
// Online Marketing Route
Route::get('/onlineMarketing', function () {
    return view('pages.onlineMarketing');
});
// Training Route
Route::get('/training', function () {
    return view('pages.training');
});
// Virtual Assistance Route
Route::get('/virtualAssistance', function () {
    return view('pages.virtualAssistance');
});
// Web Development Route
Route::get('/webDevelopment', function () {
    return view('pages.webDevelopment');
});
// Mobile Development Route
Route::get('/mobileDevelopment', function () {
    return view('pages.mobileDevelopment');
});
// Send Email - Contact Details Route
Route::post('/contact', [ContactController::class, 'sendContactEmail']);
