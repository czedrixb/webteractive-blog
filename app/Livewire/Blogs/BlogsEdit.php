<?php

namespace App\Livewire\Blogs;

use App\Models\Blogs;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class BlogsEdit extends Component
{
    use WithFileUploads;

    public $blogs;
    public $image;
    public $title;
    public $content;
    public $slug;
    public $user;
    public $likes;
    public $dislikes;

    public function mount($id)
    {
        $this->blogs = Blogs::find($id);
        $this->image = $this->blogs->image;
        $this->title = $this->blogs->title;
        $this->content = $this->blogs->content;
    }

    public function upload($file)
    {
        $file_name = Str::random(10) . '.' . $file->getClientOriginalExtension();
        $file->storeAs('uploads', $file_name, 'public');
        return $file_name;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $inputs = $this->all();

        if ($this->image && is_object($this->image)) {
            $inputs['image'] = $this->upload($this->image);
        } else {
            $inputs['image'] = $this->blogs->image;
        }

        $inputs['slug'] = str_replace(' ', '-', $this->title);

        $this->blogs->update($inputs);

        session()->flash('success', 'Blog updated Successfully!');
        return redirect('/blogs/index');
    }


    public function render()
    {
        return view('livewire.blogs.blogs-edit')->layout('layouts.app');
    }
}
