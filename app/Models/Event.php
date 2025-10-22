<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date_from',
        'date_to',
        'published',
        'note',
    ];

    protected $casts = [
        'date_from' => 'datetime',
        'date_to' => 'datetime',
        'published' => 'boolean',
    ];
}
