<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santris extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'asal_sekolah',
        'alamat_sekolah',
        'nama_ayah',
        'nama_ibu',
        'nomor_hp_ayah',
        'nomor_hp_ibu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'penghasilan_ayah',
        'penghasilan_ibu',
        'jalur_masuk',
        'foto',
        'bukti_pembayaran',
        'no_pendaftaran',
        'status',
        'no_wa',
        'batch_id',
        'deleted_at',
    ];

    public function daful()
    {
        return $this->hasMany(Daful::class, 'id_santris', 'id');
    }

    public function scopeWithDafulWhere($query, $attribute, $value)
    {
        return $query->with('daful')->whereHas('daful', function ($query) use ($attribute, $value) {
            $query->where($attribute, $value);
        });
    }
    
}
