<?php

namespace App\Http\Livewire\Button;

use Livewire\Component;

class Save extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <button>
                   Save
                </button>
            </div>
        blade;
    }
}
