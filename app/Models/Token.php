<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $table = 'tokens';

    protected $guarded = [];
    public function registration()
    {
        return $this->belongsTo(Registration::class);
    }

}
