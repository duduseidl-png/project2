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
            'categoria' => 'Componente Específico',
            'contextualizacao'=> '
                <p class="mb-2 text-justify">A figura a seguir representa o diagrama esquemático de um autotransformador abaixador monofásico, 460:230 V, 10 kVA. O lado de alta tensão é alimentado pelos terminais A e D; e os terminais B e D correspondem ao lado de baixa tensão.</p>

                <p class="text-center font-bold mb-2">Diagrama esquemático de um autotransformador</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/10 md:w-3/10">
                        <img src="/img/questoes/engenharia_eletrica/img1.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando como ideal o autotransformador retratado na figura, avalie as afirmações a seguir.</p>
                
                <p class="mb-2 pl-6 text-justify">I. Alimentando uma carga nominal conectada aos terminais B e D, a fonte v<sub>1</sub> fornecerá uma corrente de, aproximadamente, 21,7 A; a carga drenará uma corrente de, aproximadamente, 43,5 A; e a corrente nos enrolamentos entre os terminais B e D será de, aproximadamente, 65,2 A.</p>
                <p class="mb-2 pl-6 text-justify">II. A relação entre as tensões E<sub>1</sub> e E<sub>2</sub> é igual à relação entre o número de espiras do primário e do secundário, como em um transformador.</p>
                <p class="mb-2 pl-6 text-justify">III. A relação entre as tensões E<sub>1</sub> e E<sub>2</sub>, com o autotransformador operando em vazio, é igual à relação entre as impedâncias Z<sub>AB</sub> e Z<sub>BD</sub>, em que Z<sub>AB</sub> é a impedância (ohms) dos enrolamentos entre os terminais A e B e Z<sub>BD</sub> é a impedância (ohms) dos enrolamentos entre os terminais B e D.</p>
                <p class="mb-2 pl-6 text-justify">IV. Operando em vazio, a tensão E<sub>2</sub> é igual à tensão E<sub>1</sub>.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'II.',
            'opcao_b' => 'III.',
            'opcao_c' => 'I e II.',
            'opcao_d' => 'I e IV.',
            'opcao_e' => 'III e IV.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'curso' => 'Engenharia Elétrica',
            'categoria' => 'Componente Específico',
            'contextualizacao'=> '
                <p class="mb-2 text-justify">A figura 1 ilustra as curvas de variação dos parâmetros de desempenho de corrente elétrica, o fator de potência, o rendimento e o escorregamento de um motor de indução trifásico de potência nominal de 55 kW em função da potência fornecida pelo motor à carga.</p>

                <p class="text-center font-bold mb-2">Figura 1 – Curvas de desempenho de um motor de indução trifásico</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <img src="/img/questoes/engenharia_eletrica/img2.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>

                <p class="text-sm text-right mb-4">Disponível em: http://www.proceedings.scielo.br. Acesso em: 28 ago. 2023 (adaptado).</p>

                <p class="mb-2 text-justify">A figura 2 apresenta as curvas de condições operacionais de uma bomba centrífuga (relação altura-vazão, rendimento e potência demandada). Tanto o motor elétrico quanto a bomba centrífuga possuem a mesma rotação nominal de 1.778 RPM.</p>

                <p class="text-center font-bold mb-2">Figura 2 – Curvas de condições operacionais da bomba centrífuga</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <img src="/img/questoes/engenharia_eletrica/img3.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>

                <p class="text-sm text-right mb-4">TSUTIYA, M. T. <b>Abastecimento de água</b>. 1. ed. São Paulo: Escola Politécnica, Universidade de São Paulo, 2004 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Após analisar as curvas apresentadas nas figuras 1 e 2, considerando que o motor elétrico está acoplado à bomba centrífuga, avalie as afirmações a seguir.</p>
                
                <p class="mb-2 pl-6 text-justify">I. Caso a bomba opere em sua região de máximo rendimento, o que corresponde a uma potência de, aproximadamente, 55 kW, o motor operará com rendimento de, aproximadamente, 91%, com fator de potência de 0,86 e com corrente elétrica de 120 A.</p>
                <p class="mb-2 pl-6 text-justify">II. Na configuração operacional em que o motor elétrico e a bomba centrífuga operam em máximo rendimento, o rendimento global do sistema motor-bomba será de, aproximadamente, 73%.</p>
                <p class="mb-2 pl-6 text-justify">III. À medida que se diminui a vazão fornecida pela bomba, o escorregamento do motor aumenta, diminuindo, assim, a rotação do sistema motor-bomba.</p>
                <p class="mb-2 pl-6 text-justify">IV. Na melhor condição operacional, em que o motor elétrico atinge o rendimento de 98%, a bomba trabalha no seu rendimento máximo.</p>
                <p class="mb-2 pl-6 text-justify">V. Não é possível o conjunto motor-bomba centrífuga atingir a vazão de 0,4 m<sup>3</sup>/s.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'I e III.',
            'opcao_c' => 'II e IV.',
            'opcao_d' => 'III e V.',
            'opcao_e' => 'IV e V.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'curso' => 'Engenharia Elétrica',
            'categoria' => 'Componente Específico',
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Localização, construção, instalação, ampliação, modificação e operação de empreendimentos e atividades utilizadoras de recursos ambientais consideradas efetivas ou potencialmente poluidoras bem como os empreendimentos que são capazes, sob qualquer forma, de causar degradação ambiental, dependerão de prévio licenciamento do órgão ambiental competente, sem prejuízo de outras licenças legalmente exigíveis.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Em relação ao licenciamento ambiental de usinas hidrelétricas, avalie as asserções a seguir e a relação proposta entre elas.</p>
                
                <p class="mb-2 pl-6 text-justify">I. As obras hidráulicas para exploração de recursos hídricos, tais como as barragens para fins hidrelétricos acima de 10 MW, não necessitam de licenciamento do órgão ambiental competente.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. As barragens para fins hidrelétricos não emitem poluição atmosférica e, em operação em regime permanente, não alteram a vazão da bacia hidráulica onde estão instaladas.</p>

                <p class="mb-2 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => 'BRASIL. Ministério do Meio Ambiente (MMA). <b>Programa Nacional de Capacitação de Gestores Ambientais:</b> licenciamento ambiental. Brasília: MMA, 2009 (adaptado).
            ',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'curso' => 'Engenharia Elétrica',
            'categoria' => 'Componente Específico',
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Uma onda eletromagnética possui frequência angular igual a <i>&omega;</i> e se propaga em diferentes meios materiais, de forma ideal, conforme os dados apresentados na tabela a seguir.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-4/5 md:w-4/5">
                        <img src="/img/questoes/engenharia_eletrica/img4.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>

                <p class="text-sm text-right mb-4">SADIKU, M. N. O. <b>Elementos de Eletromagnetismo.</b> Porto Alegre: Bookman, 2012 (adaptado).</p>

                <p class="mb-2 text-justify">Por meio do estudo da propagação de ondas em meios dielétricos com perdas, chega-se às equações que explicam a propagação nos demais meios (1), (2) e (4). Dessa forma, desenvolver as equações e interpretar os parâmetros <i>&sigma;, &epsilon;</i> e <i>&mu;</i> é de fundamental importância. Por exemplo: a constante de propagação (<i>γ</i>) de uma onda eletromagnética em meios dielétricos com perdas (3) é uma quantidade complexa dada por: <i>γ</i> = <i>&alpha;</i> + <i>j&beta;</i>, na qual <i>&alpha;</i> é a constante de atenuação do meio considerado e <i>&beta;</i> sua constante de fase. Individualmente, os valores de <i>&alpha;</i> e <i>&beta;</i> de uma onda eletromagnética em meios dielétricos com perdas (3) podem ser obtidos pelas equações apresentadas a seguir.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-1/5 md:w-1/5">
                        <img src="/img/questoes/engenharia_eletrica/img5.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>

                <p class="text-sm text-right mb-4">SADIKU, M. N.O. <b>Elementos de Eletromagnetismo.</b> Porto Alegre: Bookman, 2012, p. 379 (adaptado).</p>
                <p class="mb-2 text-justify">Considere os valores apresentados na tabela e as equações para o cálculo de <i>&alpha;</i> e <i>&beta;</i>.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir dessas informações, é correto afirmar que, quando a propagação ocorrer no espaço livre (vácuo) (1), os valores de <i>&alpha;</i> e <i>&beta;</i> serão, respectivamente,</p>
            ',
            'referencia' => '',
            'opcao_a' => '<i>&alpha;</i> = 0 e <i>&beta;</i> = 0',
            'opcao_b' => '<i>&alpha;</i> &ne; 0 e <i>&beta;</i> &ne; 0',
            'opcao_c' => '<i>&alpha;</i> = 0 e $$\beta = \omega \sqrt{\mu_0 \varepsilon_0}$$',
            'opcao_d' => '$$\alpha = \omega \sqrt{\mu_0 \varepsilon_0}$$ e <i>&beta;</i> = 0',
            'opcao_e' => '<i>&alpha;</i> &ne; 0 e $$\beta = \omega \sqrt{\mu_0 \varepsilon_0}$$',
            'alternativa_correta' => 'C',
        ]);
    }
}