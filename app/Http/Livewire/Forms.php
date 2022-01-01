<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Forms extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $quantity = [];
    public $data = [];
    protected $rules = [
        'name' => 'required|min:3|max:20',
        'email' => 'required|email',
        'data' => 'required'
    ];
    protected $messages = [
        'name.required' => 'The Name cannot be empty.',
        'name.min' => 'wahli',
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
    ];
    // realtime validate
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    // public function hydrate()
    // {
    //     $this->validate([
    //         'name' => 'required|min:3|max:20',
    //         'email' => 'required|email'
    //     ]);
    // }
    public function submit()
    {
        for ($i=0; $i < 3; $i++) { 
            $this->data[] = [
                'user_id' => $i, 'quantity' => $this->quantity
            ];
        }
        $validateData = $this->validate();
        dd($validateData);
    }
    public function render()
    {
        return view('livewire.forms')->layout('layouts.latihan');
    }
}
