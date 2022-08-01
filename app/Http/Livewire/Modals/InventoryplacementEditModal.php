<?php

namespace App\Http\Livewire\Modals;

use App\Models\InventoryPlacement;
use Illuminate\Support\Facades\Validator;
use LivewireUI\Modal\ModalComponent;

class InventoryplacementEditModal extends ModalComponent
{
    public $state = [];
    public $inventoryPlacement;
    /**
     * Supported: 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl'
     */
    public static function modalMaxWidth(): string
    {
        return 'md';
    }
    public static function closeModalOnEscape(): bool
    {
        return false;
    }
    public function render()
    {
        return view('livewire.modals.inventoryplacement-edit-modal');
    }
    public function mount(InventoryPlacement $inventoryPlacement){
        $this->inventoryPlacement = $inventoryPlacement;
        $this->state = $inventoryPlacement->toArray();
    }
    public function update()
    {
        $validateData = Validator::make($this->state, [
            'name' => 'required|unique:inventory_placements,name,'. $this->state['id'],
            'description' => 'required',
        ])->validate();
        $this->inventoryPlacement->fill($validateData);
        $this->inventoryPlacement->save();
        $this->reset(['state']);
        $this->closeModalWithEvents(['refreshParent']);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Inventory Placement updated successfully!"
        ]);
        return redirect()->back();
    }
}
