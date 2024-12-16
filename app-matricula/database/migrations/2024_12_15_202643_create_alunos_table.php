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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sobrenome');
            $table->date('data_nascimento');
            $table->string('telefone');
            $table->string('email');
            $table->string('senha');
            $table->string('sexo');
            $table->string('cpf');
            $table->string('rg');


            $table->foreignId('id_responsavel')->constrained('responsaveis')->onDelete('cascade');
            $table->foreignId('id_acessibilidade')->constrained('acessibilidades')->onDelete('cascade');
            $table->foreignId('id_endereco')->constrained('enderecos')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
