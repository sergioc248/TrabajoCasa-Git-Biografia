<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biografia', function () {
    return view('biografia');
});

Route::get('/historia', function () {
    return view('historia');
});

Route::get('/cv', function () {
    return view('cv');
});
