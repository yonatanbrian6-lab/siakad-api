<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JadwalController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/jadwal', [JadwalController::class, 'index']);
