<?php

namespace App\Http\Livewire\Modals;

use App\Models\Color;
use Illuminate\Support\Facades\Validator;
use LivewireUI\Modal\ModalComponent;

class ColorEditModal extends ModalComponent
{
    public $state = [];
    public $color;
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
        return view('livewire.modals.color-edit-modal');
    }
    public function mount(Color $color){
        $this->color = $color;
        $this->state = $color->toArray();
    }
    public function update()
    {
        $validateData = Validator::make($this->state, [
            'name' => 'required|unique:colors,name,'. $this->state['id'],
            'colorpicker' => 'required',
        ])->validate();
        $this->color->fill($validateData);
        $this->color->save();
        $this->reset(['state']);
        $this->closeModalWithEvents(['refreshParent']);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Color updated successfully!"
        ]);
        return redirect()->back();
    }

}
