<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaSosial extends Model
{
    protected $fillable = [
        'platform',
        'url',
        'username',
        'active',
    ];

    protected $attributes = [
        'platform' => 'unknown',
        'active' => true,
    ];
}
