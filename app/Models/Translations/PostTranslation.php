<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'post_id',
        'locale',
        'title',
        'content',
    ];
}
