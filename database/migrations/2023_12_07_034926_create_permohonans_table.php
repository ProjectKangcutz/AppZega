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
        Schema::create('permohonans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('no_kk');
            $table->string('nik_suami');
            $table->string('nama_suami');
            $table->string('nik_istri');
            $table->string('nama_istri');
            $table->string('no_akta_nikah');
            $table->text('upload_kk');
            $table->text('upload_ktpsuami');
            $table->text('upload_ktpistri');
            $table->text('upload_f106');
            $table->text('keterangan');
            $table->date('tgl_pengajuan');
            $table->date('tgl_proses');
            $table->text('upload_draftkk');
            $table->integer('aktif');
            $table->integer('status_pengajuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonans');
    }
};
