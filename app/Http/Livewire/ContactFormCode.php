<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactFormCode extends Component
{
    public $name;
    public $email;
    public $message;
    protected $rules = [

        'name' => 'required|max:60',

        'email' => 'required|email',

        'message' => 'required|max:200',

    ];

    public function formSubmit() 
    {
        $this->validate();

        // dd('form submited');
    }
    public function render()
    {
        return view('livewire.contact-form-code');
    }
}
