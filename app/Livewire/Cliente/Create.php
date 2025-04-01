<?php

namespace App\Livewire\Cliente;
use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
   
        public $nome;
        public $endereco;
        public $telefone;
        public $cpf;
        public $email;
        public $password;
    
        protected $rules = [
            'nome' => 'required|max:100',
            'endereco' => 'required|max:200',
            'telefone' => 'required|max:15',
            'cpf' => 'required|max:14',
            'password' => 'required|min:6',
            'email' => 'required|email|unique:cliente|max:150'
    
        ];
    
        protected $messages = [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.max' => 'O limite maxímo de caracteres foi atingido',
            'email.required' => 'O e-mail é obrigatório',
            'email.email' => 'Formato de e-mail inválido',
            'email.unique' => 'Este endereço de email já está cadastrado',
            'email.max' => 'O limite maxímo de caracteres foi atingido',
            'cpf.required' => 'O campo CPF é obrigatório',
            'cpf.max' => 'O limite maxímo de caracteres foi atingido',
            'telefone.required' => 'O numero de telefone é obrigatório',
            'telefone.max' => 'O máximo de caracteres é 15',
            'password.required' => 'A senha obrigatória',
            'password.min' => 'A senha precisa ter mais de 6 caracteres',
            'endereco.required' => 'O campo endereco é obrigatório',
            'endereco.max' => 'O limite maxímo de caracteres foi atingido'
    
        ];
    
    
        public function render()
    
        {
            return view('livewire.create');
        }
    
        public function store()
        {
            $this->validate();
    
            Cliente::create([
                'nome' => $this->nome,
                'endereco' => $this->endereco,
                'telefone' => $this->telefone,
                'cpf' => $this->cpf,
                'email' => $this->email,
                'password' => Hash::make($this->password),
    
            ]);
    
            session()->flash('success', 'Cadastro Realizado');
        }
    }
    
