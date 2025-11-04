<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('moods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // relasi ke users
            $table->string('mood'); // contoh: Happy, Sad, dll
            $table->text('note')->nullable(); // catatan mood
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('moods');
    }
};
