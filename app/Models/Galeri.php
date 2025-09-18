<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'video_url',
        'active',
        'category',
    ];

    protected function casts(): array
    {
        return [
            'active' => 'boolean',
        ];
    }
}
