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
        Schema::create('questoes', function (Blueprint $table) {
            $table->id();
            $table->string('curso', 100);
            $table->string('categoria', 100);
            $table->text('contextualizacao');
            $table->text('enunciado');
            $table->string('referencia');
            $table->string('opcao_a');
            $table->string('opcao_b');
            $table->string('opcao_c');
            $table->string('opcao_d');
            $table->string('opcao_e');
            $table->string('alternativa_correta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questoes');
    }
};
