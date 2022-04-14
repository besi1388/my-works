<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Car extends Model
{
    protected $fillable = [
        'make','model', 'year', 'category_id','image', 'price', 'seats', 'specs'
    ];


    public function categories(){
        return $this->belongsToMany(Category::class);
    }

}
