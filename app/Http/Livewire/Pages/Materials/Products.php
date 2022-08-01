<?php

namespace App\Http\Livewire\Pages\Materials;

use App\Models\Category;
use App\Models\Color;
use App\Models\Image;
use App\Models\Product;
use App\Models\ReasonSeason;
use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;
    public $state = [];
    public $updateMode = false;
    
    protected $listeners = [
        'deleteProduct' => 'deleteProduct',
        'refreshParent' => '$refresh'
    ];
    
    public function render()
    {
        $products = Product::latest()->paginate();
        $categories = Category::latest()->paginate();
        $reasonSeasons = ReasonSeason::latest()->paginate();
        $tags = Tag::latest()->paginate();
        $colors = Color::latest()->paginate();
        return view('livewire.pages.materials.products', [
            'products' => $products,
            'categories' => $categories,
            'reasonSeasons' => $reasonSeasons,
            'tags' => $tags,
            'colors' => $colors,
        ]);
    }
    public function deleteProduct(Product $product){
        
        $product->delete();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Product deleted successfully!"
        ]);
    }
}
