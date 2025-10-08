<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page1', function () {
    return view ('page1');
});

// Route::get('/page1', [PageController::class,'display_page1']);

Route::controller(PageController::class)->group(function () {
    Route::get('/page1', 'display_page1');
    Route::get('/page2', 'display_page2');
});
