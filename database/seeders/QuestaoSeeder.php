<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class QuestaoSeeder extends Seeder
{
    public function run(): void
    {
        Questao::create([
            'curso' => 'Engenharia de Computação',
            'categoria' => 'Formação Geral',
            'contextualizacao'=> 'O crescimento das cidades promove o aumento da demanda por serviços de água tratada, esgotamento sanitário, manejo das águas pluviais, limpeza urbana e coleta de resíduos sólidos. No Brasil, o processo de urbanização ocorreu de forma rápida e desigual, o que resultou no agravamento de injustiças sociais e econômicas. Os serviços de saneamento básico considerados direitos humanos fundamentais não são acessíveis a uma parcela significativa da população, principalmente àquela em que se concentram os segmentos populacionais em situação de vulnerabilidade. O atendimento integral e universalizado junto às populações periféricas e em situação de vulnerabilidade constitui um grande desafio, por demandar políticas públicas e investimentos subsidiados e permanentes.',
            'enunciado' => ' Acerca do saneamento básico no Brasil, avalie as afirmações a seguir.
                I. A grave desigualdade social, evidenciada pela segregação nos espaços urbanos, é uma das barreiras para a universalização do acesso aos serviços de saneamento básico.
                II. O serviço de abastecimento de água no Brasil situa-se no mesmo patamar de fornecimento e de infraestrutura que o sistema de coleta e tratamento do esgoto.
                III. A universalização do acesso aos serviços de saneamento básico requer investimentos em políticas públicas e em tecnologias sociais que priorizem a democratização e o atendimento às populações em situação de vulnerabilidade.
                IV. O aumento da incidência de doenças transmitidas pela água resulta não somente da inadequação dos serviços de saneamento, mas também da precariedade das condições de moradia da população em situação de vulnerabilidade.
            É correto apenas o que se afirma em',
            'referencia' => 'Disponível em: https://www.periodicos.unimontes.br/index.php/verdegrande/article/view/6018. Acesso em: 22 jun. 2023 (adaptado).',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'I e IV.',
            'opcao_c' => 'II e III.',
            'opcao_d' => 'I, III e IV.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'curso' => 'Engenharia de Computação',
            'categoria' => 'Formação Geral',
            'contextualizacao'=> 'No Brasil, os idosos têm sido cada vez mais obrigados a permanecer no trabalho formal ou informal, mesmo após a aposentadoria, visto que os recursos provenientes desta, na maioria dos casos, são insuficientes para a manutenção dos indivíduos. Um fator que pode ter agravado essa situação foi a aprovação da reforma previdenciária de 2019, que modificou as regras de idade e contribuição para o acesso ao direito ao benefício da aposentadoria. Tal mudança pode ter resultado em um número ainda maior de idosos que disputam com as populações jovens e com sistemas de automação, no mercado atual, o trabalho precarizado. Essa situação contribui para o acirramento do preconceito contra essa faixa etária, denominado etarismo.',
            'enunciado' => 'Considerando o texto apresentado, avalie as afirmações a seguir. 
                I. O conceito de etarismo fundamenta-se no fato de os idosos terem capacidade de trabalho reduzida e imporem custo elevado à previdência social, o que compromete a sua sustentabilidade econômica.
                II. As ações legislativas que visem ao prolongamento do tempo de atuação da população idosa no mercado de trabalho devem ser acompanhadas por uma política de promoção da saúde e da qualidade de vida.
                III. As ações intergeracionais no mercado de trabalho têm como premissa o desenvolvimento de tecnologias que dotem o idoso de capacidade de trabalho equivalente à de seus colegas jovens.
            É correto o que se afirma em',
            'referencia' => '',
            'opcao_a' => 'II, apenas.',
            'opcao_b' => 'III, apenas.',
            'opcao_c' => 'I e II, apenas.',
            'opcao_d' => 'I e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'A',
        ]);

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
