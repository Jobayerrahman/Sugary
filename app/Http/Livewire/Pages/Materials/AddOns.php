<?php

namespace App\Http\Livewire\Pages\Materials;

use App\Models\Addon;
use App\Models\Image;
use App\Models\Category;
use App\Models\Color;
use App\Models\ReasonSeason;
use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class AddOns extends Component
{
    use WithPagination;
    public $state = [];
    public $updateMode = false;

    protected $listeners = [
        'deleteAddon' => 'deleteAddon',
        'refreshParent' => '$refresh'
    ];

    public function render()
    {
        $addons = Addon::latest()->paginate();
        $categories = Category::latest()->paginate();
        $reasonSeasons = ReasonSeason::latest()->paginate();
        $tags = Tag::latest()->paginate();
        $colors = Color::latest()->paginate();
        return view('livewire.pages.materials.add-ons', [
            'addons' => $addons,
            'categories' => $categories,
            'reasonSeasons' => $reasonSeasons,
            'tags' => $tags,
            'colors' => $colors,
        ]);
        // return view('livewire.pages.materials.add-ons');
    }

    public function deleteAddon(Addon $addon){
        
        $addon->delete();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Addon deleted successfully!"
        ]);
    }
}
