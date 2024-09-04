<?php

namespace App\Livewire\Blogs;

use Livewire\Component;

class BlogsIndex extends Component
{
    public function render()
    {
        return view('livewire.blogs.blogs-index')->layout('layouts.app');
    }
}
