<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email, $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];
    protected $messages =[
       
        'email.required' => 'O e-mail é obrigatório',
        'email.email' => 'Formato de e-mail inválido',
        'password.required' => 'A senha obrigatória',
        'password.min' => 'A senha precisa ter mais de 6 caracteres',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $user = Auth::user();
            
            // Verifica se o usuário é um funcionário
            if ($user->isFuncionario()) {
                return redirect()->route('dashboard');
            } else {
                Auth::logout();
                session()->flash('error', 'Apenas funcionários podem acessar.');
            }
        } else {
            session()->flash('error', 'Credenciais inválidas.');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
