<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CalculateCode;



Route::get('/', function() {
    return '<h1> Api File is Connected. </h1>';
});
