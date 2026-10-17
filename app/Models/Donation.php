<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'amount',
        'currency',
        'purpose',
        'payment_method',
        'status',
        'notes',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
    ];
}
