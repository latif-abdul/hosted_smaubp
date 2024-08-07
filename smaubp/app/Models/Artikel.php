<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = "artikel";

    protected $fillable = [
        'judul',
        'penulis',
        'gambar',
        'artikel',
    ];

    public function comment()
    {
        return $this->hasMany(Comment::class, 'id_artikel', 'id');
    }
}
