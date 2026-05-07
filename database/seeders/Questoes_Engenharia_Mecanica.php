<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class Questoes_Engenharia_Mecanica extends Seeder
{
    public function run(): void
    {
        Questao::create([
            'curso' => 'Engenharia Mecânica',
            'categoria' => 'Formação Geral',
            'contextualizacao' => 'O dimensionamento de molas helicoidais de compressão depende da constante elástica e das propriedades do material.',
            'enunciado' => 'Qual grandeza descreve a rigidez de uma mola?',
            'referencia' => '',
            'opcao_a' => 'Módulo de elasticidade.',
            'opcao_b' => 'Constante de molas.',
            'opcao_c' => 'Coeficiente de atrito.',
            'opcao_d' => 'Densidade do material.',
            'opcao_e' => 'Taxa de deformação.',
            'alternativa_correta' => 'B',
        ]);
    }
}