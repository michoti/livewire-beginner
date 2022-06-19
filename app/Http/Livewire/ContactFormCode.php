<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactFormCode extends Component
{
    public $name;
    public $email;
    public $message;
    public function render()
    {
        return view('livewire.contact-form-code');
    }
}
