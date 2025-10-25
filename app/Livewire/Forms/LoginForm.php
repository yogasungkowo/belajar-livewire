<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Form
{
    #[Rule('required', 'email')]
    public string $email = '';

    #[Rule('required')]
    public string $password = '';

    public function messages(): array
    {
        return [
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'password.required' => 'The password field is required.',
        ];
    }

    public function store()
    {
        $this->validate();

        if(Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ])) {   
            session()->regenerate();
            return redirect()->to('/');
        }

        $this->addError('email', 'The provided credentials do not match our records.');
    }


}
