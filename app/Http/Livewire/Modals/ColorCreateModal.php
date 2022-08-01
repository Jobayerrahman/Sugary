<?php

namespace App\Http\Livewire\Modals;

use App\Models\Color;
use Illuminate\Support\Facades\Validator;
use LivewireUI\Modal\ModalComponent;

class ColorCreateModal extends ModalComponent
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
        return view('livewire.modals.color-create-modal');
    }

    public function createColor()
    {
        $this->updateMode = false;
        $validateData = Validator::make($this->state, [
            'name' => 'required|unique:colors',
            'colorpicker' => 'required',
        ])->validate();

        Color::create($validateData);
        $this->reset(['state']);
        $this->closeModalWithEvents(['refreshParent']);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Color saved successfully!"
        ]);
        return redirect()->back();
    }




}
