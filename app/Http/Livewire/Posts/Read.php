<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class Read extends Component
{
    public $post;
    
    public function mount(Post $post)
    {
        $this->post = $post;
    }
    
    public function render()
    {
        return view('livewire.posts.read');
    }
}
