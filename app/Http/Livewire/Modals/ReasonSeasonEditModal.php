<?php

namespace App\Http\Livewire\Modals;

use App\Models\Category;
use App\Models\ReasonSeason;
use Illuminate\Support\Facades\Validator;
use LivewireUI\Modal\ModalComponent;

class ReasonSeasonEditModal extends ModalComponent
{
    public $state = [];
    public $reasonSeason;
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
        $categories = Category::latest()->paginate();
        return view('livewire.modals.reason-season-edit-modal',[
            'categories' => $categories
        ]);
    }

    public function mount(ReasonSeason $reasonSeason){
        $this->reasonSeason = $reasonSeason;
        $this->state = $reasonSeason->toArray();
    }

    public function update()
    {
        $validateData = Validator::make($this->state, [
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required'
        ])->validate();

        $this->reasonSeason->fill($validateData);
        $this->reasonSeason->save();
        $this->reset(['state']);
        $this->closeModalWithEvents(['refreshParent']);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Reason Season updated successfully!"
        ]);
    }

}
