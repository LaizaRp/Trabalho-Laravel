<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Método vazio, pois user_id já foi tratado na migration de criação
    public function up(): void
    {
        // Se a coluna já foi criada como nullable (Passo 1), não precisamos fazer nada aqui.
        // Se ela foi criada como not nullable, este é o código para alterar:
        // Schema::table('carros', function (Blueprint $table) {
        //     $table->foreignId('user_id')->nullable()->change();
        // });
        // Deixar vazio ou deletar o arquivo é a solução mais segura.
    }

    public function down(): void
    {
        // Não faz nada para evitar falhas de coluna inexistente
    }
};