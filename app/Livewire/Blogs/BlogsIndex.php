<?php

namespace App\Livewire\Blogs;

use App\Models\Blogs;
use Livewire\Component;

class BlogsIndex extends Component
{
    public $blogs;

    public function mount()
    {
        if (auth()->user()->role == 'Admin') {
            $this->blogs = Blogs::get();
        } else {
            $this->blogs = Blogs::where('user', auth()->user()->email)->get();
        }
    }

    public function delete(Blogs $blogs)
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
