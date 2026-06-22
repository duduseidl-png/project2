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
            $table->string('seed')->unique(); // seed para regeneração determinística
            $table->string('curso'); // slug do curso
            $table->year('ano')->nullable();
            $table->integer('limite_fg')->default(10); // quantidade de questões FG
            $table->integer('limite_ce')->default(30); // quantidade de questões CE
            $table->integer('tempo_limite')->nullable(); // em segundos
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('simulados');
    }
};
