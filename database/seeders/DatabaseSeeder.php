<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Este comando chama o seeder das questões
        $this->call([
            Questoes_Engenharia_de_Computacao::class,
            Questoes_Engenharia_Civil::class,
            Questoes_Engenharia_de_Controle_e_Automacao::class,
            Questoes_Engenharia_de_Producao::class,
            Questoes_Engenharia_Eletrica::class,
            Questoes_Engenharia_Mecanica::class,
            Questoes_Engenharia_Quimica::class,
        ]);
    }
}
