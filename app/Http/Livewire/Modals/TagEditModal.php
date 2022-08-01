<?php

namespace App\Http\Livewire\Modals;

use App\Models\Tag;
use Illuminate\Support\Facades\Validator;
use LivewireUI\Modal\ModalComponent;

class TagEditModal extends ModalComponent
{
    public $state = [];
    public $tag;
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
        return view('livewire.modals.tag-edit-modal');
    }
    public function mount(Tag $tag){
        $this->tag = $tag;
        $this->state = $tag->toArray();
    }
    public function update()
    {
        $validateData = Validator::make($this->state, [
            'name' => 'required|unique:tags,name,'. $this->state['id'],
            'description' => 'required',
        ])->validate();
        $this->tag->fill($validateData);
        $this->tag->save();
        $this->reset(['state']);
        $this->closeModalWithEvents(['refreshParent']);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Tag updated successfully!"
        ]);
        return redirect()->back();
    }
}
