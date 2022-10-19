<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batik extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pemilik',
        'nama_usaha',
        'slug',
        'nib',
        'alamat_usaha',
        'produk',
        'kapasitas_produksi',
        'jumlah_karyawan',
        'harga',
        'gambar_produk',
        'gambar_produk2',
        'kontak',
        'website',
        'deskripsi_produk',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
