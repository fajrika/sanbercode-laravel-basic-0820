<?php

use Illuminate\Support\Facades\Route;

Route::get("/","HomeController")->name('home');
Route::get("/register","AuthController@register")->name('register');
Route::post("/welcome","AuthController@welcome")->name('welcome');

