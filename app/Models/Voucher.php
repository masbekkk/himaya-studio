<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'voucher_name',
        'voucher_code',
        'disc_percentage',
        'max_disc',
        'minimum_payments',
        'status'
    ];
}
