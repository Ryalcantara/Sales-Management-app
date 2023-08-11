<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable = [
        'date_id',
        'customer',
        'employees_id',
        'service_id',
        'product_id',
        'quant',
        'gcash',
        'gift_certificate',
        'gift_voucher',
        'loyalty'
    ];
    use HasFactory;
}
