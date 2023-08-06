<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeLog extends Model
{
    protected $fillable = [
        'date',
        'employee',
        'time_in',
        'time_out'
    ];
    use HasFactory;
}
