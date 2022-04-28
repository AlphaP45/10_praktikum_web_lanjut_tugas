<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Praktikum 1 JS 10 (Langkah 5)
    protected $fillable = [
        'title',
        'content',
        'featured_image'
    ];
}
