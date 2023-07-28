<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    protected $fillable = [
        'date',
        'expense_type',
        'payment',
    ];
    use HasFactory;
}
