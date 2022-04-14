<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;


class Category extends Model
{
    protected $fillable = [
        'id',
        'category',
        
    ];
 
    public function cars()
    {
        return $this->belongsToMany(Car::class, 'category_id');
    }
}