<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\food;
class category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_cate'
    ];
        public function foods(){
       return  $this->belongsToMany(food::class,'food_cates','id_category','id_food');
    }
}
