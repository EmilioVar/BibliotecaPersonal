<?php

namespace App\Http\Livewire;

use App\Models\Author;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CreateAuthor extends Component
{
    public $name;
    public $firstName;
    public $lastName;
    public $birthDate;
 
    protected $rules = [
        'name' => 'required',
        'firstName' => 'nullable',
        'lastName' => 'nullable',
        'birthDate' => 'nullable'
    ];
 
    public function submit()
    {
        $this->validate();
 
        // Execution doesn't reach here if validation fails.
 
        $book = Author::create([
            'name' => $this->name,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'birthDate' => $this->birthDate
        ]);

        $this->reset();

        $this->emit('authorAdd');

        return back();
    }
    public function render()
    {
        return view('livewire.create-author');
    }
}
