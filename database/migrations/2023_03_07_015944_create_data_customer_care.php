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
        Schema::create('customer_care', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name_cus');
            $table->string('email_cus');
            $table->text('pilih_cabang');
            $table->text('keluhan');
            $table->text('pesan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_care');
    }
};
