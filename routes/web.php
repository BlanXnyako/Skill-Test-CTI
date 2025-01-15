<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/thank', function () {
    return view('thank');
});

Route::post('/submit-form', [FormController::class, 'submitForm']);


