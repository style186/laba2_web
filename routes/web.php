<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HallController;
use App\Http\Controllers\seSSionController;

Route::get('/',action: function () {
    return view('welcome');
});
Route::get('/hello',action: function () {
    return view('hello', ['title' => 'Hello world!']);
});
Route::get('/hall', [HallController::class, 'index']);
Route::get('/hall/{id}', [HallController::class, 'show']);
Route::get('/sessions', [seSSionController::class, 'index']);
 