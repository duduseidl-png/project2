<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class Questoes_Engenharia_Eletrica_2023 extends Seeder
{
    public function run(): void
    {
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
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
            'categoria' => 'Engenharia Elétrica',
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
            'categoria' => 'Engenharia Elétrica',
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
            'categoria' => 'Engenharia Elétrica',
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
            'opcao_a' => '\(\alpha = 0 \text{ e } \beta = 0\)',
            'opcao_b' => '\(\alpha \neq 0 \text{ e } \beta \neq 0\)',
            'opcao_c' => '\(\alpha = 0 \text{ e } \beta = \omega \sqrt{\mu_0 \varepsilon_0}\)',
            'opcao_d' => '\(\alpha = \omega \sqrt{\mu_0 \varepsilon_0} \text{ e } \beta = 0\)',
            'opcao_e' => '\(\alpha \neq 0 \text{ e } \beta = \omega \sqrt{\mu_0 \varepsilon_0}\)',
            'alternativa_correta' => 'C',
        ]);

        // =====================================================================
        // QUESTÃO 14
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Seja a saída <span>\(\text{y}(\text{t})\)</span> de um sistema dada por</p>

                <p class="text-center my-3 font-normal"><span>\(\text{y}(\text{t}) = (\text{x}(\text{t}))^{\text{a}} + \text{b} \text{x}(\text{t}) + \text{c}\)</span></p>

                <p class="mb-2 text-justify">em que <span>\(\text{x}(\text{t})\)</span> é a entrada.</p>

                <p class="mb-2 text-justify">A partir disso, considere os valores das constantes em cada um dos casos:</p>

                <p class="mb-2 pl-6 text-justify">I. <span>\(\text{a} = 0, \text{b} = 1, \text{c} = 0\)</span>.</p>
                <p class="mb-2 pl-6 text-justify">II. <span>\(\text{a} = 1, \text{b} = 0, \text{c} = 0\)</span>.</p>
                <p class="mb-2 pl-6 text-justify">III. <span>\(\text{a} = 1, \text{b} = 1, \text{c} = 0\)</span>.</p>
                <p class="mb-2 pl-6 text-justify">IV. <span>\(\text{a} = 2, \text{b} = 0, \text{c} = 1\)</span>.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nessas informações, é correto afirmar que o sistema será não linear apenas nos casos</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'I e IV.',
            'opcao_c' => 'III e IV.',
            'opcao_d' => 'I, II e III.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => 'B',
        ]);

        // =====================================================================
        // QUESTÃO 15
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Um engenheiro projetou um novo sistema de sensoriamento de temperatura para a linha de produção de uma fábrica. No circuito eletrônico projetado, mostrado na figura a seguir, um sensor, baseado no detector resistivo de temperatura (RTD), foi escolhido e ligado a uma ponte de Wheatstone por meio dos resistores R<sub>2</sub>, R<sub>3</sub> e R<sub>4</sub>. Acerca desse projeto, tem-se as seguintes informações: a ponte é ligada a uma fonte de alimentação de 12 V; uma tensão V<sub>0</sub> é medida na saída da ponte quando o circuito é exposto a uma variação de temperatura; e o RTD apresenta uma resistência de 100 ohms a 0 °C com coeficiente térmico de +0,4 ohm/°C.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/10 md:w-3/10">
                        <p class="font-bold mb-2">Circuito eletrônico projetado</p>
                        <img src="/img/questoes/engenharia_eletrica/img6.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>    
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nos dados apresentados, considerando R<sub>2</sub> = R<sub>3</sub> = R<sub>4</sub> = 100 ohms, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Quando V<sub>0</sub> = +1 V, a temperatura medida pelo circuito é de 100 °C.</p>

                <p class="mb-2 pl-6 text-justify">II. Quando o valor do RTD for igual a 100 ohms, a ponte estará em equilíbrio.</p>

                <p class="mb-2 pl-6 text-justify">III. Quando V<sub>0</sub> = 0 V, o valor do RTD também é igual a zero.</p>

                <p class="mb-2 pl-6 text-justify">IV. A sensibilidade do RTD na ponte depende dos resistores R<sub>2</sub>, R<sub>3</sub> e R<sub>4</sub>.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'I e III.',
            'opcao_c' => 'II e IV.',
            'opcao_d' => 'I, III e IV.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => 'A',
        ]);

        // =====================================================================
        // QUESTÃO 16
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere que o sistema apresentado na figura a seguir possua entrada <span>\(x(t)\)</span>, saída <span>\(y(t)\)</span>, sinal de erro <span>\(e(t)\)</span>, as correspondentes transformadas de Laplace, <span>\(X(s), Y(s), E(s),\)</span> e as constantes <span>\(K\)</span> e <span>\(T\)</span> maiores do que zero.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <p class="font-bold mb-2">Diagrama de blocos do sistema</p>
                        <img src="/img/questoes/engenharia_eletrica/img7.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nessas informações, qual será o sinal de saída em regime permanente, <span>\(y(t)\)</span>, para a entrada degrau unitário?</p>
            ',
            'referencia' => '',
            'opcao_a' => '<span>\(0\)</span>',
            'opcao_b' => '<span>\(K\)</span>',
            'opcao_c' => '<span class="larger-math">\(\frac{K}{K + T + 1}\)</span>',
            'opcao_d' => '<span class="larger-math">\(\frac{K}{K + 1}\)</span>',
            'opcao_e' => '<span>\(\infty\)</span>',
            'alternativa_correta' => 'D',
        ]);

        // =====================================================================
        // QUESTÃO 17
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">As figuras a seguir exemplificam aplicações com <i>Strain Gauges</i>, também conhecidos como extensômetros, do tipo banda uniaxial de trama pelicular afixado sobre viga.</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-4">
                    <div class="text-center">
                        <p class="font-bold mb-2">Figura 1</p>
                        <img src="/img/questoes/engenharia_eletrica/img8.jpg" class="max-w-xs mx-auto">
                    </div>
                    <div class="text-center">
                        <p class="font-bold mb-2">Figura 2</p>
                        <img src="/img/questoes/engenharia_eletrica/img9.jpg" class="max-w-xs mx-auto">
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nessas informações, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Na figura 1, à medida que a força vertical <i>F</i> atuar, a viga que está engastada do lado esquerdo e livre do lado direito, será flexionada de maneira que os extensômetros superiores (1 e 3) serão alongados e suas resistências aumentarão.</p>

                <p class="mb-2 pl-6 text-justify">II. Na figura 2, se o corpo de prova for tracionado pela força horizontal <i>F</i>, a resistência dos extensômetros 1 e 3 reduzirá.</p>

                <p class="mb-2 pl-6 text-justify">III. Na figura 1, os extensômetros se deformam igualmente sob ação de forças verticais ou horizontais.</p>

                <p class="mb-2 pl-6 text-justify">IV. Na figura 2, os extensômetros 2 e 4 não são sensíveis às deformações do corpo de prova na direção de <i>F</i>, horizontal.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => 'AGUIRRE, L. A. <b>Fundamentos de Instrumentação.</b> São Paulo: Pearson Education do Brasil, 2013 (adaptado).',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'I e IV.',
            'opcao_c' => 'II e III.',
            'opcao_d' => 'I, III e IV.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => 'B',
        ]);

        // =====================================================================
        // QUESTÃO 18
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Um engenheiro precisa construir um sistema de medição do valor eficaz da corrente senoidal de alimentação de um motor, o qual é acionado por meio de um inversor. A frequência de alimentação deve variar de 30 a 80 Hz.</p>

                <p class="mb-2 text-justify">Para realizar o trabalho, esse engenheiro resolveu utilizar amplificadores operacionais (supostos ideais e operando com a alimentação adequada) com uma estrutura que está esquematizada no diagrama a seguir. A corrente CA é medida por um sensor que fornece uma corrente de saída na proporção de 1.000:1, ou seja, a cada 1 A medido, tem-se 1 mA disponível para o processamento eletrônico. Esse sensor tem capacidade de medir até 10 A (valor instantâneo máximo).</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-4/5 md:w-4/5">
                        <p class="font-bold mb-2">Diagrama do circuito para medição de corrente</p>
                        <img src="/img/questoes/engenharia_eletrica/img10.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>

                <p class="mb-2 text-justify">No diagrama, todos os valores de resistência estão em ohms e, com relação às funções dos circuitos mostrados, tem-se que:</p>

                <ul class="list-disc pl-8 mb-2 space-y-1">
                    <li class="text-justify">U1 compõe um retificador de meia-onda, com ganho unitário, cuja saída é a inversão do semi-ciclo negativo do sinal de entrada. Considere que a corrente de saída do sensor flui pelo resistor de 1.000 ohms.</li>
                    <li class="text-justify">U2 compõe um filtro passa-baixas, com frequência de corte em 0,3 Hz.</li>
                </ul>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Para que a saída represente melhor o valor eficaz correspondente à corrente CA senoidal medida, assinale a opção que apresenta o circuito mais adequado para o bloco de ajuste do ganho.</p>
            ',
            'referencia' => '',
            'opcao_a' => '<img src="/img/questoes/engenharia_eletrica/img11.jpg" class="max-w-sm h-auto">',
            'opcao_b' => '<img src="/img/questoes/engenharia_eletrica/img12.jpg" class="max-w-sm h-auto">',
            'opcao_c' => '<img src="/img/questoes/engenharia_eletrica/img13.jpg" class="max-w-sm h-auto">',
            'opcao_d' => '<img src="/img/questoes/engenharia_eletrica/img14.jpg" class="max-w-sm h-auto">',
            'opcao_e' => '<img src="/img/questoes/engenharia_eletrica/img15.jpg" class="max-w-sm h-auto">',
            'alternativa_correta' => 'E',
        ]);

        // =====================================================================
        // QUESTÃO 19
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Há uma grande variedade de transformadores que funcionam com diferentes tipos de circuitos, mas todos operam sob o mesmo princípio de indução eletromagnética.</p>

                <p class="mb-2 text-justify">Diante disso, considere dois transformadores projetados para a mesma potência em kVA, ambos com núcleo do mesmo material ferromagnético e que têm as mesmas tensões primárias e secundárias e os mesmos números de espiras no primário e no secundário.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando essas condições, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. Um transformador com frequência nominal de 60 Hz terá menor dimensão física do que um transformador com frequência nominal de 400 Hz.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. O fluxo magnético máximo no transformador com frequência nominal de 400 Hz será menor do que no transformador com frequência nominal de 60 Hz.</p>

                <p class="mb-2 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'D',
        ]);

        // =====================================================================
        // QUESTÃO 20
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere o sistema representado pelo diagrama de blocos a seguir, em que <span>\(T\)</span> representa um atraso no tempo e em que <span>\(k{1}\)</span> e <span>\(k{2}\)</span> são constantes reais positivas.</p>

                <div class="flex justify-center my-4">
                    <div class="text-center w-full">
                        <p class="font-bold mb-2">Diagrama de blocos do sistema</p>
                        <img src="/img/questoes/engenharia_eletrica/img16.jpg" class="max-w-md mx-auto">
                    </div>
                </div>

                <p class="mb-2 text-justify">Pode-se obter a saída <span>\(y(t)\)</span> desse sistema para qualquer entrada arbitrária <span>\(x(t)\)</span> por meio da convolução entre o sinal de entrada e a sua resposta ao impulso. O Teorema da Convolução estabelece que a operação de convolução é equivalente ao produto, em frequência, entre a transformada de Fourier do sinal de entrada e a função de transferência do sistema (com transformada de Fourier da sua resposta ao impulso).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nessas informações, qual é a função de transferência, <span>\(H(\omega)\)</span>, do sistema apresentado no diagrama?</p>
            ',
            'referencia' => '',
            'opcao_a' => '<span>\(H(\omega) =\)</span><span class="larger-math">\(\frac{k_1 k_2 e^{-j \omega T}}{1 + k_2 e^{-2j \omega T} (1 + k_1)}\)</span>',
            'opcao_b' => '<span>\(H(\omega) =\)</span><span class="larger-math">\(\frac{k_1 k_2 e^{-2j \omega T}}{1 + k_2 e^{-j \omega T} (1 + k_1)}\)</span>',
            'opcao_c' => '<span>\(H(\omega) =\)</span><span class="larger-math">\(\frac{k_1 k_2 e^{-j \omega T}}{1 + k_1 e^{-2j \omega T} (1 + k_2)}\)</span>',
            'opcao_d' => '<span>\(H(\omega) =\)</span><span class="larger-math">\(\frac{k_1 k_2 e^{-2j \omega T}}{1 + k_1 e^{-j \omega T} (1 + k_2)}\)</span>',
            'opcao_e' => '<span>\(H(\omega) =\)</span><span class="larger-math">\(\frac{k_1 k_2 e^{j \omega T}}{1 + k_1 e^{2j \omega T} (1 + k_2)}\)</span>',
            'alternativa_correta' => 'A',
        ]);

        // =====================================================================
        // QUESTÃO 21
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Os materiais ferromagnéticos, frequentemente compostos de ferro e de ligas de ferro com cobalto, níquel, alumínio e outros metais, possuem um momento magnético permanente mesmo na ausência de um campo externo e se imantam fortemente se colocados na presença de um campo magnético. Sabe-se que a permeabilidade magnética, grandeza característica de cada material, refere-se à sua capacidade de "permitir" a existência de linhas de indução em seu interior e que, quanto maior for a permeabilidade de um material, mais fácil será a obtenção dessas linhas de indução.</p>

                <p class="mb-2 text-justify">No circuito magnético representado na figura 1 a seguir, as dimensões geométricas estão em centímetros. A corrente de excitação CC, <i>i</i>, percorrendo a bobina, estabelece a circulação de um fluxo magnético de 9,6 mWb no núcleo magnético, o qual é feito de chapas de aço silício de grão orientado (GO) do tipo M-5, cuja curva de magnetização é apresentada na figura 2. O fator de laminação do núcleo é igual a 1 e o fluxo de dispersão é desprezível.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <p class="font-bold mb-2">Figura 1 – Circuito magnético com núcleo de aço laminado</p>
                        <img src="/img/questoes/engenharia_eletrica/img17.jpg" class="w-full h-auto mb-2 rounded">
                        <p class="text-sm mt-2">UMANS, S. D. <b>Máquinas Elétricas de Fitzgerald e Kingsley</b> 7. ed. Porto Alegre: AMGH, 2014 (adaptado).</p>
                    </div>
                </div>
            
                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-4/5 md:w-4/5">
                        <p class="font-bold mb-2">Figura 2 – Curva de magnetização CC para o aço silício de grão orientado (GO) do tipo M-5</p>
                        <img src="/img/questoes/engenharia_eletrica/img18.jpg" class="w-full h-auto mb-2 rounded">
                        <p class="text-sm mt-2">UMANS, S. D. <b>Máquinas Elétricas de Fitzgerald e Kingsley</b> 7. ed. Porto Alegre: AMGH, 2014 (adaptado).</p>
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Para essas condições, a permeabilidade magnética do material ferromagnético utilizado é, aproximadamente,</p>
            ',
            'referencia' => '',
            'opcao_a' => '8 mWb/Ae.m.',
            'opcao_b' => '23 mWb/Ae.m.',
            'opcao_c' => '40 mWb/Ae.m.',
            'opcao_d' => '25 Wb/Ae.m.',
            'opcao_e' => '44 Wb/Ae.m.',
            'alternativa_correta' => 'B',
        ]);

        // =====================================================================
        // QUESTÃO 22
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">O circuito esquematizado na figura 1 tem como entradas os sinais <i>Q<sub>1</sub></i> e <i>Q<sub>2</sub></i>, que são gerados pelo circuito apresentado na figura 2. De acordo com o sinal de <i>clock</i> (CLK), um conjunto de símbolos do painel é "ativado". Cada um dos quatro símbolos do painel está associado a uma saída do circuito lógico, ou seja, o quadrado está associado à letra <b>a</b>, o losango à letra <b>b</b>, o círculo à letra <b>c</b>, e o triângulo à letra <b>d</b>. Sabe-se, também, que os <i>flip-flops</i> (FFs) são inicializados com nível zero.</p>

                <p class="mb-2 text-justify">A tabela funcional dos FFs é apresentada na figura 3.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-2/5 md:w-2/5">
                        <p class="font-bold mb-2">Figura 1 – Circuito para acionamento dos símbolos do painel</p>
                        <img src="/img/questoes/engenharia_eletrica/img19.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>
                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-2/5 md:w-2/5">
                        <p class="font-bold mb-2">Figura 2 – Circuito gerador dos sinais Q1 e Q2</p>
                        <img src="/img/questoes/engenharia_eletrica/img20.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-1/2 md:w-1/2">
                        <p class="font-bold mb-2">Figura 3 – Tabela funcional dos flip-flops</p>
                        <img src="/img/questoes/engenharia_eletrica/img21.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nessas informações, assinale a opção que apresenta a sequência correta de símbolos ativados no painel em cor amarela, a partir da primeira borda ativa de clock.</p>
            ',
            'referencia' => '',
            'opcao_a' => '<img src="/img/questoes/engenharia_eletrica/img22.jpg" class="max-w-sm h-auto">',
            'opcao_b' => '<img src="/img/questoes/engenharia_eletrica/img23.jpg" class="max-w-sm h-auto">',
            'opcao_c' => '<img src="/img/questoes/engenharia_eletrica/img24.jpg" class="max-w-sm h-auto">',
            'opcao_d' => '<img src="/img/questoes/engenharia_eletrica/img25.jpg" class="max-w-sm h-auto">',
            'opcao_e' => '<img src="/img/questoes/engenharia_eletrica/img26.jpg" class="max-w-sm h-auto">',
            'alternativa_correta' => 'D',
        ]);

        // =====================================================================
        // QUESTÃO 23
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A figura a seguir apresenta um circuito para medir e para indicar a posição angular do eixo <i>θ</i> de um potenciômetro. Esse circuito utiliza fontes de alimentação de +10 V e −5 V, um potenciômetro e os resistores de 4 e 16 ohms para obter uma tensão (V<sub>IN</sub>) na entrada do circuito amplificador. O modelo do potenciômetro utilizado no circuito é linear, com ângulo medido a partir da posição central, conforme os detalhes mostrados a seguir. O amplificador é composto por 2 resistores e uma fonte dependente, de ganho β.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-4/5 md:w-4/5">
                        <p class="font-bold mb-2">Circuito para medir e para indicar a posição angular <i>θ</i> do eixo de um potenciômetro</p>
                        <img src="/img/questoes/engenharia_eletrica/img27.jpg" class="w-full h-auto mb-2 rounded">
                        <p class="text-sm mt-2">DORF, R. C.; SVOBODA, J. A. <b>Introdução aos circuitos elétricos.</b> 7. ed. Rio de Janeiro: LTC, 2008 (adaptado).</p>
                    </div>
                </div>

                <p class="mb-2 text-justify">Esse circuito foi obtido modelando as fontes de alimentação como fontes ideais e o voltímetro como um circuito aberto. O potenciômetro tem curso de −180° a +180°.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir das informações apresentadas e considerando que o potenciômetro se encontra na posição angular de 36°, qual deve ser o valor do ganho <i>b</i>, indicado na figura, para que a tensão V<sub>SAIDA</sub> do circuito seja 3,6 V?</p>
            ',
            'referencia' => '',
            'opcao_a' => '0,72.',
            'opcao_b' => '1,09.',
            'opcao_c' => '1,20.',
            'opcao_d' => '2,12.',
            'opcao_e' => '3,00.',
            'alternativa_correta' => 'C',
        ]);

        // =====================================================================
        // QUESTÃO 24
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere um sistema elétrico de potência representado pelo diagrama unifilar a seguir. A potência injetada na barra 3 e as impedâncias das linhas que conectam a barra 1 à barra 2 bem como a barra 2 à barra 3 são mensuradas por unidade (pu). Tanto a tensão na barra 1 quanto a tensão na barra 3 são iguais a 1,0 pu.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <p class="font-bold mb-2">Diagrama unifilar do sistema</p>
                        <img src="/img/questoes/engenharia_eletrica/img28.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nessas informações, é correto dizer que a tensão na barra 2 e o fluxo de potência saindo da barra 1 para a barra 2 são, respectivamente,</p>
            ',
            'referencia' => '',
            'opcao_a' => '1,0 pu e 1,0 pu.',
            'opcao_b' => '1,0 − <i>j</i>0,1 pu e 1,0 pu.',
            'opcao_c' => '1,0 + <i>j</i>0,1 pu e 0,5 pu.',
            'opcao_d' => '1,0 − <i>j</i>0,1 pu e 0,5 pu.',
            'opcao_e' => '1,0 + <i>j</i>0,1 pu e 1,0 pu.',
            'alternativa_correta' => 'D',
        ]);

        // =====================================================================
        // QUESTÃO 25
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Auditoria energética é a análise sistemática dos fluxos de energia em um sistema particular, visando a discriminar as perdas e a orientar um programa de uso racional de insumos energéticos. Uma forma de desenvolver uma auditoria energética na indústria é implementá-la em etapas sequenciadas, sendo:</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-2/5 md:w-2/5">
                        <p class="font-semibold mb-3">Etapas de uma auditoria energética</p>
                        <img src="/img/questoes/engenharia_eletrica/img29.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. A etapa de avaliação das perdas de energia em uma auditoria energética envolve cálculos para determinar as correções das cargas de equipamentos.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. A comparação de grandezas de naturezas diferentes na entrada e na saída de uma carga de sistema ou de um equipamento auxilia no diagnóstico de disfunções acarretadoras de desperdício.</p>

                <p class="mb-2 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => 'MARQUE, M. C. (org.). <b>Conservação de Energia: Eficiência energética de equipamentos industriais.</b> 3. ed. Itajubá: Fupai, 2006 (adaptado).',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'A',
        ]);

        // =====================================================================
        // QUESTÃO 26
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A figura a seguir apresenta um sistema fotovoltaico que visa a suprir uma parcela da demanda energética de uma residência, a qual também possui conexão com a rede pública de fornecimento de energia.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <p class="font-bold mb-2">Diagrama de blocos do sistema fotovoltaico instalado na residência</p>
                        <img src="/img/questoes/engenharia_eletrica/img30.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse sistema, em relação ao dispositivo X, ligado ao painel fotovoltaico, e ao dispositivo Y, ligado ao quadro de distribuição, é correto afirmar que</p>
            ',
            'referencia' => '',
            'opcao_a' => 'X pode ser suprimido, e a energia do painel fotovoltaico pode ser ligada diretamente na bateria para carregá-la; Y pode ser suprimido, e a energia do painel fotovoltaico pode ser distribuída diretamente à residência por meio do quadro de distribuição.',
            'opcao_b' => 'X corresponde a um controlador de carga responsável por controlar o carregamento e o descarregamento da bateria; e Y corresponde a outro controlador de carga responsável por distribuir a energia da bateria à residência por meio do quadro de distribuição.',
            'opcao_c' => 'X corresponde a um controlador de carga responsável por controlar o carregamento e o descarregamento da bateria; e Y pode ser suprimido, assim, a energia proveniente do controlador de carga pode ser ligada diretamente na residência por meio do quadro de distribuição.',
            'opcao_d' => 'X pode ser suprimido, e a energia do painel fotovoltaico pode ser ligada diretamente na bateria para carregá-la; e Y corresponde a um inversor de frequência responsável por converter a energia do painel fotovoltaico de corrente contínua em corrente alternada (CC-CA), para ser distribuída à residência por meio do quadro de distribuição.',
            'opcao_e' => 'X corresponde a um controlador de carga responsável por controlar o carregamento e o descarregamento da bateria; e Y corresponde a um inversor de frequência responsável por converter a energia proveniente da bateria de corrente contínua em corrente alternada (CC-CA), para ser distribuída à residência por meio do quadro de distribuição.',
            'alternativa_correta' => 'E',
        ]);

        // =====================================================================
        // QUESTÃO 27
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A rede <i>Actuator Sensor Interface</i> (AS-I) é um padrão de comunicação industrial concebido para tornar mais simples e rápida a conexão entre sensores e atuadores com os respectivos controladores. O controle de acesso ao meio dessa rede é do tipo <i>polling</i> e, nela, um terminal-mestre pode controlar até 30 terminais-escravos. Um ciclo completo ocorre após todos os escravos terem sido requisitados uma vez. A sequência binária correspondente à comunicação serial entre o terminal-mestre e cada um dos terminais-escravos é mostrada na figura a seguir.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <p class="font-bold mb-2">Sequência binária da comunicação terminal-mestre do protocolo padrão AS-I</p>
                        <img src="/img/questoes/engenharia_eletrica/img31.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir da análise da rede AS-I, após um ciclo completo de comunicação, com a rede em sua configuração máxima, qual será a sequência formada, respectivamente, pela quantidade de <i>bits</i> de informação recebida pelo mestre; pela quantidade de <i>bits</i> de informação transmitida pelo mestre; e pela quantidade total de <i>bits</i> trafegados?</p>
            ',
            'referencia' => '',
            'opcao_a' => '4; 5; e 270.',
            'opcao_b' => '7; 14; e 630.',
            'opcao_c' => '14; 7; e 990.',
            'opcao_d' => '120; 150; e 630.',
            'opcao_e' => '150; 120; e 990.',
            'alternativa_correta' => 'D',
        ]);

        // =====================================================================
        // QUESTÃO 28
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">No dia 4 de maio de 2017, o governo brasileiro realizou o lançamento do satélite geoestacionário de defesa e comunicações estratégicas (SGDC), que passou a operar nas bandas de frequência X e Ka. Na banda X, foram disponibilizados recursos de comunicação, tendo em vista o uso exclusivamente militar, para auxiliar a defesa do país. Já na banda Ka, foram disponibilizados canais para o tráfego de dados em alta velocidade, com a finalidade de contribuir para a implementação do Plano Nacional de Banda Larga, o que aumentou a inclusão digital, principalmente em áreas remotas do país.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando essas informações, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. O satélite, em funcionamento pleno, transmite dados em alta velocidade por um período de até 12 horas por dia.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. Na órbita geoestacionária, a altitude para a qual o satélite foi projetado para operar é de, aproximadamente, 36.000 km em relação à superfície da Terra.</p>

                <p class="mb-2 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => 'Disponível em: http://www.telebras.com.br/inst/?p=7744#more-7744. Acesso em: 18 jul. 2023 (adaptado).',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'D',
        ]);

        // =====================================================================
        // QUESTÃO 29
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Dada a integração cada vez maior de sistemas e de processos industriais, o engenheiro deve ser capaz de lidar com a modelagem e com o controle de sistemas modernos, complexos e interligados.</p>

                <p class="mb-2 text-justify">Nesse contexto, considere que a equação de diferenças de um sistema seja a seguinte.</p>

                <p class="text-center my-3 font-normal"><span>\(6y[n] − y[n−1] − y[n−2] = 18x[n] + x[n−1]\)</span></p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando que a transformada <span>\(z\)</span> da resposta ao impulso do sistema apresentado <span>\((H(z))\)</span> possa assumir diferentes regiões de convergência (RDC), avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A função de transferência do sistema é</p>
                <p class="text-center my-2 font-normal"> <span>\(H(z) =\)</span><span style="font-size:1.1em">\(\dfrac{3 + \dfrac{1}{6}z^{-1}}{\left(1 - \dfrac{1}{3}z^{-1}\right)\left(1 + \dfrac{1}{2}z^{-1}\right)}\)</span></p>

                <p class="mb-2 pl-6 text-justify">II. Se |<span>\(z\)</span>| &gt; 1/3 for uma região de convergência possível, o sistema será estável.</p>

                <p class="mb-2 pl-6 text-justify">III. Se |<span>\(z\)</span>| &gt; 1/2 for uma região de convergência possível, a resposta ao impulso do sistema causal será dada por</p>
                <p class="text-center my-2 font-normal"> <span>\(h[n] = \left[{\left(-\dfrac{1}{3}\right)^n + 2\left(\dfrac{1}{2}\right)^n}\right] u[n]\)</span></p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'III, apenas.',
            'opcao_c' => 'I e II, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'B',
        ]);

        // =====================================================================
        // QUESTÃO 30 — ANULADA
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A teoria de controle clássico é fundamentada na relação entrada-saída ou função de transferência; por sua vez, a teoria de controle moderno é baseada na descrição de um sistema de equações em termos de um conjunto de equações diferenciais de primeira ordem, as quais podem ser combinadas em uma equação diferencial vetorial-matricial de primeira ordem. O uso de uma notação vetorial-matricial simplifica bastante a representação matemática do sistema de equações. O aumento no número das variáveis de estado, no número de entradas ou no número de saídas não aumenta a complexidade das equações.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir dessa temática, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O filtro RC em espaço de estados pode ser descrito por uma equação diferencial de primeira ordem na qual o espaço de estados possui ordem 2.</p>

                <p class="mb-2 pl-6 text-justify">II. Para a determinação da controlabilidade e da observabilidade de um projeto em sistemas em espaço de estados, é necessário conhecimento tanto da equação de estados quanto da equação de saída.</p>

                <p class="mb-2 pl-6 text-justify">III. Na representação em espaço de estados, a ordem do vetor de estados e a ordem do vetor de saída devem ser iguais.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>

                <p class="mt-3 text-red-600 font-semibold">⚠️ Questão anulada pelo INEP.</p>
            ',
            'referencia' => 'OGATA, K. <b>Engenharia de controle moderno.</b> 5. ed. São Paulo: Pearson Prentice Hall, 2010 (adaptado).',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'III, apenas.',
            'opcao_c' => 'I e II, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'ANULADA',
        ]);

        // =====================================================================
        // QUESTÃO 31
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">O diagrama unifilar a seguir pertence a um projeto de instalação elétrica de baixa tensão, no qual o circuito C1 alimenta um fogão elétrico (220 V); o C2 alimenta um chuveiro (220 V); o C3 é um circuito de iluminação (127 V); o C4 é um circuito de tomada de uso geral (127 V); e o C5 é, também, um circuito de tomada de uso geral (127 V). Todos os circuitos estão em eletrodutos exclusivos. Sabe-se que a concessionária de energia elétrica local fornece eletricidade com níveis de tensão linha-linha de 220 V e tensão linha-neutro de 127 V. Considerando-se esses dados e analisando-se o diagrama elaborado, nota-se que ele apresenta alguns erros.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-4/5 md:w-4/5">
                        <p class="font-bold mb-2">Diagrama unifilar do projeto da instalação</p>
                        <img src="/img/questoes/engenharia_eletrica/img32.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas, avalie as afirmações a seguir com relação aos erros cometidos na elaboração do diagrama unifilar.</p>

                <p class="mb-2 pl-6 text-justify">I. A bitola do circuito C4 e o número de fases do circuito C5 estão errados.</p>

                <p class="mb-2 pl-6 text-justify">II. O tipo de disjuntor (bipolar) do circuito C3 e o número de fases do circuito C2 estão errados.</p>

                <p class="mb-2 pl-6 text-justify">III. O tipo de disjuntor (bipolar) do circuito C5 e o número de fases do circuito C5 estão errados.</p>

                <p class="mb-2 pl-6 text-justify">IV. O número de condutores que vêm da concessionária e o número de fases do circuito C2 estão errados.</p>

                <p class="mb-2 pl-6 text-justify">V. A corrente do disjuntor do circuito C1 e o tipo de disjuntor (bipolar) do circuito C3 estão errados.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => 'CAVALIN, G.; CERVELIN, S. <b>Instalações elétricas prediais.</b> São Paulo: editora Érica, 2006 (adaptado).',
            'opcao_a' => 'I, II e IV.',
            'opcao_b' => 'I, III e IV.',
            'opcao_c' => 'I, III e V.',
            'opcao_d' => 'II, III e V.',
            'opcao_e' => 'II, IV e V.',
            'alternativa_correta' => 'C',
        ]);

        // =====================================================================
        // QUESTÃO 32
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Uma indústria, alimentada por uma rede elétrica trifásica de 380 V e 60 Hz, possui dois motores elétricos trifásicos: um de 12 kW com fator de potência de 0,8 atrasado e outro de 9 kW com fator de potência de 0,6 atrasado. A fim de atender à Resolução Normativa n. 1.000/2021, da Agência Nacional de Energia Elétrica (ANEEL), que regula o fator de potência de referência igual a 0,92 para unidades consumidoras conectadas em níveis de tensão inferiores a 69 kV, realizou-se a compensação do fator de potência da referida instalação por meio de um banco de capacitores.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando essa situação, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A capacitância do banco de capacitores é superior a 220 μF.</p>

                <p class="mb-2 pl-6 text-justify">II. A diferença entre as correntes fornecidas pela fonte no circuito compensado e no circuito não compensado é inferior a 20 A.</p>

                <p class="mb-2 pl-6 text-justify">III. A soma da potência aparente dos dois motores, sem a correção do fator de potência para 0,92 atrasado, é inferior a 27 kVA.</p>

                <p class="mb-2 pl-6 text-justify">IV. A potência do banco de capacitores a ser utilizado a fim de obter o fator de potência de 0,92 para o circuito da indústria em questão deve ser inferior a 10 kVAr.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => 'BRASIL. Agência Nacional de Energia Elétrica (ANEEL). <b>Resolução n. 1.000, de 7 de dezembro de 2021.</b>',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'II e III.',
            'opcao_c' => 'III e IV.',
            'opcao_d' => 'I, II e IV.',
            'opcao_e' => 'I, III e IV.',
            'alternativa_correta' => 'A',
        ]);

        // =====================================================================
        // QUESTÃO 33
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere que seja necessário utilizar um algoritmo para resolver um determinado problema. Diante disso, vários profissionais propõem diferentes soluções. Nesse cenário, um possível critério para a escolha do algoritmo é que ele otimize a necessidade de recursos computacionais, como, por exemplo, de tempo de processamento.</p>

                <p class="mb-2 text-justify">Sabe-se que a notação O-grande (<i>big O notation</i>) é usada para classificar a resposta de algoritmos à variação no tamanho dos dados de entrada. Por exemplo, um algoritmo será classificado como O(N) se, ao receber um vetor de tamanho N, tiver tempo de processamento proporcional a N. Outro algoritmo será classificado como O(N²) se o tempo de processamento variar proporcionalmente a N².</p>

                <p class="mb-2 text-justify">A seguir, são reproduzidos dois algoritmos como funções na linguagem C:</p>

                <p class="mb-1"><b>A1:</b> retorna 1 se um dado elemento está presente em um vetor de tamanho N e retorna 0, caso contrário.</p>
                <p class="mb-3"><b>A2:</b> soma matriz m1 com matriz m2 e armazena resultado na matriz m3, matrizes com N linhas e N colunas.</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
                    <div>
                        <pre class="bg-gray-100 border border-gray-300 rounded p-3 text-sm overflow-x-auto"><code>#define N 8
                        int A1(int vetor[], int elem) {
                        int i;
                        for(i = 0; i &lt; N; i++) {
                        if (vetor[i] == elem)
                        return 1;
                        }
                        return 0;
                        }</code></pre>
                </div>
                    <div>
                        <pre class="bg-gray-100 border border-gray-300 rounded p-3 text-sm overflow-x-auto"><code>void A2(int m1[][N], int m2[][N],
                        int m3[][N]) {
                        int i, j;
                        for(i = 0; i &lt; N; i++) {
                        for(j = 0; j &lt; N; j++) {
                        m3[i][j] = m1[i][j]
                        + m2[i][j];
                        }
                        }
                        }</code></pre>
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Diante dessas informações, é correto afirmar que as classificações O-grande dos algoritmos A1 e A2 são, respectivamente,</p>
            ',
            'referencia' => '',
            'opcao_a' => 'O(1) e O(N).',
            'opcao_b' => 'O(1) e O(N²).',
            'opcao_c' => 'O(N) e O(N).',
            'opcao_d' => 'O(N) e O(N²).',
            'opcao_e' => 'O(N²) e O(N²).',
            'alternativa_correta' => 'D',
        ]);

        // =====================================================================
        // QUESTÃO 34
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Circuitos conversores de energia, os quais são importantes nas mais diversas formas de processamento de energia elétrica, são amplamente encontrados em bens de consumo eletroeletrônicos. Exemplos conhecidos são os conversores DC-DC (corrente contínua para corrente contínua), <i>buck</i> e <i>boost</i>.</p>

                <p class="mb-2 text-justify">A figura a seguir ilustra um conversor <i>buck</i> DC-DC, cuja chave é acionada por um sinal PWM e converte o sinal de entrada V<sub>DC</sub> de amplitude A<sub>1</sub> em um sinal de amplitude A<sub>2</sub> na carga resistiva R.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <img src="/img/questoes/engenharia_eletrica/img33.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações e a figura apresentadas, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'No ciclo de trabalho do sinal PWM, situação em que a chave é acionada, a corrente é fornecida pela fonte V<sub>DC</sub>, ao passo que, fora do ciclo de trabalho do sinal PWM, quando a chave é desligada, a corrente é fornecida somente pela energia armazenada no capacitor.',
            'opcao_b' => 'A partir da frequência de chaveamento e do ciclo de trabalho do sinal PWM, controla-se a amplitude do sinal de saída sobre o resistor R, mantendo-se a relação A<sub>1</sub> &lt; A<sub>2</sub>.',
            'opcao_c' => 'A função do conversor <i>buck</i> é converter um sinal contínuo da entrada, representado por V<sub>DC</sub>, em outro sinal contínuo sobre a carga, tal que A<sub>1</sub> &lt; A<sub>2</sub>.',
            'opcao_d' => 'No ciclo de trabalho do sinal PWM, o diodo conduz corrente mantendo a tensão da fonte de alimentação estável com amplitude A<sub>1</sub>.',
            'opcao_e' => 'A implementação da chave é realizada com o emprego de dispositivos semicondutores, como BJT, MOSFET e IGBT.',
            'alternativa_correta' => 'E',
        ]);

        // =====================================================================
        // QUESTÃO 35
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A análise de oferta e de demanda de produtos é de fundamental importância para o entendimento elementar do funcionamento do mercado consumidor. O preço de um produto na economia de mercado é determinado tanto pela oferta quanto pela procura.</p>

                <p class="mb-2 text-justify">O gráfico a seguir ilustra curvas de demanda (D1, D2 e D3) interceptadas pela curva de oferta O1.</p>

                <p class="mb-2 text-justify">O ponto (Q<sub>0</sub>, P<sub>0</sub>) representa o ponto de equilíbrio dado pela intersecção da curva de demanda D2 com a curva de oferta O1. Os eixos representam a quantidade (Q) e o preço (P).</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <img src="/img/questoes/engenharia_eletrica/img34.jpg"class="w-full h-auto mb-2 rounded">
                        <p class="text-sm mt-2">PINHO, D. B.; VASCONCELLOS, M. A. S. <b>Manual de Economia.</b> 5. ed. Saraiva, 2004 (adaptado).</p>
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nessas informações, considere que um fator externo provoque um aumento de renda real dos consumidores e que, consequentemente, ocorra uma mudança da curva de demanda, obtendo-se, assim, um novo ponto de equilíbrio (Q<sub>X</sub>, P<sub>X</sub>) para esse mercado.</p>

                <p class="mb-2 text-justify">Nesse caso, as condições que representam o novo ponto de equilíbrio (Q<sub>X</sub>, P<sub>X</sub>) são</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Q<sub>X</sub> &lt; Q<sub>0</sub>; P<sub>X</sub> &gt; P<sub>0</sub>',
            'opcao_b' => 'Q<sub>X</sub> &gt; Q<sub>0</sub>; P<sub>X</sub> &lt; P<sub>0</sub>',
            'opcao_c' => 'Q<sub>X</sub> &gt; Q<sub>0</sub>; P<sub>X</sub> &gt; P<sub>0</sub>',
            'opcao_d' => 'Q<sub>X</sub> &lt; Q<sub>0</sub>; P<sub>X</sub> &lt; P<sub>0</sub>',
            'opcao_e' => 'Q<sub>X</sub> = Q<sub>0</sub>; P<sub>X</sub> = P<sub>0</sub>',
            'alternativa_correta' => 'C',
        ]);

        // =====================================================================
        // QUESTÃO 36
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">O conversor analógico-digital (A/D) é um dos componentes dos modernos sistemas de processamento digitais de sinais. É essencial em aplicações de comunicações e de controle e automação, pois transforma um sinal analógico em uma sequência digital. A respeito disso, tem-se que a entrada de um conversor A/D, x<sub>a</sub>(t) é uma função real de uma variável contínua, t. A saída do conversor A/D, por sua vez, é um fluxo de bits que corresponde a uma sequência de tempo discreto x[n], em que, para cada valor de n, a amplitude é quantizada com um valor de um conjunto finito de valores possíveis.</p>

                <p class="mb-2 text-justify">Os componentes de um conversor A/D são apresentados na figura a seguir. A primeira etapa é o amostrador, referido algumas vezes como conversor contínuo-discreto (C/D). O conversor C/D extrai amostras do sinal contínuo a cada período de tempo, definido como período de amostragem. A segunda etapa é o quantizador, que atribui valores discretos predefinidos a essas amostras do sinal. Por fim, na terceira etapa, os valores quantizados são codificados em sequência de palavras binárias.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <img src="/img/questoes/engenharia_eletrica/img35.jpg" class="w-full h-auto mb-2 rounded">
                        <p class="text-sm mt-2">HAYES, M. H. <b>Teoria e problemas de processamento digital de sinais.</b> Porto Alegre: Bookman, 2006 (adaptado).</p>
                    </div>
                </div>

                <p class="mb-2 text-justify">Considere um conversor analógico-digital unipolar de 8 bits, com intervalos de quantização uniforme, cujo sinal de entrada está na faixa entre 0,00 e 5,10 V, em que a tensão 0,00 V corresponde ao número binário 00000000<sub>2</sub> e a tensão 5,10 V corresponde ao binário 11111111<sub>2</sub>.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nessa situação, caso uma das amostras tenha valor de tensão de 2,00 V, qual será o número binário apresentado, na saída, após a conversão?</p>
            ',
            'referencia' => '',
            'opcao_a' => '01100100<sub>2</sub>',
            'opcao_b' => '01100010<sub>2</sub>',
            'opcao_c' => '01100101<sub>2</sub>',
            'opcao_d' => '01100011<sub>2</sub>',
            'opcao_e' => '01100110<sub>2</sub>',
            'alternativa_correta' => 'A',
        ]);

        // =====================================================================
        // QUESTÃO 37
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A energia fotovoltaica apresenta muitas vantagens, entretanto, para sua ampla utilização, ainda devem ser vencidos alguns desafios, principalmente a baixa eficiência de conversão dos painéis fotovoltaicos. Além do desenvolvimento de novos materiais, continua sendo muito importante aumentar a eficiência de conversão desses painéis por meio da maximização da entrada de radiação solar e da otimização do ponto de operação do painel fotovoltaico.</p>

                <p class="mb-2 text-justify">Uma topologia simples, que pode ser utilizada em sistemas fotovoltaicos, é apresentada na figura 1, no qual, basicamente, são inseridos conversores em série entre o painel solar e a carga.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <p class="font-bold mb-2">Figura 1 – Conversores em série</p>
                        <img src="/img/questoes/engenharia_eletrica/img36.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>

                <p class="mb-2 text-justify">O conversor 1, normalmente, é um conversor <i>buck</i>, cuja função é rastrear o ponto de máxima potência do painel, realizando o controle de carga da bateria. O conversor 2 é um elevador de tensão, cuja função é adequar o nível de tensão CC conforme a necessidade da carga.</p>

                <p class="mb-2 text-justify">Com o objetivo de rastrear o ponto de máxima potência e de elevar a tensão de saída para 20 V, elaborou-se um projeto no qual se propõe utilizar o conversor CC-CC <i>boost</i>, apresentado na figura 2.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <p class="font-bold mb-2">Figura 2 – Projeto de conversor boost</p>
                        <img src="/img/questoes/engenharia_eletrica/img37.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>

                <p class="mb-2 text-justify">A Tabela 1 apresenta os dados de entrada para o projeto do conversor, de acordo com o conjunto de painéis solares a serem utilizados.</p>

                <div class="overflow-x-auto my-4">
                    <div class="w-3/5 md:w-3/5 mx-auto">
                        <p class="font-bold mb-2 text-center">Tabela 1 – Dados para o projeto do conversor boost</p>
                        <img src="/img/questoes/engenharia_eletrica/img38.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>

                <p class="mb-2 text-justify">Nesse caso, o valor de indutância crítica (condução contínua) é determinado pela expressão:</p>

                <p class="text-center my-3 font-normal"> <span style="font-size:1.1em">\(L_{cr} =\)</span><span style="font-size:1.05em">\(\dfrac{(1-D)^2 \cdot R \cdot D}{2 \cdot f_{sw}}\)</span></p>

                <p class="mb-2 text-justify">em que: L<sub>cr</sub> é a indutância crítica (H); D é o ciclo de trabalho da chave; R é a resistência da carga (ohms); e f<sub>sw</sub> é a frequência de chaveamento (Hz).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando esse contexto e as informações apresentadas, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A razão cíclica do conversor para tensão e corrente no ponto de máxima potência deve ser igual a 0,4.</p>

                <p class="mb-2 pl-6 text-justify">II. A corrente máxima de saída do conversor proposto é de 5 A.</p>

                <p class="mb-2 pl-6 text-justify">III. A indutância crítica do circuito é de 36 μH.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'III, apenas.',
            'opcao_c' => 'I e II, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'E',
        ]);

        // =====================================================================
        // QUESTÃO 38
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere que uma cidade possua, em atividade, duas lojas de materiais elétricos, quais sejam, A e B. Estima-se que 50% dos clientes em potencial faz negócios com a loja A, que 40% dos clientes em potencial faz negócios com a loja B e que 20% dos clientes em potencial não faz negócios com nenhuma das duas lojas.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas informações apresentadas, qual é a probabilidade, entre 0 e 1, de um cliente aleatório fazer negócios somente com a loja B?</p>
            ',
            'referencia' => '',
            'opcao_a' => '0,1.',
            'opcao_b' => '0,3.',
            'opcao_c' => '0,4.',
            'opcao_d' => '0,6.',
            'opcao_e' => '0,7.',
            'alternativa_correta' => 'B',
        ]);
    }
}