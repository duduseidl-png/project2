<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class Questoes_Engenharia_de_Controle_e_Automacao extends Seeder
{
    public function run(): void
    {
        Questao::create([
            'curso' => 'Engenharia de Controle e Automação',
            'categoria' => 'Formação Geral',
            'contextualizacao' => 'Em sistemas automatizados, o uso de controladores PID é comum para ajustar a resposta dinâmica de processos industriais.',
            'enunciado' => 'O termo “integral” em um controlador PID serve principalmente para:',
            'referencia' => '',
            'opcao_a' => 'Reduzir o erro em regime permanente.',
            'opcao_b' => 'Aumentar a velocidade de resposta do sistema.',
            'opcao_c' => 'Filtrar ruídos de alta frequência.',
            'opcao_d' => 'Limitar a saída do atuador.',
            'opcao_e' => 'Compensar variações de carga instantâneas.',
            'alternativa_correta' => 'A',
        ]);
    }
}