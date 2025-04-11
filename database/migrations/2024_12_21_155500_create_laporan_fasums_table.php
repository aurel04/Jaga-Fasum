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
        Schema::create('laporan_fasums', function (Blueprint $table) {
            $table->foreignId('laporan_id')->constrained('laporans')->cascadeOnDelete();
            $table->foreignId('fasum_id')->constrained('fasums')->cascadeOnDelete();
            $table->enum('status', ['Antri', 'Dikerjakan', 'Outsource', 'Selesai', 'Tidak terselesaikan'])->default('Antri');
            $table->text('image_path')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->string('image_selesai')->nullable();
            $table->text('deskripsi');
            $table->string('keterangan_dinas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_fasums');
    }
};
