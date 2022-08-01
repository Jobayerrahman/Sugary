<?php

namespace App\Http\Livewire\Modals;

use App\Models\VisibleTag;
use Illuminate\Support\Facades\Validator;
use LivewireUI\Modal\ModalComponent;

class VisibletagEditModal extends ModalComponent
{
    public $state = [];
    public $visibleTag;
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
        return view('livewire.modals.visibletag-edit-modal');
    }

    public function mount(VisibleTag $visibleTag){
        $this->visibleTag = $visibleTag;
        $this->state = $visibleTag->toArray();
    }
    public function update()
    {
        $validateData = Validator::make($this->state, [
            'name' => 'required|unique:visible_tags,name,'. $this->state['id'],
            'description' => 'required',
        ])->validate();
        $this->visibleTag->fill($validateData);
        $this->visibleTag->save();
        $this->reset(['state']);
        $this->closeModalWithEvents(['refreshParent']);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Visible Tag updated successfully!"
        ]);
        return redirect()->back();
    }

}
