<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $fillable = [
            'nip',
            'nik',
            'nm_lkp',
            'nm_pgil',
            'jk',
            'tmp_lahir',
            'tgl_lahir',
            'almt_ktp',
            'almt_domisili',
            'email',
            'no_hp',
            'stts_kawin',
            'agama',
            'pddk',
            'no_kk',
            'nm_ayah',
            'nm_ibu',
            'nm_pasangan',
            'nm_anak_1',
            'nm_anak_2',
            'nm_anak_3',
            'no_darurat',
            'stts_pegawai',
            'golongan',
            'jabatan',
            'tgl_masuk',
            'tgl_akhir_kontrak',
            'penempatan',
            'user_id',
            'avatar',
            'created_at'

    ];

    public function getAvatar()
    {
        if(!$this->avatar)
        {
            return asset('images/default.jpg');
        }
        return asset('images/'.$this->avatar);
    }
}
