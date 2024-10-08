<?php

namespace App\Livewire\Blogs;

use App\Models\Blog;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class BlogsCreate extends Component
{
    use WithFileUploads;

    public $image;
    public $title;
    public $category;
    public $content;
    public $slug;
    public $user;
    public $likes;
    public $dislikes;

    public function render()
    {
        return view('livewire.blogs.blogs-create')->layout('layouts.app');
    }

    public function store()
    {
        $this->validate([
            'image' => 'required|image|max:1024',
            'title' => 'required|max:255',
            'content' => 'required',
            'category' => 'required',
        ]);

        $file_name = Str::random(10) . '.' . $this->image->getClientOriginalExtension();
        $this->image->storeAs('uploads', $file_name, 'public');

        $inputs = $this->all();
        $inputs['image'] = $file_name;
        $inputs['slug'] = str_replace(' ', '-', $this->title);
        $inputs['user'] = auth()->user()->email;
        $inputs['likes'] = 0;
        $inputs['dislikes'] = 0;
        Blog::create($inputs);

        session()->flash('success', 'Blog created successfully!');
        return redirect('/blogs/index');
    }
}
