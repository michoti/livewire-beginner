<?php

namespace App\Http\Livewire\Button;

use Livewire\Component;

class ConnectButton extends Component
{
    public $name;
    public function render()
    {
        return view('livewire.button.connect-button');
    }

    public function connect() 
    {
        // dd($this->name);
    }
}
