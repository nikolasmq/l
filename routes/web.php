<?php

$portfolio = [
    ['title' => 'Proyecto # 1'],
    ['title' => 'Proyecto # 2'],
    ['title' => 'Proyecto # 3'],
    ['title' => 'Proyecto # 4'],
];

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

Route::get('/portfolio', function($portfolio) {
    return view('portfolio', compact('portfolio'));
})->name('portfolio');

