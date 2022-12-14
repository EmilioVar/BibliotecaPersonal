<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Author;

class AuthorsOption extends Component
{
    protected $listeners = ['authorAdd' => 'render'];
    
    public function render()
    {
        $authors = Author::orderBy('name')->get();
        return view('livewire.authors-option', compact('authors'));
    }
}
