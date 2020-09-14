<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.table.native')->name('native');
Route::view('/data-tables', 'pages.table.datatable')->name('datatable');

Route::namespace('App\Http\Controllers')->group(function () {
    Route::resource('/question', 'QuestionController');
});
