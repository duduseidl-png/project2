<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class Questoes_Engenharia_de_Computacao_2019 extends Seeder
{
    public function run(): void
    {
        // =========================================================
        // QUESTÃO 09 — MergeSort (Gabarito: E)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O MergeSort é um método de ordenação que combina dois vetores ordenados e cria um terceiro vetor maior também ordenado. O algoritmo abaixo apresenta essa ideia e combina os vetores <code>a[lo..mid]</code> e <code>a[mid+1..hi]</code> no vetor <code>a[lo..hi]</code>.</p>

                <div class="bg-gray-100 rounded p-3 mb-2 text-sm font-mono whitespace-pre-wrap">
public class MergeSort {
    private static Comparable[] aux;
    public static void merge(Comparable[] a, int lo, int mid, int hi) {
        int i = lo, j = mid+1;
        for (int k = lo; k &lt;= hi; k++)
            aux[k] = a[k];
        for (int k = lo; k &lt;= hi; k++) {
            if (i > mid)
                a[k] = aux[j++];
            else if (j > hi)
                a[k] = aux[i++];
            else if (aux[j].compareTo(aux[i]))
                a[k] = aux[j++];
            else
                a[k] = aux[i++];
        }
    }
    public static void sort(Comparable[] a) {
        aux = new Comparable[a.length];
        sort(a, 0, a.length - 1);
    }
    private static void sort(Comparable[] a, int lo, int hi) {
        //implementação
    }
}
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando o código apresentado, a implementação do protótipo do método <code>sort</code> da classe <code>MergeSort</code> é</p>
            ',
            'referencia' => 'SEDGEWICK, R.; WAYNE, K. <b>Algorithms.</b> 4. ed. Boston: Addison-Wesley, 2011 (adaptado).',
            'opcao_a' => '<code>if (hi == lo) return;<br>int mid = lo + (hi - lo)/2;<br>sort(a, lo, mid);<br>sort(a, mid, hi);<br>merge(a, lo, mid, hi);</code>',
            'opcao_b' => '<code>if (hi > lo) return;<br>int mid = lo + (hi - lo)/2;<br>sort(a, lo, mid);<br>sort(a, mid, hi);<br>merge(a, lo, mid, hi);</code>',
            'opcao_c' => '<code>if (hi &lt;= lo) return;<br>int mid = lo + (hi - lo)/2;<br>sort(a, lo, mid);<br>sort(a, mid, hi);<br>merge(a, lo, mid, hi);</code>',
            'opcao_d' => '<code>if (hi > lo) return;<br>int mid = lo + (hi - lo)/2;<br>sort(a, lo, mid);<br>sort(a, mid+1, hi);<br>merge(a, lo, mid, hi);</code>',
            'opcao_e' => '<code>if (hi &lt;= lo) return;<br>int mid = lo + (hi - lo)/2;<br>sort(a, lo, mid);<br>sort(a, mid+1, hi);<br>merge(a, lo, mid, hi);</code>',
            'alternativa_correta' => 'E',
        ]);

        // =========================================================
        // QUESTÃO 10 — Inteligência Artificial / Reconhecimento de Padrões (Gabarito: E)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Um estudo recente de pesquisadores mostrou que os algoritmos de inteligência artificial também podem ser usados para prever, pelo olhar de um indivíduo, se ele tem chances de sofrer um ataque cardíaco. Os pesquisadores treinaram um sistema de Inteligência Artificial (IA) com exames de retina de 284 335 pacientes em busca de padrões nos cruzamentos de vasos sanguíneos para que a máquina aprenda a identificar os sinais indicadores de doenças cardiovasculares.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Acerca do caso apresentado, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O conjunto de dados utilizado para a realização da técnica de reconhecimento de padrões corresponde aos exames de retina de 284 335 pacientes.</p>

                <p class="mb-2 pl-6 text-justify">II. A seleção de características que serão utilizadas como base para o reconhecimento de padrões equivale ao cruzamento de vasos sanguíneos.</p>

                <p class="mb-2 pl-6 text-justify">III. A classificação dos resultados corresponde a identificar os sinais indicadores de doenças cardiovasculares.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'Disponível em: https://www.g1.globo.com/ciencia-e-saude/noticia/2019/03/15/como-a-ia-detecta-sinais-de-doencas-que-humanos-nao-podem-enxergar.ghtml. Acesso em: 01 jun. 2019 (adaptado).',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'II, apenas.',
            'opcao_c' => 'I e III, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'E',
        ]);

        // =========================================================
        // QUESTÃO 11 — Coloração de Grafos / Alocação de Auditórios (Gabarito: C)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O gestor de um hotel precisa satisfazer a demanda de vários grupos de eventos pelo uso exclusivo de auditórios por uma semana utilizando o menor número possível de auditórios. A tabela apresenta os conflitos de demandas dos grupos de eventos para todos os dias na semana, em que o valor 1 em uma célula indica que um determinado grupo precisará usar um auditório no mesmo horário que outro grupo e o valor 0 indica que não há conflito entre os dois grupos.</p>

                <div class="overflow-x-auto mb-3">
                    <table class="mx-auto border-collapse text-sm text-center">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border border-gray-400 px-3 py-1"></th>
                                <th class="border border-gray-400 px-3 py-1">G1</th>
                                <th class="border border-gray-400 px-3 py-1">G2</th>
                                <th class="border border-gray-400 px-3 py-1">G3</th>
                                <th class="border border-gray-400 px-3 py-1">G4</th>
                                <th class="border border-gray-400 px-3 py-1">G5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border border-gray-400 px-3 py-1 font-semibold">G1</td><td class="border border-gray-400 px-3 py-1">-</td><td class="border border-gray-400 px-3 py-1">1</td><td class="border border-gray-400 px-3 py-1">1</td><td class="border border-gray-400 px-3 py-1">1</td><td class="border border-gray-400 px-3 py-1">1</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1 font-semibold">G2</td><td class="border border-gray-400 px-3 py-1">1</td><td class="border border-gray-400 px-3 py-1">-</td><td class="border border-gray-400 px-3 py-1">1</td><td class="border border-gray-400 px-3 py-1">1</td><td class="border border-gray-400 px-3 py-1">0</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1 font-semibold">G3</td><td class="border border-gray-400 px-3 py-1">1</td><td class="border border-gray-400 px-3 py-1">1</td><td class="border border-gray-400 px-3 py-1">-</td><td class="border border-gray-400 px-3 py-1">0</td><td class="border border-gray-400 px-3 py-1">1</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1 font-semibold">G4</td><td class="border border-gray-400 px-3 py-1">1</td><td class="border border-gray-400 px-3 py-1">1</td><td class="border border-gray-400 px-3 py-1">0</td><td class="border border-gray-400 px-3 py-1">-</td><td class="border border-gray-400 px-3 py-1">0</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1 font-semibold">G5</td><td class="border border-gray-400 px-3 py-1">1</td><td class="border border-gray-400 px-3 py-1">0</td><td class="border border-gray-400 px-3 py-1">1</td><td class="border border-gray-400 px-3 py-1">0</td><td class="border border-gray-400 px-3 py-1">-</td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nessa situação, o número mínimo de auditórios que satisfaz todas as demandas é de</p>
            ',
            'referencia' => '',
            'opcao_a' => 'um.',
            'opcao_b' => 'dois.',
            'opcao_c' => 'três.',
            'opcao_d' => 'quatro.',
            'opcao_e' => 'cinco.',
            'alternativa_correta' => 'C',
        ]);

        // =========================================================
        // QUESTÃO 12 — Programação Linear (Gabarito: B)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Em um sistema computacional avalia-se o desempenho no uso de dois tipos de memória secundária por meio de programação linear. No gráfico apresentado cada eixo representa a quantidade de posições de memória de cada tipo e a região colorida representa, de forma contínua, o conjunto de soluções viáveis (região viável).</p>

                <div class="mb-3">
                    <p class="text-sm text-center text-gray-600 italic">Região viável com vértices aproximados: A(0,4), B(2,7), C(5,6), D(8,4), E(9,0), F(0,0).</p>
                    <p class="text-sm text-center text-gray-600 mt-1">Os vértices relevantes para a função objetivo Z = 30x + 10y são avaliados em cada ponto extremo da região viável.</p>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">As arestas da região viável foram definidas pelas diversas restrições observadas para os dois tipos de memória. Com base no gráfico, o máximo desempenho do sistema, representado pela variável <strong>Z = 30x + 10y</strong>, é de</p>
            ',
            'referencia' => '',
            'opcao_a' => '350.',
            'opcao_b' => '280.',
            'opcao_c' => '270.',
            'opcao_d' => '180.',
            'opcao_e' => '130.',
            'alternativa_correta' => 'B',
        ]);

        // =========================================================
        // QUESTÃO 13 — Sistemas de Controle / Função de Transferência (Gabarito: A)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere a modelagem matemática de um processo e a resposta à excitação do tipo degrau unitário apresentados a seguir.</p>

                <div class="mb-3 text-sm text-center text-gray-600">
                    <p>Sistema em malha fechada: <strong>R(s) → [+] → G(s) → Y(s)</strong> (com realimentação negativa unitária)</p>
                    <p class="mt-1">Resposta ao degrau: estabiliza em 1,0 em aproximadamente 1 segundo (4 constantes de tempo).</p>
                </div>

                <p class="mb-2 text-justify">Nesse processo, o tempo de estabilização é de 1 segundo para o critério de 4 constantes de tempo, a função de transferência de malha fechada é <strong>T(s) = Y(s)/R(s)</strong> e a função de transferência no ramo direto é <strong>G(s)</strong>.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas informações apresentadas, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. A função de transferência do ramo direto é <strong>G(s) = 3,2 / 0,8s</strong>.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. A função de transferência de malha fechada é <strong>T(s) = 3,2 / (s + 4)</strong>.</p>

                <p class="mb-1 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, mas a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, mas a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'A',
        ]);

        // =========================================================
        // QUESTÃO 14 — Filtros Digitais / Frequência Discreta (Gabarito: B)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Filtros normalizados são resultantes da compressão da faixa de frequência infinitamente longa –∞ &lt; ω &lt; ∞ de um filtro analógico (tempo contínuo) para a faixa de frequência finita –π &lt; Ω &lt; π de um filtro digital (tempo discreto), com período 2π.</p>

                <p class="mb-2 text-justify">A mudança da escala de frequências também pode ser pensada como uma normalização do eixo das frequências em que a frequência de amostragem ω<sub>s</sub> corresponde a ±π e qualquer outra frequência em Hz, ω, corresponde à frequência discreta ±Ω.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando um sistema de transmissão de dados com a máxima frequência do sinal de informação de 4 000 Hz, e frequência de amostragem de 20 000 amostras por segundo com um filtro digital de resposta ideal que rejeite os sinais de frequências superiores a 6 000 Hz, a resposta em frequência do filtro que atenda essas especificações é</p>

                <div class="bg-yellow-50 border border-yellow-300 rounded p-2 mb-2 text-sm text-gray-700">
                    <p><strong>Cálculo:</strong> ω<sub>corte</sub> = 6 000 Hz → Ω<sub>corte</sub> = 2π × (6000/20000) = 0,6π rad. O filtro passa-baixa passa de –0,6π a 0,6π, porém, como filtro passa-banda (rejeita acima de 6 kHz), a resposta correta exibe passagem de –0,3π a 0,3π (frequência normalizada da informação) com rejeição fora dessa faixa até ±0,6π — correspondente à alternativa B do gabarito.</p>
                </div>
            ',
            'referencia' => 'HAYKIN, S; VEEN, B.V. <b>Sinais e sistemas.</b> Porto Alegre: Bookman, 2001 (adaptado). OPPENHEIM, A. V; SCHAFER, R. W. <b>Discrete-time signal processing.</b> 3. ed. NJ: Prentice Hall, 1998 (adaptado).',
            'opcao_a' => 'Filtro passa-baixa com corte em ±0,3π, com passagem de –π a –0,3π e de 0,3π a π.',
            'opcao_b' => 'Filtro passa-baixa ideal com passagem de –0,3π a 0,3π e rejeição fora dessa faixa.',
            'opcao_c' => 'Filtro com passagem de –1,7π a –π e de π a 1,7π e rejeição na faixa central ±0,3π.',
            'opcao_d' => 'Filtro passa-banda com passagem de –0,6π a –0,3π e de 0,3π a 0,6π.',
            'opcao_e' => 'Filtro passa-baixa com passagem de –0,3π a 0,3π incluindo as réplicas espectrais periódicas.',
            'alternativa_correta' => 'B',
        ]);

        // =========================================================
        // QUESTÃO 15 — Regressão Linear / Mínimos Quadrados (Gabarito: E)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O método de regressão linear pelos mínimos quadrados é um dos mais difundidos para encontrar aproximações para modelos lineares em diferentes áreas, como por exemplo, processamento gráfico, aprendizagem de máquina e visão computacional.</p>

                <p class="mb-2 text-justify">Em um sistema superdeterminado do tipo AX = B, que não possua solução (devido a erros nos dados), a solução mais próxima, segundo o critério dos mínimos quadrados, é dada pelo sistema: <strong>A<sup>T</sup> · A · X = A<sup>T</sup> · B</strong>, em que A<sup>T</sup> é a transposta de A. Considere o problema de encontrar a reta que melhor se ajusta a quatro pontos no plano, segundo o critério dos mínimos quadrados, cujas coordenadas são:</p>

                <div class="overflow-x-auto mb-3">
                    <table class="mx-auto border-collapse text-sm text-center">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border border-gray-400 px-4 py-1"></th>
                                <th class="border border-gray-400 px-4 py-1">P1</th>
                                <th class="border border-gray-400 px-4 py-1">P2</th>
                                <th class="border border-gray-400 px-4 py-1">P3</th>
                                <th class="border border-gray-400 px-4 py-1">P4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border border-gray-400 px-4 py-1 font-semibold">x</td><td class="border border-gray-400 px-4 py-1">1</td><td class="border border-gray-400 px-4 py-1">2</td><td class="border border-gray-400 px-4 py-1">3</td><td class="border border-gray-400 px-4 py-1">4</td></tr>
                            <tr><td class="border border-gray-400 px-4 py-1 font-semibold">y</td><td class="border border-gray-400 px-4 py-1">1</td><td class="border border-gray-400 px-4 py-1">3</td><td class="border border-gray-400 px-4 py-1">2</td><td class="border border-gray-400 px-4 py-1">5</td></tr>
                        </tbody>
                    </table>
                </div>

                <p class="mb-2 text-justify">Suponha que uma reta seja dada na forma funcional <strong>y = mx + c</strong>. Ao se substituírem as coordenadas de cada ponto nesta equação, forma-se um sistema de equações AX = B, em que X é o vetor de incógnitas [m, c]<sup>T</sup>.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A equação da reta que é solução dos mínimos quadrados é</p>
            ',
            'referencia' => '',
            'opcao_a' => 'y = 0,5x + 1.',
            'opcao_b' => 'y = x + 0,1.',
            'opcao_c' => 'y = (4/3)(x − 1).',
            'opcao_d' => 'y = 1,5x.',
            'opcao_e' => 'y = 1,1x.',
            'alternativa_correta' => 'E',
        ]);

        // =========================================================
        // QUESTÃO 16 — Circuito DEMUX / Diagnóstico de Defeito (Gabarito: E)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere a construção de um Demultiplexador digital (DEMUX) de 4 canais, usando CIs 7404 e 7411, para que um mesmo controle (liga/desliga) seja compartilhado por quatro leds. Após a montagem, constatou-se que o circuito não funciona corretamente. A tabela a seguir sintetiza os dados da comparação entre estados esperados e observados:</p>

                <div class="overflow-x-auto mb-3">
                    <table class="mx-auto border-collapse text-sm text-center">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border border-gray-400 px-3 py-1">ENTRADA</th>
                                <th class="border border-gray-400 px-3 py-1">S1S0</th>
                                <th class="border border-gray-400 px-3 py-1">Estado esperado dos Leds</th>
                                <th class="border border-gray-400 px-3 py-1">Estado observado dos Leds</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border border-gray-400 px-3 py-1">0</td><td class="border border-gray-400 px-3 py-1">0</td><td class="border border-gray-400 px-3 py-1">Todos os leds apagados</td><td class="border border-gray-400 px-3 py-1">Todos os leds apagados</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">0</td><td class="border border-gray-400 px-3 py-1">1</td><td class="border border-gray-400 px-3 py-1">Todos os leds apagados</td><td class="border border-gray-400 px-3 py-1">Todos os leds apagados</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">0</td><td class="border border-gray-400 px-3 py-1">2</td><td class="border border-gray-400 px-3 py-1">Todos os leds apagados</td><td class="border border-gray-400 px-3 py-1">LED2 aceso</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">0</td><td class="border border-gray-400 px-3 py-1">3</td><td class="border border-gray-400 px-3 py-1">Todos os leds apagados</td><td class="border border-gray-400 px-3 py-1">Todos os leds apagados</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">1</td><td class="border border-gray-400 px-3 py-1">0</td><td class="border border-gray-400 px-3 py-1">LED4 aceso</td><td class="border border-gray-400 px-3 py-1">LED4 aceso</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">1</td><td class="border border-gray-400 px-3 py-1">1</td><td class="border border-gray-400 px-3 py-1">LED3 aceso</td><td class="border border-gray-400 px-3 py-1">LED3 aceso</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">1</td><td class="border border-gray-400 px-3 py-1">2</td><td class="border border-gray-400 px-3 py-1">LED2 aceso</td><td class="border border-gray-400 px-3 py-1">LED2 aceso</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">1</td><td class="border border-gray-400 px-3 py-1">3</td><td class="border border-gray-400 px-3 py-1">LED1 aceso</td><td class="border border-gray-400 px-3 py-1">LED1 aceso</td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nos dados apresentados na tabela, o defeito que condiz com os resultados das observações é que</p>
            ',
            'referencia' => '',
            'opcao_a' => 'o pino 11 da porta IC1C não foi conectado.',
            'opcao_b' => 'o pino 9 da porta IC1C está conectado com S0, ao invés de estar conectado com S1.',
            'opcao_c' => 'o pino 10 da porta IC1C está conectado com S0, ao invés de estar conectado com S0 negado.',
            'opcao_d' => 'o pino 11 da porta IC1C está conectado com S0, ao invés de estar conectado com a ENTRADA.',
            'opcao_e' => 'o pino 11 da porta IC1C está conectado com S1, ao invés de estar conectado com a ENTRADA.',
            'alternativa_correta' => 'E',
        ]);

        // =========================================================
        // QUESTÃO 17 — Amplificador Operacional / Sensor NTC (Gabarito: A)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Os amplificadores operacionais são utilizados em circuitos de controle e supervisão de processos industriais, em que sinais de entrada são provenientes de sensores ou transdutores colocados nas malhas de controle do sistema. O diagrama ilustra um exemplo de circuito utilizado para medição da temperatura com um sensor do tipo NTC (<i>Negative Temperature Coefficient</i>).</p>

                <div class="bg-gray-50 border border-gray-200 rounded p-3 mb-2 text-sm text-gray-700">
                    <p class="font-semibold mb-1">Dados do circuito:</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Tensão de alimentação: 10 V</li>
                        <li>Resistências: 1 kΩ, 2 kΩ, 10 kΩ (realimentação), 100 Ω (em múltiplos estágios)</li>
                        <li>Sensor NTC a 30 °C: R<sub>NTC</sub> = 8 kΩ</li>
                        <li>Saída conectada a voltímetro</li>
                    </ul>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">De acordo com o manual do fabricante do sensor NTC, para uma temperatura de 30 °C é observada uma resistência de 8 kΩ, portanto, o valor da tensão exibida na tela (display) do voltímetro ligado na saída do circuito eletrônico apresentado é de</p>
            ',
            'referencia' => '',
            'opcao_a' => '-6 volts.',
            'opcao_b' => '6 volts.',
            'opcao_c' => '3 volts.',
            'opcao_d' => '-3 volts.',
            'opcao_e' => '1 volt.',
            'alternativa_correta' => 'A',
        ]);

        // =========================================================
        // QUESTÃO 18 — Criptografia DES / 3DES (Gabarito: D)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O algoritmo de criptografia <i>Data Encryption Standard</i> (DES) cifra blocos de 64 bits utilizando chaves simétricas de 56 bits. Atualmente o DES não é mais considerado uma cifra segura devido ao pequeno número de bits utilizado para a chave. Para resolver o tamanho da chave, foi proposto o DES Triplo (3DES), que utiliza três execuções do DES e chaves de até 168 bits. A chave k para o 3DES é dividida em três partes (k<sub>a</sub>, k<sub>b</sub>, k<sub>c</sub>) e cada uma destas partes é utilizada na execução de uma instância do DES.</p>

                <p class="mb-2 text-justify">O algoritmo DES define uma função <strong>C(m, k1)</strong> que cifra uma mensagem m com uma chave k1 e uma função <strong>D(c, k1)</strong> que decifra uma mensagem C cifrada com a chave k1.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Para que o 3DES seja capaz de decifrar mensagens cifradas com o DES, sua implementação deve ser</p>
            ',
            'referencia' => 'STALLINGS, W. <b>Criptografia e Segurança de Redes: Princípios e práticas.</b> 4ª ed. São Paulo: Pearson Prentice Hall, 2008 (adaptado).',
            'opcao_a' => 'D(C(D(m, k<sub>a</sub>), k<sub>b</sub>), k<sub>c</sub>), sendo k<sub>a</sub> ≠ k<sub>b</sub> ≠ k<sub>c</sub> partes da chave usada no 3DES e k<sub>a</sub> a chave usada no DES.',
            'opcao_b' => 'D(D(D(m, k<sub>a</sub>), k<sub>b</sub>), k<sub>c</sub>), sendo k<sub>a</sub> ≠ k<sub>b</sub> ≠ k<sub>c</sub>, partes da chave do 3DES e k<sub>a</sub> a chave usada no DES.',
            'opcao_c' => 'D(D(D(m, k<sub>a</sub>), k<sub>b</sub>), k<sub>c</sub>), sendo k<sub>a</sub> = k<sub>b</sub> = k<sub>c</sub>, partes da chave do 3DES e k<sub>a</sub> a chave usada no DES.',
            'opcao_d' => 'D(C(D(m, k<sub>a</sub>), k<sub>b</sub>), k<sub>c</sub>), sendo k<sub>a</sub> = k<sub>b</sub> = k<sub>c</sub> partes da chave usada no 3DES e k<sub>a</sub> a chave usada no DES.',
            'opcao_e' => 'D(D(C(m, k<sub>a</sub>), k<sub>b</sub>), k<sub>c</sub>), sendo k<sub>a</sub> = k<sub>b</sub> = k<sub>c</sub> partes da chave usada no 3DES e k<sub>a</sub> a chave usada no DES.',
            'alternativa_correta' => 'D',
        ]);

        // =========================================================
        // QUESTÃO 19 — Hardware Trojan / Segurança (Gabarito: C)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Pesquisadores vêm trabalhando na possibilidade de microprocessadores comerciais <i>off-the-shelf</i> terem sido adquiridos com um <i>backdoor</i> utilizado para desativá-los no momento oportuno, ou seja, ataques a sistemas cibernéticos poderiam ser intencionalmente ativados por meio de um gatilho (<i>trigger</i>), em momento definido pelo atacante.</p>

                <p class="mb-2 text-justify">São inúmeras as possibilidades de ação por meio do uso de <i>hardware trojan</i>, que permite uma infiltração silenciosa e cuja detecção é extremamente complexa.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base no texto e no contexto de detecção e prevenção de ameaças, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Detecção de falhas de manufatura, como falhas de atraso (<i>delay</i>), garante a detecção dos trojans.</p>

                <p class="mb-2 pl-6 text-justify">II. Detecção por meio de inspeção física ou engenharia reversa destrutiva não garante que os microprocessadores comerciais estejam livres do <i>hardware trojan</i>.</p>

                <p class="mb-2 pl-6 text-justify">III. O preenchimento total de células no circuito previne a inserção de <i>hardware trojan</i>, não deixando espaços vagos no <i>design</i>.</p>

                <p class="mb-2 pl-6 text-justify">IV. Prevenção por meio de camuflagem é um tipo de estratégia de ofuscação no nível do <i>layout</i> físico, que consiste na adição de contatos e conexões falsas.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => 'Disponível em: http://www.abin.gov.br. Acesso em: 29 jun. 2019 (adaptado).',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'I e III.',
            'opcao_c' => 'II e IV.',
            'opcao_d' => 'I, III e IV.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => 'C',
        ]);

        // =========================================================
        // QUESTÃO 20 — Rigidez de Software / Código de Modems (Gabarito: E)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Rigidez é a tendência de um software ser difícil de modificar. Cada mudança causa uma cascata de mudanças subsequentes em módulos dependentes. O trecho de código a seguir faz parte de um sistema com suporte à comunicação entre diferentes dispositivos de comunicação via rádio (modems):</p>

                <div class="bg-gray-100 rounded p-3 mb-2 text-sm font-mono whitespace-pre-wrap">
