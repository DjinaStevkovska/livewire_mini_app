<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Post;
use Livewire\WithFileUploads;

class PostEdit extends Component
{
    use WithFileUploads;

    public $post;
    public $title;
    public $content;
    public $photo;
    public $successMessage;

    protected $rules = [
        'title' => 'required',
        'content' => 'required',
        'photo' => 'nullable|sometimes|image|max:5000'
    ];

    public function mount(Post $post) 
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->content = $post->content;
        // $this->photo = $post->photo;
    }

    public function updatedPhoto()
    {
        $this->validate();
    }

    public function updatePost()
    {
        $this->validate();

        $visual = $this->post->photo ?? null;

        $this->post->update([
            'title' => $this->title,
            'content' => $this->content,
            'photo' => $this->photo ? $this->photo->store('photos', 'public') : $visual,
        ]);

        $this->successMessage = 'Post updated successfully!';

    }


    public function render()
    {
        return view('livewire.post-edit');
        // ->extends('home', ['post' => $this->post]);

    }
}
