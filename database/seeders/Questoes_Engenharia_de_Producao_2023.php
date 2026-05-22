<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class Questoes_Engenharia_de_Producao_2023 extends Seeder
{
    public function run(): void
    {
        // =====================================================================
        // Engenharia de Produção – Questões 10 a 38
        // =====================================================================

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Uma das preocupações dos gestores de instituições bancárias é o tempo de permanência do cliente na agência. Considere que o tempo gasto por um cliente em um banco, entre meio-dia e uma hora da tarde, apresente o comportamento de uma distribuição de probabilidade uniforme entre 0 e 30 minutos.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A probabilidade de que o tempo de permanência de um cliente esteja entre 5 e 20 minutos é, aproximadamente, de</p>
            ',
            'referencia' => '',
            'opcao_a' => '25%.',
            'opcao_b' => '33%.',
            'opcao_c' => '45%.',
            'opcao_d' => '50%.',
            'opcao_e' => '67%.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">No Brasil, os principais produtos fabricados e comercializados por uma empresa são motosserras, roçadeiras e aparadores elétricos, cuja produção aproximada é de 50 000 unidades mensais. A empresa também produz cilindros para motores, fabricando em torno de 500 000 unidades por mês.</p>
                <p class="mb-2 text-justify">Quanto à produção de cilindros para motores, identificou-se que a empresa compete na estratégia de liderança em custos, pois a produção é de alto volume, visto que esses produtos são destinados tanto para produção dos motores dos equipamentos produzidos internamente (motosserras, roçadeiras e aparadores elétricos) quanto para outras empresas que utilizam esses produtos no mercado interno e externo.</p>
                <p class="mb-2 text-justify">Nos mercados agropecuário, de jardinagem e florestal, foi identificado que a empresa compete na estratégia de diferenciação. Tratam-se de produtos com valor agregado, que, depois de produzidos, são comercializados diretamente aos consumidores em lojas próprias.</p>
                <p class="mb-2 text-right text-sm">PIRAN, F.A.S. et al. Posicionamento estratégico, estratégias de manufatura e gestão de custos: estudo de caso em uma empresa do segmento metalomecânico. <i>Revista Contemporânea de Contabilidade</i>. Florianópolis, v. 13, n. 28, p. 81-98, jan./abr., 2016 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base no texto e na classificação das decisões de estratégias competitivas genéricas, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A estratégia de liderança em custos baseia-se na obtenção de economia de escala, decorrente do uso dos cilindros em uma maior variedade de produtos.</p>
                <p class="mb-2 pl-6 text-justify">II. A diversidade de clientes que adquire os cilindros evidencia que a empresa adota a estratégia competitiva genérica baseada no enfoque em custo.</p>
                <p class="mb-2 pl-6 text-justify">III. A estratégia de diferenciação pode ser direcionada para alvos amplos ou estreitos, a depender dos segmentos de clientes que a empresa pretende alcançar.</p>
                <p class="mb-2 pl-6 text-justify">IV. A referida empresa adota estratégia com enfoque na diferenciação, pois comercializa produtos nos mercados agropecuário, de jardinagem e florestal.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'I e III.',
            'opcao_c' => 'III e IV.',
            'opcao_d' => 'I, II e IV.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Com o crescimento do mercado de pet shop, os estabelecimentos especializados passaram a gerenciar elevados níveis de estoque. Diante disso, o gestor de um estabelecimento comercial do ramo pet shop contratou um estagiário de Engenharia de Produção para auxiliá-lo na gestão de estoques.</p>
                <p class="mb-2 text-justify">Para calcular o ponto de reposição (demanda média durante o tempo de reposição mais o estoque de segurança) do item ração canina em embalagens de 15 kg, definiu um nível de serviço igual a 99%, sendo essa a probabilidade de não esgotar o estoque em qualquer ciclo de pedido.</p>
                <p class="mb-2 text-justify">A partir dessas definições, o gestor realizou levantamento de dados relativos ao item, e obteve os dados apresentados na tabela a seguir.</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border px-3 py-1">Quantidade</th>
                                <th class="border px-3 py-1">Unidade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1">Demanda diária média: 160</td><td class="border px-3 py-1">Embalagem de 15 kg</td></tr>
                            <tr><td class="border px-3 py-1">Desvio padrão da demanda diária: 25</td><td class="border px-3 py-1">Embalagem de 15 kg</td></tr>
                            <tr><td class="border px-3 py-1">Tempo de reposição: 3</td><td class="border px-3 py-1">Dia</td></tr>
                        </tbody>
                    </table>
                </div>
                <p class="mb-2 text-justify">Após seis meses de implantação do serviço o gestor percebeu que poderia reduzi-lo para 85%.</p>
                <p class="mb-2 text-justify">Com relação à essa situação hipotética, considere que a demanda do item está distribuída normalmente e, portanto, o estoque de segurança é obtido pelo produto do número de desvios padrão (z), associado ao nível de serviço definido, e o desvio padrão da demanda durante o tempo de reposição. Nesse caso, o desvio padrão do tempo de reposição é igual a 43 unidades.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'A demanda média no tempo de reposição é de 320 unidades.',
            'opcao_b' => 'O ponto de reposição para o nível de serviço de 85% é de 400 unidades.',
            'opcao_c' => 'O estoque de segurança para o nível de serviço de 99% é de 120 unidades.',
            'opcao_d' => 'O ponto de reposição teve redução em cerca de 40 unidades, após a diminuição do nível de serviço de 99% para 85%.',
            'opcao_e' => 'O estoque de segurança foi aumentado em mais de 45 unidades, em razão da redução do nível de serviço de 99% para 85%.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">As estacas pré-fabricadas de concreto são cravadas no terreno para a execução das fundações em profundidades suficientes para absorver as cargas estruturais. As peças podem ser fabricadas em qualquer forma geométrica em sua seção transversal.</p>
                <p class="mb-2 text-justify">A tabela a seguir indica a demanda, a previsão de demanda pelo método da suavização exponencial, com parâmetro suavizador de 0,6, o erro da previsão, o erro absoluto e o sinal de rastreamento para a estaca de 420 mm para um período de 20 dias.</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border px-3 py-1">Dia</th>
                                <th class="border px-3 py-1">Demanda</th>
                                <th class="border px-3 py-1">Previsão</th>
                                <th class="border px-3 py-1">Erro de Previsão</th>
                                <th class="border px-3 py-1">Erro Absoluto</th>
                                <th class="border px-3 py-1">Sinal de Rastreamento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1 text-center">1</td><td class="border px-3 py-1 text-center">240</td><td class="border px-3 py-1 text-center">220</td><td class="border px-3 py-1 text-center">20</td><td class="border px-3 py-1 text-center">20</td><td class="border px-3 py-1 text-center">1,0</td></tr>
                            <tr><td class="border px-3 py-1 text-center">2</td><td class="border px-3 py-1 text-center">170</td><td class="border px-3 py-1 text-center">232</td><td class="border px-3 py-1 text-center">-62</td><td class="border px-3 py-1 text-center">62</td><td class="border px-3 py-1 text-center">-0,3</td></tr>
                            <tr><td class="border px-3 py-1 text-center">3</td><td class="border px-3 py-1 text-center">230</td><td class="border px-3 py-1 text-center">195</td><td class="border px-3 py-1 text-center">35</td><td class="border px-3 py-1 text-center">35</td><td class="border px-3 py-1 text-center">-0,1</td></tr>
                            <tr><td class="border px-3 py-1 text-center">4</td><td class="border px-3 py-1 text-center">210</td><td class="border px-3 py-1 text-center">216</td><td class="border px-3 py-1 text-center">-6</td><td class="border px-3 py-1 text-center">6</td><td class="border px-3 py-1 text-center">-0,5</td></tr>
                            <tr><td class="border px-3 py-1 text-center">5</td><td class="border px-3 py-1 text-center">220</td><td class="border px-3 py-1 text-center">212</td><td class="border px-3 py-1 text-center">8</td><td class="border px-3 py-1 text-center">8</td><td class="border px-3 py-1 text-center">-0,1</td></tr>
                            <tr><td class="border px-3 py-1 text-center">6</td><td class="border px-3 py-1 text-center">235</td><td class="border px-3 py-1 text-center">217</td><td class="border px-3 py-1 text-center">18</td><td class="border px-3 py-1 text-center">18</td><td class="border px-3 py-1 text-center">0,1</td></tr>
                            <tr><td class="border px-3 py-1 text-center">7</td><td class="border px-3 py-1 text-center">190</td><td class="border px-3 py-1 text-center">228</td><td class="border px-3 py-1 text-center">-38</td><td class="border px-3 py-1 text-center">38</td><td class="border px-3 py-1 text-center">-0,1</td></tr>
                            <tr><td class="border px-3 py-1 text-center">8</td><td class="border px-3 py-1 text-center">200</td><td class="border px-3 py-1 text-center">205</td><td class="border px-3 py-1 text-center">-5</td><td class="border px-3 py-1 text-center">5</td><td class="border px-3 py-1 text-center">-0,7</td></tr>
                            <tr><td class="border px-3 py-1 text-center">9</td><td class="border px-3 py-1 text-center">205</td><td class="border px-3 py-1 text-center">202</td><td class="border px-3 py-1 text-center">3</td><td class="border px-3 py-1 text-center">3</td><td class="border px-3 py-1 text-center">-1,0</td></tr>
                            <tr><td class="border px-3 py-1 text-center">10</td><td class="border px-3 py-1 text-center">220</td><td class="border px-3 py-1 text-center">204</td><td class="border px-3 py-1 text-center">16</td><td class="border px-3 py-1 text-center">16</td><td class="border px-3 py-1 text-center">-0,1</td></tr>
                            <tr><td class="border px-3 py-1 text-center">11</td><td class="border px-3 py-1 text-center">245</td><td class="border px-3 py-1 text-center">214</td><td class="border px-3 py-1 text-center">31</td><td class="border px-3 py-1 text-center">31</td><td class="border px-3 py-1 text-center">0,1</td></tr>
                            <tr><td class="border px-3 py-1 text-center">12</td><td class="border px-3 py-1 text-center">180</td><td class="border px-3 py-1 text-center">232</td><td class="border px-3 py-1 text-center">-52</td><td class="border px-3 py-1 text-center">52</td><td class="border px-3 py-1 text-center">-0,1</td></tr>
                            <tr><td class="border px-3 py-1 text-center">13</td><td class="border px-3 py-1 text-center">245</td><td class="border px-3 py-1 text-center">201</td><td class="border px-3 py-1 text-center">44</td><td class="border px-3 py-1 text-center">44</td><td class="border px-3 py-1 text-center">0,0</td></tr>
                            <tr><td class="border px-3 py-1 text-center">14</td><td class="border px-3 py-1 text-center">225</td><td class="border px-3 py-1 text-center">227</td><td class="border px-3 py-1 text-center">-2</td><td class="border px-3 py-1 text-center">2</td><td class="border px-3 py-1 text-center">0,3</td></tr>
                            <tr><td class="border px-3 py-1 text-center">15</td><td class="border px-3 py-1 text-center">200</td><td class="border px-3 py-1 text-center">226</td><td class="border px-3 py-1 text-center">-26</td><td class="border px-3 py-1 text-center">26</td><td class="border px-3 py-1 text-center">0,0</td></tr>
                            <tr><td class="border px-3 py-1 text-center">16</td><td class="border px-3 py-1 text-center">260</td><td class="border px-3 py-1 text-center">210</td><td class="border px-3 py-1 text-center">50</td><td class="border px-3 py-1 text-center">50</td><td class="border px-3 py-1 text-center">0,0</td></tr>
                            <tr><td class="border px-3 py-1 text-center">17</td><td class="border px-3 py-1 text-center">190</td><td class="border px-3 py-1 text-center">240</td><td class="border px-3 py-1 text-center">-50</td><td class="border px-3 py-1 text-center">50</td><td class="border px-3 py-1 text-center">0,0</td></tr>
                            <tr><td class="border px-3 py-1 text-center">18</td><td class="border px-3 py-1 text-center">180</td><td class="border px-3 py-1 text-center">210</td><td class="border px-3 py-1 text-center">-30</td><td class="border px-3 py-1 text-center">30</td><td class="border px-3 py-1 text-center">-0,1</td></tr>
                            <tr><td class="border px-3 py-1 text-center">19</td><td class="border px-3 py-1 text-center">200</td><td class="border px-3 py-1 text-center">192</td><td class="border px-3 py-1 text-center">8</td><td class="border px-3 py-1 text-center">8</td><td class="border px-3 py-1 text-center">-0,3</td></tr>
                            <tr><td class="border px-3 py-1 text-center">20</td><td class="border px-3 py-1 text-center">230</td><td class="border px-3 py-1 text-center">197</td><td class="border px-3 py-1 text-center">33</td><td class="border px-3 py-1 text-center">33</td><td class="border px-3 py-1 text-center">0,0</td></tr>
                            <tr class="font-bold bg-gray-50"><td class="border px-3 py-1 text-center">Totais</td><td class="border px-3 py-1 text-center">4 275</td><td class="border px-3 py-1 text-center">4 280</td><td class="border px-3 py-1 text-center">-5</td><td class="border px-3 py-1 text-center">537</td><td class="border px-3 py-1 text-center">—</td></tr>
                        </tbody>
                    </table>
                </div>
                <p class="mb-2 text-justify">Na tabela, o erro de previsão tem distribuição aproximadamente normal, com média zero ao nível de confiança de 95%, o que possibilita o monitoramento do sinal de rastreamento do modelo de previsão por meio de gráfico de controle.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nos dados apresentados, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O sinal de rastreamento indica que o modelo de previsão rastreia a variação da demanda.</p>
                <p class="mb-2 pl-6 text-justify">II. O desvio médio absoluto (MAD) para o período de 20 dias é de aproximadamente -0,4.</p>
                <p class="mb-2 pl-6 text-justify">III. O MAD para o período de 20 dias é de aproximadamente 27.</p>
                <p class="mb-2 pl-6 text-justify">IV. A previsão da demanda para o dia 21 é de aproximadamente 217 estacas.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'II e IV.',
            'opcao_c' => 'III e IV.',
            'opcao_d' => 'I, II e III.',
            'opcao_e' => 'I, III e IV.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Uma pequena fábrica, que produz artefatos plásticos injetados, possui três máquinas injetoras em suas instalações. Todas as máquinas têm a mesma capacidade de processamento e se encontram em plena operação. No entanto, clientes começaram a reclamar da qualidade dos produtos, pois, em muitos casos, as peças rachavam ao sofrerem pequenas quedas. A fim de verificar o ajuste das injetoras, foram selecionadas aleatoriamente 8 peças injetadas de cada máquina e, subsequentemente, o ensaio de resistência ao impacto foi conduzido em tais peças.</p>
                <p class="mb-2 text-justify">Os resultados experimentais são apresentados por meio de um diagrama boxplot comparativo da resistência ao impacto (J/m) das três máquinas. Com base na análise do diagrama:</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A análise da figura permite concluir, comparativamente, que</p>
            ',
            'referencia' => '',
            'opcao_a' => 'a máquina 3 apresenta um melhor ajuste em relação à máquina 2, pois as peças injetadas exibem maior resistência ao impacto.',
            'opcao_b' => 'a máquina 3 é a que apresenta o melhor ajuste entre as máquinas da fábrica, pois fornece as peças injetadas de maior resistência ao impacto.',
            'opcao_c' => 'a máquina 1 apresenta um melhor ajuste em relação à máquina 2, pois é capaz de produzir 50% das peças injetadas com propriedade de resistência ao impacto superior a 19 J/m.',
            'opcao_d' => 'a máquina 3 é a que apresenta o pior ajuste dentre as máquinas da fábrica, pois é capaz de produzir 50% das peças injetadas com propriedade de resistência ao impacto inferior a 17 J/m.',
            'opcao_e' => 'a máquina 2 é a que apresenta o pior ajuste dentre as máquinas da fábrica, pois os dados experimentais para a resistência ao impacto são os que exibem o maior intervalo interquartílico.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Suponha que Leandro e seu irmão tenham resolvido fazer um macarrão ao alho e óleo seguindo uma sequência de atividades representada em um diagrama de rede, com os tempos das atividades dados em minutos:</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border px-3 py-1">Atividade</th>
                                <th class="border px-3 py-1">Tempo (min)</th>
                                <th class="border px-3 py-1">Predecessoras</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1">Início</td><td class="border px-3 py-1 text-center">0</td><td class="border px-3 py-1">—</td></tr>
                            <tr><td class="border px-3 py-1">Ferver a água (T2)</td><td class="border px-3 py-1 text-center">6</td><td class="border px-3 py-1">Início</td></tr>
                            <tr><td class="border px-3 py-1">Cortar o alho (T3)</td><td class="border px-3 py-1 text-center">2</td><td class="border px-3 py-1">Início</td></tr>
                            <tr><td class="border px-3 py-1">Refogar o alho (T4)</td><td class="border px-3 py-1 text-center">4</td><td class="border px-3 py-1">T3</td></tr>
                            <tr><td class="border px-3 py-1">Colocar o macarrão na água (T5)</td><td class="border px-3 py-1 text-center">5</td><td class="border px-3 py-1">T2</td></tr>
                            <tr><td class="border px-3 py-1">Tirar a água do macarrão (T6)</td><td class="border px-3 py-1 text-center">3</td><td class="border px-3 py-1">T5</td></tr>
                            <tr><td class="border px-3 py-1">Temperar o macarrão (T7)</td><td class="border px-3 py-1 text-center">3</td><td class="border px-3 py-1">T4, T6</td></tr>
                            <tr><td class="border px-3 py-1">Ralar o queijo sobre o macarrão (T8)</td><td class="border px-3 py-1 text-center">2</td><td class="border px-3 py-1">T7</td></tr>
                            <tr><td class="border px-3 py-1">Fim</td><td class="border px-3 py-1 text-center">0</td><td class="border px-3 py-1">T8</td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando que esse diagrama de rede foi seguido corretamente, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O macarrão ao alho e óleo levou, no mínimo, 19 minutos para ficar pronto.</p>
                <p class="mb-2 pl-6 text-justify">II. O caminho que inclui as atividades de cortar o alho e refogar o alho é um caminho não crítico.</p>
                <p class="mb-2 pl-6 text-justify">III. A atividade de temperar o macarrão somente pode ser realizada após a atividade de ferver a água.</p>

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

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">PERT (Program Evaluation and Review Technique) e CPM (Critical Path Method) são técnicas utilizadas na gestão de projetos que foram desenvolvidas na década de 1950.</p>
                <p class="mb-2 text-justify">Em um diagrama estão representadas as atividades, e suas respectivas durações em dias, para a instalação de um equipamento de produção. As atividades e seus nós são os seguintes (com durações em dias):</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border px-3 py-1">Atividade</th>
                                <th class="border px-3 py-1">De → Para</th>
                                <th class="border px-3 py-1">Duração (dias)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1">A</td><td class="border px-3 py-1">1 → 2</td><td class="border px-3 py-1 text-center">3</td></tr>
                            <tr><td class="border px-3 py-1">B</td><td class="border px-3 py-1">1 → 3</td><td class="border px-3 py-1 text-center">3</td></tr>
                            <tr><td class="border px-3 py-1">C</td><td class="border px-3 py-1">1 → 4</td><td class="border px-3 py-1 text-center">2</td></tr>
                            <tr><td class="border px-3 py-1">D</td><td class="border px-3 py-1">2 → 5</td><td class="border px-3 py-1 text-center">2</td></tr>
                            <tr><td class="border px-3 py-1">E</td><td class="border px-3 py-1">3 → 5</td><td class="border px-3 py-1 text-center">2</td></tr>
                            <tr><td class="border px-3 py-1">F</td><td class="border px-3 py-1">3 → 6</td><td class="border px-3 py-1 text-center">4</td></tr>
                            <tr><td class="border px-3 py-1">G</td><td class="border px-3 py-1">4 → 6</td><td class="border px-3 py-1 text-center">4</td></tr>
                            <tr><td class="border px-3 py-1">H</td><td class="border px-3 py-1">4 → 7</td><td class="border px-3 py-1 text-center">5</td></tr>
                            <tr><td class="border px-3 py-1">I</td><td class="border px-3 py-1">5 → 7</td><td class="border px-3 py-1 text-center">5</td></tr>
                            <tr><td class="border px-3 py-1">J</td><td class="border px-3 py-1">2 → 8</td><td class="border px-3 py-1 text-center">5</td></tr>
                            <tr><td class="border px-3 py-1">K</td><td class="border px-3 py-1">6 → 8</td><td class="border px-3 py-1 text-center">1</td></tr>
                            <tr><td class="border px-3 py-1">L</td><td class="border px-3 py-1">7 → 8</td><td class="border px-3 py-1 text-center">2</td></tr>
                            <tr><td class="border px-3 py-1">M</td><td class="border px-3 py-1">5 → 8</td><td class="border px-3 py-1 text-center">5</td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Assinale a alternativa que indica a folga, em dias, do caminho que inclui as atividades A, D e J.</p>
            ',
            'referencia' => '',
            'opcao_a' => '3.',
            'opcao_b' => '8.',
            'opcao_c' => '13.',
            'opcao_d' => '15.',
            'opcao_e' => '18.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O quadro a seguir lista as atividades de um projeto, com suas durações e a indicação das atividades predecessoras.</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border px-3 py-1">Atividades</th>
                                <th class="border px-3 py-1">Duração (dias)</th>
                                <th class="border px-3 py-1">Predecessoras</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1 text-center">A</td><td class="border px-3 py-1 text-center">3</td><td class="border px-3 py-1 text-center">—</td></tr>
                            <tr><td class="border px-3 py-1 text-center">B</td><td class="border px-3 py-1 text-center">4</td><td class="border px-3 py-1 text-center">A</td></tr>
                            <tr><td class="border px-3 py-1 text-center">C</td><td class="border px-3 py-1 text-center">2</td><td class="border px-3 py-1 text-center">B</td></tr>
                            <tr><td class="border px-3 py-1 text-center">D</td><td class="border px-3 py-1 text-center">5</td><td class="border px-3 py-1 text-center">B</td></tr>
                            <tr><td class="border px-3 py-1 text-center">E</td><td class="border px-3 py-1 text-center">4</td><td class="border px-3 py-1 text-center">C</td></tr>
                            <tr><td class="border px-3 py-1 text-center">F</td><td class="border px-3 py-1 text-center">3</td><td class="border px-3 py-1 text-center">D</td></tr>
                            <tr><td class="border px-3 py-1 text-center">G</td><td class="border px-3 py-1 text-center">2</td><td class="border px-3 py-1 text-center">E, F</td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">De acordo com o cronograma apresentado, o tempo para completar o projeto, em dias, corresponde a</p>
            ',
            'referencia' => '',
            'opcao_a' => '15.',
            'opcao_b' => '16.',
            'opcao_c' => '17.',
            'opcao_d' => '18.',
            'opcao_e' => '19.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A tabela a seguir apresenta os resultados de demanda real e quatro estimativas de previsão de demanda de uma empresa fabricante de bens de capital. A primeira estimativa foi obtida por meio da média móvel dos últimos três meses (n = 3), a segunda pela média exponencial (alfa = 0,5), as duas últimas considerando médias móvel e exponencial, ambas com sazonalidade (SZ).</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border px-3 py-1">Mês</th>
                                <th class="border px-3 py-1">Demanda</th>
                                <th class="border px-3 py-1">Previsão (n=3)</th>
                                <th class="border px-3 py-1">Previsão (alfa=0,5)</th>
                                <th class="border px-3 py-1">Previsão (n=3, com SZ)</th>
                                <th class="border px-3 py-1">Previsão (alfa=0,5, com SZ)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1">Jan.</td><td class="border px-3 py-1 text-center">43</td><td class="border px-3 py-1 text-center">43</td><td class="border px-3 py-1 text-center">42</td><td class="border px-3 py-1 text-center">41</td><td class="border px-3 py-1 text-center">41</td></tr>
                            <tr><td class="border px-3 py-1">Fev.</td><td class="border px-3 py-1 text-center">53</td><td class="border px-3 py-1 text-center">43</td><td class="border px-3 py-1 text-center">43</td><td class="border px-3 py-1 text-center">46</td><td class="border px-3 py-1 text-center">46</td></tr>
                            <tr><td class="border px-3 py-1">Mar.</td><td class="border px-3 py-1 text-center">65</td><td class="border px-3 py-1 text-center">50</td><td class="border px-3 py-1 text-center">47</td><td class="border px-3 py-1 text-center">55</td><td class="border px-3 py-1 text-center">58</td></tr>
                            <tr><td class="border px-3 py-1">Abr.</td><td class="border px-3 py-1 text-center">69</td><td class="border px-3 py-1 text-center">60</td><td class="border px-3 py-1 text-center">54</td><td class="border px-3 py-1 text-center">65</td><td class="border px-3 py-1 text-center">73</td></tr>
                            <tr><td class="border px-3 py-1">Maio</td><td class="border px-3 py-1 text-center">65</td><td class="border px-3 py-1 text-center">66</td><td class="border px-3 py-1 text-center">62</td><td class="border px-3 py-1 text-center">73</td><td class="border px-3 py-1 text-center">78</td></tr>
                            <tr><td class="border px-3 py-1">Jun.</td><td class="border px-3 py-1 text-center">53</td><td class="border px-3 py-1 text-center">65</td><td class="border px-3 py-1 text-center">66</td><td class="border px-3 py-1 text-center">71</td><td class="border px-3 py-1 text-center">70</td></tr>
                            <tr><td class="border px-3 py-1">Jul.</td><td class="border px-3 py-1 text-center">43</td><td class="border px-3 py-1 text-center">57</td><td class="border px-3 py-1 text-center">62</td><td class="border px-3 py-1 text-center">60</td><td class="border px-3 py-1 text-center">55</td></tr>
                            <tr><td class="border px-3 py-1">Ago.</td><td class="border px-3 py-1 text-center">34</td><td class="border px-3 py-1 text-center">48</td><td class="border px-3 py-1 text-center">54</td><td class="border px-3 py-1 text-center">46</td><td class="border px-3 py-1 text-center">41</td></tr>
                            <tr><td class="border px-3 py-1">Set.</td><td class="border px-3 py-1 text-center">31</td><td class="border px-3 py-1 text-center">39</td><td class="border px-3 py-1 text-center">43</td><td class="border px-3 py-1 text-center">35</td><td class="border px-3 py-1 text-center">31</td></tr>
                            <tr><td class="border px-3 py-1">Out.</td><td class="border px-3 py-1 text-center">34</td><td class="border px-3 py-1 text-center">33</td><td class="border px-3 py-1 text-center">36</td><td class="border px-3 py-1 text-center">31</td><td class="border px-3 py-1 text-center">29</td></tr>
                            <tr><td class="border px-3 py-1">Nov.</td><td class="border px-3 py-1 text-center">38</td><td class="border px-3 py-1 text-center">34</td><td class="border px-3 py-1 text-center">33</td><td class="border px-3 py-1 text-center">30</td><td class="border px-3 py-1 text-center">30</td></tr>
                            <tr><td class="border px-3 py-1">Dez.</td><td class="border px-3 py-1 text-center">43</td><td class="border px-3 py-1 text-center">37</td><td class="border px-3 py-1 text-center">34</td><td class="border px-3 py-1 text-center">33</td><td class="border px-3 py-1 text-center">35</td></tr>
                            <tr class="font-bold bg-gray-50"><td class="border px-3 py-1">Erro acumulado</td><td class="border px-3 py-1">—</td><td class="border px-3 py-1 text-center">-4</td><td class="border px-3 py-1 text-center">-5</td><td class="border px-3 py-1 text-center">-15</td><td class="border px-3 py-1 text-center">-16</td></tr>
                            <tr class="font-bold bg-gray-50"><td class="border px-3 py-1">Desvio médio absoluto</td><td class="border px-3 py-1">—</td><td class="border px-3 py-1 text-center">7,8</td><td class="border px-3 py-1 text-center">10,6</td><td class="border px-3 py-1 text-center">8,6</td><td class="border px-3 py-1 text-center">7,5</td></tr>
                            <tr class="font-bold bg-gray-50"><td class="border px-3 py-1">Tracking signal</td><td class="border px-3 py-1">—</td><td class="border px-3 py-1 text-center">-0,51</td><td class="border px-3 py-1 text-center">-0,47</td><td class="border px-3 py-1 text-center">-1,7</td><td class="border px-3 py-1 text-center">-2,1</td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando os dados da tabela, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'A adoção de qualquer um dos modelos de previsão apresentados é elegível para uma restrição -3 < tracking signal < 3.',
            'opcao_b' => 'O tracking signal apresenta valor negativo em todas as estimativas, logo para essa empresa, nenhum dos modelos de previsão utilizados foi adequado.',
            'opcao_c' => 'O uso de médias exponenciais deve ser evitado quando se tem mais de um dado real de demanda, pois, nesses modelos, considera-se apenas um valor real de demanda.',
            'opcao_d' => 'O modelo de média exponencial com sazonalidade apresentou o menor tracking signal, logo a empresa deve adotar esse modelo para a previsão da demanda do produto, cujo indicador é otimizante.',
            'opcao_e' => 'O modelo de média exponencial com sazonalidade obteve o menor erro acumulado, sendo esse, portanto, o modelo mais indicado, pois os erros de subestimação e superestimação da demanda estão se compensando.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Uma empresa automobilística fabrica carros de passeio em três cores: branco, preto e cinza. A unidade fabril dessa empresa conta com três centros de trabalho: estruturação, pintura e acabamento, que operam em dois turnos de oito horas cada. A demanda agregada para este mês foi de 200 carros de passeio, e o setor de vendas prevê que a demanda irá aumentar 10% ao mês durante o próximo semestre. O engenheiro de produção responsável pela análise da capacidade acredita que os centros de trabalho para pintura e acabamento estão ociosos e, por isso, está preocupado momentaneamente apenas com o centro de estruturação.</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border px-3 py-1">Tabela 1 – Tempo gasto (horas) na estruturação</th>
                                <th class="border px-3 py-1">Branco</th>
                                <th class="border px-3 py-1">Preto</th>
                                <th class="border px-3 py-1">Cinza</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1">Estruturação</td><td class="border px-3 py-1 text-center">1</td><td class="border px-3 py-1 text-center">1,5</td><td class="border px-3 py-1 text-center">0,5</td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border px-3 py-1">Tabela 2 – Demanda de carros por cor</th>
                                <th class="border px-3 py-1">Branco</th>
                                <th class="border px-3 py-1">Preto</th>
                                <th class="border px-3 py-1">Cinza</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1">Carros de passeio</td><td class="border px-3 py-1 text-center">50%</td><td class="border px-3 py-1 text-center">40%</td><td class="border px-3 py-1 text-center">10%</td></tr>
                        </tbody>
                    </table>
                </div>
                <p class="mb-2 text-justify">Considerando que o mês útil tenha sempre 20 dias.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. A empresa, no próximo mês, precisará traçar um plano de aumento da capacidade produtiva do centro de trabalho de estruturação, com o objetivo de atender ao crescimento de sua demanda.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. Um aumento na demanda exigirá maior utilização do centro de trabalho de estruturação, consumindo um tempo maior de produção.</p>

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

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A tabela a seguir apresenta o histórico de consumo de um item em uma empresa.</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border px-3 py-1">Mês</th>
                                <th class="border px-3 py-1">Unidades</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1">março</td><td class="border px-3 py-1 text-center">60</td></tr>
                            <tr><td class="border px-3 py-1">abril</td><td class="border px-3 py-1 text-center">70</td></tr>
                            <tr><td class="border px-3 py-1">maio</td><td class="border px-3 py-1 text-center">85</td></tr>
                            <tr><td class="border px-3 py-1">junho</td><td class="border px-3 py-1 text-center">88</td></tr>
                            <tr><td class="border px-3 py-1">julho</td><td class="border px-3 py-1 text-center">94</td></tr>
                            <tr><td class="border px-3 py-1">agosto</td><td class="border px-3 py-1 text-center">98</td></tr>
                            <tr><td class="border px-3 py-1">setembro</td><td class="border px-3 py-1 text-center">98</td></tr>
                            <tr><td class="border px-3 py-1">outubro</td><td class="border px-3 py-1 text-center">102</td></tr>
                            <tr><td class="border px-3 py-1">novembro</td><td class="border px-3 py-1 text-center">105</td></tr>
                            <tr><td class="border px-3 py-1">dezembro</td><td class="border px-3 py-1 text-center">111</td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nos dados apresentados e considerando que os estudos acerca de estoques dependem da previsão do consumo de material, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Na previsão de consumo para meses futuros, visando reduzir a influência do baixo consumo nos meses de março e abril, pode-se utilizar o método da média móvel ponderada, caracterizado pela aplicação de pesos maiores aos dados de consumo mais recentes e pesos menores aos dados mais antigos.',
            'opcao_b' => 'No método da média móvel, a previsão do próximo período é calculada pela média do consumo dos períodos anteriores, obtendo-se valores menores que os ocorridos nos últimos períodos, caso o consumo tenha tendências decrescentes, e maiores se o consumo tiver tendências crescentes.',
            'opcao_c' => 'No método da média com ponderação exponencial, apenas o consumo dos meses de julho e dezembro deve ser utilizado na fórmula de cálculo da previsão do consumo para o próximo mês, janeiro.',
            'opcao_d' => 'No método da média móvel para três períodos, a previsão de consumo para o próximo mês, janeiro, é superior a 111 unidades, dada a tendência crescente de consumo.',
            'opcao_e' => 'No método do último período, a previsão de consumo para o próximo mês, janeiro, é de 70 unidades.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Uma fábrica planeja aumentar sua capacidade de produção para atender ao crescimento da demanda previsto para os próximos anos. Após considerar uma dezena de pacotes tecnológicos, o gerente de produção definiu três alternativas tecnológicas, com características diferentes de custo fixo anual, custo variável por unidade e volume de produção anual.</p>
                <p class="mb-2 text-justify">Sabendo que o custo total anual = custo fixo anual + custo variável por unidade × volume de produção anual, o gráfico a seguir representa a relação custo × volume das três tecnologias avaliadas, com pontos de interseção V1, V2 e V3 ao longo do eixo de volume de produção. A Tecnologia 1 tem alto custo fixo e baixo custo variável; a Tecnologia 2 apresenta custo fixo e variável intermediários; a Tecnologia 3 tem baixo custo fixo e alto custo variável.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Sobre a análise de viabilidade econômica das tecnologias avaliadas nos níveis de produção V1, V2 e V3, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Para volumes acima de V2 e abaixo de V3, a tecnologia 1 é a escolha preferencial.',
            'opcao_b' => 'Para volumes abaixo de V1, a tecnologia 3 apresenta o melhor resultado econômico.',
            'opcao_c' => 'Para volumes entre V1 e V3, a tecnologia 2 apresenta o melhor resultado econômico.',
            'opcao_d' => 'Para volumes abaixo de V2 e acima de V3, a tecnologia 1 apresenta custos totais menores.',
            'opcao_e' => 'Para volumes acima de V3, a tecnologia 1 apresenta um melhor resultado econômico do que as demais.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O gestor de um estabelecimento comercial adota o modelo de previsão de demanda pela média móvel simples para ração canina para cães adultos e para filhotes. Para a semana atual, os resultados referentes à demanda e previsão de demanda, em kg, são apresentados no quadro a seguir.</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border px-3 py-1">Cão</th>
                                <th class="border px-3 py-1">Demanda (Semana Atual)</th>
                                <th class="border px-3 py-1">Previsão (Semana Atual)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1">Adulto</td><td class="border px-3 py-1 text-center">6 200</td><td class="border px-3 py-1 text-center">6 350</td></tr>
                            <tr><td class="border px-3 py-1">Filhote</td><td class="border px-3 py-1 text-center">670</td><td class="border px-3 py-1 text-center">620</td></tr>
                        </tbody>
                    </table>
                </div>
                <p class="mb-2 text-justify">A falta de produto para atender à demanda de ração para filhotes motivou o gestor a adotar o modelo de suavização exponencial para a previsão de demanda, com parâmetros suavizadores 0,2 e 0,5 para a ração canina para adultos e filhotes, respectivamente.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Diante desses dados, verifica-se que a previsão da demanda de ração para cães adultos e filhotes, para a semana seguinte, deve ser, respectivamente, de</p>
            ',
            'referencia' => '',
            'opcao_a' => '6 320 e 645.',
            'opcao_b' => '6 320 e 630.',
            'opcao_c' => '6 305 e 640.',
            'opcao_d' => '6 275 e 645.',
            'opcao_e' => '6 275 e 630.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Suponha que um engenheiro tenha sido contratado para analisar a situação econômica de determinada empresa fabricante de produtos populares. A análise determinou que o custo total para a produção de x unidades pela empresa foi dado pela função C(x) = 15 + 3x + x²; o custo médio de produção foi estimado pela função Q(x) = C(x) / x; a receita total recebida pela venda de x unidades foi projetada pela função R(x) = 3x – x²/2.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Em seu relatório, o engenheiro pôde concluir corretamente que</p>
            ',
            'referencia' => '',
            'opcao_a' => 'a função custo marginal é dada por C\'(x) = 15 + 2x.',
            'opcao_b' => 'o custo real da fabricação da terceira unidade é de R$ 15.',
            'opcao_c' => 'o custo médio para a fabricação de dez unidades é de R$ 18.',
            'opcao_d' => 'a taxa de variação do custo, quando forem fabricadas três unidades, será de R$ 9 por unidade.',
            'opcao_e' => 'o empreendimento é rentável, pois a receita total é superior ao custo total de produção para qualquer quantidade produzida.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Um fornecedor de buchas e cunhas recebeu de seu cliente a programação para as semanas 14 a 23, conforme apresentado na tabela a seguir. O fornecedor utilizou a regra de dimensionamento da quantidade fixa, correspondente à produção diária. Os lotes foram produzidos em múltiplos inteiros da produção diária. O fornecedor trabalha 6 dias por semana, não tendo restrição de capacidade para atender as demandas semanais previstas. O lead time para fabricação é de uma semana para todos os produtos.</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border px-3 py-1">Itens</th>
                                <th class="border px-3 py-1">Est. Disp.</th>
                                <th class="border px-3 py-1">Est. Seg.</th>
                                <th class="border px-3 py-1">Prod. diária</th>
                                <th class="border px-3 py-1">S14</th>
                                <th class="border px-3 py-1">S15</th>
                                <th class="border px-3 py-1">S16</th>
                                <th class="border px-3 py-1">S17</th>
                                <th class="border px-3 py-1">S18</th>
                                <th class="border px-3 py-1">S19</th>
                                <th class="border px-3 py-1">S20</th>
                                <th class="border px-3 py-1">S21</th>
                                <th class="border px-3 py-1">S22</th>
                                <th class="border px-3 py-1">S23</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1">BUCHA 0025</td><td class="border px-3 py-1 text-center">40</td><td class="border px-3 py-1 text-center">0</td><td class="border px-3 py-1 text-center">240</td><td class="border px-3 py-1 text-center">160</td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td></tr>
                            <tr><td class="border px-3 py-1">BUCHA 0029</td><td class="border px-3 py-1 text-center">60</td><td class="border px-3 py-1 text-center">40</td><td class="border px-3 py-1 text-center">240</td><td class="border px-3 py-1 text-center">120</td><td class="border px-3 py-1 text-center">180</td><td class="border px-3 py-1 text-center">60</td><td class="border px-3 py-1 text-center">180</td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td></tr>
                            <tr><td class="border px-3 py-1">BUCHA 0039</td><td class="border px-3 py-1 text-center">380</td><td class="border px-3 py-1 text-center">160</td><td class="border px-3 py-1 text-center">160</td><td class="border px-3 py-1 text-center">200</td><td class="border px-3 py-1 text-center">400</td><td class="border px-3 py-1 text-center">300</td><td class="border px-3 py-1 text-center">400</td><td class="border px-3 py-1 text-center">400</td><td class="border px-3 py-1 text-center">300</td><td class="border px-3 py-1 text-center">300</td><td class="border px-3 py-1 text-center">1500</td><td class="border px-3 py-1 text-center">1000</td><td class="border px-3 py-1 text-center">800</td></tr>
                            <tr><td class="border px-3 py-1">CUNHA 0045</td><td class="border px-3 py-1 text-center">60</td><td class="border px-3 py-1 text-center">0</td><td class="border px-3 py-1 text-center">240</td><td class="border px-3 py-1 text-center">60</td><td class="border px-3 py-1 text-center">60</td><td class="border px-3 py-1 text-center">60</td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td></tr>
                            <tr><td class="border px-3 py-1">CUNHA 0046</td><td class="border px-3 py-1 text-center">76</td><td class="border px-3 py-1 text-center">30</td><td class="border px-3 py-1 text-center">96</td><td class="border px-3 py-1 text-center">40</td><td class="border px-3 py-1 text-center">80</td><td class="border px-3 py-1 text-center">40</td><td class="border px-3 py-1 text-center">80</td><td class="border px-3 py-1 text-center">80</td><td class="border px-3 py-1 text-center">120</td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td></tr>
                            <tr><td class="border px-3 py-1">CUNHA 0056</td><td class="border px-3 py-1 text-center">50</td><td class="border px-3 py-1 text-center">0</td><td class="border px-3 py-1 text-center">96</td><td class="border px-3 py-1 text-center">80</td><td class="border px-3 py-1 text-center">50</td><td class="border px-3 py-1 text-center">30</td><td class="border px-3 py-1 text-center">60</td><td class="border px-3 py-1 text-center">30</td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td><td class="border px-3 py-1 text-center"></td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nos dados apresentados, conclui-se que, para atender a demanda de</p>
            ',
            'referencia' => '',
            'opcao_a' => 'BUCHA 0025, o fornecedor emite ordem de produção interna de 240 unidades na semana 15.',
            'opcao_b' => '160 itens da BUCHA 0025, o fornecedor encerra a semana 23 com estoque projetado de 40 unidades.',
            'opcao_c' => '250 itens da CUNHA 0056, o fornecedor encerra a semana 23 com estoque projetado de 30 unidades.',
            'opcao_d' => '5 600 itens da BUCHA 0039, o fornecedor emite ordens de produção interna que totalizam 5 220 unidades.',
            'opcao_e' => 'BUCHA 0039, o fornecedor mantém o estoque projetado médio de 236 unidades por semana no horizonte planejado.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Suponha que a empresa Alfa apresente as seguintes características:</p>
                <ul class="list-disc pl-6 mb-2">
                    <li>Tempo disponível para produção: 100 horas;</li>
                    <li><strong>Produto A:</strong> preço unitário de venda R$ 260,00; custo variável unitário R$ 100,00; tempo de produção 2 horas por unidade;</li>
                    <li><strong>Produto B:</strong> preço unitário de venda R$ 150,00; custo variável unitário R$ 50,00; tempo de produção 1 hora por unidade.</li>
                </ul>
                <p class="mb-2 text-justify">O gráfico do Ponto de Equilíbrio (Break-even point) da empresa indica um ponto de ruptura com custo fixo de R$ 10.000.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando o gráfico e as informações apresentadas, pode-se concluir que a empresa Alfa atingirá o ponto de equilíbrio com o produto</p>
            ',
            'referencia' => '',
            'opcao_a' => 'B, com 67 unidades vendidas.',
            'opcao_b' => 'A, com faturamento de R$ 16 250,00.',
            'opcao_c' => 'B, com 100 unidades e 100 horas de produção.',
            'opcao_d' => 'A, com o ponto de equilíbrio em 38 unidades vendidas.',
            'opcao_e' => 'A, com margem de contribuição unitária no valor de R$ 160,00.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Bolas para moagem forjadas em aço alto carbono são utilizadas em unidades de tratamento de minérios e na indústria cimenteira. Em uma empresa de produção de bolas para moagem, o fluxo do processo de fabricação inclui as seguintes operações: (i) aquecimento de barras de aço; (ii) cisalhamento de tarugos com dimensões de projeto e forjamento das bolas em recalcador horizontal; (iii) laminação para acabamento superficial das bolas; (iv) tratamento térmico de têmpera direta da temperatura final de laminação em tanque com solução aquosa; (v) tratamento de revenimento, para alívio das tensões térmicas originárias na etapa anterior, restrito a algumas aplicações específicas.</p>
                <p class="mb-2 text-justify">Cada centro de trabalho possui capacidade máxima de processamento igual a 2 400 minutos por semana. Os produtos e suas taxas de processamento por estação são:</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border px-3 py-1">Produto</th>
                                <th class="border px-3 py-1">Preço ($/un)</th>
                                <th class="border px-3 py-1">Demanda (un/sem)</th>
                                <th class="border px-3 py-1">MP ($/un)</th>
                                <th class="border px-3 py-1">V – Aquecer (un/min)</th>
                                <th class="border px-3 py-1">W – Forjar (un/min)</th>
                                <th class="border px-3 py-1">X – Laminar (un/min)</th>
                                <th class="border px-3 py-1">Y – Temperar (un/min)</th>
                                <th class="border px-3 py-1">Z – Revenir (un/min)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1">B25</td><td class="border px-3 py-1 text-center">7</td><td class="border px-3 py-1 text-center">12 000</td><td class="border px-3 py-1 text-center">4</td><td class="border px-3 py-1 text-center">60</td><td class="border px-3 py-1 text-center">100</td><td class="border px-3 py-1 text-center">80</td><td class="border px-3 py-1 text-center">100</td><td class="border px-3 py-1 text-center">—</td></tr>
                            <tr><td class="border px-3 py-1">B40</td><td class="border px-3 py-1 text-center">6</td><td class="border px-3 py-1 text-center">23 100</td><td class="border px-3 py-1 text-center">4</td><td class="border px-3 py-1 text-center">35</td><td class="border px-3 py-1 text-center">50</td><td class="border px-3 py-1 text-center">60</td><td class="border px-3 py-1 text-center">55</td><td class="border px-3 py-1 text-center">—</td></tr>
                            <tr><td class="border px-3 py-1">B50</td><td class="border px-3 py-1 text-center">6</td><td class="border px-3 py-1 text-center">48 600</td><td class="border px-3 py-1 text-center">3</td><td class="border px-3 py-1 text-center">30</td><td class="border px-3 py-1 text-center">50</td><td class="border px-3 py-1 text-center">60</td><td class="border px-3 py-1 text-center">90</td><td class="border px-3 py-1 text-center">40</td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas, é correto afirmar que o gargalo da operação é a estação de trabalho</p>
            ',
            'referencia' => '',
            'opcao_a' => 'V (aquecer barras de aço) e o mix de produtos, para se alcançar o objetivo proposto, é de 12 000 unidades de B25, 48 600 unidades de B50 e 20 300 unidades de B40.',
            'opcao_b' => 'Y (tratamento térmico por têmpera) e o mix de produtos, para se alcançar o objetivo proposto, é de 12 000 unidades de B25, 23 100 unidades de B40 e 45 800 unidades de B50.',
            'opcao_c' => 'X (laminar) e o mix de produtos, para se alcançar o objetivo proposto, é de 23 100 unidades de B40, 48 600 unidades de B50 e 9 200 unidades de B25.',
            'opcao_d' => 'V (aquecer barras de aço) e a priorização de produção, para se alcançar o objetivo proposto, é B40, B50 e B25.',
            'opcao_e' => 'X (laminar) e a priorização de produção, para se alcançar o objetivo proposto, é B25, B50 e B40.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Uma empresa produz derivados lácteos em sua unidade central, podendo atender clientes de quatro regiões: Norte, Sul, Leste e Oeste. Os vendedores Astolfo, Benício, Carlitos e Demóstenes serão alocados, no próximo semestre, para atender a essas localidades. A tabela a seguir apresenta o potencial de lucro, em milhões de reais, que pode ser gerado pelos vendedores em cada região. A empresa não possui recursos para enviar mais de um funcionário para atender a cada região.</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border px-3 py-1">Vendedor</th>
                                <th class="border px-3 py-1">Norte</th>
                                <th class="border px-3 py-1">Sul</th>
                                <th class="border px-3 py-1">Leste</th>
                                <th class="border px-3 py-1">Oeste</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1">Astolfo</td><td class="border px-3 py-1 text-center">17</td><td class="border px-3 py-1 text-center">16</td><td class="border px-3 py-1 text-center">16</td><td class="border px-3 py-1 text-center">20</td></tr>
                            <tr><td class="border px-3 py-1">Benício</td><td class="border px-3 py-1 text-center">14</td><td class="border px-3 py-1 text-center">13</td><td class="border px-3 py-1 text-center">8</td><td class="border px-3 py-1 text-center">19</td></tr>
                            <tr><td class="border px-3 py-1">Carlitos</td><td class="border px-3 py-1 text-center">11</td><td class="border px-3 py-1 text-center">19</td><td class="border px-3 py-1 text-center">9</td><td class="border px-3 py-1 text-center">15</td></tr>
                            <tr><td class="border px-3 py-1">Demóstenes</td><td class="border px-3 py-1 text-center">19</td><td class="border px-3 py-1 text-center">16</td><td class="border px-3 py-1 text-center">13</td><td class="border px-3 py-1 text-center">19</td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Acerca desse cenário, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Pelo fato da região Oeste ser a mais lucrativa entre as possíveis alocações, o funcionário Astolfo deverá ser enviado para atender essa região.</p>
                <p class="mb-2 pl-6 text-justify">II. Pelo fato de ser a opção menos lucrativa entre as possíveis alocações, o funcionário Benício não deverá ser enviado para atender a região Leste.</p>
                <p class="mb-2 pl-6 text-justify">III. A opção mais lucrativa, entre todas as possíveis alocações, resultará em 73 milhões de reais.</p>

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
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Uma fábrica pode produzir dois tipos de vidros blindados, o Alfa e o Beta, cujos lotes com 1 000 unidades contribuem para gerar um lucro de, respectivamente, R$ 15 000,00 e R$ 6 000,00. Entre os diversos insumos de produção, há dois que são limitantes: a sílica (vendida em kg) e o corante (vendido em litros). Sabe-se que, na produção unitária de cada um dos produtos, utiliza-se 1 kg de sílica. São, também, consumidos 2 litros de corante para cada unidade de vidro Alfa e 1 litro de corante para cada unidade de vidro Beta. Os fornecedores entregam, diariamente, 7 000 kg de sílica e 10 000 litros de corante.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando que o objetivo da empresa é maximizar o seu lucro, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A fábrica deveria produzir exclusivamente os vidros Alfa.</p>
                <p class="mb-2 pl-6 text-justify">II. A fábrica deveria estabelecer um contrato com um grande cliente e fornecer 6 lotes de vidros Alfa diariamente.</p>
                <p class="mb-2 pl-6 text-justify">III. A fábrica deveria adquirir mais corante, com o intuito de aumentar a produção de seus vidros.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
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
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O Sistema Toyota de Produção (STP) é uma filosofia que objetiva a eliminação de desperdícios no processo produtivo, por meio de ações eficientes, sem interrupções no fluxo e sob a demanda do cliente.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando o STP, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. A troca rápida de ferramentas (TRF) é um dos métodos utilizados para tornar possível a implementação do STP.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. O método TRF fundamenta-se na premissa de que, quanto menor o tempo de preparação de máquina (setup), menor o tamanho do lote econômico.</p>

                <p class="mb-2 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a asserção II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a asserção II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Em um determinado sistema de produção, quando a demanda é maior que a capacidade de processamento, tem-se um recurso gargalo (interno) que condiciona a decisão de mix de produtos. No quadro a seguir, são apresentados dados para apoiar a decisão sobre os produtos de um sistema produtivo.</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300">
                        <tbody>
                            <tr><td class="border px-3 py-1">Demanda mensal do produto A</td><td class="border px-3 py-1 text-center">300 unidades</td></tr>
                            <tr><td class="border px-3 py-1">Demanda mensal do produto B</td><td class="border px-3 py-1 text-center">200 unidades</td></tr>
                            <tr><td class="border px-3 py-1">Ganho por unidade do produto A</td><td class="border px-3 py-1 text-center">R$ 500,00</td></tr>
                            <tr><td class="border px-3 py-1">Ganho por unidade do produto B</td><td class="border px-3 py-1 text-center">R$ 800,00</td></tr>
                            <tr><td class="border px-3 py-1">Tempo de processamento por unidade do produto A no gargalo</td><td class="border px-3 py-1 text-center">1 hora</td></tr>
                            <tr><td class="border px-3 py-1">Tempo de processamento por unidade do produto B no gargalo</td><td class="border px-3 py-1 text-center">2 horas</td></tr>
                            <tr><td class="border px-3 py-1">Capacidade máxima mensal do gargalo do sistema produtivo</td><td class="border px-3 py-1 text-center">500 horas</td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas e os conceitos da Teoria das Restrições, assinale a opção em que o mix de produtos que maximiza economicamente a utilização da capacidade do sistema de produção corresponde, respectivamente, às seguintes unidades do produto A e do produto B.</p>
            ',
            'referencia' => '',
            'opcao_a' => '100 e 200.',
            'opcao_b' => '100 e 300.',
            'opcao_c' => '200 e 200.',
            'opcao_d' => '300 e 100.',
            'opcao_e' => '300 e 200.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O estoque de segurança corresponde a uma fração do estoque total em uma cadeia de suprimentos, afetando os custos logísticos.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando os conceitos sobre estoque de segurança, analise as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Quanto maior a variabilidade da demanda durante o tempo de ressuprimento, maior deverá ser o estoque de segurança a ser mantido para oferecer o mesmo nível de serviço.</p>
                <p class="mb-2 pl-6 text-justify">II. O estoque de segurança, para um determinado nível de serviço, não acarreta custo de manutenção e armazenagem, pois ele é utilizado apenas quando a demanda esperada é excedida.</p>
                <p class="mb-2 pl-6 text-justify">III. Quanto maior o nível de serviço, menor deve ser o estoque de segurança a ser mantido.</p>
                <p class="mb-2 pl-6 text-justify">IV. A redução na variabilidade no tempo de ressuprimento permite a redução do nível de estoque de segurança, sem prejudicar a disponibilidade do produto.</p>
                <p class="mb-2 pl-6 text-justify">V. Uma das funções do estoque de segurança é garantir a disponibilidade de estoque em face a incerteza na oferta e na demanda.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I, II e III.',
            'opcao_b' => 'I, III e V.',
            'opcao_c' => 'I, IV e V.',
            'opcao_d' => 'II, III e IV.',
            'opcao_e' => 'II, IV e V.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Determinada empresa fabricante de decodificadores para aparelhos de TV deve produzir 300 unidades desse material, por dia, para atender à demanda. Para otimizar o fluxo produtivo, o engenheiro da empresa decidiu realizar o balanceamento da linha de produção, estimando que 600 minutos por dia seria o tempo disponível para produção. A montagem do produto é composta por cinco operações (A, B, C, D e E), com durações (em minutos) e precedências conforme o diagrama a seguir:</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border px-3 py-1">Operação</th>
                                <th class="border px-3 py-1">Duração (min)</th>
                                <th class="border px-3 py-1">Precedência</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1 text-center">A</td><td class="border px-3 py-1 text-center">1,2</td><td class="border px-3 py-1 text-center">—</td></tr>
                            <tr><td class="border px-3 py-1 text-center">B</td><td class="border px-3 py-1 text-center">0,7</td><td class="border px-3 py-1 text-center">A</td></tr>
                            <tr><td class="border px-3 py-1 text-center">C</td><td class="border px-3 py-1 text-center">0,5</td><td class="border px-3 py-1 text-center">A</td></tr>
                            <tr><td class="border px-3 py-1 text-center">D</td><td class="border px-3 py-1 text-center">1,0</td><td class="border px-3 py-1 text-center">B</td></tr>
                            <tr><td class="border px-3 py-1 text-center">E</td><td class="border px-3 py-1 text-center">2,0</td><td class="border px-3 py-1 text-center">C, D</td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nos dados apresentados, avalie as afirmações a seguir, relativas à referida empresa.</p>

                <p class="mb-2 pl-6 text-justify">I. O takt time do sistema produtivo para atender a demanda é igual a 2 minutos por unidade.</p>
                <p class="mb-2 pl-6 text-justify">II. A quantidade de estações de trabalho suficiente para balancear a linha de produção é igual a 2.</p>
                <p class="mb-2 pl-6 text-justify">III. A eficiência do balanceamento da linha de produção é igual a 90%.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
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
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A Equação de Bernoulli, empregada para escoamento incompressível e sem viscosidade, é representada por:</p>
                <p class="mb-2 text-center font-mono">P/γ + v²/2g + z = Constante</p>
                <p class="mb-2 text-justify">onde: P = pressão (Pa); γ = massa específica do fluido (N/m³); v = velocidade de escoamento do fluido (m/s); z = cota de altura em relação ao referencial adotado no escoamento.</p>
                <p class="mb-2 text-justify">As restrições para o uso da Equação de Bernoulli são: (i) escoamento em regime permanente; (ii) escoamento incompressível; (iii) escoamento sem atrito; (iv) escoamento ao longo de uma linha de corrente.</p>
                <p class="mb-2 text-right text-sm">FOX, R. W., et al. <i>Introdução à Mecânica dos Fluidos</i>. Rio de Janeiro: LTC, 2014 (adaptado).</p>
                <p class="mb-2 text-justify">Em tubulações, a separação da coluna líquida pode ser ocasionada pela obstrução do escoamento causado por bolhas. Essas bolhas são formadas pelos gases dissolvidos na água, que se desprendem do líquido quando a pressão é reduzida à pressão de vapor. O problema ocorre em tubo ascendente que transporta água a 60 °C, cuja pressão de vapor (Pv) é, aproximadamente, 19,53 kPa.</p>
                <p class="mb-2 text-right text-sm">PORTO, R. M. <i>Hidráulica Básica</i>. São Paulo: EESC-USP, 2006 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Para que o problema de separação da coluna líquida seja contornado, a solução é</p>
            ',
            'referencia' => '',
            'opcao_a' => 'a elevação da cota de altura z2 estipulada para o trecho 2.',
            'opcao_b' => 'a redução da vazão volumétrica média do fluido em escoamento.',
            'opcao_c' => 'a redução da pressão manométrica P2, imposta no trecho 2 da tubulação.',
            'opcao_d' => 'a diminuição da velocidade de escoamento do fluido no trecho 1 da tubulação.',
            'opcao_e' => 'o esfriamento da água em escoamento na tubulação, pois a pressão Pv diminuirá.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Para garantir a eficácia da gestão da qualidade, uma organização deve determinar e aplicar critérios e métodos (incluídos monitoramento, medições e indicadores de desempenho) necessários para assegurar a operação e o controle dos seus processos, além de determinar os recursos necessários para esses processos e assegurar sua disponibilidade.</p>
                <p class="mb-2 text-right text-sm">ASSOCIAÇÃO BRASILEIRA DE NORMAS TÉCNICAS. <i>NBR ISO 9001: Sistema de gestão da qualidade – requisitos</i>. Rio de Janeiro: ABNT Editora, 2015.</p>
                <p class="mb-2 text-justify">Dada a necessidade de serem garantidas a disponibilidade e a confiabilidade de equipamentos que possibilitam o atendimento aos clientes, deve-se realizar o monitoramento da eficácia das ações da Engenharia de Manutenção por meio da utilização de indicadores de desempenho.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando esses indicadores, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O nível de qualidade na produção é o fator que mais influencia a Eficiência Global dos Equipamentos (OEE).</p>
                <p class="mb-2 pl-6 text-justify">II. O Tempo Médio Entre Falhas (MTBF) é utilizado na determinação da manutenibilidade de equipamentos.</p>
                <p class="mb-2 pl-6 text-justify">III. A distribuição estatística dos dados de taxa de falha pode ser dos tipos normal, exponencial ou Weibull.</p>
                <p class="mb-2 pl-6 text-justify">IV. O Tempo Médio para Reparar (MTTR), que indica a eficiência da ação corretiva, é utilizado na determinação da confiabilidade de equipamento.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I.',
            'opcao_b' => 'III.',
            'opcao_c' => 'I e II.',
            'opcao_d' => 'II e IV.',
            'opcao_e' => 'III e IV.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">As cartas de controle fornecem informações sobre o valor de parâmetros de processo e sobre o seu comportamento ao longo do tempo. Isso permite que se faça estimativa da capacidade do processo. Dessa forma, se o processo apresenta apenas variações aleatórias é possível, por meio das propriedades da curva de distribuição normal, determinar a sua capacidade.</p>
                <p class="mb-2 text-right text-sm">MONTGOMERY, D. C. <i>Introdução ao controle estatístico da qualidade</i>. Rio de Janeiro: LTC Editora, 2004 (adaptado).</p>
                <p class="mb-2 text-justify">Em uma figura, estão representados dois processos (A e B) com seus respectivos limites inferior e superior de especificação (LIE e LSE). O Processo A está centralizado entre os limites, enquanto o Processo B está deslocado em relação ao centro das especificações. Ambos os processos têm o mesmo desvio padrão.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base na figura e considerando que o desvio padrão dos processos A e B têm o mesmo valor, avalie as afirmações a seguir, relativas aos índices de capacidade desses processos.</p>

                <p class="mb-2 pl-6 text-justify">I. Os processos A e B têm a mesma capacidade real.</p>
                <p class="mb-2 pl-6 text-justify">II. Os processos A e B têm a mesma capacidade potencial.</p>
                <p class="mb-2 pl-6 text-justify">III. A capacidade potencial do processo B é menor que sua capacidade real.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'II, apenas.',
            'opcao_c' => 'I e III, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">No desenvolvimento do trabalho manual feito na posição sentado ou que tenha de ser feito em pé, bancadas, mesas, escrivaninhas e painéis devem proporcionar ao trabalhador condições de boa postura, visualização e operação e devem atender aos seguintes requisitos mínimos: a) ter altura e características da superfície de trabalho compatíveis com o tipo de atividade, com a distância requerida dos olhos ao campo de trabalho e com a altura do assento; b) ter área de trabalho de fácil alcance e visualização pelo trabalhador; c) ter características dimensionais que possibilitem posicionamento e movimentação adequados dos segmentos corporais.</p>
                <p class="mb-2 text-right text-sm">Disponível em: https://enit.trabalho.gov.br/portal/images/Arquivos_SST/SST_NR/NR-17.pdf (adaptado). Acesso em: 31 jun. 2019.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Acerca dos mobiliários adequados em postos de trabalhos conforme disposto na Norma Regulamentadora n. 17, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Os assentos utilizados em postos de trabalho devem ter altura fixa, independentemente da estatura do trabalhador e da natureza da função exercida.</p>
                <p class="mb-2 pl-6 text-justify">II. Os postos de trabalho, em que as atividades são realizadas em pé, devem possuir mobiliário adequado para que o trabalhador descanse no próprio posto de trabalho.</p>
                <p class="mb-2 pl-6 text-justify">III. O posto de trabalho, em que a atividade puder ser executada na posição sentada, deve ser planejado ou adaptado para esta posição.</p>
                <p class="mb-2 pl-6 text-justify">IV. Os assentos utilizados nos postos de trabalho devem ter encosto com forma levemente adaptada ao corpo do trabalhador, para a proteção de sua região lombar.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'II e III.',
            'opcao_c' => 'III e IV.',
            'opcao_d' => 'I, II e IV.',
            'opcao_e' => 'I, III e IV.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O método do payback simples considera o tempo de retorno do capital investido, quando o investidor estabelece um prazo máximo para recuperação do investimento, que servirá de padrão para a análise da viabilidade econômica do projeto. Nesse sentido, suponha que uma empresa pretende realizar um projeto de investimento com seis anos de duração, sendo de quatro anos o prazo estabelecido para a recuperação do capital investido. A tabela a seguir apresenta os valores para os fluxos de caixa anuais do mencionado projeto.</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border px-3 py-1">Ano</th>
                                <th class="border px-3 py-1">0</th>
                                <th class="border px-3 py-1">1</th>
                                <th class="border px-3 py-1">2</th>
                                <th class="border px-3 py-1">3</th>
                                <th class="border px-3 py-1">4</th>
                                <th class="border px-3 py-1">5</th>
                                <th class="border px-3 py-1">6</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-3 py-1">Fluxo de caixa</td>
                                <td class="border px-3 py-1 text-center">- 400 000</td>
                                <td class="border px-3 py-1 text-center">+ 80 000</td>
                                <td class="border px-3 py-1 text-center">+ 90 000</td>
                                <td class="border px-3 py-1 text-center">+ 120 000</td>
                                <td class="border px-3 py-1 text-center">+ 130 000</td>
                                <td class="border px-3 py-1 text-center">+ 100 000</td>
                                <td class="border px-3 py-1 text-center">+ 70 000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas e o método payback simples, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A recuperação do capital, no método payback simples, ocorrerá no prazo de até quatro anos, o que significa que o projeto deve ser aceito, pois atendeu à condição estabelecida.</p>
                <p class="mb-2 pl-6 text-justify">II. O método payback simples considera o valor do dinheiro no tempo, mas não a distribuição do fluxo de caixa no período de recuperação do investimento.</p>
                <p class="mb-2 pl-6 text-justify">III. O método payback simples pode ser comparado a um padrão de rentabilidade como, por exemplo, o custo de oportunidade do capital investido.</p>
                <p class="mb-2 pl-6 text-justify">IV. O método payback simples pode ser adaptado para payback descontado, modelo que se diferencia do anterior apenas pelo fato de nele ser considerada uma taxa de atratividade ou de desconto.</p>
                <p class="mb-2 pl-6 text-justify">V. A adaptação de payback simples para payback descontado não resolve todos os problemas, mas introduz a taxa de desconto, direcionando-se a solução para o método da taxa interna de retorno.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e III.',
            'opcao_b' => 'I e IV.',
            'opcao_c' => 'II e IV.',
            'opcao_d' => 'II e V.',
            'opcao_e' => 'III e V.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Produção',
            'ano' => 2023,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Em um esquema, estão identificados cinco ambientes de trabalho de uma instalação industrial, onde foram identificados os seguintes riscos ambientais:</p>
                <ul class="list-disc pl-6 mb-2">
                    <li><strong>Ambiente A:</strong> alto ruído de máquinas e equipamentos;</li>
                    <li><strong>Ambiente B:</strong> operação com eletricidade;</li>
                    <li><strong>Ambiente C:</strong> radiações ionizantes;</li>
                    <li><strong>Ambiente D:</strong> utilização de óleos e lubrificantes;</li>
                    <li><strong>Ambiente E:</strong> postura inadequada.</li>
                </ul>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Os riscos mencionados para os ambientes A, B, C, D e E, podem ser classificados no processo de construção de um mapa de riscos, respectivamente, como</p>
            ',
            'referencia' => '',
            'opcao_a' => 'físico, físico, acidente, físico e ergonômico.',
            'opcao_b' => 'ergonômico, físico, químico, químico e físico.',
            'opcao_c' => 'acidente, acidente, químico, químico e físico.',
            'opcao_d' => 'físico, acidente, químico, ergonômico e físico.',
            'opcao_e' => 'físico, acidente, físico, químico e ergonômico.',
            'alternativa_correta' => 'E',
        ]);
    }
}

