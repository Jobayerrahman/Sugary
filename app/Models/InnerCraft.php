<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InnerCraft extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'title',
        'display_text',
        'description',

        'tag_id',

        'custom_text_label',
        'custom_file_label',
        'is_buniness_gifting',
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
        return $this->hasMany(InnerCraftVariant::class);
    }
    public function images(){
        return $this->belongsToMany(Image::class, 'innercraft_has_image');
    }
    public function tags(){
        return $this->belongsToMany(Tag::class, 'innercraft_has_tag');
    }
    public function colors(){
        return $this->belongsToMany(Color::class, 'innercraft_has_color');
    }
    public function inventoryPlacements(){
        return $this->belongsToMany(InventoryPlacement::class, 'innercraft_has_inventory_placement');
    }
}
