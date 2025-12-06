<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccommodationTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'accommodation_id',
        'locale',
        'name',
        'content',
    ];
}
