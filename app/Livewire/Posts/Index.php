<?php

namespace App\Livewire\Posts;

use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Posts')]

class Index extends Component
{
    #[On('postCreated')]
    public function updateList($post)
    {
        // Handle the event when a post is created
    }
    public function render()
    {
        $posts = \App\Models\Post::latest()->with('user')->get();

        return view('livewire.posts.index', [
            'posts' => $posts,
        ]);
    }
}
