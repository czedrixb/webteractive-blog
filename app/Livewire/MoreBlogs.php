<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class MoreBlogs extends Component
{
    public $blogs;

    public function mount()
    {
        $this->blogs = Blog::latest()->get();
    }

    public function render()
    {
        return view('livewire.more-blogs');
    }
}
