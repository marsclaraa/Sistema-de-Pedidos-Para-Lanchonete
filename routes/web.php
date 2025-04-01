
<?php

 // Corrigido para o namespace correto
use App\Livewire\Cliente\Create as ClienteCreate;
use App\Livewire\Create as ProdutoCreate;;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Login;

// Rota para cadastro de clientes
Route::get('/cliente/cadastro', ClienteCreate::class);


// Rota para cadastro de produtos
Route::get('/produto/cadastro', ProdutoCreate::class);


// Rota para Login
Route::get('/login', Login::class)->name('login');
//Route::get('/dashboard', function () {
   // return view('dashboard');
//})->middleware('auth')->name('dashboard');
