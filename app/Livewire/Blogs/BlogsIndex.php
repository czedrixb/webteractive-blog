<?php

namespace App\Livewire\Blogs;

use App\Models\Blog;
use Livewire\Component;

class BlogsIndex extends Component
{
    public $blogs;

    public function mount()
    {
        if (auth()->user()->role == 'Admin') {
            $this->blogs = Blog::get();
        } else {
            $this->blogs = Blog::where('user', auth()->user()->email)->get();
        }
    }

    public function delete(Blog $blogs)
    {
        $blogs->delete();
        session()->flash('success', 'Blog deleted Successfully!');
        return redirect('/blogs/index');
    }

    public function render()
    {
        return view('livewire.blogs.blogs-index')->layout('layouts.app');
    }
}
