<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class Questoes_Engenharia_Quimica extends Seeder
{
    public function run(): void
    {
        Questao::create([
            'curso' => 'Engenharia Química',
            'categoria' => 'Formação Geral',
            'contextualizacao' => 'A análise de equilíbrio químico é essencial para processos industriais que dependem de conversão e rendimento.',
            'enunciado' => 'O princípio de Le Chatelier indica que um sistema em equilíbrio reage a uma perturbação:',
            'referencia' => '',
            'opcao_a' => 'Aumentando a temperatura sempre.',
            'opcao_b' => 'Mudando para favorecer a direção de menor energia.',
            'opcao_c' => 'Alterando as concentrações para reduzir a perturbação.',
            'opcao_d' => 'Diminuindo a pressão em todos os casos.',
            'opcao_e' => 'Mantendo o equilíbrio inalterado.',
            'alternativa_correta' => 'C',
        ]);
    }
}