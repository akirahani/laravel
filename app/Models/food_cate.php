<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food_cate extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_category',
        'id_food',
      
      ];
}
