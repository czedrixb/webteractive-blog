<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\User;
use Livewire\Component;

class Blogs extends Component
{
    public $blogs;

    public function mount()
    {
        $this->blogs = Blog::latest()->get();
    }

    public function like($blogId)
    {
        $blog = Blog::find($blogId);
        if ($blog) {
            $blog->increment('likes');
            $this->blogs->find($blogId)->likes = $blog->likes;
        }
    }

    public function dislike($blogId)
    {
        $blog = Blog::find($blogId);
        if ($blog) {
            $blog->increment('dislikes');
            $this->blogs->find($blogId)->dislikes = $blog->dislikes;
        }
    }

    public function render()
    {
        return view('livewire.blogs')->layout('layouts.guest');
    }
}
