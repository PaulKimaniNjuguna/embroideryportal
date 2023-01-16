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

Route::get('/master', function () {
    return view('layouts.master');
});

Route::get('/about', function(){
    return view('layouts.about');
});

Route::get('/home', function(){
    return view('layouts.home');
});

Route::get('/feature', function(){
    return view('layouts.feature');
});

Route::get('/service', function(){
    return view('layouts.service');
});

Route::get('/product', function(){
    return view('layouts.product');
});

Route::get('/testimonial', function(){
    return view('layouts.testimonial');
});

Route::get('/contact', function(){
    return view('layouts.contact');
});

Route::get('/team', function(){
    return view('layouts.team');
});

Route::get('/gallery', function(){
    return view('layouts.gallery');
});

Route::get('/admin', function(){
    return view('admin.app');
});
Route::get('/viewcategory', function(){
    return view('admin.viewcategory');
});