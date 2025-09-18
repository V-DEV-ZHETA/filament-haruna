<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'content',
        'video_url',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'date',
    ];
}
