<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password, $password_confirmation;

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.app')->section('content');
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:5 '],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6', 'confirmed'],
        ];
    }

    public function registerUser()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user, true);
        // event(new Registered($user));
        return redirect()->to('/home');
    }
}
