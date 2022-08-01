<?php

namespace App\View\Components;

use Illuminate\View\Component;

class select2 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    protected $listeners = [
        'refreshParent' => '$refresh'
    ];
    public function render()
    {
        return view('components.select2');
    }
}