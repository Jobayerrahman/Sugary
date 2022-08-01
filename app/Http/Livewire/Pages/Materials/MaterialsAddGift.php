<?php

namespace App\Http\Livewire\Pages\Materials;

use App\Models\Category as ModelsCategory;
use App\Models\InventoryPlacement;
use App\Models\Color;
use App\Models\Tag;
use Livewire\Component;

class MaterialsAddGift extends Component
{
    public function render()
    {
        $categories = ModelsCategory::all();
        $inventoryplacements = InventoryPlacement::all();
        $colors = Color::all();
        $tags = Tag::all();
        return view('livewire.pages.materials.materials-add-gift',[
            'categories' => $categories,
            'inventoryplacements' => $inventoryplacements,
            'colors' => $colors,
            'tags' => $tags,
        ]);
    }
}
