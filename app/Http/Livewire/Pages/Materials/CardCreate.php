<?php

namespace App\Http\Livewire\Pages\Materials;

use App\Models\Card;
use App\Models\Category;
use App\Models\Color;
use App\Models\Tag;
use App\Models\ReasonSeason;
use App\Models\InventoryPlacement;
use App\Models\VisibleTag;
use App\Models\Image;
use App\Models\CardVariant;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;
use Livewire\Component;

class CardCreate extends Component
{
    use WithFileUploads;

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
    public $hasVariant;
    public $varientCount = 1;
    public $variants;
    protected $listeners = [
        'refreshParent' => '$refresh'
    ];
    public function render()
    {
        $categories = Category::all();
        $colors = Color::all();
        $reasonSeasons = ReasonSeason::whereIn('category_id', $this->state['category_ids'])->get();
        $tags = Tag::all();
        $inventoryPlacements = InventoryPlacement::all();
        $visibleTags = VisibleTag::all();
        return view('livewire.pages.materials.card-create', [
            'categories' => $categories,
            'reasonSeasons' => $reasonSeasons,
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
            'description' => 'required',

            'category_ids' => 'required',
            'reason_season_id' => 'required',
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

        $card = Card::create($validateData);

        if($this->state['category_ids']){
            $card->categories()->sync($this->state['category_ids']);
        }
        if($this->state['reason_season_ids']){
            $card->reasonSeasons()->sync($this->state['reason_season_ids']);
        }
        if($this->state['tag_ids']){
            $card->tags()->sync($this->state['tag_ids']);
        }
        if($this->state['color_ids']){
            $card->colors()->sync($this->state['color_ids']);
        }
        if($this->state['inventory_placement_ids']){
            $card->inventoryPlacements()->sync($this->state['inventory_placement_ids']);
        }
        if($this->state['visible_tag_ids']){
            $card->visibleTags()->sync($this->state['visible_tag_ids']);
        }

        if($this->hasVariant){
            foreach($this->variants as $item){
                $variant = new CardVariant();
                $variant->fill($item);
                $variant->card()->associate($card);
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
            $image->path = $this->photos->store('public/cards-images');
            $image->save();
            $card->images()->sync($image->id);
        }

        $this->resetForm();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Product saved successfully!"
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
