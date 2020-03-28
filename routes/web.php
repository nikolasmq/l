<?php
Route::get('/', function() {
    return view('inicio');
})->name('inicio');

Route::get('/contact', function() {
    return view('contact');
})->name('contacto');
// Route::view('/contact', 'contact')->name('contacto');
Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('/portfolio', function() {
    return view('portfolio');
})->name('portfolio');

