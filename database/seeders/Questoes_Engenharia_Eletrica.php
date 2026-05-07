<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class Questoes_Engenharia_Eletrica extends Seeder
{
    public function run(): void
    {
        Questao::create([
            'curso' => 'Engenharia Elétrica',
            'categoria' => 'Formação Geral',
            'contextualizacao' => 'Em circuitos de corrente alternada, a diferença de fase entre tensão e corrente influencia a potência real disponível.',
            'enunciado' => 'Quando a corrente está defasada 90° em relação à tensão em um circuito puramente reativo, a potência real é:',
            'referencia' => '',
            'opcao_a' => 'Máxima e positiva.',
            'opcao_b' => 'Máxima e negativa.',
            'opcao_c' => 'Zero.',
            'opcao_d' => 'Indefinida.',
            'opcao_e' => 'Metade da potência aparente.',
            'alternativa_correta' => 'C',
        ]);
    }
}