<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class money extends Model
{
    use HasFactory;

       protected $fillable = [
        'payment_number','payment_method','amount','day','month','year','user_id',
    ];
}
