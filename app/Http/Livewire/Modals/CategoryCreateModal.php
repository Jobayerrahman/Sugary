<?php

namespace App\Http\Livewire\Modals;

use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use LivewireUI\Modal\ModalComponent;

class CategoryCreateModal extends ModalComponent
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
        return view('livewire.modals.category-create-modal');
    }
    public function createCategory()
    {
        $validateData = Validator::make($this->state, [
            'name' => 'required|unique:categories',
            'description' => 'required',
        ])->validate();

        Category::create($validateData);
        $this->reset(['state']);
        $this->closeModalWithEvents(['refreshParent']);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Category saved successfully!"
        ]);
        return redirect()->back();
    }
}
