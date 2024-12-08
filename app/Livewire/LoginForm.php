<?php

namespace App\Livewire;

use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Livewire\Component;

class LoginForm extends Component
{
    public $username;
    public $password;
    public $errorMessage;

    public function login()
    {
        $credentials = [
            'username' => $this->username,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->to('/dashboard');
        } else {
            $this->errorMessage = 'Username atau password salah.';
        }
    }

    public function render()
    {
        return view('login-form');
    }
}
