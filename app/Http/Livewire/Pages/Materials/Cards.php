<?php

namespace App\Http\Livewire\Pages\Materials;

use App\Models\Image;
use App\Models\Card;
use App\Models\Category;
use App\Models\Color;
use App\Models\ReasonSeason;
use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class Cards extends Component
{
    use WithPagination;
    public $state = [];
    public $updateMode = false;
    
    protected $listeners = [
        'deleteCard' => 'deleteCard',
        'refreshParent' => '$refresh'
    ];

    public function render()
    {
        $cards = Card::latest()->paginate();
        $categories = Category::latest()->paginate();
        $reasonSeasons = ReasonSeason::latest()->paginate();
        $tags = Tag::latest()->paginate();
        $colors = Color::latest()->paginate();
        return view('livewire.pages.materials.cards', [
            'cards' => $cards,
            'categories' => $categories,
            'reasonSeasons' => $reasonSeasons,
            'tags' => $tags,
            'colors' => $colors,
        ]);
    }
    public function deleteCard(Card $card){
        
        $card->delete();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Card deleted successfully!"
        ]);
    }
}
