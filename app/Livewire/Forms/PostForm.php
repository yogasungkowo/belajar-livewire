<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Spatie\Flash\Flash;

class PostForm extends Form
{
    #[Rule(['required', 'string', 'max:255'])]
    public $title = '';

    #[Rule(['required', 'string', 'max:1000'])]
    public $content = '';

    public function messages(): array
    {
        return [
            'title.required' => 'The title field is required.',
            'title.max' => 'The title must not exceed 255 characters.',
            'content.required' => 'The content field is required.',
            'content.max' => 'The content must not exceed 1000 characters.',
        ];
    }

    public function store()
    {

        $post = Auth::user()->posts()->create(
            $this->validate()
        );

        // $user->posts()->create(
        //     $this->validate()
        // );

        $this->reset();

        flash('Post created successfully!');
        
        return $post;
    }
}
