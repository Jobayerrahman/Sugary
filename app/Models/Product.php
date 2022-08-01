<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',

        'category_id',
        'reason_season_id',
        'tag_id',

        'custom_text_label',
        'custom_file_label',
        'is_business_gifting',
        'is_mark_as_drip',
        'is_caution_of_availability',

        'old_cost',
        'current_cost',
        'sell_price',
        'quantity',
        'height',
        'width',
        'depth',

        'color_id',
        'inventory_placement_id',
        'visible_tag_id',
        'photos'
    ];

    //Relationship functions
    public function variants(){
        return $this->hasMany(ProductVariant::class);
    }
    public function categories(){
        return $this->belongsToMany(Category::class, 'product_has_category');
    }
    public function reasonSeasons(){
        return $this->belongsToMany(ReasonSeason::class, 'product_has_reason_season');
    }
    public function inventoryPlacements(){
        return $this->belongsToMany(InventoryPlacement::class, 'product_has_inventory_placement');
    }
    public function visibleTags(){
        return $this->belongsToMany(VisibleTag::class, 'product_has_visible_tag');
    }
    public function tags(){
        return $this->belongsToMany(Tag::class, 'product_has_tag');
    }
    public function colors(){
        return $this->belongsToMany(Color::class, 'product_has_color');
    }
    public function images(){
        return $this->belongsToMany(Image::class, 'product_has_image');
    }



}
