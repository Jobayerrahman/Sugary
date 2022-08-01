<?php

namespace App\Http\Livewire\Pages\Settings;

use App\Models\InventoryPlacement;
use Livewire\Component;
use Livewire\WithPagination;

class InventoryPlacements extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $state =[]; 
    public $updateMode = false;
    public $selected_id;

    protected $listeners = [
        'deleteInventoryPlacement' => 'deleteInventoryPlacement',
        'refreshParent' => '$refresh'
    ];
    public function render()
    {
        $inventoryPlacements = InventoryPlacement::latest()->paginate(5);
        return view('livewire.pages.settings.inventory-placements',[
            'inventoryPlacements' => $inventoryPlacements
        ]);
    }

    public function deleteInventoryPlacement(InventoryPlacement $inventoryPlacement){
        $inventoryPlacement->delete();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Inventory Placement deleted successfully!"
        ]);
    }
}
