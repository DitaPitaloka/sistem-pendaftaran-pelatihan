<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'address', 'selected_trainings', 'total_price'];

    protected $casts = [
        'selected_trainings' => 'array', // Konversi JSON ke array
    ];
}
