<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserDetails extends Component
{
    public $firstName;
    public $lastName;

    public function mount()
    {
        // $this->firstName = 'Noel';
        // $this->lastName = 'Kirui';

        $this->fill([
            'firstName' => 'Consolata',
            'lastName'  => 'Nyawira'
        ]);
    }
    public function render()
    {
        return view('livewire.user-details');
    }
}
