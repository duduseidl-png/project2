<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class Questoes_Engenharia_Eletrica_2019 extends Seeder
{
    public function run(): void
    {
        // ==================== COMPONENTE ESPECÍFICO ====================

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Deseja-se que um equipamento opere em condições ótimas de funcionamento. Para tanto, modelou-se seu rendimento em função de sua vibração. O rendimento foi máximo quando não houve vibração e decaiu à medida que o equipamento vibrava. A equação a seguir é a função de transferência do sistema que modelou o rendimento desse equipamento.</p>
                <p class="mb-2 text-center"><em>H(s) = 2 / (s<sup>2</sup> + 2)</em></p>
                <p class="mb-2 text-justify">Um esboço da magnitude ao quadrado da resposta em frequência, |H(&omega;)|<sup>2</sup>, é mostrado com dois pontos A e B marcados no eixo vertical (em &omega; = 0 e em &omega; = &radic;2 rad/s respectivamente).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas informações apresentadas, constatou-se que o rendimento era máximo quando não havia vibração, isto é, &omega; = 0. Conclui-se que os valores corretos para A e B são, respectivamente,</p>
            ',
            'referencia' => '',
            'opcao_a' => '1 e 0,5.',
            'opcao_b' => '1 e 0,25.',
            'opcao_c' => '1 e 1/&radic;2.',
            'opcao_d' => '2 e 1.',
            'opcao_e' => '4 e 1.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Em uma indústria produtora de celulose, estão instalados dois Motores de Indução Trifásicos (MIT) de 4 polos, 440 V e 60 Hz, que operam simultaneamente em processos análogos de transferência de fluidos. Ambos os motores acionam cargas idênticas, que requerem 75 cv de potência mecânica no eixo de cada motor.</p>
                <div class="flex justify-center mb-4 text-sm">
                    <table class="border-collapse border border-gray-400 text-center">
                        <thead>
                            <tr>
                                <th class="border border-gray-400 px-3 py-1">Dados</th>
                                <th class="border border-gray-400 px-3 py-1">Motor 1</th>
                                <th class="border border-gray-400 px-3 py-1">Motor 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border border-gray-400 px-3 py-1">Potência nominal - P<sub>nom</sub> (cv)</td><td class="border border-gray-400 px-3 py-1">75</td><td class="border border-gray-400 px-3 py-1">100</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">Tensão nominal - V<sub>nom</sub> (V)</td><td class="border border-gray-400 px-3 py-1">220 / 380 / 440</td><td class="border border-gray-400 px-3 py-1">220 / 380 / 440</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">Corrente nominal - I<sub>nom</sub> (A)</td><td class="border border-gray-400 px-3 py-1">182 / 105 / 91</td><td class="border border-gray-400 px-3 py-1">174 / 101 / 87</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">Velocidade nominal - N<sub>nom</sub> (rpm)</td><td class="border border-gray-400 px-3 py-1">1 780</td><td class="border border-gray-400 px-3 py-1">1 775</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">Rendimento &eta; (%) a 50% da P<sub>nom</sub></td><td class="border border-gray-400 px-3 py-1">94</td><td class="border border-gray-400 px-3 py-1">90</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">Rendimento &eta; (%) a 75% da P<sub>nom</sub></td><td class="border border-gray-400 px-3 py-1">95</td><td class="border border-gray-400 px-3 py-1">92</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">Rendimento &eta; (%) a 100% da P<sub>nom</sub></td><td class="border border-gray-400 px-3 py-1">96</td><td class="border border-gray-400 px-3 py-1">94</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">Fator de potência fp a 50% da P<sub>nom</sub></td><td class="border border-gray-400 px-3 py-1">0,70</td><td class="border border-gray-400 px-3 py-1">0,75</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">Fator de potência fp a 75% da P<sub>nom</sub></td><td class="border border-gray-400 px-3 py-1">0,80</td><td class="border border-gray-400 px-3 py-1">0,85</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">Fator de potência fp a 100% da P<sub>nom</sub></td><td class="border border-gray-400 px-3 py-1">0,85</td><td class="border border-gray-400 px-3 py-1">0,90</td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir das informações do quadro e considerando o consumo de energia elétrica dos motores 1 e 2, avalie as afirmações a seguir.</p>
                <p class="mb-2 pl-6 text-justify">I. O motor 1 é mais eficiente porque apresenta um rendimento de 4 pontos percentuais superior ao do motor 2.</p>
                <p class="mb-2 pl-6 text-justify">II. Como a corrente nominal requerida pelo motor 2 é menor do que a corrente nominal requerida pelo motor 1, então, as perdas de energia no motor 1 serão maiores.</p>
                <p class="mb-2 pl-6 text-justify">III. O consumo de energia elétrica do motor 2 é 4,3% maior do que o consumo de energia elétrica do motor 1.</p>
                <p class="mb-2 text-justify">É correto o que se afirma em:</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'II, apenas.',
            'opcao_c' => 'I e III, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Sabendo que novas tecnologias são predominantemente realizadas no domínio digital (ou discreto) em oposição ao tradicional domínio analógico (ou contínuo), considere que, no teste de seu algoritmo, um pesquisador precisa gerar um sinal no domínio discreto que consiste na soma de duas senoides de amplitude 1 e frequências 50 Hz e 100 Hz, adotando a frequência de amostragem de 500 Hz.</p>
                <p class="mb-2 text-justify">A expressão para obter x[n] é da forma:</p>
                <p class="mb-2 text-center"><em>x[n] = sen(2&pi; f<sub>1</sub>/f<sub>2</sub> &middot; n) + sen(2&pi; f<sub>3</sub>/f<sub>4</sub> &middot; n)</em>, com <em>n = 0, 1, 2, ..., N&minus;1</em>.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nesses dados e informações, assinale a opção que apresenta os valores das frequências, em Hz, que reproduzem corretamente o sinal desejado x[n].</p>
            ',
            'referencia' => '',
            'opcao_a' => 'f<sub>1</sub> = 50; f<sub>2</sub> = 100; f<sub>3</sub> = 100; f<sub>4</sub> = 50.',
            'opcao_b' => 'f<sub>1</sub> = 50; f<sub>2</sub> = 100; f<sub>3</sub> = 500; f<sub>4</sub> = 500.',
            'opcao_c' => 'f<sub>1</sub> = 100; f<sub>2</sub> = 50; f<sub>3</sub> = 500; f<sub>4</sub> = 500.',
            'opcao_d' => 'f<sub>1</sub> = 100; f<sub>2</sub> = 500; f<sub>3</sub> = 50; f<sub>4</sub> = 500.',
            'opcao_e' => 'f<sub>1</sub> = 500; f<sub>2</sub> = 100; f<sub>3</sub> = 500; f<sub>4</sub> = 50.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">As emissoras de TV brasileiras passaram por um processo de transição do sinal analógico para o digital. Os dados digitais podem ser processados e transmitidos com muito mais eficiência e confiança se comparados com a transmissão de dados analógicos.</p>
                <p class="mb-2 text-justify">A figura a seguir apresenta um diagrama de blocos simplificado do processo de conversão do sinal analógico em digital (conversor A/D), com uma proposta de amostragem:</p>
                <p class="mb-2 text-center"><em>Sinal Analógico &rarr; Filtro Anti-Aliasing &rarr; Amostragem (S/H) &rarr; Quantização &rarr; Codificação &rarr; Sinal Digital</em></p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas, avalie as afirmações a seguir.</p>
                <p class="mb-2 pl-6 text-justify">I. O filtro anti-aliasing foi utilizado no diagrama para retirar as baixas frequências indesejadas, de modo que não interfiram no sinal digitalizado.</p>
                <p class="mb-2 pl-6 text-justify">II. O circuito eletrônico mostrado na figura é um Sample &amp; Hold (S/H), que realiza uma amostragem periódica do sinal analógico e o mantém estável até que o conversor possa convertê-lo para um código digital.</p>
                <p class="mb-2 pl-6 text-justify">III. Caso um sinal com componentes de frequência de 750 Hz seja amostrado a uma frequência de 1 kHz, será obtido um sinal digitalizado e passível de reconstrução.</p>
                <p class="mb-2 pl-6 text-justify">IV. Na etapa de amostragem, ocorre a conversão da escala de tempo contínuo para tempo discreto; já na etapa de quantização, o eixo de tensão divide-se em valores discretos finitos.</p>
                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'II e IV.',
            'opcao_c' => 'III e IV.',
            'opcao_d' => 'I, II e III.',
            'opcao_e' => 'I, III e IV.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">As equações diferenciais são utilizadas para modelagem matemática de problemas em diversas áreas. Na Engenharia Elétrica, especificamente na área de Sistemas Elétricos de Potência, são empregados vários métodos numéricos para a solução das equações diferenciais, com destaque para os métodos de Runge-Kutta, Euler e Euler Melhorado.</p>
                <p class="mb-2 text-justify">A estrutura algorítmica a seguir emprega o método de Euler para solução de uma equação diferencial:</p>
                <div style="color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">
                    <p class="mb-0 text-justify">início</p>
                    <p class="mb-0 pl-4 text-justify">dt = 0,5</p>
                    <p class="mb-0 pl-4 text-justify">t = 0</p>
                    <p class="mb-0 pl-4 text-justify">tf = 12</p>
                    <p class="mb-0 pl-4 text-justify">x(0) = 10,0</p>
                    <p class="mb-0 pl-4 text-justify">enquanto 0 &lt;= t &lt;= tf</p>
                    <p class="mb-0 pl-8 text-justify">k1 = - 1/4 * x(t) + 1</p>
                    <p class="mb-0 pl-8 text-justify">x(t + dt) = x(t) + k1 * dt</p>
                    <p class="mb-0 pl-8 text-justify">t = t + dt</p>
                    <p class="mb-0 pl-4 text-justify">fim enquanto</p>
                    <p class="mb-0 text-justify">fim</p>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nessas informações, após a execução desse algoritmo, os dois primeiros valores para cada uma das variáveis t e x serão, respectivamente,</p>
            ',
            'referencia' => '',
            'opcao_a' => '0,0 e 0,5; 9,25 e 10,0.',
            'opcao_b' => '0,0 e 0,5; 10,0 e 9,25.',
            'opcao_c' => '0,5 e 12,0; 0,0 e 0,0.',
            'opcao_d' => '10,0 e 9,25; 0,5 e 12,0.',
            'opcao_e' => '12,0 e 0,5; 0,25 e 12,0.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Em aplicações motoras de pequeno porte, o Motor de Corrente Contínua (MCC) é um dos equipamentos mais utilizados. O circuito a seguir tem a função de inverter o sentido de rotação do MCC, utilizando uma ponte H de transistores. A inversão do sentido do motor é realizada pela chave S.</p>
                <p class="mb-2 text-justify">O circuito conta com quatro transistores T1, T2, T3 e T4 dispostos em ponte H, com resistores de 2,2 k&Omega; nas bases de T1 e T2. A chave S pode ser posicionada em GND (referência) ou em +Vcc.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Na situação apresentada na figura, com a chave S em GND (referência), quais transistores estarão em saturação?</p>
            ',
            'referencia' => 'Disponível em: &lt;http://www.newtoncbraga.com.br&gt;. Acesso em: 8 jun. 2019 (adaptado).',
            'opcao_a' => 'T2 e T3.',
            'opcao_b' => 'T2 e T4.',
            'opcao_c' => 'T1 e T2.',
            'opcao_d' => 'T1 e T3.',
            'opcao_e' => 'T1 e T4.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Um processo a ser controlado em uma planta industrial pode ser modelado pela seguinte função de transferência em malha aberta:</p>
                <p class="mb-2 text-center"><em>G(s) = 15 / (s(s + 2)(s + 4))</em></p>
                <p class="mb-2 text-justify">Considere que o sistema de controle em malha fechada seja resultante da aplicação de uma realimentação unitária negativa a essa planta e que esse sistema seja submetido a uma excitação de entrada na forma de um degrau unitário.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nessa situação, avalie as afirmações a seguir.</p>
                <p class="mb-2 pl-6 text-justify">I. O sistema em malha fechada possui um polo em s = &minus; 2.</p>
                <p class="mb-2 pl-6 text-justify">II. A saída do sistema apresenta erro estacionário em regime permanente nulo.</p>
                <p class="mb-2 pl-6 text-justify">III. O sistema em malha fechada é estável.</p>
                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'II, apenas.',
            'opcao_c' => 'I e III, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">O termo SWOT é um acrônimo das palavras <em>strengths, weaknesses, opportunities</em> e <em>threats</em>, que significam, respectivamente: forças, fraquezas, oportunidades e ameaças. A análise SWOT é uma ferramenta estrutural da administração, geralmente aplicada durante o planejamento estratégico com a finalidade de avaliar os ambientes internos e externos e formular estratégias de negócios para empresas.</p>
                <p class="mb-2 text-justify">Determinada empresa de serviços de engenharia está realizando, no planejamento estratégico, a análise de seus ambientes de atuação. A variação cambial foi identificada como fator que afeta o ambiente de negócios da empresa em função das compras periódicas de equipamentos e componentes importados para composição de sistemas fotovoltaicos.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, a variação cambial é uma</p>
            ',
            'referencia' => '',
            'opcao_a' => 'força e uma ameaça.',
            'opcao_b' => 'ameaça e uma fraqueza.',
            'opcao_c' => 'oportunidade e uma força.',
            'opcao_d' => 'oportunidade e uma ameaça.',
            'opcao_e' => 'oportunidade e uma fraqueza.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">No âmbito das comunicações móveis celulares, a propagação do sinal no canal sem fio é de extrema importância, pois seu desempenho estará diretamente associado à qualidade da informação entregue ao usuário. A análise da variação da taxa de erro de bit em função da relação sinal-ruído é um item importante para a validação de uma tecnologia.</p>
                <p class="mb-2 text-justify">O gráfico ilustra a variação da taxa de erro de bit em função da relação sinal-ruído, considerando-se a modulação BPSK (Binary Phase Shift Keying) para dois tipos de canais: canal AWGN (Additive White Gaussian Noise) e o canal Rayleigh.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Tendo como base o gráfico e considerando o desempenho da modulação BPSK nos dois tipos de canais, avalie as afirmações a seguir.</p>
                <p class="mb-2 pl-6 text-justify">I. O desempenho de uma informação transmitida no canal AWGN é melhor que a transmitida no canal Rayleigh.</p>
                <p class="mb-2 pl-6 text-justify">II. A transmissão em canais AWGN torna-se inviável quando a relação sinal-ruído está acima de 10 dB.</p>
                <p class="mb-2 pl-6 text-justify">III. Quanto maior a relação sinal-ruído utilizada, melhor será o desempenho obtido com a transmissão dos dados.</p>
                <p class="mb-2 pl-6 text-justify">IV. Independentemente do tipo de canal, taxas de erro de bit próximas a 10<sup>&minus;1</sup> são preferíveis a taxas de erro próximas a 10<sup>&minus;5</sup>.</p>
                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e III, apenas.',
            'opcao_b' => 'I e IV, apenas.',
            'opcao_c' => 'II e III, apenas.',
            'opcao_d' => 'II e IV, apenas.',
            'opcao_e' => 'I, II, III e IV.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">O Controlador Lógico Programável (CLP) é um equipamento de controle bastante utilizado no setor industrial, sobretudo em sistemas de acionamentos, controle de processos, manipulação de temperatura, pressão, vazão, nível, entre outras grandezas. Uma das linguagens mais utilizadas para a programação dos CLP é a <em>Ladder</em>, por sua similaridade aos comandos lógicos e circuitos baseados em relés. O Mapa de Karnaugh fornece um método para simplificar as expressões booleanas de sistemas combinacionais, por meio do qual se obtém sistemas de controle mais simples e baratos.</p>
                <p class="mb-2 text-justify">A figura a seguir mostra um sistema que utiliza o Mapa de Karnaugh com quatro variáveis de entrada: A, B, C e D, cuja combinação resulta na saída S.</p>
                <div class="flex justify-center mb-4 text-sm text-center">
                    <table class="border-collapse border border-gray-400">
                        <thead>
                            <tr>
                                <th class="border border-gray-400 px-3 py-1">AB \ CD</th>
                                <th class="border border-gray-400 px-3 py-1">00</th>
                                <th class="border border-gray-400 px-3 py-1">01</th>
                                <th class="border border-gray-400 px-3 py-1">11</th>
                                <th class="border border-gray-400 px-3 py-1">10</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-400 px-3 py-1">00</td>
                                <td class="border border-gray-400 px-3 py-1">1</td>
                                <td class="border border-gray-400 px-3 py-1"></td>
                                <td class="border border-gray-400 px-3 py-1"></td>
                                <td class="border border-gray-400 px-3 py-1">1</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-400 px-3 py-1">01</td>
                                <td class="border border-gray-400 px-3 py-1">1</td>
                                <td class="border border-gray-400 px-3 py-1">1</td>
                                <td class="border border-gray-400 px-3 py-1"></td>
                                <td class="border border-gray-400 px-3 py-1">1</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-400 px-3 py-1">11</td>
                                <td class="border border-gray-400 px-3 py-1">1</td>
                                <td class="border border-gray-400 px-3 py-1">1</td>
                                <td class="border border-gray-400 px-3 py-1"></td>
                                <td class="border border-gray-400 px-3 py-1">1</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-400 px-3 py-1">10</td>
                                <td class="border border-gray-400 px-3 py-1">1</td>
                                <td class="border border-gray-400 px-3 py-1"></td>
                                <td class="border border-gray-400 px-3 py-1">1</td>
                                <td class="border border-gray-400 px-3 py-1">1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Aplicando-se a simplificação por meio do Mapa de Karnaugh, qual representação em diagramas na linguagem <em>Ladder</em> se obtém?</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Diagrama com ramos: (A, B&#772;, C) em série; (B, C&#772;) em série; (D&#772;) — saída S.',
            'opcao_b' => 'Diagrama com ramos: (A, B&#772;, C&#772;) em série; (B, C&#772;) em série; (D&#772;) — saída S.',
            'opcao_c' => 'Diagrama com ramos: (A, B&#772;, C&#772;) em série; (B, C&#772;) em série; (D&#772;) com contato normalmente fechado — saída S.',
            'opcao_d' => 'Diagrama com ramos: (A, B&#772;, C&#772;) em série; (B, C&#772;) em série; (D&#772;) em paralelo, todos com contatos normalmente fechados — saída S.',
            'opcao_e' => 'Diagrama com ramos: (A, B&#772;, C&#772;) em série, todos com contatos normalmente fechados; (B, C&#772;) em série; (D&#772;) — saída S.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Os indutores são encontrados em diversos tipos de sistemas, como veículos de tração elétrica, reguladores de tensão, fontes de computadores, etc. O comportamento da tensão média induzida nos terminais de um indutor de 10 mH, cuja corrente apresenta intervalos de variação linear, está representado em um gráfico com os seguintes valores de corrente I<sub>L</sub> (mA) ao longo do tempo t (ms):</p>
                <p class="mb-2 text-justify">A corrente vale 0 mA em t = 0 ms, sobe linearmente até 100 mA em t = 2 ms, mantém-se em 100 mA de t = 2 ms a t = 4 ms, desce linearmente de 100 mA a &minus;50 mA entre t = 4 ms e t = 8 ms, mantém-se em &minus;50 mA de t = 8 ms a t = 10 ms, e sobe linearmente de &minus;50 mA a 50 mA de t = 10 ms a t = 14 ms.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações do gráfico bem como os efeitos das Leis de Faraday e de Lenz aplicadas às bobinas indutoras, avalie as afirmações a seguir.</p>
                <p class="mb-2 pl-6 text-justify">I. No intervalo entre 2 ms e 4 ms, a tensão média induzida na bobina é 500 mV.</p>
                <p class="mb-2 pl-6 text-justify">II. No intervalo entre 4 ms e 6 ms, a tensão média induzida na bobina é 0 mV.</p>
                <p class="mb-2 pl-6 text-justify">III. No intervalo entre 6 ms e 8 ms, a tensão média induzida na bobina é 250 mV.</p>
                <p class="mb-2 pl-6 text-justify">IV. No intervalo entre 10 ms e 14 ms, a tensão média induzida na bobina é &minus;250 mV.</p>
                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'I e IV.',
            'opcao_c' => 'II e III.',
            'opcao_d' => 'I, III e IV.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Para a análise técnica de um Sistema Elétrico de Potência (SEP), é necessário o desenvolvimento de diversos estudos, abordando-se sua operação tanto em regime permanente quanto transitório.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com relação aos estudos realizados para análise técnica de um SEP, avalie as afirmações a seguir.</p>
                <p class="mb-2 pl-6 text-justify">I. Os estudos de fluxo de potência ou fluxo de carga têm por objetivo a obtenção das condições de operação da rede elétrica em função da sua topologia, dos níveis de demanda dos consumidores e da geração de potência.</p>
                <p class="mb-2 pl-6 text-justify">II. Os estudos de curto-circuito no SEP têm por finalidade determinar as tensões nas barras e as correntes em diversos pontos do sistema para diferentes tipos de faltas.</p>
                <p class="mb-2 pl-6 text-justify">III. Os estudos de estabilidade transitória avaliam o impacto de distúrbios no comportamento eletromecânico dinâmico dos geradores elétricos síncronos do SEP.</p>
                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'II, apenas.',
            'opcao_c' => 'I e III, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">A figura 1 ilustra uma situação típica em que um locutor tem sua voz amplificada e emitida por um alto-falante. O fenômeno conhecido como microfonia ocorre quando o som do alto-falante é captado pelo microfone e amplificado novamente sucessivas vezes, gerando um som agudo característico.</p>
                <p class="mb-2 text-justify">A figura 2 é um modelo do sistema onde G é o ganho do amplificador, R é a fração do som do alto-falante que atinge o microfone e T, em e<sup>&minus;sT</sup>, é o atraso de propagação do som do alto-falante ao microfone. Todos os parâmetros são constantes positivas. A microfonia ocorre quando esse sistema se torna instável.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, assinale a opção cuja condição provoca microfonia no sistema.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'GR &lt; T.',
            'opcao_b' => 'GR &gt; T.',
            'opcao_c' => 'GR &gt; 1/T.',
            'opcao_d' => 'GR &lt; 1.',
            'opcao_e' => 'GR &gt; 1.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">O retificador trifásico conhecido como Ponte de Graetz é um conversor de potência utilizado em aplicações de média e alta tensão. É empregado em sistemas de transmissão de alta tensão em corrente contínua, carregamento de baterias, processos de eletrólise, operação de motores de corrente contínua, fontes de potência controlada, sistemas de iluminação controlada e equipamentos de tração.</p>
                <p class="mb-2 text-justify">Na tabela a seguir, são listados os intervalos e as respectivas tensões geradas pelo circuito (retificador trifásico controlado em ponte, com carga resistiva, tiristores ideais e tensão eficaz de alimentação de linha igual a 220 V):</p>
                <div class="flex justify-center mb-4 text-sm">
                    <table class="border-collapse border border-gray-400 text-center">
                        <thead>
                            <tr>
                                <th class="border border-gray-400 px-3 py-1">Intervalo</th>
                                <th class="border border-gray-400 px-3 py-1">Grupo Positivo</th>
                                <th class="border border-gray-400 px-3 py-1">Grupo Negativo</th>
                                <th class="border border-gray-400 px-3 py-1">Tensão na Carga V<sub>L</sub></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border border-gray-400 px-3 py-1">30° a 90°</td><td class="border border-gray-400 px-3 py-1">V<sub>A</sub></td><td class="border border-gray-400 px-3 py-1">V<sub>B</sub></td><td class="border border-gray-400 px-3 py-1">V<sub>AB</sub></td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">90° a 150°</td><td class="border border-gray-400 px-3 py-1">V<sub>A</sub></td><td class="border border-gray-400 px-3 py-1">V<sub>C</sub></td><td class="border border-gray-400 px-3 py-1">V<sub>AC</sub></td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">150° a 210°</td><td class="border border-gray-400 px-3 py-1">V<sub>B</sub></td><td class="border border-gray-400 px-3 py-1">V<sub>C</sub></td><td class="border border-gray-400 px-3 py-1">V<sub>BC</sub></td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">210° a 270°</td><td class="border border-gray-400 px-3 py-1">V<sub>B</sub></td><td class="border border-gray-400 px-3 py-1">V<sub>A</sub></td><td class="border border-gray-400 px-3 py-1">V<sub>BA</sub></td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">270° a 330°</td><td class="border border-gray-400 px-3 py-1">V<sub>C</sub></td><td class="border border-gray-400 px-3 py-1">V<sub>A</sub></td><td class="border border-gray-400 px-3 py-1">V<sub>CA</sub></td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">330° a 390°</td><td class="border border-gray-400 px-3 py-1">V<sub>C</sub></td><td class="border border-gray-400 px-3 py-1">V<sub>B</sub></td><td class="border border-gray-400 px-3 py-1">V<sub>CB</sub></td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nessas informações, avalie as afirmações a seguir.</p>
                <p class="mb-2 pl-6 text-justify">I. A carga é submetida a uma tensão de fase e, na saída do circuito, acontece uma condução contínua.</p>
                <p class="mb-2 pl-6 text-justify">II. Os tiristores do grupo positivo são T1, T2 e T3; já os tiristores do grupo negativo são T4, T5 e T6.</p>
                <p class="mb-2 pl-6 text-justify">III. A tensão de saída apresenta uma variação de tensão (ripple) de 131,4801 V.</p>
                <p class="mb-2 pl-6 text-justify">IV. Os tiristores são disparados no ângulo &alpha; de 60º.</p>
                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'I e IV.',
            'opcao_c' => 'II e III.',
            'opcao_d' => 'I, III e IV.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Foi utilizado um banco de três transformadores monofásicos idênticos para substituir um transformador trifásico em uma instalação. Os dados de placa desses transformadores monofásicos foram parcialmente perdidos e não há informações sobre sua impedância de curto-circuito. O engenheiro responsável decidiu efetuar o ensaio de curto-circuito à frequência industrial de 60 Hz em um dos transformadores monofásicos que compõem o banco. Os valores medidos, tendo por referência o lado da fonte, estão na tabela a seguir.</p>
                <div class="flex justify-center mb-4 text-sm">
                    <table class="border-collapse border border-gray-400 text-center">
                        <thead>
                            <tr>
                                <th class="border border-gray-400 px-3 py-1">Grandezas</th>
                                <th class="border border-gray-400 px-3 py-1">Valores</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border border-gray-400 px-3 py-1">Potência ativa</td><td class="border border-gray-400 px-3 py-1">300 W</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">Corrente</td><td class="border border-gray-400 px-3 py-1">10 A</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">Tensão</td><td class="border border-gray-400 px-3 py-1">50 V</td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando-se essa situação e os dados apresentados na tabela, qual é o valor, em ohms, da impedância de curto-circuito do transformador monofásico, vista pelo lado da fonte?</p>
            ',
            'referencia' => '',
            'opcao_a' => '3 + j 4.',
            'opcao_b' => '3 + j 5.',
            'opcao_c' => '4 + j 3.',
            'opcao_d' => '4 + j 5.',
            'opcao_e' => '5 + j 0.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">No Estudo de Impacto Ambiental (EIA) são abordados os aspectos técnicos necessários à avaliação dos impactos ambientais a serem gerados pelo empreendimento. O EIA deve ser elaborado por equipe técnica multidisciplinar habilitada e deverá conter: análise dos impactos ambientais do projeto e de suas alternativas, por meio de identificação, previsão da magnitude e interpretação da importância dos prováveis impactos relevantes, discriminando: os impactos positivos e negativos (benéficos e adversos), diretos e indiretos, imediatos e a médio e longo prazos, temporários e permanentes; seu grau de reversibilidade; suas propriedades cumulativas e sinérgicas; a distribuição dos ônus e benefícios sociais.</p>
                <p class="text-sm text-right mb-4">Disponível em: &lt;http://www.pnla.mma.gov.br&gt;. Acesso em: 12 jun. 2019 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando esse contexto e os impactos ambientais oriundos de usinas hidroelétricas e suas barragens, avalie as afirmações a seguir.</p>
                <p class="mb-2 pl-6 text-justify">I. A proliferação de algas na superfície de rios e lagos por causas antropogênicas favorece a multiplicação de peixes.</p>
                <p class="mb-2 pl-6 text-justify">II. A hidroeletricidade é definida como uma fonte de energia livre de gases de efeito estufa.</p>
                <p class="mb-2 pl-6 text-justify">III. A implantação de hidroelétricas interfere no microclima local, provocando alterações na temperatura, na umidade relativa do ar, na evaporação e afetando o ciclo pluvial.</p>
                <p class="mb-2 pl-6 text-justify">IV. Os reservatórios de usinas hidroelétricas armazenam água da chuva que pode ser usada para consumo ou irrigação, protegendo os aquíferos contra o esgotamento e reduzindo a vulnerabilidade regional a inundações e secas.</p>
                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I.',
            'opcao_b' => 'II.',
            'opcao_c' => 'I e III.',
            'opcao_d' => 'II e IV.',
            'opcao_e' => 'III e IV.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Para solução de determinada tarefa de automação foi detectada a necessidade de se resolver um problema lógico para uma entrada ABC de 3 bits, sendo A o bit mais significativo. A saída y deve assumir nível lógico 1 quando a entrada ABC for par e maior que 4. Quando o valor ABC for menor que quatro, a saída y deve assumir o valor da expressão A &oplus; B. Caso ocorram situações não previstas, o valor da saída é irrelevante.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, qual das seguintes expressões booleanas soluciona o problema?</p>
            ',
            'referencia' => '',
            'opcao_a' => 'y = A&#772;B + BC',
            'opcao_b' => 'y = A&#772;B&#772; + BC',
            'opcao_c' => 'y = A&#772;B + BC + AC',
            'opcao_d' => 'y = A&#772;B&#772; + BC + AC',
            'opcao_e' => 'y = A&#772;B + BC + A&#772;C',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">A correta interpretação dos principais valores que caracterizam o motor de indução é essencial tanto na especificação de novos motores como também para fins de substituição desse motor.</p>
                <p class="mb-2 text-justify">Para realizar a análise de desempenho de um motor trifásico de indução, rotor de gaiola, 50 HP, 220/380V, 60 Hz e 4 polos, o engenheiro responsável teve acesso a um gráfico disponibilizado por um fabricante, em que se apresentam quatro curvas características em função da potência desse motor: rendimento (A), fator de potência (B), escorregamento (C) e corrente (D). As curvas foram traçadas para o intervalo de 0% a 130% da potência nominal.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nos dados apresentados e assumindo que esse motor é alimentado com tensão e frequência nominal, avalie as afirmações a seguir.</p>
                <p class="mb-2 pl-6 text-justify">I. Se o motor operar abaixo de 60% da carga nominal, isso implicará em um fator de potência inferior a 0,8.</p>
                <p class="mb-2 pl-6 text-justify">II. O escorregamento desse motor sem carga mecânica no seu eixo é de aproximadamente 1,0.</p>
                <p class="mb-2 pl-6 text-justify">III. A corrente do motor sem carga mecânica no seu eixo é de aproximadamente um terço da corrente nominal.</p>
                <p class="mb-2 pl-6 text-justify">IV. O motor obtém o maior rendimento na faixa de operação que vai de 80% a 100% da carga nominal.</p>
                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'Disponível em: &lt;http://www.ecatalog.weg.net&gt;. Acesso em: 15 jul. 2014 (adaptado).',
            'opcao_a' => 'IV, apenas.',
            'opcao_b' => 'I e II, apenas.',
            'opcao_c' => 'I e III, apenas.',
            'opcao_d' => 'II, III e IV, apenas.',
            'opcao_e' => 'I, II, III e IV.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Os nanotubos de carbono, elementos com comprimentos de um bilionésimo do metro, oferecem elevada condutividade elétrica à temperatura ambiente. Segundo pesquisadores, um nanotubo de carbono seria até 70 vezes melhor condutor que o silício. A mobilidade dos elétrons é um dos principais componentes da condutividade elétrica. Considerando-se um aglomerado de nanotubos de carbono da ordem de 0,3 milímetros, à temperatura ambiente (aproximadamente 300 K), a mobilidade eletrônica média nesses nanotubos alcança 100 000 cm² V<sup>&minus;1</sup>s<sup>&minus;1</sup>.</p>
                <p class="mb-2 text-justify">Considere que a condutividade para o silício intrínseco é dada por &sigma; = n<sub>i</sub>|e|(&mu;<sub>e</sub> + &mu;<sub>l</sub>), em que n<sub>i</sub> é a concentração de portadores intrínsecos, |e| é o módulo da carga de um elétron, &mu;<sub>e</sub> e &mu;<sub>l</sub> são as mobilidades dos elétrons e das lacunas, respectivamente. Os parâmetros do silício à temperatura ambiente são:</p>
                <ul class="mb-2 pl-6 list-disc">
                    <li>&sigma; = 4,16 &times; 10<sup>&minus;4</sup> (&Omega;m)<sup>&minus;1</sup></li>
                    <li>n<sub>i</sub> = 10<sup>16</sup> m<sup>&minus;3</sup></li>
                    <li>&mu;<sub>l</sub> = 0,06 m² V<sup>&minus;1</sup>s<sup>&minus;1</sup></li>
                </ul>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">De acordo com as informações apresentadas e considerando a temperatura ambiente, quantas vezes maior é a mobilidade eletrônica nos nanotubos de carbono comparada à mobilidade eletrônica no silício?</p>
            ',
            'referencia' => 'Disponível em: &lt;http://www.lqes.iqm.unicamp.br&gt;. Acesso em: 9 jun. 2019 (adaptado).',
            'opcao_a' => '20.',
            'opcao_b' => '35.',
            'opcao_c' => '45.',
            'opcao_d' => '50.',
            'opcao_e' => '70.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">A Transformada de Fourier é uma ferramenta matemática aplicada em diversas áreas do conhecimento. Em sua versão discreta, é aplicada, por exemplo, no tratamento de dados da exploração de petróleo, na codificação do sinal de voz e na TV digital.</p>
                <p class="mb-2 text-justify">A Transformada Discreta de Fourier (TDF) de uma sequência de N de valores x[n], com n = 0, 1, 2,..., N &minus; 1, é dada pela expressão:</p>
                <p class="mb-2 text-center"><em>X[k] = &sum;<sub>n=0</sub><sup>N&minus;1</sup> x[n] e<sup>&minus;j(2&pi;/N)nk</sup></em>, com k = 0, 1, 2, ..., N &minus; 1.</p>
                <p class="mb-2 text-justify">Dada uma sequência x[n] de N valores reais, o seguinte pseudocódigo implementa a obtenção da parte real X[k] para um dado valor k:</p>
                <div style="color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">
                    <p class="mb-0 text-justify">função CALCULAR_TDF (vetor x[ ], k)</p>
                    <p class="mb-0 pl-4 text-justify">pi = 3.14159</p>
                    <p class="mb-0 pl-4 text-justify">n = 0</p>
                    <p class="mb-0 pl-4 text-justify">xk = 0</p>
                    <p class="mb-0 pl-4 text-justify">enquanto 0 &lt;= n &lt; N</p>
                    <p class="mb-0 pl-8 text-justify">xk = xk + <strong>/**/</strong></p>
                    <p class="mb-0 pl-8 text-justify">n = n + 1</p>
                    <p class="mb-0 pl-4 text-justify">fim enquanto</p>
                    <p class="mb-0 text-justify">retorna xk</p>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Para que o pseudocódigo acima calcule corretamente a parte real de X[k], escolha a opção abaixo que deverá ser empregada no lugar dos caracteres /**\/.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'x[n] * sen(2*pi/N*n*k)',
            'opcao_b' => 'x[n] * cos(2*pi/N*n*k)',
            'opcao_c' => 'x[k] * sen(2*pi/N*n*k)',
            'opcao_d' => 'x[k] * cos(2*pi/N*n*k)',
            'opcao_e' => '-x[k] * sen(2*pi/N*n*k)',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">A figura a seguir ilustra a magnitude do espectro de frequência de um sinal analógico que deverá ser amostrado e analisado digitalmente. Sabe-se que esse sinal tem seu espectro de frequência maior do que 0 Hz e menor do que 50 Hz. Sabe-se, também, da existência de ruído entre 58 Hz e 62 Hz, que poderá afetar o processo de amostragem.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Para atenuar o ruído e, posteriormente, amostrar o sinal obedecendo o critério de Nyquist, a frequência de corte f<sub>c</sub> de um filtro passa-baixa ideal e a frequência de amostragem f<sub>a</sub> serão, respectivamente,</p>
            ',
            'referencia' => '',
            'opcao_a' => '50 Hz e 50 Hz.',
            'opcao_b' => '50 Hz e 120 Hz.',
            'opcao_c' => '58 Hz e 62 Hz.',
            'opcao_d' => '62 Hz e 62 Hz.',
            'opcao_e' => '62 Hz e 120 Hz.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Elétrica',
            'ano' => 2019,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Dado que a exposição prolongada a campos eletromagnéticos pode causar males à saúde, a Lei n. 11.934/2009 estabeleceu os limites recomendados segundo a Organização Mundial de Saúde para a exposição ocupacional e a exposição da população em geral a campos elétricos, magnéticos e eletromagnéticos em frequências de até 300 GHz.</p>
                <p class="mb-2 text-justify">Os níveis de referência para campo elétrico (valores eficazes) em baixas frequências são apresentados na tabela a seguir:</p>
                <div class="flex justify-center mb-4 text-sm">
                    <table class="border-collapse border border-gray-400 text-center">
                        <thead>
                            <tr>
                                <th class="border border-gray-400 px-3 py-1" colspan="2">Para exposição ocupacional</th>
                                <th class="border border-gray-400 px-3 py-1" colspan="2">Para exposição do público em geral</th>
                            </tr>
                            <tr>
                                <th class="border border-gray-400 px-3 py-1">Faixa de frequência</th>
                                <th class="border border-gray-400 px-3 py-1">Campo E (kV/m)</th>
                                <th class="border border-gray-400 px-3 py-1">Faixa de frequência</th>
                                <th class="border border-gray-400 px-3 py-1">Campo E (kV/m)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border border-gray-400 px-2 py-1">1 Hz &ndash; 8 Hz</td><td class="border border-gray-400 px-2 py-1">20</td><td class="border border-gray-400 px-2 py-1">1 Hz &ndash; 8 Hz</td><td class="border border-gray-400 px-2 py-1">5</td></tr>
                            <tr><td class="border border-gray-400 px-2 py-1">8 Hz &ndash; 25 Hz</td><td class="border border-gray-400 px-2 py-1">20</td><td class="border border-gray-400 px-2 py-1">8 Hz &ndash; 25 Hz</td><td class="border border-gray-400 px-2 py-1">5</td></tr>
                            <tr><td class="border border-gray-400 px-2 py-1">25 Hz &ndash; 300 Hz</td><td class="border border-gray-400 px-2 py-1">500/f</td><td class="border border-gray-400 px-2 py-1">25 Hz &ndash; 50 Hz</td><td class="border border-gray-400 px-2 py-1">5</td></tr>
                            <tr><td class="border border-gray-400 px-2 py-1">300 Hz &ndash; 3 kHz</td><td class="border border-gray-400 px-2 py-1">500/f</td><td class="border border-gray-400 px-2 py-1">50 Hz &ndash; 400 Hz</td><td class="border border-gray-400 px-2 py-1">250/f</td></tr>
                            <tr><td class="border border-gray-400 px-2 py-1">3 kHz &ndash; 10 MHz</td><td class="border border-gray-400 px-2 py-1">0,17</td><td class="border border-gray-400 px-2 py-1">400 Hz &ndash; 3 kHz</td><td class="border border-gray-400 px-2 py-1">250/f</td></tr>
                            <tr><td class="border border-gray-400 px-2 py-1"></td><td class="border border-gray-400 px-2 py-1"></td><td class="border border-gray-400 px-2 py-1">3 kHz &ndash; 10 MHz</td><td class="border border-gray-400 px-2 py-1">0,083</td></tr>
                        </tbody>
                    </table>
                </div>
                <p class="mb-2 text-justify">Uma linha de transmissão de alta tensão operando em 60 Hz, localizada em uma região urbana, apresentou níveis de campo elétrico da ordem de 4,5 kV/m, medidos a 1,0 metro do solo. Além disso, foi detectada a existência de uma componente de 7ª harmônica, cujo campo elétrico resultante foi de 0,4 kV/m, também medido a 1,0 metro do solo.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nessa situação e nas informações apresentadas, é correto afirmar que, na frequência de 60 Hz, considerando-se</p>
            ',
            'referencia' => 'Disponível em: &lt;https://www.icnirp.org/en/publications/index.html&gt;. Acesso em: 19 ago. 2019 (adaptado).',
            'opcao_a' => 'o público em geral, o campo elétrico não atingiu os limites de exposição estabelecidos.',
            'opcao_b' => 'o público em geral, o campo elétrico não atingiu o limite recomendado, ao passo que o componente harmônico ultrapassou o limite previsto na tabela.',
            'opcao_c' => 'o público em geral, o campo elétrico ultrapassou o limite recomendado, ao passo que o componente harmônico não ultrapassou o limite estabelecido.',
            'opcao_d' => 'a exposição ocupacional, o campo elétrico não atingiu o limite recomendado, ao passo que o componente harmônico ultrapassou o limite previsto.',
            'opcao_e' => 'a exposição ocupacional, o campo elétrico ultrapassou o limite recomendado, ao passo que o componente harmônico não ultrapassou o limite estabelecido.',
            'alternativa_correta' => 'C',
        ]);
    }
}
