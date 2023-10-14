<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyBudget extends Model
{
    protected $table = 'monthly_budgets'; // Specify the table name here
    protected $primaryKey = 'budget_id';
    protected $fillable = [
        'month',
        'budget'
    ];
}
