<?php

namespace App\Livewire\Blogs;

use App\Models\Blog;
use Livewire\Component;

class BlogsView extends Component
{
    public $blog;

    public function mount($id)
    {
        $this->blog = Blog::find($id);

        if (!$this->blog) {
            abort(404, 'Blog not found');
        }
    }

    public function render()
    {
        return view('livewire.blogs.blogs-view')->layout('layouts.app');
    }
}
