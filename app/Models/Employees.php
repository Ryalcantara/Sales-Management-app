<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $primaryKey = 'employees_id';
    protected $fillable = [
        'name',
        'email',
        'address',
        'contact',
        'rate',
        'role'
    ];
    use HasFactory;
}
