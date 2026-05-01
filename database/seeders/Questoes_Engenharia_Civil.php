<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class Questoes_Engenharia_Civil extends Seeder
{
    public function run(): void
    {
        Questao::create([
            'curso' => 'Engenharia Civil',
            'categoria' => 'Formação Geral',
            'contextualizacao' => 'Um projeto de ponte precisa considerar esforços de tração, compressão e flexão. A análise da seção transversal e das cargas é essencial para garantir a segurança estrutural.',
            'enunciado' => 'Qual dos seguintes materiais apresenta maior resistência à compressão para uso em pilares de concreto armado?',
            'referencia' => '',
            'opcao_a' => 'Aço carbono simples.',
            'opcao_b' => 'Concreto armado com fibras de vidro.',
            'opcao_c' => 'Madeira laminada colada.',
            'opcao_d' => 'Alumínio fundido.',
            'opcao_e' => 'Plástico reforçado com fibra de carbono.',
            'alternativa_correta' => 'B',
        ]);
    }
}