<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'highlight',
        'register_button_text',
        'register_button_url',
        'announcement_button_text',
        'announcement_button_url',
        'background_image',
    ];

    /**
     * Get the background image URL.
     *
     * @return string
     */
    public function getBackgroundImageUrlAttribute()
    {
        return $this->background_image ? asset($this->background_image) : null;
    }
}
