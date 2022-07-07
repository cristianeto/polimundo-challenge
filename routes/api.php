<?php

use App\Http\Controllers\API\PersonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/persons", [PersonController::class, 'index'])->name("persons.index");
Route::get("/persons/{person}", [PersonController::class, 'show'])->name("persons.show");