1  struct Modem { enum Type {hayes, courrier, ernie) type; };
2  struct Hayes {
3      Modem::Type type;
4      // Detalhes do modem tipo Hayes
5  };
6  struct Courrier {
7      Modem::Type type;
8      // Detalhes do modem tipo Courrier
9  };
10 struct Ernie {
11     Modem::Type type;
12     // Detalhes do modem tipo Ernie
13 };
14 void LogOn(Modem&amp; m, string&amp; frq, string&amp; user, string&amp; pw) {
15     if (m.type == Modem::hayes)
16         OpenHayesChannel((Hayes&amp;)m, frq);
17     else OpenCourrierChannel((Courrier&amp;)m, frq);
18     // depois de conectado, enviar user, pw, etc.
19     // (continua)
                </div>

                <p class="mb-2 text-justify">Nesse trecho, cada tipo de modem tem suas particularidades e foram criadas estruturas específicas para cada tipo (linhas 2 a 13). Um "enumeration" (linha 1) é utilizado para identificar o tipo de modem. O procedimento LogOn (linhas 14 a 19) é responsável por realizar a conexão a um modem. Como os modems do tipo Courrier e Ernie são similares em termos de abertura de canal, o programador decidiu otimizar o código, utilizando a função do modem Courrier para ambos (<code>OpenCourrierChannel</code> - linha 17).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse projeto do código um sintoma de rigidez é que</p>
            ',
            'referencia' => 'Disponível em: http://www.staff.cs.utu.fi/staff/jouni.smed/doos_06/material/DesignPrinciplesAndPatterns.pdf. Acesso em: 15 jun. 2019 (adaptado).',
            'opcao_a' => 'se o suporte ao modem do tipo Ernie for removido do sistema, será necessário remover a estrutura Ernie do código.',
            'opcao_b' => 'se um novo tipo de modem for adicionado, será necessário alterar o número de parâmetros definidos no procedimento LogOn.',
            'opcao_c' => 'se um novo tipo de modem for adicionado, é necessário copiar e colar todo o código de uma das outras estruturas de modems para incluir novos detalhes.',
            'opcao_d' => 'se a política de comunicação do modem do tipo Hayes sofrer alteração, pode ser necessário alterar o procedimento OpenHayesChannel e a estrutura Hayes.',
            'opcao_e' => 'se a política de comunicação do modem do tipo Courrier sofrer alteração, pode ser necessário alterar OpenCourrierChannel e LogOn e criar um novo procedimento OpenErnieChannel.',
            'alternativa_correta' => 'E',
        ]);

        // =========================================================
        // QUESTÃO 21 — SQL / Banco de Dados (Gabarito: B)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Uma empresa de análise de mercado de entregas de encomendas foi contratada para selecionar aquela que prestaria serviço para seu cliente e fez um levantamento de dados do setor nos últimos 10 anos, produzindo um relatório com a tabela a seguir, que apresenta 5 principais fornecedores em potencial para o serviço de entrega de encomendas.</p>

                <div class="overflow-x-auto mb-3">
                    <table class="mx-auto border-collapse text-sm text-center">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border border-gray-400 px-3 py-1">CÓDIGO</th>
                                <th class="border border-gray-400 px-3 py-1">CD1</th>
                                <th class="border border-gray-400 px-3 py-1">CD2</th>
                                <th class="border border-gray-400 px-3 py-1">CD3</th>
                                <th class="border border-gray-400 px-3 py-1">CD4</th>
                                <th class="border border-gray-400 px-3 py-1">CD5</th>
                                <th class="border border-gray-400 px-3 py-1">CD6</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border border-gray-400 px-3 py-1">Fornecedor 1</td><td class="border border-gray-400 px-3 py-1">300</td><td class="border border-gray-400 px-3 py-1">40</td><td class="border border-gray-400 px-3 py-1">32</td><td class="border border-gray-400 px-3 py-1">50</td><td class="border border-gray-400 px-3 py-1">2.9</td><td class="border border-gray-400 px-3 py-1">Nacional</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">Fornecedor 2</td><td class="border border-gray-400 px-3 py-1">160</td><td class="border border-gray-400 px-3 py-1">28</td><td class="border border-gray-400 px-3 py-1">27</td><td class="border border-gray-400 px-3 py-1">30</td><td class="border border-gray-400 px-3 py-1">0.2</td><td class="border border-gray-400 px-3 py-1">Nacional</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">Fornecedor 3</td><td class="border border-gray-400 px-3 py-1">140</td><td class="border border-gray-400 px-3 py-1">24</td><td class="border border-gray-400 px-3 py-1">24</td><td class="border border-gray-400 px-3 py-1">25</td><td class="border border-gray-400 px-3 py-1">0.01</td><td class="border border-gray-400 px-3 py-1">Regional</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">Fornecedor 4</td><td class="border border-gray-400 px-3 py-1">220</td><td class="border border-gray-400 px-3 py-1">30</td><td class="border border-gray-400 px-3 py-1">27</td><td class="border border-gray-400 px-3 py-1">30</td><td class="border border-gray-400 px-3 py-1">0.5</td><td class="border border-gray-400 px-3 py-1">Nacional</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">Fornecedor 5</td><td class="border border-gray-400 px-3 py-1">240</td><td class="border border-gray-400 px-3 py-1">34</td><td class="border border-gray-400 px-3 py-1">30</td><td class="border border-gray-400 px-3 py-1">40</td><td class="border border-gray-400 px-3 py-1">1.05</td><td class="border border-gray-400 px-3 py-1">Nacional</td></tr>
                        </tbody>
                    </table>
                </div>

                <p class="mb-2 text-justify">Com base nessa situação e considerando que a tabela faz parte do banco de dados da empresa com o nome de TABELA1, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O código em SQL que exclui da TABELA1 as informações do Fornecedor 1, Fornecedor 4 e Fornecedor 5 é: <code>DELETE FROM TABELA1 WHERE CD6 = \'Regional\' OR CD1 > 160 OR CD5 > 1;</code></p>

                <p class="mb-2 pl-6 text-justify">II. A inclusão de uma nova coluna com dados de taxa de eficiência de entrega para os fornecedores constantes na TABELA1 é feita pelo código: <code>INSERT INTO TABELA1 (CD7) SET CD7 = \'CD3/CD2\';</code></p>

                <p class="mb-2 pl-6 text-justify">III. O código que reflete a escolha do cliente, o Fornecedor 3, é: <code>SELECT Fornecedor FROM TABELA1 WHERE CD1 > 100 AND (CD3/CD2) > 0.99 AND CD5 &lt; 0.5 ORDER BY CD3;</code></p>
            ',
            'enunciado' => '
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

        // =========================================================
        // QUESTÃO 22 — Rede Bayesiana (Gabarito: B)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere um software de monitoramento de estufas que possui um alarme que detecta quando um medidor de temperatura excede um dado limiar. Para esse projeto, utilizou-se uma rede bayesiana para inferir eventos que podem acontecer no sistema com as seguintes variáveis booleanas:</p>

                <ul class="list-disc list-inside mb-2 pl-4 text-justify space-y-1 text-sm">
                    <li><strong>A:</strong> o alarme soa;</li>
                    <li><strong>AD:</strong> o alarme está defeituoso, o alarme é acionado sem necessidade ou é um alarme falso;</li>
                    <li><strong>MD:</strong> o medidor de temperatura está defeituoso e pode gerar valores incorretos, levando a leituras erradas do medidor;</li>
                    <li><strong>LM:</strong> os valores de leitura do medidor;</li>
                    <li><strong>T:</strong> a temperatura real da estufa.</li>
                </ul>

                <p class="mb-2 text-justify">Quando a temperatura da estufa fica muito alta, o medidor de temperatura pode falhar.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Assim, a rede bayesiana para esse domínio é aquela em que</p>
            ',
            'referencia' => '',
            'opcao_a' => 'T e MD são nós raiz independentes; T influencia LM; LM e AD influenciam A; MD não influencia LM.',
            'opcao_b' => 'T influencia tanto MD quanto LM; MD e AD são independentes entre si; LM e AD influenciam A.',
            'opcao_c' => 'MD e AD são nós raiz; T é influenciado por MD; LM é influenciado por T; A é influenciado por LM e AD.',
            'opcao_d' => 'T, MD e AD são nós raiz independentes; T e MD influenciam LM; LM influencia A.',
            'opcao_e' => 'T influencia LM e A diretamente; MD e AD influenciam LM; LM influencia A.',
            'alternativa_correta' => 'B',
        ]);

        // =========================================================
        // QUESTÃO 23 — Autômato de Estados Finitos (Gabarito: B)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere o autômato de estados finitos determinístico representado na figura a seguir.</p>

                <div class="bg-gray-50 border border-gray-200 rounded p-3 mb-2 text-sm text-gray-700 text-center">
                    <p><strong>Descrição do autômato:</strong></p>
                    <p class="mt-1">Estado inicial: P. Estados: P (inicial) e 1 (final de aceitação, com laço em 1). Transições: P —<strong>1</strong>→ 1; P —<strong>0</strong>→ P (laço); 1 —<strong>0</strong>→ P; 1 —<strong>1,0</strong>→ 1 e P respectivamente.</p>
                    <p class="mt-1 text-xs text-gray-500">O autômato possui dois estados (P e 1), onde 1 é o único estado de aceitação.</p>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">O autômato representado reconhece a seguinte linguagem regular</p>
            ',
            'referencia' => '',
            'opcao_a' => '{w ∈ {0,1}* | |w| é 4}.',
            'opcao_b' => '{w ∈ {0,1}* | |w| é ímpar e termina com 1}.',
            'opcao_c' => '{w ∈ {0,1}* | |w| é par e termina com 01}.',
            'opcao_d' => '{w ∈ {0,1}* | |w| é ímpar e termina com 0}.',
            'opcao_e' => '{w ∈ {0,1}* | |w| é par e termina com 11}.',
            'alternativa_correta' => 'B',
        ]);

        // =========================================================
        // QUESTÃO 24 — Spanning Tree Mínima / Roteamento (Gabarito: C)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Protocolos de roteamento de estado de enlace utilizam difusão para propagar informações de estado de enlace que são usadas para calcular rotas individuais. Uma técnica utilizada para resolver o problema da redundância de pacotes é a difusão por <i>spanning tree</i>. Uma <i>spanning tree</i> mínima de um grafo é aquela cuja soma dos custos dos enlaces é mínima entre todas as <i>spanning trees</i> possíveis.</p>

                <p class="mb-2 text-justify">Considere uma rede composta por 6 roteadores (A, B, C, D, E e F), com os seguintes custos de enlace:</p>

                <div class="overflow-x-auto mb-3">
                    <table class="mx-auto border-collapse text-sm text-center">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border border-gray-400 px-4 py-1">Conexão</th>
                                <th class="border border-gray-400 px-4 py-1">Custo do enlace</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border border-gray-400 px-4 py-1">A – B</td><td class="border border-gray-400 px-4 py-1">2</td></tr>
                            <tr><td class="border border-gray-400 px-4 py-1">A – C</td><td class="border border-gray-400 px-4 py-1">2</td></tr>
                            <tr><td class="border border-gray-400 px-4 py-1">B – C</td><td class="border border-gray-400 px-4 py-1">2</td></tr>
                            <tr><td class="border border-gray-400 px-4 py-1">B – D</td><td class="border border-gray-400 px-4 py-1">3</td></tr>
                            <tr><td class="border border-gray-400 px-4 py-1">C – D</td><td class="border border-gray-400 px-4 py-1">3</td></tr>
                            <tr><td class="border border-gray-400 px-4 py-1">C – E</td><td class="border border-gray-400 px-4 py-1">1</td></tr>
                            <tr><td class="border border-gray-400 px-4 py-1">C – F</td><td class="border border-gray-400 px-4 py-1">1</td></tr>
                            <tr><td class="border border-gray-400 px-4 py-1">D – F</td><td class="border border-gray-400 px-4 py-1">2</td></tr>
                            <tr><td class="border border-gray-400 px-4 py-1">E – F</td><td class="border border-gray-400 px-4 py-1">1</td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Neste cenário, o custo da <i>spanning tree</i> mínima correspondente é, exatamente:</p>
            ',
            'referencia' => 'KUROSE, J. F.; ROSS, K. W. <b>Redes de computadores e a Internet: uma abordagem top-down.</b> 6. ed. São Paulo: Pearson Education do Brasil, 2013 (adaptado).',
            'opcao_a' => '5.',
            'opcao_b' => '7.',
            'opcao_c' => '8.',
            'opcao_d' => '9.',
            'opcao_e' => '11.',
            'alternativa_correta' => 'C',
        ]);

        // =========================================================
        // QUESTÃO 25 — Recursão em Cauda / Python (Gabarito: C)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A linguagem Python não permite alguns tipos de otimização como, por exemplo, a recursão em cauda e, devido à sua natureza dinâmica, é impossível realizar esse tipo de otimização em tempo de compilação tal como em linguagens funcionais como Haskell ou ML.</p>

                <p class="mb-2 text-justify">O trecho de código a seguir, escrito em Python, realiza a busca binária de um elemento x em uma lista lst e a função <code>binary_search</code> tem código recursivo em cauda.</p>

                <div class="bg-gray-100 rounded p-3 mb-2 text-sm font-mono whitespace-pre-wrap">
