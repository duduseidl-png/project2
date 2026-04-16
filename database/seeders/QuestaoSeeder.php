<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class QuestaoSeeder extends Seeder
{
    public function run(): void
    {
        Questao::create([
            'categoria' => 'FORMAÇÃO GERAL',
            'enunciado' => 'O crescimento das cidades promove o aumento da demanda por serviços de água tratada, esgotamento sanitário, manejo das águas pluviais, limpeza urbana e coleta de resíduos sólidos. No Brasil, o processo de urbanização ocorreu de forma rápida e desigual, o que resultou no agravamento de injusti ças sociais e econômicas. Os serviços de saneamento básico considerados direitos humanos fundamentais não são acessíveis a uma parcela signifi cati va da população, principalmente àquela em que se concentram os segmentos populacionais em situação de vulnerabilidade. O atendimento integral e universalizado junto às populações periféricas e em situação de vulnerabilidade consti tui um grande desafi o, por demandar políti cas públicas e investi mentos subsidiados e permanentes.

            Disponível em: https://www.periodicos.unimontes.br/index.php/verdegrande/article/view/6018. Acesso em: 22 jun. 2023 (adaptado).

            Acerca do saneamento básico no Brasil, avalie as afi rmações a seguir.',
            'opcao_a' => 'A grave desigualdade social, evidenciada pela segregação nos espaços urbanos, é uma das
barreiras para a universalização do acesso aos serviços de saneamento básico.',
            'opcao_b' => 'O serviço de abastecimento de água no Brasil situa-se no mesmo patamar de fornecimento e de
infraestrutura que o sistema de coleta e tratamento do esgoto.',
            'opcao_c' => 'A universalização do acesso aos serviços de saneamento básico requer investi mentos em
políti cas públicas e em tecnologias sociais que priorizem a democrati zação e o atendimento às
populações em situação de vulnerabilidade.',
            'opcao_d' => 'O aumento da incidência de doenças transmiti das pela água resulta não somente da
inadequação dos serviços de saneamento, mas também da precariedade das condições de
moradia da população em situação de vulnerabilidade.',
            'opcao_e' => 'Nada.',
            'resposta_correta' => 'A',
        ]);
    }
}
