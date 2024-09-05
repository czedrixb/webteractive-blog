<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogsSingle extends Component
{
    public $blog;

    public function mount($id)
    {
        $this->blog = Blog::where('slug', $id)->first();

        if (!$this->blog) {
            abort(404, 'Blog not found');
        }
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
        return view('livewire.blogs-single')->layout('layouts.guest');
    }
}
