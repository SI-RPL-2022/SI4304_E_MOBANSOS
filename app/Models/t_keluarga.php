<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\t_pendaftaran_rt;

class t_keluarga extends Model
{
    use HasFactory;

    protected $table = 't_keluarga';

    protected $fillable = [
        'nik_keluarga',
        'email',
        'password',
        'nama_kepala_keluarga',
        'nohp',
        'alamat',
        'is_validated',
    ];

    // public function keluarga() {
    //     return $this->hasOne(t_pendaftaran_rt::class, 'foreign_key');
    // }
}