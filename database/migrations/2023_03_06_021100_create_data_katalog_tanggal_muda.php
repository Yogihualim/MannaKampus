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
        Schema::create('katalog_tanggal_muda', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_katalog_tanggal_muda');
            $table->string('image_katalog_TM');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('katalog_tanggal_muda');
    }
};
