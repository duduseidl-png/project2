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
        Schema::create('simulados', function (Blueprint $table) {
            $table->id();
            $table->string('seed')->unique();
            $table->string('curso'); // slug do curso
            $table->year('ano')->nullable();
            $table->integer('limite_fg')->default(10);
            $table->integer('limite_ce')->default(30);
            $table->integer('tempo_limite')->nullable(); // em segundos
            $table->timestamps();
        });

        Schema::create('simulado_questoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('simulado_id')->constrained('simulados')->onDelete('cascade');
            $table->foreignId('questao_id')->constrained('questoes')->onDelete('cascade');
            $table->integer('ordem'); // ordem da questão no simulado
            $table->timestamps();
            
            $table->unique(['simulado_id', 'questao_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('simulado_questoes');
        Schema::dropIfExists('simulados');
    }
};
