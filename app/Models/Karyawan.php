<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';

    protected $fillable = [
        'nama',
        'email',
        'alamat',
        'tempat_lahir', // Tambahkan kolom tempat_lahir
        'posisi',
        'divisi',
    ];
}
