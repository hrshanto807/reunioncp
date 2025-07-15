<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $guarded = [];

    public function registration()
    {
        return $this->belongsTo(Registration::class);
    }

}
