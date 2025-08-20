<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class ChildComponent extends Component
{
    public function render(): View
    {
        return view('livewire.child-component');
    }
}
