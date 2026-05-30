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
            Questoes_Engenharia_de_Computacao_2023::class,
            Questoes_Engenharia_de_Computacao_2019::class,
            Questoes_Engenharia_de_Computacao_2017::class,
            Questoes_Engenharia_de_Computacao_2014::class,
            Questoes_Engenharia_Civil_2023::class,
            Questoes_Engenharia_de_Producao_2023::class,
            Questoes_Engenharia_Eletrica_2023::class,
            Questoes_Engenharia_Mecanica_2023::class,
            Questoes_Engenharia_Mecanica_2019::class,
            Questoes_Engenharia_Quimica_2023::class,
            Questoes_Administracao_2022::class,
            Questoes_Formacao_Geral_2023::class,
            Questoes_Formacao_Geral_2022::class,
            Questoes_Formacao_Geral_2019::class,
        ]);
    }
}
