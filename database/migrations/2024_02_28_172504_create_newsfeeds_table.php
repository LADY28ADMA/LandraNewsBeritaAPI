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
        Schema::create('newsfeeds', function (Blueprint $table) {
            $table->id();
            $table->integer('id_writer')->nullable();
            $table->string('nama_writer')->nullable();
            $table->string('judul')->nullable();
            $table->string('tag')->nullable();
            $table->string('media')->nullable();
            $table->string('isi')->nullable();
            $table->string('kategori')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newsfeeds');
    }
};
