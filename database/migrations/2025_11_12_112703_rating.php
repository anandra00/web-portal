<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('karya_id')->constrained('karya')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('nilai'); // nilai rating 1-5
            $table->date('tanggal_rating');
            $table->timestamps();

            $table->unique(['karya_id', 'user_id']); // satu user hanya bisa rating satu kali per karya
        });
    }

    public function down()
    {
        Schema::dropIfExists('rating');
    }
};
