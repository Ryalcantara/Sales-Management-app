<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deductions extends Model
{

    protected $fillable = [
        'date_id',
        'employees_id',
        'amount',
    ];
    
    use HasFactory;
}
