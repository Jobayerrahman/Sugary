<?php

namespace App\Http\Livewire\Pages\Settings;

use App\Models\Category;
use App\Models\ReasonSeason;
use Livewire\Component;
use Livewire\WithPagination;

class ReasonSeasons extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $state =[]; 
    public $updateMode = false;
    public $selected_id;
    protected $listeners = [
        'deleteReasonSeason' => 'deleteReasonSeason',
        'refreshParent' => '$refresh'
    ];
    public function render()
    {
        $categories = Category::latest()->paginate();
        $reasonSeasons = ReasonSeason::with('category')->latest()->paginate(5);
        return view('livewire.pages.settings.reason-seasons',[
            'categories' => $categories,
            'reasonSeasons' => $reasonSeasons,
        ]);
    }

    public function deleteReasonSeason(ReasonSeason $reasonSeason){
        $reasonSeason->delete();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Reason Season deleted successfully!"
        ]);
    }

}
