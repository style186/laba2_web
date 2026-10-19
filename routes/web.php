<?php

use Illuminate\Support\Facades\Route;

Route::get('/',action: function () {
    return view('welcome');
});
Route::get('/hello',action: function () {
    return view('hello', ['title' => 'Hello world!']);
});
 