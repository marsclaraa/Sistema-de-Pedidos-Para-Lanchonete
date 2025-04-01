<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Produto;

class Produto extends Component
{
    use WithFileUploads; // Usando a trait para manipulação de upload de arquivos

    public $nome;
    public $ingredientes;
    public $valor;
    public $imagem;

    // Validação
    protected $rules = [
        'nome' => 'required|string|max:255',
        'ingredientes' => 'required|string|max:500',
        'valor' => 'required|regex:/^\d+(\.\d{1,2})?$/',//garante que o número tenha 2 casa decimais
        'imagem' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', // Validando o tipo de imagem
    ];

    protected $messages = [
        'nome.required'=> 'O campo é obrigatório',
        'nome.string'=> 'O campo deve possuir apenas letras',
        'nome.max' => 'Limite de 255 caractéries atingido',
        'ingredientes.required'=> 'O campo é obrigatório',
        'ingredientes.string'=> 'O campo deve possuir apenas letras',
        'ingredientes.max' => 'Limite de 500 caractéries atingido',
        'valor.regex' => 'O campo deve ser decimal',
        'valor.required'=> 'O campo é obrigatório',
        'imagem.required'=> 'O campo é obrigatório',
        'imagem.mimes' => 'A imagem deve estar em um desses formatos: jpg,jpeg,png ou gif',
    ];

    public function salvarProduto()
    {
        $this->validate(); // Validando os dados

        // Armazenar a imagem
        $imagemPath = $this->imagem->store('imagens_produtos', 'public');

        // Criando o produto no banco de dados
        Produto::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            'imagem_path' => $imagemPath, // Salvando o caminho da imagem
        ]);

        // Limpar os campos após salvar
        $this->reset();

        session()->flash('message', 'Produto criado com sucesso!');
    }

    public function render()
    {
        return view('livewire.produto');
    }
}
