<?php

namespace App\Livewire\Blogs;

use App\Models\Blog;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;


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
        $file = 'uploads/' . $blogs->image;
        if (Storage::disk('public')->exists($file)) {
            Storage::disk('public')->delete($file);
        }
        $blogs->delete();
        session()->flash('success', 'Blog deleted Successfully!');
        return redirect('/blogs/index');
    }

    public function render()
    {
        return view('livewire.blogs.blogs-index')->layout('layouts.app');
    }
}
