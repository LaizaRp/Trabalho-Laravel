<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            // Adicionado user_id aqui, corrigindo o erro de 'Column not found'
            $table->foreignId('user_id')->nullable()->constrained(); 
            $table->string('marca');
            $table->string('modelo');
            $table->integer('ano');
            $table->decimal('preco', 10, 2);
            $table->text('descricao')->nullable();
            
            // Colunas de detalhes (agora na criação)
            $table->string('cor')->nullable();
            $table->integer('quilometragem')->default(0);
            $table->string('combustivel')->nullable();
            $table->string('foto_principal')->nullable(); 
            
            $table->timestamps();
        });
    }

    public function down()
    {
        // Ao reverter, deleta a tabela inteira
        Schema::dropIfExists('carros');
    }
};