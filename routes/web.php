
<?php

use App\Http\Livewire\Produto\Produto; // Corrigido para o namespace correto
use App\Livewire\Cliente\Create as ClienteCreate;
use App\Models\Produto as ModelsProduto;
use Illuminate\Support\Facades\Route;

// Rota para cadastro de clientes
Route::get('/cliente/cadastro', ClienteCreate::class);


// Rota para cadastro de produtos
Route::get('/produto/cadastro', Produto::class);
