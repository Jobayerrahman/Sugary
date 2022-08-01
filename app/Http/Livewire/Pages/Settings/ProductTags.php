<?php

namespace App\Http\Livewire\Pages\Settings;

use App\Models\Tag;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class ProductTags extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $state = [];
    public $updateMode = false;
    public $selected_id;

    protected $listeners = [
        'deleteTag' => 'deleteTag',
        'refreshParent' => '$refresh'
    ];

    public function render()
    {
        $tags = Tag::latest()->paginate(5);
        return view('livewire.pages.settings.product-tags', [
            'tags' => $tags
        ]);
    }

    public function deleteTag(Tag $tag){
        $tag->delete();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Tag deleted successfully!"
        ]);
    }
}
