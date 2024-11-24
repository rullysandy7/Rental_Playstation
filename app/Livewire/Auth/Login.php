<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password, $remember;

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.app')->section('content');
    }

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    public function loginUser()
    {
        $this->validate();

        if (!Auth::guard('web')->attempt($this->only(['email', 'password']), $this->remember)) {
            $this->addError('email', __('auth.failed'));
            return null;
        }

        return redirect()->to('/home');
    }
}