1  def binary_search(x, lst, low=None, high=None):
2      if low == None : low = 0
3      if high == None : high = len(lst)-1
4      mid = low + (high - low) // 2
5      if low > high :
6          return None
7      elif lst[mid] == x :
8          return mid
9      elif lst[mid] > x :
10         return binary_search(x, lst, low, mid-1)
11     else :
12         return binary_search(x, lst, mid+1, high)
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando esse trecho de código, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Substituindo-se o conteúdo da linha 10 por <code>high = mid - 1</code> e substituindo-se o conteúdo da linha 12 por <code>low = mid + 1</code>, não se altera o resultado de uma busca.</p>

                <p class="mb-2 pl-6 text-justify">II. Envolvendo-se o código das linhas 4 a 12 em um laço <code>while True</code>, substituindo-se o conteúdo da linha 10 por <code>high = mid - 1</code> e substituindo-se o conteúdo da linha 12 por <code>low = mid + 1</code> remove-se a recursão de cauda e o resultado da busca não é alterado.</p>

                <p class="mb-2 pl-6 text-justify">III. Substituindo-se o código da linha 10 por <code>newhigh = mid-1; return binary_search(x, lst, low, newhigh)</code> e o código da linha 12 por <code>newlow = mid+1; return binary_search(x, lst, newlow, high)</code> remove-se a recursão de cauda.</p>

                <p class="mb-2 pl-6 text-justify">IV. Substituindo-se o conteúdo das linhas 9 a 12 por um bloco que define <code>newlow</code> e <code>newhigh</code> conforme o caso e retorna <code>binary_search(x, lst, newlow, newhigh)</code> mantém-se o resultado da busca.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'Disponível em: http://www.python-history.blogspot.com/2009/04/origins-of-pythons-functional-features.html. Acesso em: 15 jun. 2019 (adaptado).',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'II e III, apenas.',
            'opcao_c' => 'II e IV, apenas.',
            'opcao_d' => 'I, III e IV, apenas.',
            'opcao_e' => 'I, II, III e IV.',
            'alternativa_correta' => 'C',
        ]);

        // =========================================================
        // QUESTÃO 26 — Controle PID (Gabarito: D)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Proporcional-Integral-Derivativo (PID) é o algoritmo de controle que mais tem sido utilizado na indústria e no mundo para sistemas de controle industrial. A popularidade de controladores PID pode ser parcialmente atribuída ao seu desempenho robusto em uma ampla gama de condições de funcionamento e parcialmente à sua simplicidade funcional.</p>

                <p class="mb-2 text-justify">Considere o trecho incompleto do código-fonte a seguir em que <code>kp</code> é o ganho proporcional (P), <code>ki</code> o ganho integral (I) e <code>kd</code> o ganho derivativo (D).</p>

                <div class="bg-gray-100 rounded p-3 mb-2 text-sm font-mono whitespace-pre-wrap">
