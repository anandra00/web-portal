<?php

// ============================================
// 1. MIGRATION
// database/migrations/xxxx_create_karya_table.php
// ============================================

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('karya', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('judul', 100);
            $table->text('deskripsi');
            $table->string('kategori', 30);
            $table->year('tahun');
            $table->string('file_karya', 255)->nullable();
            $table->string('preview_karya', 255)->nullable();
            $table->string('tim_pembuat')->nullable();
            $table->enum('status_validasi', ['menunggu', 'disetujui', 'ditolak'])->default('menunggu');
            $table->timestamp('tanggal_upload')->useCurrent();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('karya');
    }
};