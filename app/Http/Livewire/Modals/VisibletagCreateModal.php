<?php

namespace App\Http\Livewire\Modals;

use App\Models\VisibleTag;
use Illuminate\Support\Facades\Validator;
use LivewireUI\Modal\ModalComponent;

class VisibletagCreateModal extends ModalComponent
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
        return view('livewire.modals.visibletag-create-modal');
    }

    public function createVisibleTag()
    {
        $this->updateMode = false;
        $validateData = Validator::make($this->state, [
            'name' => 'required|unique:visible_tags',
            'description' => 'required',
        ])->validate();

        VisibleTag::create($validateData);
        $this->reset(['state']);
        $this->closeModalWithEvents(['refreshParent']);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Visible Tag saved successfully!"
        ]);
        return redirect()->back();
    }
}
