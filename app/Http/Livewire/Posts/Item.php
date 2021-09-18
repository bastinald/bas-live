<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class Item extends Component
{
    public $post;
    
    public function mount(Post $post)
    {
        $this->post = $post;
    }
    
    public function render()
    {
        return view('livewire.posts.item');
    }
    
    public function upvote()
    {
        $this->post->increment('upvotes');
    }
    
    public function downvote()
    {
        $this->post->increment('downvotes');
    }
}
