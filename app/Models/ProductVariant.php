<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'old_cost',
        'current_cost',
        'sale_price',
        'quantity',
        'height',
        'width',
        'depth',
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function colors(){
        return $this->belongsToMany(Color::class, 'product_variant_has_color');
    }
    public function images(){
        return $this->belongsToMany(Image::class, 'product_variant_has_image');
    }
}
