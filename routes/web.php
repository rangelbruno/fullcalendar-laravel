<?php

use App\Http\Controllers\FullCalendarController;
use Illuminate\Support\Facades\Route;

Route::get('/calendar', [FullCalendarController::class, 'index'])->name('calendar.index');

Route::get('/', function () {
    return view('welcome');
});