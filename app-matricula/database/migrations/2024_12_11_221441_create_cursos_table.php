<?php

/* CURSO TÉCNICO EM DESENVOLVIMENTO DE SISTEMAS
 * DISCIPLINA DE DESENVOLVIMENTO DE SISTEMAS
 * EQUIPE: DAVI CARIDADE, WENDEL, PAULO VICTOR
 * */

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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('descricao')->nullable();
            $table->integer('carga_horaria');
            $table->boolean('ativo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
