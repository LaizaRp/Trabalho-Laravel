<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('carros', function (Blueprint $table) {
            // Apenas colunas que NÃO ESTÃO na migration de criação:
            $table->string('foto_2')->nullable(); 
            $table->string('foto_3')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('carros', function (Blueprint $table) {
            // Apenas remove o que foi adicionado neste UP
            $table->dropColumn(['foto_2', 'foto_3']);
        });
    }
};