<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\penduduk;
use App\Models\kategori;

class aspirasi extends Model
{
    use HasFactory;

    protected $fillable = ['id_kategori','id_penduduk','id_laporan','ket','lokasi','status','feedback'];
    public function penduduk(){
        return $this->belongsTo(penduduk::class,'id_penduduk');
    }
    public function kategori(){
        return $this->belongsTo(kategori::class,'id_kategori');
    }
    
}
