<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{

    protected $primaryKey = 'budget_id';
    protected $fillable = [
        'month',
        'budget'
    ];

    use HasFactory;
}
