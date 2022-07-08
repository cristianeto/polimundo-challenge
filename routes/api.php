<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PersonController;
use App\Http\Controllers\API\TicketController;

Route::get("/persons", [PersonController::class, 'index'])->name("persons.index");
Route::get("/persons/{person}", [PersonController::class, 'show'])->name("persons.show");

Route::get("/tickets", [TicketController::class, 'index'])->name("tickets.index");
