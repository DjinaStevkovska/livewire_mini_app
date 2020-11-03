<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;
use App\Comment;

class Comments extends Component
{
    public $post;
    public $comment;
    public $successMessage;

    protected $rules = [
        'comment' => 'required|min:4',
    ];

    public function postComment()
    {
        $this->validate();

        Comment::create([
            'post_id' => $this->post->id,
            'username' => 'guest',
            'content' => $this->comment,
        ]);

        $this->comment = '';
        $this->post = Post::find($this->post->id);
        $this->successMessage = 'Comment was posted!';
    
    }


    // public function mount(Post $post)
    // {
    //     $this->post = $post;
    // }

    public function render()
    {
        return view('livewire.comments');
    }
}
