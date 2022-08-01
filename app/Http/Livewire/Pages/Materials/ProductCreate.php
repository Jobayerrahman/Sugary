<?php

namespace App\Http\Livewire\Pages\Materials;

use App\Models\Category;
use App\Models\InventoryPlacement;
use App\Models\VisibleTag;
use App\Models\Color;
use App\Models\Image;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\Tag;
use App\Models\ReasonSeason;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductCreate extends Component
{
    use WithFileUploads;

    // public $title;
    public $category_id;
    public $state = [
        'title' => null,
        'category_ids'=> [],
        'reason_season_ids'=> [],
        'tag_ids'=> [],
        'inventory_placement_ids'=> [],
        'color_ids'=> [],
        'visible_tag_ids'=> [],

    ];
    public $photos;
    public $variant_photos;
    public $hasVariant;
    public $varientCount = 1;
    public $variants;
    protected $listeners = [
        'refreshParent' => '$refresh'
    ];

    public function render()
    {
        $categories = Category::all();
        $inventoryPlacements = InventoryPlacement::all();
        $visibleTags = VisibleTag::all();
        $colors = Color::all();
        $reasonSeasons = ReasonSeason::whereIn('category_id', $this->state['category_ids'])->get();
        $tags = Tag::all();

        return view('livewire.pages.materials.product-create', [
            'categories' => $categories,
            'reasonSeasons' => $reasonSeasons,
            'tags' => $tags,
            'inventoryPlacements' => $inventoryPlacements,
            'visibleTags' => $visibleTags,
            'colors' => $colors,

        ]);
    }
    public function mount()
    {
        $this->fill([
            'variants' => collect([[]]),
        ]);
    }

    public function save(){
        // dd($this->variants);
        // dd($this->photos);
        $validateData = Validator::make($this->state,[
            'title' => 'required|unique:products',
            'description' => 'nullable',

            'custom_text_label'  => 'nullable',
            'custom_file_label'  => 'nullable',
            'is_business_gifting'  => 'nullable',
            'is_mark_as_drip'  => 'nullable',
            'is_caution_of_availability'  => 'nullable',

            'old_cost' => 'nullable',
            'current_cost' => 'nullable',
            'sell_price' => 'nullable',
            'quantity' => 'nullable',
            'height' => 'nullable',
            'width' => 'nullable',
            'depth' => 'nullable',


            'photos' => 'image|mimes:jpg,jpeg,png|max:1024', // 1MB Max
        ])->validate();

        $product = Product::create($validateData);
        if($this->state['category_ids']){
            $product->categories()->sync($this->state['category_ids']);
        }
        if($this->state['reason_season_ids']){
            $product->reasonSeasons()->sync($this->state['reason_season_ids']);
        }
        if($this->state['tag_ids']){
            $product->tags()->sync($this->state['tag_ids']);
        }
        if($this->state['color_ids']){
            $product->colors()->sync($this->state['color_ids']);
        }
        if($this->state['inventory_placement_ids']){
            $product->inventoryPlacements()->sync($this->state['inventory_placement_ids']);
        }
        if($this->state['visible_tag_ids']){
            $product->visibleTags()->sync($this->state['visible_tag_ids']);
        }
        if($this->hasVariant){
            foreach($this->variants as $item){
                $variant = new ProductVariant();
                $variant->fill($item);
                $variant->product()->associate($product);
                $variant->save();
                if (array_key_exists('color_ids', $item) && $item['color_ids']){
                    $variant->colors()->sync($item['color_ids']);
                }
                // if ((array_key_exists('photos', $item) && $item['photos'])) {
                //     $image = new Image();
                //     $image->title = $this->state['title'];
                //     $image->path = $this->photos->store('public/products-images/variant');
                //     $image->save();
                //     $variant->images()->sync($image->id);
                // }

            }
        }
        if ($this->photos) {
            // dd($this->photos);
            //To Do: iterate every photos and save with product
            // $path = $this->photos->store('public/products-images');
            // dd($path);
            $image = new Image();
            $image->title = $this->state['title'];
            $image->path = $this->photos->store('public/products-images');
            $image->save();
            $product->images()->sync($image->id);
        }

        $this->resetForm();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Product saved successfully!"
        ]);
        return redirect()->back();
    }
    private function resetForm(){
        $this->reset(['state']);
        $this->fill([
            'variants' => collect([[]]),
        ]);
    }
    public function addVariant()
    {
        $this->variants->push([]);
    }
    public function removeVariant($key){
        $this->variants->pull($key);
    }
}
