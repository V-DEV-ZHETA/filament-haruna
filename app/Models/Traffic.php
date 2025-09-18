<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Traffic extends Model
{
    protected $fillable = [
        'url',
        'ip_address',
        'user_agent',
        'session_id',
    ];
}
