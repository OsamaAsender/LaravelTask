<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/About', function () {
    return view('AboutUs');
});
Route::get('/Contact', function () {
    return view('Contactus');
});
Route::get('/Profile', function () {
    return view('Profile');
});