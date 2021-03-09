<?php

use Core\Illuminate\Support\Facades\Route;

Route::post('/',[\App\Http\Controllers\HomeController::class,'index']);
Route::get('/show',[\App\Http\Controllers\HomeController::class,'show']);


?>