<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Semua route di sini otomatis punya prefix /api
| Contoh:
| https://domainmu.up.railway.app/api/ping
|
*/

// =======================
// TEST API (WAJIB ADA)
// =======================
Route::get('/ping', function () {
    return response()->json([
        'status' => 'ok',
        'message' => 'API Laravel Railway aktif'
    ]);
});

// =======================
// AUTH (contoh)
// =======================
Route::post('/login', function (Request $request) {
    return response()->json([
        'message' => 'Login endpoint (belum diimplementasi)'
    ]);
});

// =======================
// SEMESTER
// =======================
Route::get('/semester', function () {
    return response()->json([
        'data' => []
    ]);
});

// =======================
// JADWAL
// =======================
Route::get('/jadwal', function () {
    return response()->json([
        'data' => []
    ]);
});
