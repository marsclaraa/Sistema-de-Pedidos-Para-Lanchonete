<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100)->nulable(false); 
            $table->string('endereco',200)->nulable(false); 
            $table->string('telefone',15)->nulable(false); 
            $table->string('cpf',14)->nulable(false)->unique(); 
            $table->string('email',150)->nulable(false); 
            $table->string('password')->nalable(false); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
