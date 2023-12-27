<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'pack',
        'price',
        'cvc',
        'starting_date',
        'ending_date',
        'cvv',
        'mm',
        'yyy',
        'status',
    ];
}
