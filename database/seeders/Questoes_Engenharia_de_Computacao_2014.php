<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class Questoes_Engenharia_de_Computacao_2014 extends Seeder
{
    public function run(): void
    {
        // =====================================================================
        // COMPONENTE ESPECÍFICO — Núcleo de Conteúdos Básicos (Questões 09–18)
        // =====================================================================

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Suponha que a distância percorrida por um ciclista que pedala regularmente pode ser inferida pela variável aleatória <i>x</i>, com densidade de probabilidade normal,</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <p class="text-center text-base">
                            f(x; &mu;, &sigma;&sup2;) = <sup>1</sup>&frasl;<sub>&radic;(2&pi;&sigma;&sup2;)</sub> e<sup>&minus;(x&minus;&mu;)&sup2; / (2&sigma;&sup2;)</sup>
                        </p>
                    </div>
                </div>

                <p class="mb-2 text-justify">com &mu; = 25 km e &sigma;&sup2; = 25 km&sup2;. A duração média do seu treino é de 1h15min.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nesses dados, avalie as afirmações abaixo.</p>

                <p class="mb-2 pl-6 text-justify">I. A velocidade média de cada treino é de 21,7 km/h.</p>
                <p class="mb-2 pl-6 text-justify">II. A distância média percorrida em cada treino é de 25 km.</p>
                <p class="mb-2 pl-6 text-justify">III. A área média percorrida em cada treino é de 25 km².</p>
                <p class="mb-2 pl-6 text-justify">IV. A distância percorrida de cada treino, em um desvio-padrão, está entre 20 km e 30 km.</p>
                <p class="mb-2 pl-6 text-justify">V. A velocidade média de cada treino, em um desvio-padrão, está entre 16 km/h e 24 km/h.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I.',
            'opcao_b' => 'I e IV.',
            'opcao_c' => 'II e III.',
            'opcao_d' => 'III e V.',
            'opcao_e' => 'II, IV e V.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Denominam-se cargas os elementos de um circuito elétrico que se opõem à passagem de corrente elétrica. Essencialmente, distinguem-se três tipos de cargas: resistivas, capacitivas e indutivas. As cargas resistivas dissipam energia, enquanto as puramente capacitivas ou puramente indutivas são consideradas armazenadoras de energia.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <p class="text-center text-sm italic">[Circuito com fonte de 12 V, capacitor de 1 F, indutor de 1 H e lâmpadas L1, L2 e L3 de 12 V/6 W]</p>
                    </div>
                </div>

                <p class="mb-2 text-justify">Se o circuito mostrado acima é alimentado por uma fonte de tensão contínua de 12 V e as lâmpadas são de 12 V/6 W, observa-se que, em regime permanente,</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'as três lâmpadas, L1, L2 e L3, ficarão apagadas, pois lâmpadas incandescentes só operam com corrente alternada.',
            'opcao_b' => 'somente L2 e L3 ficarão acesas, pois a corrente que passa em L2 é a soma das correntes em L3 e no indutor.',
            'opcao_c' => 'as três lâmpadas, L1, L2 e L3, ficarão acesas, pois estão ligadas à fonte de alimentação.',
            'opcao_d' => 'somente L2 ficará acesa, pois está em série com a fonte de alimentação.',
            'opcao_e' => 'somente L1 ficará acesa, pois está em série com o capacitor.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A DBO (Demanda Bioquímica de Oxigênio) de uma amostra de água é a quantidade de oxigênio necessária para oxidar a matéria orgânica por decomposição aeróbia. Quando a amostra é guardada por 5 dias em uma temperatura de incubação de 20°C, ela é referida como DBO<sub>5,20</sub>, que é normalmente utilizada como um dos parâmetros para verificação da qualidade da água.</p>

                <p class="mb-2 text-justify">O seguinte quadro classifica um curso d&#39;água em função da sua DBO<sub>5,20</sub>:</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <table class="w-full border border-collapse text-sm">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th class="border px-3 py-1">Classificação</th>
                                    <th class="border px-3 py-1">DBO<sub>5,20</sub> (mg/L)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td class="border px-3 py-1">Muito limpo</td><td class="border px-3 py-1">Até 1</td></tr>
                                <tr><td class="border px-3 py-1">Limpo</td><td class="border px-3 py-1">Maior que 1 até 2</td></tr>
                                <tr><td class="border px-3 py-1">Razoável</td><td class="border px-3 py-1">Maior que 2 até 4</td></tr>
                                <tr><td class="border px-3 py-1">Ruim</td><td class="border px-3 py-1">Maior que 4 até 6</td></tr>
                                <tr><td class="border px-3 py-1">Péssimo</td><td class="border px-3 py-1">Maior que 6</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <p class="mb-2 text-justify">A imagem abaixo mostra um trecho de um rio com 5 seções (X, Y, Z, W e T), em que são coletadas amostras de água para a determinação de DBO<sub>5,20</sub> em laboratório. Há três pontos de lançamento de esgoto ao longo do rio.</p>

                <p class="mb-2 text-justify">O quadro abaixo apresenta os resultados, em diferentes unidades, das amostras colhidas.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <table class="w-full border border-collapse text-sm">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th class="border px-3 py-1">Seção</th>
                                    <th class="border px-3 py-1">DBO<sub>5,20</sub></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td class="border px-3 py-1">X</td><td class="border px-3 py-1">0,4 g/m³</td></tr>
                                <tr><td class="border px-3 py-1">Y</td><td class="border px-3 py-1">3 850 mg/m³</td></tr>
                                <tr><td class="border px-3 py-1">Z</td><td class="border px-3 py-1">2 500 mg/m³</td></tr>
                                <tr><td class="border px-3 py-1">W</td><td class="border px-3 py-1">3 000 mg/m³</td></tr>
                                <tr><td class="border px-3 py-1">T</td><td class="border px-3 py-1">0,01 kg/m³</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando que pode ocorrer autodepuração no rio, em qual seção dele a água não pode ser classificada, no mínimo, como "razoável"?</p>
            ',
            'referencia' => '',
            'opcao_a' => 'X.',
            'opcao_b' => 'Y.',
            'opcao_c' => 'Z.',
            'opcao_d' => 'W.',
            'opcao_e' => 'T.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Um ambiente termicamente confortável é uma das condições que devem ser consideradas em projetos de edificações. A fim de projetar um ambiente interno com temperatura de 20°C para uma temperatura externa média de 35°C, um engenheiro considerou, no dimensionamento, um fluxo de calor através de uma parede externa de 105 W/m², com espessura de 20 cm.</p>

                <p class="mb-2 text-justify">A tabela a seguir apresenta os valores da condutividade térmica para alguns materiais de construção.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <table class="w-full border border-collapse text-sm">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th class="border px-3 py-1">Material</th>
                                    <th class="border px-3 py-1">Condutividade térmica &lambda; (W.m⁻¹.K⁻¹)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td class="border px-3 py-1">Concreto</td><td class="border px-3 py-1">1,40</td></tr>
                                <tr><td class="border px-3 py-1">Pedra natural</td><td class="border px-3 py-1">1,00</td></tr>
                                <tr><td class="border px-3 py-1">Placa de aglomerado de fibras de madeira</td><td class="border px-3 py-1">0,20</td></tr>
                                <tr><td class="border px-3 py-1">Placa de madeira prensada</td><td class="border px-3 py-1">0,10</td></tr>
                                <tr><td class="border px-3 py-1">Placa com espuma rígida de poliuretano</td><td class="border px-3 py-1">0,03</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A fim de se obter a temperatura interna desejada, qual deve ser o material selecionado, entre os apresentados na tabela acima, para composição da parede externa?</p>
            ',
            'referencia' => 'ASSOCIAÇÃO BRASILEIRA DE NORMAS TÉCNICAS. NBR 15220-1: Desempenho térmico de edificações — Parte 1: Definições, símbolos e unidades. Rio de Janeiro, 2005, p. 8 (adaptado).',
            'opcao_a' => 'Concreto.',
            'opcao_b' => 'Pedra natural.',
            'opcao_c' => 'Placa de madeira prensada.',
            'opcao_d' => 'Placa com espuma rígida de poliuretano.',
            'opcao_e' => 'Placa de aglomerado de fibras de madeira.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Engenheiros de uma empresa holandesa encontraram uma maneira de fazer com que os elevadores terrestres subam até o topo de edifícios com 1 000 metros de altura, pois os cabos de aço usados nos elevadores atuais só conseguem alçá-los a alturas de, aproximadamente, 500 metros. Isso será possível com a criação de um novo cabo superleve e superforte, ou seja, uma espécie de cinta, tecida com fibras de carbono. Em vez dos fios de aço entrelaçados usados nos cabos de aço comuns, a cinta é formada por quatro fitas de fibra de carbono seladas em plástico transparente. O plástico é necessário para proteger do atrito as fibras de carbono e aumentar a vida útil do conjunto. Cada fita tem 4 centímetros de largura por 4 milímetros de espessura. Elas são parecidas com uma régua escolar flexível. Esse novo material supera ligeiramente a resistência à tensão do aço, mas pesa sete vezes menos que o atualmente usado. Assim, a força gasta para sustentar o peso do próprio cabo passa a ser aplicada para sustentar apenas o elevador, e o consumo de energia dos elevadores também é cerca de 15% menor do que os anteriores.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Tendo em vista a situação descrita, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O cabo de fibra de carbono suporta elevadas cargas devido à sua elevada resistência à tração.</p>
                <p class="mb-2 pl-6 text-justify">II. A fibra de carbono torna o cabo bem mais flexível, o que, aliado a sua resistência à tração, proporciona a esse material uma vantagem em relação aos cabos de aço convencionais.</p>
                <p class="mb-2 pl-6 text-justify">III. A relação resistência/peso do cabo de fibra de carbono assegura vantagem desse material em relação aos cabos de aço, pois a economia do peso próprio do cabo pode ser usada para sustentar o elevador e reduzir o consumo de energia.</p>
                <p class="mb-2 pl-6 text-justify">IV. Apesar da resistência à tensão ser apenas ligeiramente maior no cabo de fibra de carbono, a vantagem principal de seu uso é a alta relação resistência/peso.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => 'Disponível em: &lt;http://www.inovacaotecnologica.com.br&gt;. Acesso em: 27 jul. 2014 (adaptado).',
            'opcao_a' => 'I.',
            'opcao_b' => 'II.',
            'opcao_c' => 'I e III.',
            'opcao_d' => 'II e IV.',
            'opcao_e' => 'III e IV.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O transporte de um fluido entre dois pontos no interior de um tubo ocorre simultaneamente, com perda de energia, devido ao atrito do fluido com a parede e ao escoamento turbulento. Portanto, quanto maior for a rugosidade da parede da tubulação ou mais viscoso for o fluido, maior será a perda de energia. A forma de determinação do fator de atrito foi estabelecida em 1939, por intermédio da equação de Colebrook-White, apresentada a seguir.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <p class="text-center text-base">
                            1/&radic;f = &minus;2 log<sub>10</sub> ( k/(3,7D) + 2,51/(Re &sdot; &radic;f) )
                        </p>
                    </div>
                </div>

                <p class="mb-2 text-justify">em que <i>f</i> é o fator de atrito de Darcy-Weisbach (adimensional); <i>k</i> é a rugosidade equivalente da parede do tubo (m); <i>D</i> é o diâmetro interno do tubo (m); Re é o número de Reynolds (adimensional).</p>

                <p class="mb-2 text-justify">A resolução dessa equação requer um processo iterativo, pois a função é implícita em relação ao fator de atrito (presente nos dois membros da equação). Em 1939, a resolução de equações por procedimentos iterativos demandava excesso de tempo, mas, com o desenvolvimento dos conhecimentos de computação, esse problema foi solucionado.</p>

                <p class="mb-2 text-justify">As etapas de um algoritmo que soluciona a equação, sem ordenação lógica, assim como seu fluxograma são apresentados a seguir.</p>

                <div class="flex justify-center mb-4 text-sm">
                    <div class="w-4/5 md:w-4/5">
                        <p class="mb-1">A) D = 1</p>
                        <p class="mb-1">B) f<sub>0</sub> = 0,03</p>
                        <p class="mb-1">C) Início</p>
                        <p class="mb-1">D) Cálculo de f<sub>1</sub> através da equação de Colebrook-White</p>
                        <p class="mb-1">E) |f<sub>0</sub> &minus; f<sub>1</sub>| &lt; 0,00001</p>
                        <p class="mb-1">F) Término</p>
                        <p class="mb-1">G) Re = 10 000</p>
                        <p class="mb-1">H) k = 0,0001</p>
                        <p class="mb-1">I) f<sub>0</sub> = f<sub>1</sub></p>
                        <p class="mb-1">J) Visualização do resultado</p>
                    </div>
                </div>

                <p class="mb-2 text-justify">O fluxograma possui 10 blocos numerados de 1 a 10, onde: blocos 1–5 são de entrada/inicialização (paralelogramos/retângulos), bloco 7 é um losango de decisão (com saída para o bloco 10 no caso verdadeiro), bloco 6 é um bloco de loop, blocos 8–9 são de processamento, e bloco 10 é a saída final.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nessas informações, verifica-se que a solução da equação é obtida pela seguinte associação das etapas do algoritmo com o fluxograma:</p>
            ',
            'referencia' => '',
            'opcao_a' => '1-C, 2-B, 3-H, 4-G, 5-A, 6-D, 7-E, 8-J, 9-I, 10-F.',
            'opcao_b' => '1-C, 2-H, 3-A, 4-G, 5-B, 6-D, 7-E, 8-J, 9-F, 10-I.',
            'opcao_c' => '1-C, 2-G, 3-A, 4-H, 5-B, 6-D, 7-J, 8-E, 9-I, 10-F.',
            'opcao_d' => '1-C, 2-A, 3-B, 4-H, 5-G, 6-D, 7-J, 8-E, 9-F, 10-I.',
            'opcao_e' => '1-C, 2-B, 3-G, 4-H, 5-A, 6-D, 7-E, 8-J, 9-I, 10-F.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Observe o programa classificador ("sort"), em pseudocódigo, apresentado abaixo.</p>

                <div class="flex justify-center mb-4 text-sm">
                    <div class="w-4/5 md:w-4/5 bg-gray-100 p-4 rounded font-mono text-xs">
                        <p>inicio</p>
                        <p>&nbsp;&nbsp;variavel &nbsp;texto &nbsp;nome[5]</p>
                        <p>&nbsp;&nbsp;variavel &nbsp;real &nbsp;&nbsp;nota[5]</p>
                        <p>&nbsp;&nbsp;variavel &nbsp;inteiro i, j</p>
                        <p>&nbsp;&nbsp;variavel &nbsp;real &nbsp;&nbsp;aux</p>
                        <p>&nbsp;&nbsp;variavel &nbsp;texto &nbsp;naux</p>
                        <p>&nbsp;&nbsp;para i de 1 até 5</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;escrever "Nome ", i, " = "</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;ler nome[i-1]</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;escrever "Nota ", i, " = "</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;ler nota[i-1]</p>
                        <p>&nbsp;&nbsp;proximo</p>
                        <p>&nbsp;&nbsp;para i de 0 até 4</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;para j de i+1 até 4</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;se nota[i]&lt;=nota[j] então</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;aux &larr; nota[i]</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nota[i] &larr; nota[j]</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nota[j] &larr; aux</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;naux &larr; nome[i]</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nome[i] &larr; nome[j]</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nome[j] &larr; naux</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fimSe</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;proximo</p>
                        <p>&nbsp;&nbsp;proximo</p>
                        <p>&nbsp;&nbsp;para i de 1 até 5</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;escrever nome[i-1], ": ", nota[i-1], "\n"</p>
                        <p>&nbsp;&nbsp;proximo</p>
                        <p>fim</p>
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Esse programa classifica, em ordem</p>
            ',
            'referencia' => '',
            'opcao_a' => 'decrescente, notas de alunos e nomes de alunos de mesma nota.',
            'opcao_b' => 'alfabética crescente, nomes e notas de alunos de mesmo nome.',
            'opcao_c' => 'decrescente, notas de alunos.',
            'opcao_d' => 'alfabética crescente, nomes de alunos.',
            'opcao_e' => 'crescente, notas de alunos.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Uma indústria de blocos cerâmicos pretende utilizar queima de biomassa resultante de resíduos de madeira, para gerar energia térmica para seus fornos, que, atualmente, utilizam gás natural. Tal iniciativa poderá reduzir o consumo de combustível, porém será necessário um investimento no valor de 20% do consumo/ano atual de combustível, visando à adaptação dos fornos. Além disso, o transporte anual dos resíduos da fonte geradora até a indústria irá custar 5% do consumo/ano atual de combustível. Estima-se que essa alteração promova uma economia, no consumo/ano atual de combustível, de 10% ao ano.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir da situação descrita, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A partir do quinto ano, a indústria começaria a ter benefícios econômicos.</p>
                <p class="mb-2 pl-6 text-justify">II. Na proposta apresentada, a indústria substituiria o combustível atual por uma fonte de energia com menor produção e emissão de partículas devido ao processo de combustão (particulados).</p>
                <p class="mb-2 pl-6 text-justify">III. Na proposta apresentada, a indústria substituiria o combustível atual por uma fonte renovável de energia.</p>
                <p class="mb-2 pl-6 text-justify">IV. O valor do investimento supera os benefícios promovidos com a economia de combustível durante os 5 primeiros anos.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'II.',
            'opcao_b' => 'IV.',
            'opcao_c' => 'I e II.',
            'opcao_d' => 'I e III.',
            'opcao_e' => 'III e IV.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Existem controvérsias acerca da magnitude dos fatores que influenciam o voto do eleitor. Embora, atualmente, as pesquisas eleitorais possam ser divulgadas próximo ao dia da eleição, durante muito tempo essa divulgação não era permitida sob a alegação de que as mesmas influenciavam a decisão de um tipo particular de eleitor, o qual desejava "votar no candidato ganhador" e tendia a votar nos candidatos cuja suposta probabilidade de vitória é maior, independentemente do conteúdo da proposta política apresentada.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-4/5 md:w-4/5">
                        <p class="text-center text-sm italic mb-2">Gráfico I — Porcentagem de Votos (eixo de 0 a 60%)</p>
                        <p class="text-center text-sm italic mb-4">Gráfico II — Porcentagem de Votos (eixo de 40 a 60%)</p>
                        <p class="text-center text-sm">Ambos os gráficos apresentam barras para Candidato A e Candidato B com os mesmos dados, porém com escalas diferentes no eixo horizontal.</p>
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando que o Candidato A esteja interessado no voto do tipo de eleitor mencionado no texto e esteja examinando os dois gráficos acima para apresentar, em seu material de propaganda, os resultados de uma pesquisa eleitoral, avalie as afirmações que se seguem.</p>

                <p class="mb-2 pl-6 text-justify">I. Os dois gráficos apresentam resultados diferentes.</p>
                <p class="mb-2 pl-6 text-justify">II. Em relação aos objetivos do Candidato A, o Gráfico I é mais adequado que o II.</p>
                <p class="mb-2 pl-6 text-justify">III. A decisão a ser tomada apresenta implicações de natureza ética, além das de natureza técnica.</p>

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

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">No Brasil, é comercializada uma cadeira de rodas de alumínio com peso aproximado de 12 kg, que representa cerca da metade do peso de um modelo convencional. Construída em estrutura tubular de uma liga de alumínio aeronáutico, essa cadeira de rodas possui alta resistência mecânica, além de ter custo reduzido.</p>

                <p class="mb-2 text-justify">O alumínio aeronáutico possui uma combinação única de propriedades que o torna um material de construção versátil, altamente utilizável e atrativo.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Essas características são devidas a quais propriedades?</p>
            ',
            'referencia' => 'Disponível em: &lt;http://www.hospitalar.com&gt;. Acesso em: 26 jul. 2014 (adaptado).',
            'opcao_a' => 'Alta resistência mecânica e baixa densidade.',
            'opcao_b' => 'Baixa plasticidade e alto ponto de fusão.',
            'opcao_c' => 'Alta dureza a quente e baixa dutilidade.',
            'opcao_d' => 'Baixa plasticidade e alta soldabilidade.',
            'opcao_e' => 'Alta dureza e alta densidade.',
            'alternativa_correta' => 'A',
        ]);

        // =====================================================================
        // COMPONENTE ESPECÍFICO — Núcleo de Conteúdos Profissionalizantes (19–35)
        // =====================================================================

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">De todas as propostas do Marco Civil da Internet, uma das mais polêmicas e importantes é a denominada "neutralidade da rede." O Marco Civil defende que não deve haver "pedágios" na internet, ou seja, nenhuma empresa poderá criar barreiras para algum tipo de conteúdo com qualquer tipo de interesse financeiro.</p>

                <p class="mb-2 text-justify">As empresas dizem que a neutralidade total mata a possibilidade de oferecer pacotes mais acessíveis. Os defensores do projeto, por outro lado, dizem que a não aprovação seria uma medida antipopular, que criaria mais exclusão social, impedindo que os mais pobres usem os serviços mais caros.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir das informações apresentadas e em relação à "neutralidade da rede", avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Com a lei da neutralidade da rede brasileira, o roteamento interno na rede de uma corporação deve tratar todos os protocolos ou serviços (como VoIP e SMTP) de modo igualitário.</p>
                <p class="mb-2 pl-6 text-justify">II. A mudança de cenário com a adoção da lei da neutralidade da rede é exemplo de como as empresas e profissionais de tecnologia devem estar continuamente se atualizando e estar prontos para readequar seus produtos e serviços aos novos requisitos técnicos e sociais.</p>
                <p class="mb-2 pl-6 text-justify">III. A lei brasileira da neutralidade da rede permite que um provedor de acesso à Internet, notando que seus usuários usam mais serviços de mensagens instantâneas que de transferências de arquivos, possa aumentar a prioridade do primeiro tráfego em relação ao do segundo para melhorar a satisfação de seus clientes.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'Disponível em: &lt;http://olhardigital.uol.com.br&gt;. Acesso em: 20 jul. 2014 (adaptado).',
            'opcao_a' => 'II, apenas.',
            'opcao_b' => 'III, apenas.',
            'opcao_c' => 'I e II, apenas.',
            'opcao_d' => 'I e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Os filtros digitais são parte importante do processamento digital de sinais, dada a versatilidade em sua implementação, que é feita por <i>software</i>. Esses filtros são classificados em resposta infinita ao impulso (IIR, ou recursivos) e resposta finita ao impulso (FIR, ou não recursivos), tendo cada classe vantagens e desvantagens bem definidas. Um exemplo de algoritmo em Portugol para um filtro digital é apresentado a seguir.</p>

                <div class="flex justify-center mb-4 text-sm">
                    <div class="w-4/5 md:w-4/5 bg-gray-100 p-4 rounded font-mono text-xs">
                        <p>algoritmo</p>
                        <p>&nbsp;&nbsp;defina u, x1, x2, y, numérico</p>
                        <p>&nbsp;&nbsp;x1 &larr; 0;</p>
                        <p>&nbsp;&nbsp;x2 &larr; 0;</p>
                        <p>&nbsp;&nbsp;repita</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;leia u;</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;y &larr; 2 * x1 &minus; x2;</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;x2 &larr; x1;</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;x1 &larr; u;</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;escreva y;</p>
                        <p>&nbsp;&nbsp;fim-repita</p>
                        <p>fim-algoritmo</p>
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir do algoritmo apresentado, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. O filtro digital do algoritmo é do tipo FIR.</p>
                <p class="mb-2 text-center font-bold">PORQUE</p>
                <p class="mb-2 pl-6 text-justify">II. O filtro digital do algoritmo não possui termo de transmissão direta.</p>

                <p class="mb-2 text-justify">A respeito dessas asserções, assinale a afirmação correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A compressão de dados pode ser realizada por intermédio de diversos algoritmos de compressão, reduzindo a quantidade de <i>bits</i> para representar um conjunto de dados. A compressão de imagem é a forma de armazenar informações visuais mais compactamente. A maioria desses métodos considera a identificação e o uso de estruturas e redundâncias que existem nos dados da imagem. Os tipos de redundância encontrados nas imagens são ligados à codificação de tons ou cor, redundância da informação inter-pixel, espectral e psicovisual.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A redundância de codificação de tons ou cor ocorre quando os níveis de cinza ou as cores de uma imagem são codificados com mais símbolos de codificação que o necessário. A redundância inter-pixel (redundâncias espaciais) são as resultantes das relações geométricas ou estruturais entre os objetos na imagem.</p>
                <p class="mb-2 pl-6 text-justify">II. A redundância espectral é a que ocorre em imagens com mais de uma faixa espectral, quando os valores espectrais para a mesma posição na matriz de pixels de cada banda são correlacionados. Nesse caso, apenas um canal precisa ser armazenado com mais detalhes.</p>
                <p class="mb-2 pl-6 text-justify">III. As redundâncias psicovisuais ou baseadas na percepção são aquelas relacionadas ao fato de o sistema visual humano responder com a mesma sensibilidade a todas as informações visuais. Tais informações não podem ser eliminadas sem prejudicar significativamente a qualidade da imagem.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'CONCI, A.; VELHO, A.; LETA, F. R. Computação Gráfica: teoria e prática. v. 2, Rio de Janeiro: Elsevier, 2008 (adaptado).',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'III, apenas.',
            'opcao_c' => 'I e II, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Dois conhecidos problemas de pesquisa operacional possuem uma ampla gama de aplicações em comunicação, transporte e planejamento: o problema do carteiro chinês (PCC), e o problema do caixeiro viajante (PCV). O primeiro consiste em minimizar o esforço de um carteiro que precisa percorrer todas as ruas de uma cidade. O segundo consiste em minimizar o deslocamento do vendedor que precisa visitar todas as cidades interconectadas de uma dada região, retornando à cidade de origem.</p>

                <p class="mb-2 text-justify">Esses problemas têm sido modelados com teoria dos grafos, de onde se destacam dois conceitos relacionados: <em>circuito euleriano</em> e <em>ciclo hamiltoniano</em>.</p>

                <p class="mb-2 text-justify">Uma <em>trilha</em> é uma sequência de arestas adjacentes em que não há repetição de arestas, e seu comprimento é a quantidade de arestas. A trilha é dita fechada se inicia e finaliza no mesmo vértice. Assim, um grafo com <em>m</em> arestas é euleriano se nele existe uma trilha fechada de comprimento <em>m</em> (trilha euleriana). Um ciclo hamiltoniano é uma trilha fechada que passa sem repetir por todos os vértices.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nos conceitos acima, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Se o grafo das cidades e suas interconexões for euleriano, então o PCV pode ser resolvido de uma forma tal que o caixeiro não terá que fazer visitas repetidas.</p>
                <p class="mb-2 pl-6 text-justify">II. Se todas as cidades se conectam com todas as outras, então a solução do PCV é um ciclo hamiltoniano correspondente ao menor deslocamento.</p>
                <p class="mb-2 pl-6 text-justify">III. Se o grafo for euleriano e possuir um ciclo hamiltoniano, então o PCC e o PCV darão como resultado a mesma trilha.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'II, apenas.',
            'opcao_b' => 'III, apenas.',
            'opcao_c' => 'I e II, apenas.',
            'opcao_d' => 'I e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Um componente bastante usado em circuitos lógicos é a matriz lógica programável (ou PLA, do inglês <em>Programmable Logic Array</em>). Uma PLA usa como entrada um conjunto de sinais e os complementos desses sinais (que podem ser implementados por um conjunto de inversores). A lógica é implementada a partir de dois estágios: o primeiro é uma matriz de portas AND, que formam o conjunto de termos-produto (também chamados <em>mintermos</em>); o segundo estágio é uma matriz de portas OR, cada uma efetuando uma soma lógica de qualquer quantidade dos mintermos. Cada um dos mintermos pode ser o resultado do produto lógico de qualquer dos sinais de entrada ou de seus complementos.</p>

                <p class="mb-2 text-justify">É comum, em lugar de desenhar todas as portas lógicas de cada um dos estágios, representar apenas a posição das portas lógicas em uma matriz.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <p class="text-sm italic">[Matriz PLA com entradas J, K, L e saídas M, N, O — estágios AND e OR representados por pontos de conexão na matriz]</p>
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir da figura apresentada, infere-se que as entradas JKL = 000 e JKL = 101 levam as saídas MNO iguais, respectivamente, a</p>
            ',
            'referencia' => '',
            'opcao_a' => '000 e 000.',
            'opcao_b' => '000 e 010.',
            'opcao_c' => '100 e 101.',
            'opcao_d' => '101 e 000.',
            'opcao_e' => '101 e 010.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Acerca do protocolo de transporte TCP (<em>Transmission Control Protocol</em>) utilizado na Internet, considere o esquema abaixo, que mostra a comunicação entre dois processos A e B. No diagrama, o tempo cresce de cima para baixo e as setas diagonais representam segmentos TCP enviados de A para B ou de B para A, dependendo da orientação da seta. Os números de sequência dos dados de aplicação enviados de A para B estão indicados sobre as setas. O processo A enviou segmentos com 40 <em>bytes</em> de dados de aplicação para B. O número de sequência do primeiro <em>byte</em> enviado através da conexão de A para B foi 20. Dos quatro segmentos enviados de A para B, o segundo segmento foi perdido pela rede e não alcançou o destino.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <table class="w-full text-sm">
                            <tr>
                                <td class="text-center pr-8"><strong>A</strong></td>
                                <td class="text-center"><strong>B</strong></td>
                            </tr>
                            <tr><td colspan="2" class="text-center text-xs italic">seq = 20 &rarr;</td></tr>
                            <tr><td colspan="2" class="text-center text-xs italic">seq = 60 &rarr;</td></tr>
                            <tr><td colspan="2" class="text-center text-xs italic">seq = 100 &rarr;</td></tr>
                            <tr><td colspan="2" class="text-center text-xs italic">seq = 140 &rarr;</td></tr>
                            <tr><td colspan="2" class="text-center text-xs italic">&larr; ACK = ? &nbsp;&nbsp; (t<sub>0</sub>)</td></tr>
                        </table>
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base na situação descrita acima, o número de confirmação (ACK) enviado pelo TCP de B para A, no instante de tempo t<sub>0</sub>, é igual a</p>
            ',
            'referencia' => '',
            'opcao_a' => '20.',
            'opcao_b' => '59.',
            'opcao_c' => '60.',
            'opcao_d' => '100.',
            'opcao_e' => '140.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O lugar das raízes, também chamado <em>root locus</em>, é importante procedimento para a análise de sistemas de controle, bem como para a síntese de compensadores para esses sistemas. Por exemplo, deseja-se controlar, com um compensador série e realimentação negativa e unitária, um sistema sujeito a uma entrada de grau, cuja planta tem função de transferência</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-2/5 md:w-2/5">
                        <p class="text-center text-base">G(s) = 1 / [s(s + 3)]</p>
                    </div>
                </div>

                <p class="mb-2 text-justify">e cujo lugar das raízes tem a forma ilustrada na figura abaixo (dois pólos reais em s = 0 e s = &minus;3, com lugar das raízes sobre o eixo real entre eles e ramos complexos para ganhos maiores).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir do sistema acima, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. Um compensador proporcional sempre produz um sistema em malha fechada contendo termos de resposta oscilatória.</p>
                <p class="mb-2 text-center font-bold">PORQUE</p>
                <p class="mb-2 pl-6 text-justify">II. As raízes do sistema em malha fechada são complexas para um compensador proporcional com ganho acima de 2,25.</p>

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

        // Questão 27 — ANULADA (omitida)

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">As vibrações em um ônibus em movimento serão analisadas através da medida da aceleração durante períodos de tempo, por meio do sistema de aquisição formado por quatro módulos: um sensor de aceleração, um amplificador, um <em>Sample &amp; Hold</em> e um conversor A/D, conforme esquema a seguir.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-4/5 md:w-4/5">
                        <p class="text-sm italic">[Diagrama em blocos: Sensor de Aceleração &rarr; Amplificador (op-amp não-inversor com R<sub>f</sub> = R<sub>g</sub> = 10 k&Omega;) &rarr; Sample and Hold &rarr; Conversor Analógico/Digital]</p>
                    </div>
                </div>

                <p class="mb-2 text-justify">O sensor é um acelerômetro que converte linearmente leituras entre &minus;1,0 m/s² e +1,0 m/s² em sinal de tensão V<sub>in</sub> entre &minus;800 mV e +800 mV. Esse sinal passa por um amplificador operacional com ganho de tensão dado por A<sub>v</sub> = 1 + R<sub>f</sub>/R<sub>g</sub>, em que R<sub>f</sub> = R<sub>g</sub> = 10 k&Omega;. Uma vez amplificado, o sinal V<sub>out</sub> é submetido a um <em>Sample &amp; Hold</em>, cuja chave de amostragem pode ser controlada por software através de seu ponto de controle "c". O conversor A/D converte linearmente valores entre &minus;2,00 V e +2,00 V para valores binários que podem, então, ser lidos por software. Com esse sistema de aquisição, serão feitas coletas de dados de 1000 aquisições a uma taxa de 500 aquisições por segundo, ou seja, cada coleta dura dois segundos.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A análise desse sistema de aquisição de dados revela que</p>
            ',
            'referencia' => '',
            'opcao_a' => 'o amplificador tem ganho unitário e alta impedância de entrada, isolando o sensor do resto do circuito.',
            'opcao_b' => 'o conversor A/D deverá ser de 12 ou mais <i>bits</i>, para que as leituras obtidas tenham uma resolução de 0,001 m/s².',
            'opcao_c' => 'o software que fará o processamento da aquisição necessitará trocar o sinal da leitura feita, já que a montagem do amplificador é inversora.',
            'opcao_d' => 'a faixa de passagem do amplificador deve ficar pelo menos entre 0 e 250 Hz, correspondentes à taxa de Nyquist, já que ocorrerão 500 aquisições por segundo.',
            'opcao_e' => 'o <i>Sample &amp; Hold</i> vai ser ligado no início da coleta de dados e desligado ao seu final, com a chave mantida fechada durante todos os 2 segundos de cada coleta.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Expressões regulares constituem formas sucintas de descrever linguagens regulares. Uma de suas aplicações é descrever padrões a serem procurados em um texto. As expressões regulares R1, R2, R3 e R4 a seguir utilizam a seguinte convenção: o fecho de Kleene é denotado por * e a união é denotada pelo símbolo |.</p>

                <ul class="list-disc pl-8 mb-2 text-justify">
                    <li>R1 = a*ba*ba*ba*</li>
                    <li>R2 = a*(a|b)a(a|b)*</li>
                    <li>R3 = a*ab*a(a|b)</li>
                    <li>R4 = (a|b)*</li>
                </ul>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Em relação às linguagens definidas pelas expressões regulares apresentadas, conclui-se que a cadeia <strong>abbb</strong> está contida apenas nas linguagens definidas por</p>
            ',
            'referencia' => '',
            'opcao_a' => 'R1 e R4.',
            'opcao_b' => 'R2 e R3.',
            'opcao_c' => 'R2 e R4.',
            'opcao_d' => 'R1 e R3.',
            'opcao_e' => 'R2, R3 e R4.',
            'alternativa_correta' => 'A',
        ]);

        // Questão 30 — ANULADA (omitida)

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Em uma rede local de computadores em barramento, um dos métodos de controle de acesso ao meio, denominado CSMA/CD, tem uma característica peculiar: se uma estação começar a transmitir sozinha no meio em determinado instante e permanecer sozinha por um intervalo T (conhecido como <em>slot</em> de contenção), sem que qualquer outra estação comece a transmitir, então não haverá colisão e o acesso ao meio estará garantido para essa transmissão.</p>

                <p class="mb-2 text-justify">Considere que uma rede tenha N estações com transmissões completamente independentes e que a probabilidade de uma estação transmitir dentro de um intervalo T seja igual a P e, portanto, 1 &minus; P seja a probabilidade de a estação não transmitir nesse intervalo.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A probabilidade de se ter um intervalo T no qual apenas uma das estações transmita e ganhe o acesso ao meio é igual a</p>
            ',
            'referencia' => '',
            'opcao_a' => '(1 &minus; P)<sup>N&minus;1</sup>',
            'opcao_b' => 'P(1 &minus; P)<sup>N&minus;1</sup>',
            'opcao_c' => 'NP(1 &minus; P)<sup>N&minus;1</sup>',
            'opcao_d' => 'NP<sup>N&minus;1</sup>(1 &minus; P)',
            'opcao_e' => 'P<sup>N</sup>(1 &minus; P)<sup>N(N&minus;1)</sup>',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Suponha que, para armazenar exatamente 999 999 chaves de um índice, um engenheiro de computação tenha escolhido a estrutura de uma árvore B, de grau mínimo 5, com todos os nós completos.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nessa situação, a profundidade dessa árvore é igual a</p>
            ',
            'referencia' => '',
            'opcao_a' => '4.',
            'opcao_b' => '5.',
            'opcao_c' => '6.',
            'opcao_d' => '7.',
            'opcao_e' => '8.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O advento da indústria de alta tecnologia, ou seja, a indústria com base na microeletrônica e assistida por computadores, introduziu uma nova lógica de localização industrial. As empresas eletrônicas, produtoras dos novos dispositivos da tecnologia da informação, foram as primeiras a utilizar a estratégia de localização, possibilitada e exigida pelo processo produtivo embasado na informação.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Em relação ao contexto do "novo espaço industrial", avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Apesar da existência de novos e importantes centros de inovação para desenvolvimento de tecnologia da informação, os principais centros metropolitanos do mundo continuam a acumular fatores indutores de inovação e a gerar sinergia na indústria e serviços avançados.</p>
                <p class="mb-2 pl-6 text-justify">II. A indústria de alta tecnologia depende da força de trabalho de um grupo de profissionais altamente qualificados com base científica e tecnológica. A localização da mão de obra não qualificada ou semiquali­ficada, necessária para a realização de operações auxiliares, não influencia a escolha da localização industrial.</p>
                <p class="mb-2 pl-6 text-justify">III. O novo espaço industrial caracteriza-se, entre outros aspectos, pela capacidade organizacional de separar o processo produtivo em diferentes localizações.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'CASTELLS, M. <b>A sociedade em rede.</b> São Paulo: Paz e Terra, 1999 (adaptado).',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'II, apenas.',
            'opcao_c' => 'I e III, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'C',
        ]);

        // Questão 34 — ANULADA (omitida)

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2014,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O código a seguir mostra um programa escrito na linguagem de programação Java.</p>

                <div class="flex justify-center mb-4 text-sm">
                    <div class="w-4/5 md:w-4/5 bg-gray-100 p-4 rounded font-mono text-xs">
                        <p>public class JavaS {</p>
                        <p>&nbsp;&nbsp;private static void trocaB(String a, String b) {</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;String tmp = a;</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;a = b;</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;b = tmp;</p>
                        <p>&nbsp;&nbsp;}</p>
                        <p>&nbsp;&nbsp;private static void trocaC(int array[], String a) {</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;for (int x = 0; x &lt; array.length; x++) {</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array[x] = array[x] + Integer.valueOf(a);</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;}</p>
                        <p>&nbsp;&nbsp;}</p>
                        <p>&nbsp;&nbsp;public static void main(String[] args) {</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;int array[] = {1, 2, 3, 4, 5};</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;String a = "5"; b = "2";</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;trocaB(a, b);</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;trocaC(array, a);</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;System.out.print(a + " " + b + " ");</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;for (int x = 0; x &lt; array.length; x++) {</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.print(array[x] + " ");</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;}</p>
                        <p>&nbsp;&nbsp;}</p>
                        <p>}</p>
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Após ser executado o código, o valor impresso na saída padrão do usuário será</p>
            ',
            'referencia' => '',
            'opcao_a' => '5 2 5 10 15 20 25.',
            'opcao_b' => '2 5 2 4 6 8 10.',
            'opcao_c' => '5 2 2 4 6 8 10.',
            'opcao_d' => '5 2 1 2 3 4 5.',
            'opcao_e' => '2 5 1 2 3 4 5.',
            'alternativa_correta' => 'B',
        ]);
    }
}
