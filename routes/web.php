<?php

use App\Http\Controllers\ContactFormController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function() {
    return view('about');
});

Route::get('/faqs', function() {
    return view('faqs');
});

Route::get('/services', function() {
    return view('services');
});

Route::get('/contact-us', function() {
    return view('contact');
});

Route::post('contact', [ContactFormController::class, "submitForm"])->name('contact-us');

Route::get('/blog', function() {
    return view('blog');
});

Route::get('/faqs', function() {
    return view('faqs');
});

Route::get('/legal', function() {
    return view('legal');
});

Route::get('/testimonial', function() {
    return view('testimonial');
});

Route::get('/homeownership-resource', function() {
    return view('homeownership');
});

Route::get('/programs/reimagine', function() {
    return view('reimagine');
});

Route::get('/programs/60-lease', function() {
    return view('60');
});

Route::get('/programs/smart-steps', function() {
    return view('smart-steps');
});