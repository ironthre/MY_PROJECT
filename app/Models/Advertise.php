<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    use HasFactory;
    protected $table = 'advertise';
    protected $fillable = [
        'brand',
        'phone',
        'owner',
        'email',
        'expire',
        'image',
    ];
}
