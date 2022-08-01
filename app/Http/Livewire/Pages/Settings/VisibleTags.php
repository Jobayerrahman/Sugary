<?php

namespace App\Http\Livewire\Pages\Settings;

use App\Models\VisibleTag;
use Livewire\Component;
use Livewire\WithPagination;

class VisibleTags extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $state = [];
    public $updateMode = false;
    public $selected_id;
    protected $listeners = [
        'deleteVisibleTags' => 'deleteVisibleTags',
        'refreshParent' => '$refresh'
    ];
    public function render()
    {
        $visibleTags = VisibleTag::latest()->paginate();
        return view('livewire.pages.settings.visible-tags', [
            'visibleTags' => $visibleTags,
        ]);
    }

    public function deleteVisibleTags(VisibleTag $visibleTag){
        $visibleTag->delete();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Visible Tag deleted successfully!"
        ]);
    }

    


    
}
