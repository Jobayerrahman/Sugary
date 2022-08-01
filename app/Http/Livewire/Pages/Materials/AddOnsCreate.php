<?php

namespace App\Http\Livewire\Pages\Materials;

use App\Models\Addon;
use App\Models\Color;
use App\Models\Tag;
use App\Models\InventoryPlacement;
use App\Models\VisibleTag;
use App\Models\Image;
use App\Models\AddonVariant;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;

use Livewire\Component;

class AddOnsCreate extends Component
{
    use WithFileUploads;
    public $state = [
        'title' => null,
        'tag_ids'=> [],
        'inventory_placement_ids'=> [],
        'color_ids'=> [],
        'visible_tag_ids'=> [],
    ];

    public $photos;
    public $hasVariant;
    public $varientCount = 1;
    public $variants;
    protected $listeners = [
        'refreshParent' => '$refresh'
    ];
    public function render()
    {
        $colors = Color::all();
        $tags = Tag::all();
        $inventoryPlacements = InventoryPlacement::all();
        $visibleTags = VisibleTag::all();
        return view('livewire.pages.materials.addons-create',[
            'colors' => $colors,
            'tags' => $tags,
            'inventoryPlacements' => $inventoryPlacements,
            'visibleTags' => $visibleTags,
        ]);
    }

    public function mount()
    {
        $this->fill([
            'variants' => collect([[]]),
        ]);
    }

    public function save()
    {
        // dd($this->state);
        $validateData = Validator::make($this->state, [
            'title' => 'required|unique:products',
            'display_text' => 'required',
            'description' => 'required',

            'tag_ids' => 'required',
            'inventory_placement_ids' => 'required',
            'visible_tag_ids' => 'required',

            'custom_text_label'  => '',
            'custom_file_label'  => '',
            'is_buniness_gifting'  => '',
            'is_mark_as_drip'  => '',
            'is_caution_of_availability'  => '',

            'old_cost' => 'nullable',
            'current_cost' => 'nullable',
            'sell_price' => 'nullable',
            'quantity' => 'nullable',
            'height' => 'nullable',
            'width' => 'nullable',
            'depth' => 'nullable',

            'photos' => 'image|mimes:jpg,jpeg,png|max:1024', // 1MB Max
        ])->validate();

        $addon = Addon::create($validateData);

        if($this->state['tag_ids']){
            $addon->tags()->sync($this->state['tag_ids']);
        }
        if($this->state['color_ids']){
            $addon->colors()->sync($this->state['color_ids']);
        }
        if($this->state['inventory_placement_ids']){
            $addon->inventoryPlacements()->sync($this->state['inventory_placement_ids']);
        }
        if($this->state['visible_tag_ids']){
            $addon->visibleTags()->sync($this->state['visible_tag_ids']);
        }

        if($this->hasVariant){
            foreach($this->variants as $item){
                $variant = new AddonVariant();
                $variant->fill($item);
                $variant->addon()->associate($addon);
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
            $image = new Image();
            $image->title = $this->state['title'];
            $image->path = $this->photos->store('public/addons-images');
            $image->save();
            $addon->images()->sync($image->id);
        }

        $this->resetForm();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Addon saved successfully!"
        ]);
        return redirect()->back();
    }

    private function resetForm()
    {
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
