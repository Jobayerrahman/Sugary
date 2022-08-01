<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardVariant extends Model
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
    public function card(){
        return $this->belongsTo(Card::class);
    }
    public function colors(){
        return $this->belongsToMany(Color::class, 'card_variant_has_color');
    }
    public function images(){
        return $this->belongsToMany(Image::class, 'card_variant_has_image');
    }
}
