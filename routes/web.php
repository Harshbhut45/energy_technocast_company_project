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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('pages.index');
});

Route::get('/abouts-us', function () {
    return view('pages.about-as');
});

Route::get('/process', function () {
    return view('pages.process');
});

Route::get('/quality-assurance', function () {
    return view('pages.quality-assurance');
});

Route::get('/technical-capabilities', function () {
    return view('pages.technical-capabilities');
});

Route::get('/industries-servied', function () {
    return view('pages.industries-servied');
});

Route::get('/career', function () {
    return view('pages.career');
});

Route::get('/contact-us', function () {
    return view('pages.contact-us');
});