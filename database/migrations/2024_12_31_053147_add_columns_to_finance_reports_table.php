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
        Schema::table('finance_reports', function (Blueprint $table) {
            $table->date('tanggal');
            $table->decimal('jumlah_pengeluaran', 10, 2);
            $table->string('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('finance_reports', function (Blueprint $table) {
            $table->dropColumn(['tanggal', 'jumlah_pengeluaran', 'keterangan']);
        });
    }
};