<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dessert extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'place',
    ];
}