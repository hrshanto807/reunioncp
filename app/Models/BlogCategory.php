<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blog_categories';

    protected $fillable = [
        'id',
        'name',
        'status',
        'del_status'
    ];
    public function blog()
    {
        return $this->hasMany(Blog::class);
    }

    // Check if used in any orders
    public function isUsedElsewhere()
    {
        return $this->blog()->exists();
    }
}
