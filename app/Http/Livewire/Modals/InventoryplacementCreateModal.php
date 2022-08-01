<?php

namespace App\Http\Livewire\Modals;

use App\Models\InventoryPlacement;
use Illuminate\Support\Facades\Validator;
use LivewireUI\Modal\ModalComponent;

class InventoryplacementCreateModal extends ModalComponent
{
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
    public $state = [];
    public function render()
    {
        return view('livewire.modals.inventoryplacement-create-modal');
    }
    public function createInventoryPlacement()
    {
        $this->updateMode = false;
        $validateData = Validator::make($this->state, [
            'name' => 'required|unique:inventory_placements',
            'description' => 'required',
        ])->validate();

        InventoryPlacement::create($validateData);
        $this->reset(['state']);
        $this->closeModalWithEvents(['refreshParent']);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Inventory Placement saved successfully!"
        ]);
        return redirect()->back();
    }
}
