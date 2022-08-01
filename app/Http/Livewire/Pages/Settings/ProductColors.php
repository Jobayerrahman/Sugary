<?php

namespace App\Http\Livewire\Pages\Settings;

use App\Models\Color;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class ProductColors extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $state = [];
    public $updateMode = false;
    public $selected_id;

    protected $listeners = [
        'deleteColor' => 'deleteColor',
        'refreshParent' => '$refresh'
    ];
    public function render()
    {
        $colors = Color::latest()->paginate(5);
        return view('livewire.pages.settings.product-colors', [
            'colors' => $colors,
        ]);
    }

    public function deleteColor(Color $color){
        $color->delete();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Color deleted successfully!"
        ]);
    }
   
}
