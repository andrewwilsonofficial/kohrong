<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Milon\Barcode\DNS1D;

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

    protected $appends = ['barcode'];

    public function getBarcodeAttribute()
    {
        $barcode = new DNS1D();
        return 'data:image/png;base64,' . $barcode->getBarcodePNG($this->code, 'C128');
    }
}
