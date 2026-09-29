<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use GuzzleHttp\Promise\Create;

Route::get('/', function () {
    return view('welcome');
});


//Route::post('/events/index', [EventController::class, 'create']);

Route::get('/events', [EventController::class, 'index']);

Route::get('/events/{id}', [EventController::class, 'show']);