1  double ITerm = 0, lastErro = 0;
2  int lastTime = 0;
3  double Compute(int sampleTime, double kp, double ki, double kd, double SP, double PV)
4  {
5      unsigned long now = millis();
6      int timeChange = (now - lastTime);
7      if (timeChange >= sampleTime)
8      {
9          double Erro = SP - PV;
10         ITerm += Erro * sampleTime;
11         double dErro = (Erro - lastErro);
12         double output = _______________
13         lastErro = Erro;
14         lastTime = now;
15     }
16     return output;
17 }
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando a necessidade de implementar o esquema de controle PID, assinale a opção que completa corretamente a linha 12 desse código.</p>
            ',
            'referencia' => 'Disponível em: https://www.ni.com/pt-br/innovations/white-papers/06/pid-theory-explained.html. Acesso em: 20 jun. 2019 (adaptado).',
            'opcao_a' => '<code>kp * Erro + ki * ITerm;</code>',
            'opcao_b' => '<code>ki/kp * ITerm + kd/kp * dErro;</code>',
            'opcao_c' => '<code>kp * Erro + kd * dErro * dErro;</code>',
            'opcao_d' => '<code>kp * Erro + ki * ITerm + kd * dErro;</code>',
            'opcao_e' => '<code>kp * Erro + ki * ITerm + kd * dErro * dErro;</code>',
            'alternativa_correta' => 'D',
        ]);

        // =========================================================
        // QUESTÃO 27 — Padrão de Projeto Strategy (Gabarito: D)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Padrões de projeto são soluções gerais para problemas frequentes de projetos de software. O diagrama de classes UML abaixo ilustra a estrutura do padrão <i>Strategy</i>:</p>

                <div class="bg-gray-50 border border-gray-200 rounded p-3 mb-2 text-sm text-center text-gray-700">
                    <p class="font-semibold">Diagrama UML — Padrão Strategy</p>
                    <div class="mt-2 grid grid-cols-1 gap-1 text-xs font-mono">
                        <div class="border border-gray-400 rounded px-2 py-1 inline-block mx-auto">Context<br><span class="text-gray-500">-strategy</span><br>+ContextInterface()</div>
                        <div class="text-gray-500">↓ usa</div>
                        <div class="border border-gray-400 rounded px-2 py-1 inline-block mx-auto">«interface» Strategy<br>+AlgorithmInterface()</div>
                        <div class="text-gray-500">↓ implementa</div>
                        <div class="flex justify-center gap-2 flex-wrap">
                            <div class="border border-gray-400 rounded px-2 py-1">ConcreteStrategyA<br>+AlgorithmInterface()</div>
                            <div class="border border-gray-400 rounded px-2 py-1">ConcreteStrategyB<br>+AlgorithmInterface()</div>
                            <div class="border border-gray-400 rounded px-2 py-1">ConcreteStrategyC<br>+AlgorithmInterface()</div>
                        </div>
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir do modelo UML apresentado e acerca dos padrões de projeto, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A Classe <i>Strategy</i> pode ser implementada como uma classe abstrata ou uma interface, pois corresponde unicamente a uma abstração dos diversos tipos de estratégias definidas.</p>

                <p class="mb-2 pl-6 text-justify">II. O padrão <i>Strategy</i> pode ser utilizado na implementação de classes para, por exemplo, permitir que métodos de ordenação de coleções possam ser usados com diferentes critérios de comparação.</p>

                <p class="mb-2 pl-6 text-justify">III. O baixo acoplamento permite que estratégias sejam incluídas ou retiradas da aplicação sem alterar a estrutura das demais classes do sistema.</p>

                <p class="mb-2 pl-6 text-justify">IV. O uso do padrão <i>Singleton</i> para criação das instâncias, permitiria centralizar em um método de criação a lógica de seleção da estratégia a ser utilizada.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => 'GAMMA, E. et al. <b>Padrões de projeto: Soluções reutilizáveis de software orientado a objetos.</b> 2. ed. Porto Alegre: Bookman, 2000 (adaptado).',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'I e IV.',
            'opcao_c' => 'III e IV.',
            'opcao_d' => 'I, II e III.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => 'D',
        ]);

        // =========================================================
        // QUESTÃO 28 — Circuito Lógico / Tempo Real (Gabarito: C)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Um sistema de tempo real satisfaz explicitamente restrições de tempo de resposta, podendo ter consequências como riscos ou falhas caso não cumpra essas restrições. O circuito lógico a seguir faz parte de um sistema de tempo real que realiza o acionamento de um alarme.</p>

                <div class="bg-gray-50 border border-gray-200 rounded p-3 mb-2 text-sm text-gray-700">
                    <p class="font-semibold mb-1">Entradas: A, B, C, D — Saída: Y (alarme)</p>
                    <p class="mb-1">Expressão original do circuito: <strong>Y = (A AND B AND C) OR (NOT A AND NOT B AND C AND D)</strong></p>
                    <p>Os atrasos de propagação por porta são:</p>
                    <ul class="list-disc list-inside mt-1">
                        <li>AND: 3 u.t.</li>
                        <li>OR: 4 u.t.</li>
                        <li>NOT: 1 u.t.</li>
                    </ul>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Após a simplificação do circuito, o menor tempo possível para o acionamento do alarme é de</p>
            ',
            'referencia' => '',
            'opcao_a' => '9 u.t.',
            'opcao_b' => '10 u.t.',
            'opcao_c' => '3 u.t.',
            'opcao_d' => '4 u.t.',
            'opcao_e' => '6 u.t.',
            'alternativa_correta' => 'C',
        ]);

        // =========================================================
        // QUESTÃO 29 — Internet das Coisas (IoT) (Gabarito: A)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A Internet das Coisas (<i>Internet of Things</i> (IoT)) pode ser definida como um ambiente de objetos físicos interconectados com a internet por meio de sensores/atuadores embutidos, criando um ecossistema de computação onipresente (ubíqua) e introduzindo soluções funcionais nos processos do dia a dia, sejam domésticos ou profissionais. É um conjunto de tecnologias e protocolos associados que permitem que objetos se conectem a uma rede de comunicações e sejam identificados e controlados por essa conexão. A IoT usa conceitos, tecnologias e soluções que envolvem sistemas distribuídos e redes de comunicação.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. Em soluções e aplicações para IoT, é preciso garantir que essas funcionarão de forma consistente em um ambiente concorrente, onde ocorrem várias requisições ao mesmo recurso compartilhado.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. Em soluções atuais de IoT existe heterogeneidade, ou seja, dentro do mesmo ecossistema, uma variedade de sistemas operacionais, <i>hardware</i>, linguagens de programação e padrões de redes de comunicação são utilizados.</p>

                <p class="mb-1 text-justify">A respeito dessas asserções, assinale a alternativa correta.</p>
            ',
            'referencia' => 'MAGRANI, E. <b>A internet das coisas.</b> Rio de Janeiro: FGV Editora, 2018 (adaptado).',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta de I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta de I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'A',
        ]);

        // =========================================================
        // QUESTÃO 30 — Java Servlet / Concorrência (Gabarito: D)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">É comum a expressão "servidor web" ser utilizada para denominar processos cuja finalidade é disponibilizar recursos estáticos e recursos dinâmicos. Um <i>Container</i> de <i>Servlets</i> é um servidor web capaz de gerenciar diferentes aplicações que disponibilizam conteúdo dinâmico, e um <i>Servlet</i> é uma classe Java capaz de gerar conteúdo desse tipo, mediante a requisição de um cliente. Cada requisição atendida por um <i>Servlet</i> pode ser executada por uma <i>thread</i> e múltiplas requisições podem estar em execução simultaneamente.</p>

                <p class="mb-2 text-justify">Considere o <i>Servlet</i> a seguir que mantém uma variável cuja finalidade é controlar quantas requisições são atendidas ao longo do tempo.</p>

                <div class="bg-gray-100 rounded p-3 mb-2 text-sm font-mono whitespace-pre-wrap">
