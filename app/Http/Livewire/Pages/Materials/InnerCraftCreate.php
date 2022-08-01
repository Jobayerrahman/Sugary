<?php

namespace App\Http\Livewire\Pages\Materials;

use App\Models\InnerCraft;
use App\Models\Color;
use App\Models\Tag;
use App\Models\InventoryPlacement;
use App\Models\Image;
use App\Models\InnerCraftVariant;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;

class InnerCraftCreate extends Component
{
    use WithFileUploads;
    public $state = [
        'title' => null,
        'tag_ids'=> [],
        'inventory_placement_ids'=> [],
        'color_ids'=> [],
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
        return view('livewire.pages.materials.inner-craft-create',[
            'colors' => $colors,
            'tags' => $tags,
            'inventoryPlacements' => $inventoryPlacements,
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

        $innercraft = InnerCraft::create($validateData);

        if($this->state['tag_ids']){
            $innercraft->tags()->sync($this->state['tag_ids']);
        }
        if($this->state['color_ids']){
            $innercraft->colors()->sync($this->state['color_ids']);
        }
        if($this->state['inventory_placement_ids']){
            $innercraft->inventoryPlacements()->sync($this->state['inventory_placement_ids']);
        }

        if($this->hasVariant){
            foreach($this->variants as $item){
                $variant = new InnerCraftVariant();
                $variant->fill($item);
                $variant->innercraft()->associate($innercraft);
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
            $image->path = $this->photos->store('public/innercrafts-images');
            $image->save();
            $innercraft->images()->sync($image->id);
        }

        $this->resetForm();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Inner Craft saved successfully!"
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
