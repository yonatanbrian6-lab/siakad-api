<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal', function (Blueprint $table) {
    $table->id();

    $table->unsignedBigInteger('user_id');
    $table->unsignedBigInteger('semester_id');

    $table->string('nama_mk');
    $table->string('dosen');
    $table->string('hari');
    $table->string('jam_mulai');
    $table->string('jam_selesai');
    $table->string('ruang');

    $table->timestamps();

    $table->foreign('user_id')
        ->references('id')->on('users')
        ->onDelete('cascade');

    $table->foreign('semester_id')
        ->references('id')->on('semester') // ✅ SINGULAR
        ->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};
