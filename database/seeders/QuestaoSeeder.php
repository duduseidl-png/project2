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
            'contextualizacao'=> 'O crescimento das cidades promove o aumento da demanda por serviços de água tratada, esgotamento sanitário, manejo das águas pluviais, limpeza urbana e coleta de resíduos sólidos. No Brasil, o processo de urbanização ocorreu de forma rápida e desigual, o que resultou no agravamento de injusti ças sociais e econômicas. Os serviços de saneamento básico considerados direitos humanos fundamentais não são acessíveis a uma parcela signifi cati va da população, principalmente àquela em que se concentram os segmentos populacionais em situação de vulnerabilidade. O atendimento integral e universalizado junto às populações periféricas e em situação de vulnerabilidade consti tui um grande desafi o, por demandar políti cas públicas e investi mentos subsidiados e permanentes.',
            'enunciado' => 'Acerca do saneamento básico no Brasil, avalie as afi rmações a seguir.',
            'referencia' => 'Disponível em: https://www.periodicos.unimontes.br/index.php/verdegrande/article/view/6018. Acesso em: 22 jun. 2023 (adaptado).',
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
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => '',
            'contextualizacao'=> 'No Brasil, os idosos têm sido cada vez mais obrigados a permanecer no trabalho formal ou informal, mesmo após a aposentadoria, visto que os recursos provenientes desta, na maioria dos casos, são insufi cientes para a manutenção dos indivíduos. Um fator que pode ter agravado essa situação foi a aprovação da reforma previdenciária de 2019, que modifi cou as regras de idade e contribuição para o acesso ao direito ao benefí cio da aposentadoria. Tal mudança pode ter resultado em um número ainda maior de idosos que disputam com as populações jovens e com sistemas de automação, no mercado atual, o trabalho precarizado. Essa situação contribui para o acirramento do preconceito contra essa faixa etária, denominado etarismo.',
            'enunciado' => 'Considerando o texto apresentado, avalie as afi rmações a seguir.
I. O conceito de etarismo fundamenta-se no fato de os idosos terem capacidade de
trabalho reduzida e imporem custo elevado à previdência social, o que compromete a sua
sustentabilidade econômica.
II. As ações legislati vas que visem ao prolongamento do tempo de atuação da população idosa no
mercado de trabalho devem ser acompanhadas por uma políti ca de promoção da saúde e da
qualidade de vida.
III. As ações intergeracionais no mercado de trabalho têm como premissa o desenvolvimento de
tecnologias que dotem o idoso de capacidade de trabalho equivalente à de seus colegas jovens.
 É correto o que se afi rma em',
            'referencia' => '',
            'opcao_a' => 'II, apenas.',
            'opcao_b' => 'III, apenas.',
            'opcao_c' => 'I e II, apenas.',
            'opcao_d' => 'I e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'A',
        ]);
    }
}
