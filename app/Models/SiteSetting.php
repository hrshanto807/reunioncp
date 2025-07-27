<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'meta_title',
        'meta_description',
        'favicon',
        'logo',
    ];
}
