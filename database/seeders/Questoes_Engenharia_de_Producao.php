<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class Questoes_Engenharia_de_Producao extends Seeder
{
    public function run(): void
    {
        Questao::create([
            'curso' => 'Engenharia de Produção',
            'categoria' => 'Formação Geral',
            'contextualizacao' => 'Uma linha de montagem usa técnicas de melhoria contínua para reduzir desperdícios e aumentar eficiência.',
            'enunciado' => 'Qual ferramenta do Lean Manufacturing é usada para identificar os principais tipos de desperdício?',
            'referencia' => '',
            'opcao_a' => '5S.',
            'opcao_b' => 'Kanban.',
            'opcao_c' => 'Ishikawa.',
            'opcao_d' => 'Just in Time.',
            'opcao_e' => 'Poka-yoke.',
            'alternativa_correta' => 'C',
        ]);
    }
}