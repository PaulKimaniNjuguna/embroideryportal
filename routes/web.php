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

Route::get('/about', function(){
    return view('pages.about');
});

Route::get('/home', function(){
    return view('pages.home');
});

Route::get('/feature', function(){
    return view('pages.feature');
});

Route::get('/service', function(){
    return view('pages.service');
});

Route::get('/product', function(){
    return view('pages.product');
});

Route::get('/testimonial', function(){
    return view('pages.testimonial');
});

Route::get('/contact', function(){
    return view('pages.contact');
});

Route::get('/team', function(){
    return view('pages.team');
});

Route::get('/gallery', function(){
    return view('pages.gallery');
});

Route::get('/admin', function(){
    return view('admin.app');
});
Route::get('/viewcategory', function(){
    return view('admin.viewcategory');
});

Route::get('/', function () {
    return redirect('/home');
});