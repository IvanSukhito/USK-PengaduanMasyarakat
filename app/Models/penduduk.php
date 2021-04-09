<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\aspirasi;

class penduduk extends Model
{
    use HasFactory;

    protected $fillable = ['nik','nama','alamat'];
    public function aspirasi(){
        return $this->hasMany(aspirasi::class);
    }
}
