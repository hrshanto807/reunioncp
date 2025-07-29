<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'registrations';
    protected $fillable = [
        'name',
        'batch',
        'father_name',
        'blood',
        'photo',
        'tshirt',
        'phone',
        'email',
        'profession',
        'present_address',
        'permanent_address',
        'representative_name',
        'registration_type',
        'participant_count',
        'terms_agreed',
        'amount',
        'bkash_num',
        'bkash_trans_id',
        'payment_method',
        'status'
    ];

    public $timestamps = true;




    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function tokens()
    {
        return $this->hasMany(Token::class);
    }

}
