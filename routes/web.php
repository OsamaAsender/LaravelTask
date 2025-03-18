<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/About', function () {
    $ninjas =[
        ["name" => "mario", "skill" =>75, "id" => "1"],
        ["name" => "luigi", "skill" =>85, "id" => "2"]
    ];
    return view('AboutUs',["ninjas" => $ninjas]);
});
Route::get('/Contact', function () {
    return view('Contactus');
});
Route::get('/Profile', function () {
    return view('Profile');
});