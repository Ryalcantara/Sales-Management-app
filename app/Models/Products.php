<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'product_name',
        'batch_number',
        'date_exp',
        'price',
        'quantity',
        'availability'
    ];
    use HasFactory;
}
