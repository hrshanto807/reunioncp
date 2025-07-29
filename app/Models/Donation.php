<?php

// app/Models/Donation.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'name',
        'mobile',
        'amount',
        'bkash_num',
        'bkash_trans_id',
        'payment_method',
        'status',
    ];
}

