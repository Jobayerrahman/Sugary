<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
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
        return $this->hasMany(AddonVariant::class);
    }
    public function images(){
        return $this->belongsToMany(Image::class, 'addon_has_image');
    }
    public function tags(){
        return $this->belongsToMany(Tag::class, 'addon_has_tag');
    }
    public function colors(){
        return $this->belongsToMany(Color::class, 'addon_has_color');
    }
    public function inventoryPlacements(){
        return $this->belongsToMany(InventoryPlacement::class, 'addon_has_inventory_placement');
    }
    public function visibleTags(){
        return $this->belongsToMany(VisibleTag::class, 'addon_has_visible_tag');
    }
}
