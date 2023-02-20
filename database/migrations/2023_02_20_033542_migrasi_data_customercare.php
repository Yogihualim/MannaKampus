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
        Schema::create('data_customercare', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_customer');
            $table->string('email_customer');
            $table->integer('nohp_customer');
            $table->string('cabang_customer');
            $table->string('kategori_customer');
            $table->string('pesan_customer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_customercare');
    }
};
