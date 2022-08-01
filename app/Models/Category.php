<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    // public function subcategory(){
    //     return $this->hasMany(ReasonSeason::class);
    // }
    // public function product(){
    //     return $this->hasMany(Product::class);
    // }
}
