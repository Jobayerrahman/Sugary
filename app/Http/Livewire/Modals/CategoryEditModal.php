<?php

namespace App\Http\Livewire\Modals;

use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use LivewireUI\Modal\ModalComponent;

class CategoryEditModal extends ModalComponent
{
    public $state = [];
    public $category;
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
        return view('livewire.modals.category-edit-modal');
    }
    public function mount(Category $category){
        $this->category = $category;
        $this->state = $category->toArray();
    }
    public function update()
    {
        $validateData = Validator::make($this->state, [
            'name' => 'required|unique:categories,name,'. $this->state['id'],
            'description' => 'required',
        ])->validate();
        $this->category->fill($validateData);
        $this->category->save();
        $this->reset(['state']);
        $this->closeModalWithEvents(['refreshParent']);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Category updated successfully!"
        ]);
        return redirect()->back();
    }
}
