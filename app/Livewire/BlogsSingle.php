<?php

namespace App\Livewire;

use Livewire\Component;

class BlogsSingle extends Component
{
    public function render()
    {
        return view('livewire.blogs-single')->layout('layouts.guest');
    }
}
