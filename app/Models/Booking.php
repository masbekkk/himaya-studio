<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Fillable fields for mass assignment
    protected $fillable = [
        'product',
        'date_books',
        'duration',
        'price',
        'add_on',
        'start_time',
        'end_time',
        'details',
        'booker_name',
        'booker_email',
        'booker_phone',
    ];
}
