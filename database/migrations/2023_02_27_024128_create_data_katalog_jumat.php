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
        Schema::create('katalog_jumat', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_katalog_jumat');
            $table->string('image_katalog_J');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('katalog_jumat');
    }
};
