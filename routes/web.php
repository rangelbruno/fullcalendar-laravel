<?php

use App\Http\Controllers\{
    EventController,
    FullCalendarController
};
use Illuminate\Support\Facades\Route;

Route::get('/calendar', [FullCalendarController::class, 'index'])->name('calendar.index');
Route::get('/load-events', [EventController::class, 'loadEvents'])->name('routeLoadEvents');
Route::put('/event-update', [EventController::class, 'update'])->name('routeEventUpdate');

Route::get('/', function () {
    return view('welcome');
});