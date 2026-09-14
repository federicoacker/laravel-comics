<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("homepage");

Route::get("/test", function () {
    return view("test");
});
