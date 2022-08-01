<?php

namespace App\Http\Livewire\Modals;

use App\Models\Category;
use App\Models\Color;
use App\Models\InventoryPlacement;
use App\Models\Product;
use App\Models\ReasonSeason;
use App\Models\Tag;
use App\Models\VisibleTag;
use LivewireUI\Modal\ModalComponent;

class ProductViewModal extends ModalComponent
{
    public $state = [];
    public $product;
    /**
     * Supported: 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl'
     */
    public static function modalMaxWidth(): string
    {
        return '3xl';
    }
    public static function closeModalOnEscape(): bool
    {
        return false;
    }
    public function render()
    {
        $products = Product::all();
        $categories = Category::all();
        $reasonSeasons = ReasonSeason::all();
        $tags = Tag::all();
        $colors = Color::all();
        $inventoryPlacements = InventoryPlacement::all();
        $visibleTags = VisibleTag::all();
        return view('livewire.modals.product-view-modal', [
            'products' => $products,
            'categories' => $categories,
            'reasonSeasons' => $reasonSeasons,
            'tags' => $tags,
            'colors' => $colors,
            'inventoryPlacements' => $inventoryPlacements,
            'visibleTags' => $visibleTags,
        ]);
    }
    public function mount(Product $product){
        $this->product = $product;
        // $this->state = $product->toArray();
    }

}
