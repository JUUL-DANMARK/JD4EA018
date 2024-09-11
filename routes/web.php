<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

/*Route::get('/{category}', function () {
    return view('category');
});

Route::get('/{category}/{course}', function () {
    return view('course');
});*/
