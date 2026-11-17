<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\DrinkController;

//itaLock
Route::get("/drinks",[DrinkController::class,"index"]);
Route::get("/drinks/{drink}",[DrinkController::class,"show"]);
Route::get("/drinks/",[DrinkController::class,"create"]);