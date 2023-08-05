<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pending_Sales extends Model
{
    protected $fillable = [
        'customer',
        'employee',
        'services',
        'products',
        'quantity',
        'gcash',
        'gift_certificate',
        'gift_voucher',
        'loyalty'
    ];
    use HasFactory;
}
