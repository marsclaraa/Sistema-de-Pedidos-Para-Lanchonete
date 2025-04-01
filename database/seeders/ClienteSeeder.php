<?php

namespace Database\Seeders;

use App\Models\Cliente;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class ClienteSeeder extends Seeder

{

    public function run(): void

    {
        $nomes = collect(['João', 'Maria', 'José', 'Ana', 'Pedro', 'Sofia', 'Lucas', 'Isabela', 'Gabriel', 'Manuela']);
        $email = collect(['joao', 'maria', 'josé', 'ana', 'pedro', 'sofia', 'lucas', 'isabela', 'gabriel', 'manuela']);
        $ruas = collect(['Rua A', 'Rua B', 'Rua C', 'Rua D', 'Rua E']);
        $cidades = collect(['São Paulo', 'Rio de Janeiro', 'Belo Horizonte', 'Porto Alegre', 'Salvador']);

        for ($i = 0; $i < 50; $i++) {

            Cliente::create([
                'nome' => $nomes->random(),
                'endereco' => $ruas->random() . ', ' . rand(1, 200) . ', ' . $cidades->random(),
                'telefone' => '11' . rand(900000000, 999999999),
                'cpf' => rand(100, 999) . rand(100, 999) . rand(100, 999) . rand(10, 99),
                'email' => $email . rand(1, 100) . '@gmail.com',
                'password' => Hash::make('password123'),

            ]);
        }
    }
}
