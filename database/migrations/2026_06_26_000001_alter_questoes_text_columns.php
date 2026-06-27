<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('ALTER TABLE questoes ALTER COLUMN categoria TYPE TEXT');
        DB::statement('ALTER TABLE questoes ALTER COLUMN contextualizacao TYPE TEXT');
        DB::statement('ALTER TABLE questoes ALTER COLUMN enunciado TYPE TEXT');
        DB::statement('ALTER TABLE questoes ALTER COLUMN referencia TYPE TEXT');
        DB::statement('ALTER TABLE questoes ALTER COLUMN opcao_a TYPE TEXT');
        DB::statement('ALTER TABLE questoes ALTER COLUMN opcao_b TYPE TEXT');
        DB::statement('ALTER TABLE questoes ALTER COLUMN opcao_c TYPE TEXT');
        DB::statement('ALTER TABLE questoes ALTER COLUMN opcao_d TYPE TEXT');
        DB::statement('ALTER TABLE questoes ALTER COLUMN opcao_e TYPE TEXT');
        DB::statement('ALTER TABLE questoes ALTER COLUMN alternativa_correta TYPE TEXT');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('ALTER TABLE questoes ALTER COLUMN categoria TYPE VARCHAR(255)');
        DB::statement('ALTER TABLE questoes ALTER COLUMN contextualizacao TYPE VARCHAR(255)');
        DB::statement('ALTER TABLE questoes ALTER COLUMN enunciado TYPE VARCHAR(255)');
        DB::statement('ALTER TABLE questoes ALTER COLUMN referencia TYPE VARCHAR(255)');
        DB::statement('ALTER TABLE questoes ALTER COLUMN opcao_a TYPE VARCHAR(255)');
        DB::statement('ALTER TABLE questoes ALTER COLUMN opcao_b TYPE VARCHAR(255)');
        DB::statement('ALTER TABLE questoes ALTER COLUMN opcao_c TYPE VARCHAR(255)');
        DB::statement('ALTER TABLE questoes ALTER COLUMN opcao_d TYPE VARCHAR(255)');
        DB::statement('ALTER TABLE questoes ALTER COLUMN opcao_e TYPE VARCHAR(255)');
        DB::statement('ALTER TABLE questoes ALTER COLUMN alternativa_correta TYPE VARCHAR(255)');
    }
};
