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
        Schema::table('sppd_luar_daerahs', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->change(); // Mengizinkan NULL
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sppd_luar_daerahs', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable(false)->change(); // Kembalikan ke tidak nullable
        });
    }
};
