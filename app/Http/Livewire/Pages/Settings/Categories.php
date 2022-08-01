<?php

namespace App\Http\Livewire\Pages\Settings;

use App\Models\Category;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $state = [];
    public $updateMode = false;
    public $selected_id;

    protected $listeners = [
        'deleteCategory' => 'deleteCategory',
        'refreshParent' => '$refresh'
    ];

    public function render()
    {
        $categories = Category::latest()->paginate(5);
        return view('livewire.pages.settings.categories', [
            'categories' => $categories,
        ]);
    }
    public function deleteCategory(Category $category){
        $category->delete();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Category deleted successfully!"
        ]);
    }
}