1  @WebServlet ("/")
2  public class ContaRequisicoes extends HttpServlet {
3      private int contador;
4      protected void doGet (HttpServletRequest req, HttpServletResponse resp) throws Exception {
5          contador = contador + 1;
6      }
7  }
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A respeito do <i>Servlet</i> apresentado, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O código apresenta uma condição de corrida.</p>

                <p class="mb-2 pl-6 text-justify">II. Substituir a linha 5 pela construção <code>synchronized (this) {contador = contador + 1;}</code> garante o correto funcionamento do método.</p>

                <p class="mb-2 pl-6 text-justify">III. Obter a trava do objeto referenciado por <code>request</code> antes de executar o incremento e liberá-la logo a seguir, garante o correto funcionamento do método.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'Disponível em: https://www.javaee.github.io/servlet-spec/downloads/servlet-4.0/servlet-4_0_FINAL.pdf. Acesso em: 24 jun. 2019 (adaptado).',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'II, apenas.',
            'opcao_c' => 'I e III, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'D',
        ]);

        // =========================================================
        // QUESTÃO 31 — Estados de Processos / Sistema Operacional (Gabarito: E)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Em um sistema computacional, os processos submetidos à execução podem estar em um dos estágios do seu ciclo de vida que são classificados como em execução, em espera ou pronto. Quando o processo tem a posse do processador, está em execução. Se o processo não puder ser executado, por estar aguardando algum dado por exemplo, é considerado um processo em espera. Se não houver impedimentos para sua execução, o processo deve aguardar sua vez para ser executado na fila dos processos prontos.</p>

                <div class="bg-gray-50 border border-gray-200 rounded p-3 mb-2 text-sm text-center text-gray-700">
                    <p class="font-semibold">Diagrama de estados de processos:</p>
                    <div class="mt-2 text-xs font-mono">
                        <p>Espera ←—C— Execução —B→ Pronto</p>
                        <p class="mt-1">Espera —A→ Pronto &nbsp;&nbsp; Pronto —D→ Execução</p>
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base no texto e no diagrama de estados, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Um novo processo criado é inicializado no estado "espera".</p>

                <p class="mb-2 pl-6 text-justify">II. Pode haver mais de um processo em estado "pronto".</p>

                <p class="mb-2 pl-6 text-justify">III. A transição B indica que o diagrama refere-se a um sistema operacional multitarefa.</p>

                <p class="mb-2 pl-6 text-justify">IV. O diagrama é inadequado para representar um sistema monotarefa.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'I e III.',
            'opcao_c' => 'III e IV.',
            'opcao_d' => 'I, II e IV.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => 'E',
        ]);

        // =========================================================
        // QUESTÃO 32 — Desvio Padrão / Algoritmo (Gabarito: D)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Uma estação de monitoramento de temperatura utiliza um termógrafo para registrar continuamente em um gráfico os valores detectados por seus sensores. Um determinado ambiente foi monitorado ao longo de três períodos distintos de um dia. O ambiente é considerado apropriado para um experimento científico se, para qualquer período P<sub>i</sub> de monitoramento σ(P<sub>i</sub>) ≤ 2, em que σ(P<sub>i</sub>) denota o desvio padrão populacional do período P<sub>i</sub>.</p>

                <p class="mb-2 text-justify">As medidas de temperatura em °C, obtidas após um processo de quantização do sinal, são apresentadas na tabela a seguir.</p>

                <div class="overflow-x-auto mb-3">
                    <table class="mx-auto border-collapse text-sm text-center">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border border-gray-400 px-3 py-1">Período (Pi)</th>
                                <th class="border border-gray-400 px-3 py-1">Medida 1</th>
                                <th class="border border-gray-400 px-3 py-1">Medida 2</th>
                                <th class="border border-gray-400 px-3 py-1">Medida 3</th>
                                <th class="border border-gray-400 px-3 py-1">Medida 4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border border-gray-400 px-3 py-1">P1</td><td class="border border-gray-400 px-3 py-1">33,5</td><td class="border border-gray-400 px-3 py-1">33,5</td><td class="border border-gray-400 px-3 py-1">33,0</td><td class="border border-gray-400 px-3 py-1">33,5</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">P2</td><td class="border border-gray-400 px-3 py-1">27,5</td><td class="border border-gray-400 px-3 py-1">27</td><td class="border border-gray-400 px-3 py-1">27,5</td><td class="border border-gray-400 px-3 py-1">27,5</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">P3</td><td class="border border-gray-400 px-3 py-1">2,0</td><td class="border border-gray-400 px-3 py-1">2,5</td><td class="border border-gray-400 px-3 py-1">2,0</td><td class="border border-gray-400 px-3 py-1">2,0</td></tr>
                        </tbody>
                    </table>
                </div>

                <p class="mb-2 text-justify">A fim de automatizar o processamento dos sinais, o algoritmo a seguir foi desenvolvido, tendo como entrada um período e como resultado um valor booleano que indica se o período é apropriado ou não.</p>

                <div class="bg-gray-100 rounded p-3 mb-2 text-sm font-mono whitespace-pre-wrap">
