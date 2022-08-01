<?php

namespace App\Http\Livewire\Modals;

use App\Models\Tag;
use Illuminate\Support\Facades\Validator;
use LivewireUI\Modal\ModalComponent;

class TagCreateModal extends ModalComponent
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
        return view('livewire.modals.tag-create-modal');
    }

    public function createTag()
    {
        $this->updateMode = false;
        $validateData = Validator::make($this->state, [
            'name' => 'required|unique:tags',
            'description' => 'required',
        ])->validate();

        Tag::create($validateData);
        $this->reset(['state']);
        $this->closeModalWithEvents(['refreshParent']);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Tag saved successfully!"
        ]);
        return redirect()->back();
    }

}
