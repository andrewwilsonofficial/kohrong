<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    public $fillable = [
        'code',
        'type',
        'amount',
        'start_date',
        'end_date',
        'amount_left',
        'customer_type',
        'status',
    ];
}
