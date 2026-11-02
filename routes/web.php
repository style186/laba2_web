<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HallController;
use App\Http\Controllers\seSSionController;
use App\Http\Controllers\SeatController;

Route::get('/',action: function () {
    return view('welcome');
});
Route::get('/hello',action: function () {
    return view('hello', ['title' => 'Hello world!']);
});
Route::get('/hall', [HallController::class, 'index']);
Route::get('/hall/{id}', [HallController::class, 'show']);
Route::get('/sessions', [seSSionController::class, 'index']);
Route::get('/seat/create', [SeatController::class, 'create']);
Route::post('/seat', [SeatController::class, 'store']);
Route::get('/seat/edit/{id}', [SeatController::class, 'edit']);
Route::post('/seat/update/{id}', [SeatController::class, 'update']);
Route::get('/seats', [SeatController::class, 'index']);
Route::get('/seat/destroy/{id}', [SeatController::class, 'destroy']);