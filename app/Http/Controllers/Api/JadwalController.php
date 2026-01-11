<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\Semester;
use Illuminate\Http\Request;
use App\Models\User;


class JadwalController extends Controller
{
   public function index(Request $request)
{
    $user = User::with(['semester', 'jadwal'])
        ->findOrFail($request->user_id);

    return response()->json([
        'user' => [
            'nama' => $user->name,
            'semester' => $user->semester->nama,
            'status' => $user->semester->status,
            'tahun_ajaran' => $user->semester->tahun_ajaran
        ],
        'jadwal' => $user->jadwal
    ]);
}



}
