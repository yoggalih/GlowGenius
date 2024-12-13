<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skincare extends Model
{
    use HasFactory;

    protected $fillable = [
        'product',
        'skin_type',
        'skin_condition',
    ];
}