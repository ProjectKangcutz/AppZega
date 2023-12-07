<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'no_kk',
        'nik_suami',
        'nama_suami',
        'nik_istri',
        'nama_istri',
        'no_akta_nikah',
        'upload_kk',
        'upload_ktpsuami',
        'upload_ktpistri',
        'upload_aktanikah',
        'upload_f106',
        'keterangan',
        'tgl_pengajuan',
        'tgl_proses',
        'upload_draftkk',
        'aktif',
        'status_pengajuan'
    ];
}
