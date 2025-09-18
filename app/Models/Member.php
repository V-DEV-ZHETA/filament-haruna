<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'zodiak',
        'warna_favorit',
        'hewan_favorit',
        'jiko',
        'foto',
        'media_sosial',
    ];

    protected function casts(): array
    {
        return [
            'tanggal_lahir' => 'date',
            'media_sosial' => 'array',
        ];
    }
}
