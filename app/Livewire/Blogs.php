<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class Blogs extends Component
{
    public $blogs;

    public function mount()
    {
        $this->blogs = Blog::get();
    }

    public function render()
    {
        return view('livewire.blogs')->layout('layouts.guest');
    }
}