Algoritmo: viavel(P)
    entrada: P: um período
    saída: um valor booleano que indica se P é apropriado para o experimento
    total ← 0
    para p ∈ P faça
        total ← total + (p - AVG(P)) × (p - AVG(P))
    fim
    retorna √(total / |P|) ≤ 2
                </div>

                <p class="mb-2 text-justify">Com base no caso apresentado, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Conforme o funcionamento do algoritmo, os períodos P1, P2 e P3 são apropriados.</p>

                <p class="mb-2 pl-6 text-justify">II. O algoritmo calcula o desvio padrão amostral e, portanto, não é adequado para o estudo.</p>

                <p class="mb-2 pl-6 text-justify">III. Caso executado sobre o período P = {P1, P2 e P3}, o algoritmo indica que ele é inapropriado para o experimento.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'II, apenas.',
            'opcao_c' => 'I e III, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'D',
        ]);

        // =========================================================
        // QUESTÃO 33 — PCB / Comprimento de Trilha (Gabarito: A)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Uma trilha de um PCB (<i>printed circuit board</i>) é uma conexão entre dois pontos com impedância controlada. Considerando que ela está sendo projetada com o tipo chamado <i>stripline</i>, o plano de referência é o GND (<i>ground</i>) e o dielétrico é o material FR4, cuja constante dielétrica k é aproximadamente igual a 4, o que implica na velocidade de propagação V<sub>p</sub> de um sinal elétrico em uma <i>stripline</i> ser a metade da velocidade no ar, portanto, aproximadamente <strong>15 cm por nanosegundo</strong>.</p>

                <p class="mb-2 text-justify">Em uma linha de transmissão utilizada para sinais digitais, o tempo entre uma subida e uma descida t<sub>h</sub> do sinal é a metade do período T da frequência máxima do sinal. O comprimento crítico L<sub>c</sub> de uma trilha é dado por:</p>

                <p class="mb-2 text-center font-semibold">L<sub>c</sub> = V<sub>p</sub> × (t<sub>h</sub> / 2)</p>

                <p class="mb-2 text-justify">Para uma trilha operar como uma conexão simples entre 2 pontos, seu comprimento L deve ser, no máximo, igual a <strong>L<sub>c</sub> / 1,5</strong>.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">No caso da interface <i>PCI Express</i>, cuja frequência máxima de operação especificada é de 1,25 GHz, o comprimento L máximo da trilha para que a mesma se comporte como uma simples conexão entre 2 pontos é de</p>
            ',
            'referencia' => '',
            'opcao_a' => '2 cm.',
            'opcao_b' => '3 cm.',
            'opcao_c' => '4 cm.',
            'opcao_d' => '6 cm.',
            'opcao_e' => '8 cm.',
            'alternativa_correta' => 'A',
        ]);

        // =========================================================
        // QUESTÃO 34 — Round Robin / Escalonamento (Gabarito: A)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Um dos algoritmos de escalonamento mais clássicos é o de alternância circular (<i>Round Robin</i>) que atribui um intervalo de tempo para cada processo (quantum), dentro do qual ele pode ser executado. Ao final desse intervalo, o processo sofre uma preempção, caso não termine de executar, e outro processo não finalizado entra para ser executado. Essa ação de alternância de um processo para outro, também conhecida como troca de contexto, requer uma certa quantidade de tempo.</p>

                <p class="mb-2 text-justify">Um sistema operacional que utiliza o algoritmo <i>Round Robin</i> precisa executar dois processos, ambos com tempos de tarefa de 20 ms. Objetivando-se minimizar o tempo de resposta do sistema, o Quantum e o tempo de troca de contexto, respectivamente, devem ser</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Qual das seguintes combinações de Quantum e tempo de troca de contexto minimiza o tempo de resposta do sistema?</p>
            ',
            'referencia' => 'TANENBAUM, A. S. <b>Sistemas operacionais modernos.</b> 4. ed. São Paulo: Pearson Education do Brasil, 2015 (adaptado).',
            'opcao_a' => '5 ms e 1 ms.',
            'opcao_b' => '4 ms e 2 ms.',
            'opcao_c' => '5 ms e 3 ms.',
            'opcao_d' => '2 ms e 1 ms.',
            'opcao_e' => '2 ms e 2 ms.',
            'alternativa_correta' => 'A',
        ]);

        // =========================================================
        // QUESTÃO 35 — Usabilidade / Inteligibilidade (Gabarito: C)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Usabilidade é o fator que assegura ao usuário a facilidade de uso e é definida em aspectos como a inteligibilidade, que pode ser definida como atributos do software que evidenciam</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A inteligibilidade, como atributo de usabilidade, evidencia</p>
            ',
            'referencia' => '',
            'opcao_a' => 'a satisfação subjetiva do usuário durante o uso de funções específicas.',
            'opcao_b' => 'o esforço do usuário para sua operação e controle de sua operação.',
            'opcao_c' => 'o esforço do usuário para reconhecer o conceito lógico e sua aplicabilidade.',
            'opcao_d' => 'que o software esteja de acordo com as normas previstas em leis relacionadas à aplicação.',
            'opcao_e' => 'o esforço do usuário para aprender funcionalidades e controles de fatores de entrada e saída.',
            'alternativa_correta' => 'C',
        ]);
    }
}
