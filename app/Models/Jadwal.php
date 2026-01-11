<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';

    protected $fillable = [
    'user_id',
    'semester_id',
    'nama_mk',
    'dosen',
    'hari',
    'jam_mulai',
    'jam_selesai',
    'ruang'
];

    // ⛔ Sembunyikan timestamp dari response JSON
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    // Relasi ke semester
    public function semester()
{
    return $this->belongsTo(Semester::class, 'semester_id');
}


    // Relasi ke user (mahasiswa)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
