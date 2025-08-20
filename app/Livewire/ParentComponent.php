<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class ParentComponent extends Component
{
    public ?int $propertyId = null;

    public ?string $propertyName = null;

    public function render(): View
    {
        return view('livewire.parent-component');
    }

    public function go(): void
    {
        $this->propertyId = 123;
        $this->propertyName = 'Test Name';
    }
}
