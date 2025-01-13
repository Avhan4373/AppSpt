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
            $table->json('user_ids')->nullable()->after('user_id'); // Tambahkan kolom user_ids
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sppd_luar_daerahs', function (Blueprint $table) {
            $table->dropColumn('user_ids'); // Hapus kolom user_ids
        });
    }
};
