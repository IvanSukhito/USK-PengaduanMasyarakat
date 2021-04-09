<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\aspirasi;

class kategori extends Model
{
    use HasFactory;
    protected $fillable = ['ket_kategori'];
    
    public function aspirasi(){
    return $this->hasMany(aspirasi::class);
    }
}
