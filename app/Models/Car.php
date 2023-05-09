<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'carId';

    protected $fillable = [
        'name',
        'carType',
        'rating',
        'fuel',
        'image',
        'hourRate',
        'dayRate',
        'monthRate',
    ];
}
