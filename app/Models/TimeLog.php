<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeLog extends Model
{
    protected $fillable = [
        'date_id',
        'employees_id',
        'time_in',
        'time_out'
    ];
    use HasFactory;
}
