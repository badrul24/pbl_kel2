<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'deskripsi'];

    public function codes()
    {
        return $this->hasMany(Code::class, 'kategori_id');
    }
}

