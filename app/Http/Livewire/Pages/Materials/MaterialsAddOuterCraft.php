<?php

namespace App\Http\Livewire\Pages\Materials;

use App\Models\Tag;
use App\Models\InventoryPlacement;
use Livewire\Component;

class MaterialsAddOuterCraft extends Component
{
    public function render()
    {
        $tags = Tag::all();
        $inventoryplacements = InventoryPlacement::all();
        return view('livewire.pages.materials.materials-add-outer-craft',[
            'tags' => $tags,
            'inventoryplacements' => $inventoryplacements,
        ]);
    }
}
