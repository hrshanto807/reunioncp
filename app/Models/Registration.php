<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'registrations';
  protected $guarded = [];


    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function tokens()
{
    return $this->hasMany(Token::class);
}


}
