<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class Questoes_Engenharia_Quimica_2023 extends Seeder
{
    public function run(): void
    {
        // =====================================================================
        // QUESTÃO 10
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">O peneiramento é uma das operações mecânicas de separação mais simples e econômica. A tabela a seguir apresenta análises granulométricas de um experimento que subsidie o projeto de uma unidade para separar minério de maior granulometria de minério de menor granulometria, empregando-se uma peneira industrial com malha equivalente a 28 mesh Tyler. A unidade precisa ser projetada para gerar 1 000 kg/h de minério de maior granulometria. As análises granulométricas da alimentação, do minério de maior granulometria retido na peneira e do minério de menor granulometria, que passa através da peneira, são apresentadas, respectivamente, nas colunas A, B e C.</p>

                <div class="overflow-x-auto my-4">
                    <table class="min-w-full border border-gray-300 text-sm text-center">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border border-gray-300 px-3 py-2" rowspan="2">Tyler (mesh)</th>
                                <th class="border border-gray-300 px-3 py-2" colspan="3">Frações mássicas retidas</th>
                            </tr>
                            <tr>
                                <th class="border border-gray-300 px-3 py-2">A<br><span class="font-normal">Alimentação</span></th>
                                <th class="border border-gray-300 px-3 py-2">B<br><span class="font-normal">Material Grosso</span></th>
                                <th class="border border-gray-300 px-3 py-2">C<br><span class="font-normal">Material Fino</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border border-gray-300 px-3 py-1">+3</td><td class="border border-gray-300 px-3 py-1">0,00</td><td class="border border-gray-300 px-3 py-1">0,00</td><td class="border border-gray-300 px-3 py-1">--</td></tr>
                            <tr><td class="border border-gray-300 px-3 py-1">-3 a +4</td><td class="border border-gray-300 px-3 py-1">0,10</td><td class="border border-gray-300 px-3 py-1">0,15</td><td class="border border-gray-300 px-3 py-1">--</td></tr>
                            <tr><td class="border border-gray-300 px-3 py-1">-4 a +8</td><td class="border border-gray-300 px-3 py-1">0,20</td><td class="border border-gray-300 px-3 py-1">0,30</td><td class="border border-gray-300 px-3 py-1">--</td></tr>
                            <tr><td class="border border-gray-300 px-3 py-1">-8 a +14</td><td class="border border-gray-300 px-3 py-1">0,20</td><td class="border border-gray-300 px-3 py-1">0,30</td><td class="border border-gray-300 px-3 py-1">--</td></tr>
                            <tr><td class="border border-gray-300 px-3 py-1">-14 a +28</td><td class="border border-gray-300 px-3 py-1">0,30</td><td class="border border-gray-300 px-3 py-1">0,25</td><td class="border border-gray-300 px-3 py-1">0,40</td></tr>
                            <tr><td class="border border-gray-300 px-3 py-1">-28 a +48</td><td class="border border-gray-300 px-3 py-1">0,10</td><td class="border border-gray-300 px-3 py-1">--</td><td class="border border-gray-300 px-3 py-1">0,30</td></tr>
                            <tr><td class="border border-gray-300 px-3 py-1">-48 a +100</td><td class="border border-gray-300 px-3 py-1">0,07</td><td class="border border-gray-300 px-3 py-1">--</td><td class="border border-gray-300 px-3 py-1">0,20</td></tr>
                            <tr><td class="border border-gray-300 px-3 py-1">-100</td><td class="border border-gray-300 px-3 py-1">0,03</td><td class="border border-gray-300 px-3 py-1">--</td><td class="border border-gray-300 px-3 py-1">0,10</td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nos dados apresentados, a quantidade produzida de minério de menor granulometria, em kg/h, corresponde a</p>
            ',
            'referencia' => '',
            'opcao_a' => '100.',
            'opcao_b' => '250.',
            'opcao_c' => '400.',
            'opcao_d' => '500.',
            'opcao_e' => '1 000.',
            'alternativa_correta' => 'D',
        ]);

        // =====================================================================
        // QUESTÃO 11
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">O alcance de um sistema de controle com bom desempenho depende, inicialmente, da escolha adequada das variáveis controladas e manipuladas. Em uma coluna de destilação, há grande quantidade de possíveis estruturas de malhas envolvendo essas variáveis. A operação automática da coluna de destilação por meio de sistema de controle realimentado depende da escolha de cinco variáveis controladas e de cinco variáveis manipuladas.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Acerca da situação apresentada, assinale a opção em que está expresso um conjunto consistente de cinco variáveis controladas.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Altura de nível do estágio na base da coluna, fração mássica de um componente na corrente de destilado, pressão do estágio 1, altura de nível do vaso de condensado e temperatura do estágio 3.',
            'opcao_b' => 'Altura do nível do estágio na base da coluna, vazão mássica na corrente de destilado, pressão da corrente de alimentação da coluna, altura de nível do vaso de condensado e carga térmica do refervedor.',
            'opcao_c' => 'Razão de refluxo, fração mássica de um componente na corrente de destilado, pressão do estágio 1, carga térmica do refervedor e altura de nível do vaso de condensado.',
            'opcao_d' => 'Pressão do estágio 1, pressão da corrente de alimentação da coluna, vazão mássica da corrente de retirada na base da coluna, temperatura do estágio 3 e vazão mássica da corrente de destilado.',
            'opcao_e' => 'Altura de nível do vaso de condensado, razão de refluxo, fração mássica de um componente na corrente de destilado, vazão mássica da corrente de retirada na base da coluna e temperatura do estágio 3.',
            'alternativa_correta' => 'A',
        ]);

        // =====================================================================
        // QUESTÃO 12
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Em diversos tipos de indústria, caldeiras aquatubulares são largamente utilizadas em processos que requerem geração de vapor superaquecido. São elementos básicos desse tipo de caldeira a parede tubular, constituída de feixe de tubos, e a fornalha. Essas caldeiras podem ter acessórios, como economizadores, superaquecedores e preaquecedores. Uma maneira de se reduzir a poluição causada pela queima de madeira em caldeiras é instalar um sistema de exaustão acoplado a um ciclone.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Supondo-se um processo composto por uma caldeira aquatubular e um ciclone, qual seria a ordem correta de passagem dos gases que circulam por esse sistema, desde a entrada do ar no sistema até a saída dos gases de combustão pela chaminé?</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Preaquecedor; superaquecedor; fornalha; parede tubular; exaustor e ciclone.',
            'opcao_b' => 'Preaquecedor; superaquecedor; fornalha; parede tubular; ciclone e exaustor.',
            'opcao_c' => 'Preaquecedor; fornalha; superaquecedor; parede tubular; ciclone e exaustor.',
            'opcao_d' => 'Economizador; parede tubular; fornalha; superaquecedor; ciclone e exaustor.',
            'opcao_e' => 'Economizador; fornalha; parede tubular; superaquecedor; exaustor e ciclone.',
            'alternativa_correta' => 'C',
        ]);

        // =====================================================================
        // QUESTÃO 13
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Em colunas de destilação fracionada, a corrente de alimentação (F) exerce grande influência na operação e na eficiência de um equipamento e é uma das variáveis importantes para a otimização da operação. Mudanças na condição de alimentação podem perturbar significativamente a coluna de destilação e, devido ao elevado tempo de resposta, podem ser necessárias várias horas para se recuperar o estado estacionário desejado do sistema. Dessa forma, é fundamental o entendimento do Engenheiro Químico sobre o impacto dessa variável na operação.</p>

                <p class="mb-2 text-justify">O esquema a seguir representa o prato de alimentação de uma coluna de destilação em que é válida a hipótese de fluxo molar constante.</p>

                <div class="flex justify-center my-4">
                    <div class="text-center">
                        <img src="/img/questoes/engenharia_quimica/q13_prato_alimentacao.png" alt="Prato de alimentação de coluna de destilação" class="max-w-xs mx-auto">
                        <p class="text-sm mt-2">GEANKOPLIS, C. J. <b>Transport processes and separation process principles (includes unit operations)</b>, 4. ed. Upper Saddle River: Prentice Hall, 2003 (adaptado).</p>
                    </div>
                </div>

                <p class="mb-2 text-justify">Considerando q a razão de líquido na alimentação, L a corrente interna de líquido na coluna e V a corrente interna de vapor na coluna, assinale a opção correta.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando q a razão de líquido na alimentação, L a corrente interna de líquido na coluna e V a corrente interna de vapor na coluna, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Caso L<sub>n</sub> seja maior que L<sub>n–1</sub>, conclui-se que q &lt; 0.',
            'opcao_b' => 'Se 0 &lt; q &lt; 1, as correntes V<sub>n</sub> e L<sub>n</sub> podem não ser iguais.',
            'opcao_c' => 'Na condição em que V<sub>n</sub> = V<sub>n+1</sub> e L<sub>n</sub> = L<sub>n–1</sub>, é possível afirmar que q = 0,5.',
            'opcao_d' => 'Do ponto de vista operacional, deseja-se promover a alimentação da corrente F com q &gt; 1.',
            'opcao_e' => 'Em condições ideais, longo tempo de contato entre as fases e mistura perfeita, V<sub>n+1</sub> e L<sub>n–1</sub> são correntes em equilíbrio.',
            'alternativa_correta' => 'B',
        ]);

        // =====================================================================
        // QUESTÃO 14
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Um resíduo orgânico industrial é composto por 25% de fibras, em base seca, que podem ser processadas e aproveitadas como um subproduto com valor agregado. Uma pesquisa de mercado indicou que o teor de umidade de 10%, em base seca, é aceitável para a comercialização das fibras, uma vez que elas serão, primordialmente, utilizadas na confecção de mantas para contenção de encostas. No entanto, o resíduo gerado tem umidade inicial de 80%, em base úmida, e deve ser submetido a um processo de secagem.</p>

                <p class="mb-2 text-justify">Para tanto, 100 kg/h do resíduo são alimentados continuamente em um secador adiabático do tipo tambor rotativo, no qual o ar ambiente é alimentado em contracorrente. Sabe-se que no local onde a planta de processamento está instalada, o ar apresenta temperatura e umidade relativa médias, respectivamente, de 24 °C e 55%. Para se melhorar o desempenho do secador, um aquecedor foi instalado a montante, de modo a aquecer o ar até 50 °C antes de sua alimentação no equipamento. A carta psicrométrica de ar e vapor de água é apresentada a seguir.</p>

                <div class="flex justify-center my-4">
                    <div class="text-center w-full">
                        <img src="/img/questoes/engenharia_quimica/q14_carta_psicometrica.png" alt="Carta psicrométrica de ar e vapor de água" class="max-w-xl mx-auto">
                        <p class="text-sm mt-2">Disponível em: http://www.demec.ufmg.br/Grupos/Refrigera/arquivos/cartapsicrom.xls. Acesso em: 27 jul. 2014 (adaptado).</p>
                    </div>
                </div>

                <p class="mb-2 text-justify">Admitindo que as propriedades do ar são constantes durante a secagem e que, na saída, o ar apresenta umidade relativa de 90%, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Na situação apresentada, são removidos do resíduo 78 kg/h de água pelo ar de secagem.</p>

                <p class="mb-2 pl-6 text-justify">II. A vazão mássica de ar seco a ser alimentado no secador é de, aproximadamente, 7 800 kg/h.</p>

                <p class="mb-2 pl-6 text-justify">III. Na saída, o ar apresenta temperatura de bulbo seco igual à de bulbo úmido.</p>

                <p class="mb-2 pl-6 text-justify">IV. A variação de entalpia do ar de secagem, desde a entrada no aquecedor, é de, aproximadamente, 27 kJ/kg de ar seco.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e III.',
            'opcao_b' => 'II e III.',
            'opcao_c' => 'II e IV.',
            'opcao_d' => 'I, II e IV.',
            'opcao_e' => 'I, III e IV.',
            'alternativa_correta' => 'D',
        ]);

        // =====================================================================
        // QUESTÃO 15
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Para a análise da figura apresentada a seguir, considere um leito de sementes de soja, recém-chegadas do campo que começa a ser percolado por ar seco e quente. De acordo com a conveniência do engenheiro, o ar seco pode ser alimentado no secador isotérmico pela região A ou B. A cada uma das extremidades do leito de soja, está conectado um manômetro de tubo em U com a extremidade oposta aberta à atmosfera. Considere que a densidade do fluido do manômetro conectado à região A corresponde ao dobro da densidade do fluido do manômetro conectado à região B. Considere, ainda, que a altura do fluido no manômetro da região B corresponde ao triplo da verificada no manômetro da região A.</p>

                <div class="flex justify-center my-4">
                    <div class="text-center">
                        <img src="/img/questoes/engenharia_quimica/q15_leito_soja.png" alt="Leito de sementes de soja com manômetros" class="max-w-sm mx-auto">
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">De acordo com o esquema e as informações apresentados, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Se U for a umidade absoluta das sementes de soja em determinada posição axial do secador, então dU/dz &gt; 0.',
            'opcao_b' => 'Se T for a temperatura do fluido em determinada posição axial do secador, então dT/dz &lt; 0.',
            'opcao_c' => 'A temperatura de bulbo úmido em A é menor que a de bulbo úmido em B.',
            'opcao_d' => 'A temperatura de bulbo seco em A é maior que a de bulbo seco em B.',
            'opcao_e' => 'O escoamento do fluido ocorre da região A para a B.',
            'alternativa_correta' => 'A',
        ]);

        // =====================================================================
        // QUESTÃO 16
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">O fluxograma a seguir representa uma unidade industrial em que é realizada a isomerização de xilenos.</p>

                <div class="flex justify-center my-4">
                    <div class="text-center w-full">
                        <img src="/img/questoes/engenharia_quimica/q16_fluxograma_xilenos.png" alt="Fluxograma de isomerização de xilenos" class="max-w-lg mx-auto">
                        <p class="text-sm mt-2"><b>Legenda:</b> TC: trocador de calor; TIC: controlador e indicador de temperatura; V: vaso.</p>
                    </div>
                </div>

                <p class="mb-2 text-justify">Considere que a referida unidade industrial tenha a função de converter cataliticamente uma mistura líquida cuja composição mássica seja de 20% de etilbenzeno, 21% de paraxileno, 53% de metaxileno e 6% de ortoxileno em outra mistura cuja composição mássica seja de 12% de etilbenzeno, 21% de paraxileno, 47% de metaxileno e 20% de ortoxileno. O objetivo de se proceder à reação de conversão catalítica é maximizar a concentração de ortoxileno.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas informações e no fluxograma apresentados, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'O controle da pressão de operação da coluna de destilação deve ser feito com base no ajuste da vazão de vapor de aquecimento alimentado à coluna.',
            'opcao_b' => 'Como a reação de hidrogenação é altamente exotérmica, realizada em fase gasosa e catalisada, é recomendado o emprego de reator encamisado do tipo tubular.',
            'opcao_c' => 'Na situação de falha no funcionamento da malha de controle da temperatura do forno, a válvula instalada na tubulação de combustível deve falhar na posição aberta, para a proteção do forno.',
            'opcao_d' => 'É mais seguro que o controle da vazão de carga líquida e da vazão de hidrogênio alimentadas à unidade seja feito por meio de malhas de controle independentes, como mostrado no fluxograma.',
            'opcao_e' => 'A temperatura do fluido que circula pela camisa do reator sempre deve ser mantida constante, de modo a atender à troca térmica requerida pelo reator quando em operação em regime estacionário.',
            'alternativa_correta' => 'B',
        ]);

        // =====================================================================
        // QUESTÃO 17
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">O diagrama apresentado a seguir mostra um sistema fotovoltaico domiciliar (SFD), onde podem ser observados dois componentes fundamentais, que o caracterizam: as cargas e o gerador fotovoltaico, sendo este denominado painel solar. No projeto de instalação dos painéis solares, devem ser analisados, entre outros itens, o espaço para a instalação, a localização geográfica da residência, a intensidade da radiação solar, o custo da energia elétrica convencional e os equipamentos e dispositivos que consomem energia elétrica (cargas).</p>

                <div class="flex justify-center my-4">
                    <div class="text-center w-full">
                        <img src="/img/questoes/engenharia_quimica/q17_sistema_fotovoltaico.png" alt="Sistema fotovoltaico domiciliar" class="max-w-md mx-auto">
                        <p class="text-sm mt-2">GALDINO, M. A.; PINHO, J. T. <b>Manual de engenharia para sistemas fotovoltaicos.</b> Grupo de Trabalho de energia Solar. GTES – CEPEL – DTE – CRESESB, Rio de Janeiro, 2014 (adaptado).</p>
                    </div>
                </div>

                <p class="mb-2 text-justify">Suponha que um consumidor, após considerar as cargas de energia elétrica em sua residência, tenha verificado que a soma das potências dos elétricos é de 600 W e que existe, no mercado, um painel solar que opera durante 5 horas por dia e produz 70 miliWatts por 2,5 cm² de área exposta à radiação solar.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Diante da situação apresentada, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A demanda diária de energia elétrica da residência é 0,6 kWh.</p>

                <p class="mb-2 pl-6 text-justify">II. O painel solar produz 6,72 kWh por m² de energia elétrica diária.</p>

                <p class="mb-2 pl-6 text-justify">III. A área necessária para instalar os painéis solares é entre 10 m² e 11 m².</p>

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
        // QUESTÃO 18
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Suponha que, em uma indústria química, o vapor é fornecido por uma caldeira que queima gás natural à vazão de 2 000 m³/h, com poder calorífico inferior (PCI) médio de 8 000 kcal/m³. Nessa indústria, há uma corrente de gás residual rica em hidrogênio, cujo PCI é de 5 000 kcal/m³, e a vazão é de 800 m³/h. Essa corrente é vendida por R$ 2,00/m³ a outra empresa, para a recuperação de hidrogênio.</p>

                <p class="mb-2 text-justify">Considerando que o sistema de queima existente é adequado para a corrente residual, engenheiros dessa indústria sugeriram utilizar-se dessa corrente para substituir parte do gás natural, em vez de vendê-la, o que foi acatado pelos gestores.</p>

                <p class="mb-2 text-justify">Sabendo que o gás natural é comprado a R$ 10,00/m³ e a eficiência de queima da corrente residual é igual à do gás natural, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A corrente residual substituiria 40% da vazão atual do gás natural.</p>

                <p class="mb-2 pl-6 text-justify">II. A economia prevista, adotando-se a referida medida, é de R$ 3 400/h.</p>

                <p class="mb-2 pl-6 text-justify">III. A corrente do gás residual forneceria 25% da necessidade atual de vapor.</p>
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
            'alternativa_correta' => 'D',
        ]);

        // =====================================================================
        // QUESTÃO 19
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">O diagrama a seguir representa um sistema operando em malha fechada, numa situação de servo-controle, com variáveis de entrada e saída y<sub>d</sub> e y, respectivamente, escritas em forma de desvio. Esse sistema opera sob a ação de um controlador proporcional integral (PI), representado pela função de transferência g<sub>c</sub>. O comportamento dinâmico da planta, indicado no bloco g<sub>p</sub>, segue uma função de transferência de primeira ordem sem tempo morto.</p>

                <div class="flex justify-center my-4">
                    <div class="text-center">
                        <img src="/img/questoes/engenharia_quimica/q19_diagrama_malha_fechada.png" alt="Diagrama de sistema em malha fechada" class="max-w-sm mx-auto">
                    </div>
                </div>

                <p class="mb-2 text-justify">As funções de transferência g<sub>c</sub> e g<sub>p</sub> são dadas pelas duas expressões a seguir.</p>

                <div class="flex justify-center gap-8 my-3 flex-wrap">
                    <div class="text-center">
                        <span>\(g_c = K_c \left(1 + \dfrac{1}{T_I s}\right)\)</span>
                    </div>
                    <div class="text-center">
                        <span>\(g_p = \dfrac{K}{Ts + 1}\)</span>
                    </div>
                </div>

                <p class="mb-2 text-justify">Na primeira expressão, T<sub>I</sub> é o tempo integral do controlador, igual a 1 minuto, K<sub>c</sub> é o ganho proporcional do controlador, igual a 1. Na segunda expressão, o ganho da planta é igual a 1, e sua constante de tempo, T, corresponde a 4 minutos.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando que houve variação na forma de degrau unitário no valor de y<sub>d</sub> no instante zero, isto é, o setpoint passou de 0 para 1, assinale a opção em que a curva mostra corretamente o comportamento transiente da saída y.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Curva com resposta subamortecida, sem ultrapassagem, convergindo assintoticamente para y = 1,0 sem atingir valores acima de 1.',
            'opcao_b' => 'Curva com resposta subamortecida e com ultrapassagem (overshoot), convergindo para y = 1,0 após oscilações amortecidas.',
            'opcao_c' => 'Curva com resposta criticamente amortecida, sem ultrapassagem, convergindo mais lentamente para y = 1,0.',
            'opcao_d' => 'Curva com resposta que oscila de forma crescente, divergindo e tornando-se instável ao longo do tempo.',
            'opcao_e' => 'Curva com resposta que apresenta valores negativos antes de convergir para y = 1,0.',
            'alternativa_correta' => 'B',
        ]);

        // =====================================================================
        // QUESTÃO 20
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">O esquema apresentado a seguir ilustra um aparato utilizado para se estudar transferência de calor em regime transiente. Considere que um banho com água quente, isolado termicamente do ambiente, tenha sua temperatura controlada por meio da dissipação de potência no aquecedor, que uma peça metálica, de formato esférico e com temperatura inicial igual a do ambiente, seja subitamente mergulhada na água, como indicado no esquema, e que a temperatura do banho, T<sub>1</sub>, é medida por um termopar, por meio do qual, também são medidas as temperaturas da superfície da esfera, T<sub>2</sub>, e do centro da esfera, T<sub>3</sub>. Como a peça tem dimensões reduzidas e elevada condutividade térmica, pode-se assumir a validade do método da capacitância, ou seja, não há variações espaciais de temperatura na esfera, o que faz com que T<sub>2</sub> seja, aproximadamente, igual a T<sub>3</sub>.</p>

                <div class="flex justify-center my-4">
                    <div class="text-center">
                        <img src="/img/questoes/engenharia_quimica/q20_aparato_transferencia_calor.png" alt="Aparato para estudo de transferência de calor em regime transiente" class="max-w-sm mx-auto">
                        <p class="text-sm mt-2">Armfield. HT Series: Heat Transfer and Thermodynamics. Disponível em: http://discoverarmfield.com/en/products/view/ht17/unsteady-state-heat-transfer. Acesso em: 10 jul. 2017 (adaptado).</p>
                    </div>
                </div>

                <p class="mb-2 text-justify">Para serem avaliados os efeitos de convecção, a bomba de circulação opera com rotação ajustável, proporcionando maior ou menor vazão de fluido. Considere, ainda, que foram realizados dois experimentos com rotações diferentes na bomba, partindo-se de uma temperatura inicial, T<sub>2,i</sub>, da peça igual nos dois ensaios e mantendo-se a temperatura, T<sub>1</sub>, sempre no mesmo valor. Os dados obtidos são apresentados na figura a seguir, na qual o tempo t foi medido em segundos. Os dados do experimento (1) são representados por círculos e os do experimento (2), por quadrados.</p>

                <div class="flex justify-center my-4">
                    <div class="text-center">
                        <img src="/img/questoes/engenharia_quimica/q20_grafico_experimentos.png" alt="Gráfico dos dados dos experimentos de transferência de calor" class="max-w-sm mx-auto">
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A respeito da situação apresentada, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A resistência à convecção é muito maior que a resistência à condução.</p>

                <p class="mb-2 pl-6 text-justify">II. O coeficiente de transferência de calor foi mais elevado no experimento (2), porque a bomba operava com rotação mais alta que no experimento (1).</p>

                <p class="mb-2 pl-6 text-justify">III. O método da capacitância é válido quando Bi = h×L/k &gt;&gt; 1, em que h é o coeficiente convectivo, L é o comprimento característico e k é o coeficiente de condutividade térmica da esfera.</p>

                <p class="mb-2 pl-6 text-justify">IV. O balanço de energia é dado por</p>
                <p class="text-center my-2">
                    <span>\(\ln\dfrac{T_2 - T_1}{T_{2,i} - T_1} = -\dfrac{h \cdot A}{\rho \cdot V \cdot C_p} \cdot t\)</span>
                </p>
                <p class="mb-2 pl-6 text-justify">em que A é a área da esfera, ρ é a densidade da esfera, V é o volume da esfera e C<sub>p</sub> é a capacidade calorífica específica.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'I e III.',
            'opcao_c' => 'III e IV.',
            'opcao_d' => 'I, II e IV.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => 'A',
        ]);

        // =====================================================================
        // QUESTÃO 21
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Suponha que, em um centro de pesquisas, foi desenvolvido um novo catalisador metálico para reforma de metano. Estudos preliminares indicaram que o material possui propriedades satisfatórias quanto à estabilidade térmica e mecânica e à área superficial. De modo a investigar o desempenho catalítico e determinar quais são os mecanismos físicos que controlam o processo sob diversas condições operacionais, propôs-se uma série de ensaios em um reator de leito fixo em escala piloto, disponível no referido centro de pesquisas.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Para avaliar se a transferência de massa externa controla o processo, pode-se variar a velocidade da corrente de gás, mantendo-se fixos o tempo de retenção e o diâmetro das partículas, de modo que, se a conversão dos reagentes aos produtos sofrer alteração, então, a transferência de massa externa é o mecanismo dominante.</p>

                <p class="mb-2 pl-6 text-justify">II. Se a velocidade da corrente de gás e o tempo de retenção forem mantidos constantes e o diâmetro das partículas for variado e houver alteração na conversão, então, a cinética intrínseca da reação controla o processo e, portanto, o efeito da transferência de massa interna e externa pode ser desprezado.</p>

                <p class="mb-2 pl-6 text-justify">III. Se a velocidade da corrente de gás, o tempo de retenção e o diâmetro das partículas forem mantidos constantes, a variação da temperatura de alimentação do fluido acarretará maior impacto na cinética intrínseca da reação.</p>

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

        // =====================================================================
        // QUESTÃO 22
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Em uma indústria química, é conduzido determinado processo ao qual deve ser adicionado óleo quente. Para o condicionamento desse fluido, dispõe-se de um tanque acumulador agitado contendo uma camisa de aquecimento, conforme demonstrado na figura a seguir.</p>

                <div class="flex justify-center my-4">
                    <div class="text-center">
                        <img src="/img/questoes/engenharia_quimica/q22_tanque_acumulador.png" alt="Tanque acumulador agitado com camisa de aquecimento" class="max-w-xs mx-auto">
                    </div>
                </div>

                <p class="mb-2 text-justify">Inicialmente, esse tanque continha m<sub>0</sub> = 50 kg de óleo a 20 °C. Então, as linhas de alimentação e descarga foram abertas, o que permitia o fluxo de óleo à vazão de 3 kg/s, mantendo-se, portanto, o nível do tanque constante. O coeficiente global de troca térmica, U<sub>C</sub>, sugerido pelo fabricante é de 200 W·m<sup>-2</sup>·K<sup>-1</sup>, a área da camisa de vapor é de 15 m² e a capacidade calorífica do óleo, c<sub>p,óleo</sub>, é de 1,5 kJ·kg<sup>-1</sup>·K<sup>-1</sup>.</p>

                <p class="mb-2 text-justify">O balanço de energia de um sistema sem reação, com variação desprezível de energia cinética e potencial e sem trabalho de eixo é dado por</p>

                <p class="text-center my-3">
                    <span>\(\dfrac{dU}{dt} = \sum \dot{m}_e h_e - \sum \dot{m}_s h_s + \dot{Q}\)</span>
                </p>

                <p class="mb-2 text-justify">em que: U é a energia interna; ṁ, a vazão mássica; h, a entalpia por unidade de massa; Q̇, a taxa de calor, definido por Q̇ = U<sub>C</sub>·A·(T<sub>V</sub> – T<sub>s</sub>); e os subscritos são e, para a corrente de entrada; e s, para a corrente de saída; T<sub>V</sub> é a temperatura do vapor; e A é a área de troca térmica.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nesses dados, assinale a opção que apresenta o valor aproximado da temperatura de saída do óleo após 100 s de operação.</p>
            ',
            'referencia' => '',
            'opcao_a' => '25 °C.',
            'opcao_b' => '50 °C.',
            'opcao_c' => '60 °C.',
            'opcao_d' => '100 °C.',
            'opcao_e' => '120 °C.',
            'alternativa_correta' => 'C',
        ]);

        // =====================================================================
        // QUESTÃO 23
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">As figuras a seguir apresentam cilindros feitos de serragem prensada e úmida que foram postos em contato com ar seco. Nessas figuras, as áreas hachuradas representam as superfícies que foram impermeabilizadas usando-se uma resina especial. Considere as seguintes direções: radial, axial e angular.</p>

                <div class="flex justify-center my-4">
                    <div class="w-full max-w-lg">
                        <img src="/img/questoes/engenharia_quimica/q23_cilindros.png" alt="Cilindros de serragem prensada com diferentes impermeabilizações" class="w-full mx-auto">
                    </div>
                </div>

                <div class="space-y-1 text-sm mb-3">
                    <p><b>1.</b> Sem impermeabilização.</p>
                    <p><b>2.</b> Com impermeabilização apenas na metade superior do corpo do cilindro; extremidades não impermeabilizadas.</p>
                    <p><b>3.</b> Com impermeabilização em toda a superfície do cilindro, exceto nas duas extremidades.</p>
                    <p><b>4.</b> Com impermeabilização em apenas uma das extremidades.</p>
                    <p><b>5.</b> Com impermeabilização apenas nas duas extremidades.</p>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nesses dados, conclui-se que a concentração de água no interior do cilindro, nas situações apresentadas nas figuras 1, 2, 3, 4 e 5, respectivamente, é função de</p>
            ',
            'referencia' => '',
            'opcao_a' => 'unidirecional, bidirecional, tridirecional, bidirecional e bidirecional.',
            'opcao_b' => 'unidirecional, tridirecional, bidirecional, bidirecional e unidirecional.',
            'opcao_c' => 'bidirecional, tridirecional, bidirecional, unidirecional e unidirecional.',
            'opcao_d' => 'bidirecional, tridirecional, unidirecional, bidirecional e unidirecional.',
            'opcao_e' => 'tridirecional, bidirecional, unidirecional, bidirecional e bidirecional.',
            'alternativa_correta' => 'D',
        ]);

        // =====================================================================
        // QUESTÃO 24
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere o desenvolvimento de um produto cuja produção se dê pela reação de um reagente B. A reação é processada em um reator tubular empacotado com um catalisador apropriado. Com o objetivo de aumento de escala (<i>scale up</i>) do processo, das condições de laboratório para as de planta piloto, está sendo desenvolvido um modelo fenomenológico do reator. Foram consideradas as seguintes hipóteses no desenvolvimento do modelo:</p>

                <ul class="list-disc pl-8 mb-3 space-y-1 text-justify">
                    <li>a reação possui cinética isotérmica com taxa de consumo de B dada por r<sub>B</sub> = k × C<sub>B</sub>, com dimensões de mol/(volume × tempo), em que k é a constante da taxa de reação.</li>
                    <li>a variação de concentração se dá apenas na direção axial.</li>
                    <li>ao longo do reator, a concentração do reagente varia por difusão axial, transporte por convecção e reação química.</li>
                    <li>para modelar a difusão axial, é usada a Lei de Fick,
                        <span>\(J_E = -D_E \cdot \dfrac{dC_B}{dz}\)</span>,
                        com dimensões de mol/(área × tempo), em que D<sub>E</sub> é a difusividade mássica.
                    </li>
                    <li>a área de seção transversal do tubo é constante.</li>
                </ul>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas informações apresentadas, assinale a opção em que está representado o modelo do reator obtido aplicando-se a lei da conservação da massa (balanço de massa) à espécie B, ao longo do reator, no estado estacionário, em que v<sub>0</sub> é a velocidade axial.</p>
            ',
            'referencia' => '',
            'opcao_a' => '<span>\(\left(D_E - v_0\right)\dfrac{dC_B}{dz} - kC_B = 0\)</span>',
            'opcao_b' => '<span>\(\left(D_E + v_0\right)\dfrac{dC_B}{dz} - kC_B = 0\)</span>',
            'opcao_c' => '<span>\(v_0\dfrac{dC_B}{dz} + kC_B = 0\)</span>',
            'opcao_d' => '<span>\(D_E\dfrac{d^2C_B}{dz^2} - v_0\dfrac{dC_B}{dz} - kC_B = 0\)</span>',
            'opcao_e' => '<span>\(\dfrac{d^2C_B}{dz^2} + \dfrac{v_0}{D_E}\dfrac{dC_B}{dz} + kC_B = 0\)</span>',
            'alternativa_correta' => 'D',
        ]);

        // =====================================================================
        // QUESTÃO 25
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere que uma torre de absorção reativa será usada na lavagem de um gás tóxico. Nessa torre, o gás solúvel A reativo dissolve-se numa interface plana de um corpo longo de líquido reagente, com o qual ele reage irreversivelmente, conforme a seguinte equação da taxa de reação.</p>

                <p class="text-center my-3">
                    <span>\(r_A = k_n \cdot C_A^n\)</span>
                </p>

                <p class="mb-2 text-justify">em que: k<sub>n</sub> é a constante cinética; C<sub>A</sub>, a concentração do gás A; e n, a ordem de reação.</p>

                <p class="mb-2 text-justify">Considere, ainda, que o líquido que entra na torre de absorção reativa está isento do gás solúvel A, a variação da concentração de A com a posição na entrada da torre (z = 0) é igual a 1 mol·L<sup>-1</sup>·m<sup>-1</sup>, o balanço de massa no sistema no estado estacionário conduz a</p>

                <p class="text-center my-3">
                    <span>\(D\dfrac{d^2C_A}{dz^2} - k_n C_A^n = 0\)</span>
                </p>

                <p class="mb-2 text-justify">em que D é a difusividade mássica, e z, a direção axial.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nesses dados, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. No desenvolvimento do modelo no estado estacionário, assumiu-se que a reação fosse de primeira ordem.</p>

                <p class="mb-2 pl-6 text-justify">II. O modelo desenvolvido é descrito por uma equação diferencial ordinária de segunda ordem, logo, são necessárias duas condições para se obter a solução livre das duas constantes de integração.</p>

                <p class="mb-2 pl-6 text-justify">III. As duas condições iniciais que estão de acordo com o enunciado do problema são t = 0: C<sub>A</sub> = 0 e dC<sub>A</sub>/dz = 1 mol·L<sup>-1</sup>·m<sup>-1</sup>.</p>

                <p class="mb-2 pl-6 text-justify">IV. No balanço de massa apresentado, a quantidade de gás que se difunde após a solubilização deve reagir imediatamente, não havendo transporte por convecção.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e III.',
            'opcao_b' => 'I e IV.',
            'opcao_c' => 'II e III.',
            'opcao_d' => 'I, II e IV.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => 'D',
        ]);

        // =====================================================================
        // QUESTÃO 26
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A refrigeração é uma operação importante no condicionamento do ar em ambientes como indústria, edificações comerciais e empresariais. Suponha que, em uma indústria de alimentos, queira-se remover 10 000 W de uma câmara refrigerada a –10 °C. Foi proposto usar-se, para tal fim, um ciclo de refrigeração com compressão de vapor com expansão em uma válvula de estrangulamento, conforme mostrado na figura a seguir.</p>

                <div class="flex justify-center my-4">
                    <div class="text-center">
                        <img src="/img/questoes/engenharia_quimica/q26_ciclo_refrigeracao.png" alt="Ciclo de refrigeração com compressão de vapor" class="max-w-xs mx-auto">
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Acerca da figura apresentada e da termodinâmica da refrigeração, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O calor é absorvido a baixa temperatura e rejeitado para as vizinhanças em temperatura maior, com gasto energético proveniente de uma fonte externa.</p>

                <p class="mb-2 pl-6 text-justify">II. O coeficiente de desempenho do ciclo fornecido é dado por (H<sub>1</sub> – H<sub>4</sub>)/(H<sub>2</sub> – H<sub>1</sub>), em que H<sub>1</sub>, H<sub>2</sub> e H<sub>4</sub> são, respectivamente, as entalpias das correntes 1, 2 e 4.</p>

                <p class="mb-2 pl-6 text-justify">III. O ciclo de refrigeração representado na figura tem compressão e expansão isentrópicas, pois ele é equivalente ao ciclo de Carnot.</p>

                <p class="mb-2 pl-6 text-justify">IV. O condensador é representado por H-02 e o evaporador por H-01.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'I e IV.',
            'opcao_c' => 'II e III.',
            'opcao_d' => 'I, III e IV.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => 'A',
        ]);

        // =====================================================================
        // QUESTÃO 27
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere que um produto petroquímico B será produzido em um reator de mistura perfeita continuamente agitado, em fase líquida, a partir de um reagente A, segundo a reação A → 2B. Com o objetivo de se dimensionar o volume do reator necessário para se processar a reação de interesse, foram levantados dados, usando-se um ensaio de laboratório, para a taxa de geração r<sub>A</sub> em função da conversão X, conforme mostrado na tabela a seguir.</p>

                <div class="overflow-x-auto my-4">
                    <table class="min-w-full border border-gray-300 text-sm text-center">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border border-gray-300 px-3 py-2">X</th>
                                <th class="border border-gray-300 px-3 py-2">0,00</th>
                                <th class="border border-gray-300 px-3 py-2">0,10</th>
                                <th class="border border-gray-300 px-3 py-2">0,20</th>
                                <th class="border border-gray-300 px-3 py-2">0,30</th>
                                <th class="border border-gray-300 px-3 py-2">0,40</th>
                                <th class="border border-gray-300 px-3 py-2">0,50</th>
                                <th class="border border-gray-300 px-3 py-2">0,60</th>
                                <th class="border border-gray-300 px-3 py-2">0,70</th>
                                <th class="border border-gray-300 px-3 py-2">0,80</th>
                                <th class="border border-gray-300 px-3 py-2">0,85</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 px-3 py-1">–r<sub>A</sub></td>
                                <td class="border border-gray-300 px-3 py-1">0,0053</td>
                                <td class="border border-gray-300 px-3 py-1">0,0052</td>
                                <td class="border border-gray-300 px-3 py-1">0,0050</td>
                                <td class="border border-gray-300 px-3 py-1">0,0045</td>
                                <td class="border border-gray-300 px-3 py-1">0,0040</td>
                                <td class="border border-gray-300 px-3 py-1">0,0033</td>
                                <td class="border border-gray-300 px-3 py-1">0,0025</td>
                                <td class="border border-gray-300 px-3 py-1">0,0018</td>
                                <td class="border border-gray-300 px-3 py-1">0,00125</td>
                                <td class="border border-gray-300 px-3 py-1">0,0010</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-3 py-1">1/(–r<sub>A</sub>)</td>
                                <td class="border border-gray-300 px-3 py-1">189</td>
                                <td class="border border-gray-300 px-3 py-1">192</td>
                                <td class="border border-gray-300 px-3 py-1">200</td>
                                <td class="border border-gray-300 px-3 py-1">222</td>
                                <td class="border border-gray-300 px-3 py-1">250</td>
                                <td class="border border-gray-300 px-3 py-1">303</td>
                                <td class="border border-gray-300 px-3 py-1">400</td>
                                <td class="border border-gray-300 px-3 py-1">556</td>
                                <td class="border border-gray-300 px-3 py-1">800</td>
                                <td class="border border-gray-300 px-3 py-1">1000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="text-sm text-right mb-2">FOGLER, H. S. <b>Elements of chemical reaction engineering</b>, 3. ed., USA: Prentice Hall, 1999 (adaptado).</p>

                <p class="mb-2 text-justify">Considerando as condições fornecidas, faça os cálculos solicitados a seguir:</p>
                <p class="mb-1 pl-6 text-justify">1. calcule o volume do reator necessário para a produção de B, caso sejam processados 10 mol/s do reagente A no reator e forem produzidos 12 mol/s do produto B.</p>
                <p class="mb-2 pl-6 text-justify">2. verifique se o volume do reator tubular será maior, menor ou igual ao volume do reator de mistura perfeita, caso seja trocado o reator de mistura perfeita continuamente agitado por um reator tubular de escoamento pistonado.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Assinale a opção que apresenta, correta e respectivamente, a resolução do que foi requerido.</p>
            ',
            'referencia' => '',
            'opcao_a' => '0,015 m³; maior.',
            'opcao_b' => '0,24 m³; igual.',
            'opcao_c' => '1 m³; menor.',
            'opcao_d' => '1,5 m³; maior.',
            'opcao_e' => '2,4 m³; menor.',
            'alternativa_correta' => 'E',
        ]);

        // =====================================================================
        // QUESTÃO 28
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A figura a seguir mostra o fluxograma de processo para produção de benzeno a partir da hidroalquilação do tolueno.</p>

                <div class="flex justify-center my-4">
                    <div class="text-center w-full">
                        <p class="font-semibold mb-2">Fluxograma de processo (PFD, <i>Process Flow Diagram</i>) para a produção de benzeno via hidroalquilação do tolueno</p>
                        <img src="/img/questoes/engenharia_quimica/q28_fluxograma_benzeno.png" alt="Fluxograma de processo para produção de benzeno" class="max-w-xl mx-auto">
                        <p class="text-sm mt-2">TURTON, R.; BAILIE, R. C.; WHITING, B.; SHAEIWITZ, J. A.; BHATTACHARYYA, D. <b>Analysis, Synthesis, and Design of Chemical Processes.</b> 4. ed., São Paulo: Prentice Hall, p. 10, 2012 (adaptado).</p>
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Acerca do fluxograma apresentado, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'A corrente 16 sofre expansão, transformando-se na corrente 7 antes de entrar no reator R-101.',
            'opcao_b' => 'O trocador de calor é alimentado pela corrente 2, e a descrição P-101A/B representa uma tubulação com diâmetro de 101 mm.',
            'opcao_c' => 'O equipamento compreendido entre as correntes 4 e 6 é um aquecedor, e o equipamento R-101, um registro para controle de vazão.',
            'opcao_d' => 'A simbologia P-101A/B identifica que o equipamento é uma bomba, com diâmetro de sucção de 100 mm, especifica que é a de número 01 na área e que existem duas bombas idênticas, P-101A e P-101B, estando apenas uma em operação.',
            'opcao_e' => 'A simbologia P-101A/B identifica que o equipamento é uma bomba, localizada na área 100 da planta, especifica que é a de número 01 na área 100 e que existem duas bombas idênticas, P-101A e P-101B, estando apenas uma em operação.',
            'alternativa_correta' => 'E',
        ]);

        // =====================================================================
        // QUESTÃO 29
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere o esquema de um biorreator contínuo sem recirculação celular operando no estado estacionário, como mostrado na figura a seguir, em que F representa a vazão de entrada/saída em L/h; S<sub>0</sub> e S, a concentração de substrato em g/L na entrada e na saída do biorreator; X<sub>0</sub> e X, a concentração de células na entrada e na saída do biorreator em g/L; e P<sub>0</sub> e P, as concentrações de produto na entrada e na saída do biorreator em g/L.</p>

                <div class="flex justify-center my-4">
                    <div class="text-center">
                        <img src="/img/questoes/engenharia_quimica/q29_biorreator.png" alt="Esquema de biorreator contínuo sem recirculação celular" class="max-w-xs mx-auto">
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Em relação aos balanços que ocorrem nesse biorreator, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A concentração S será superior a S<sub>0</sub>, pois o substrato é gerado ao longo do bioprocesso pelas células presentes.</p>

                <p class="mb-2 pl-6 text-justify">II. A concentração de X, S e P são as mesmas que estão no interior do biorreator, visto que o processo já se encontra em estado estacionário.</p>

                <p class="mb-2 pl-6 text-justify">III. A concentração de células que deixam o biorreator é função do fator de conversão do substrato em células.</p>

                <p class="mb-2 pl-6 text-justify">IV. A produtividade do biorreator, em função da formação de células, depende da vazão e do volume do biorreator, além da concentração (inicial e final) de células.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e III.',
            'opcao_b' => 'I e IV.',
            'opcao_c' => 'II e III.',
            'opcao_d' => 'I, II e IV.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => 'E',
        ]);

        // =====================================================================
        // QUESTÃO 30
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">O fluxo de calor que atravessa determinado meio sólido é proporcional à razão entre a diferença de temperatura e a distância. Essa proporcionalidade é mensurada por um parâmetro denominado condutividade térmica. A variação dos valores de condutividade térmica com a temperatura é mostrada na figura a seguir.</p>

                <div class="flex justify-center my-4">
                    <div class="text-center w-full">
                        <img src="/img/questoes/engenharia_quimica/q30_condutividade_termica.png" alt="Variação da condutividade térmica com a temperatura para diferentes materiais" class="max-w-lg mx-auto">
                        <p class="text-sm mt-2">BERGMAN, T.L.; LAVINE, A.S.; INCROPERA, F.P.; DEWITT, D.P. <b>Transferência de calor e de massa.</b> Rio de Janeiro: LTC, 2014 (adaptado).</p>
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir da análise da figura apresentada, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. À temperatura ambiente, uma porta fabricada de ferro é um isolante térmico melhor que uma parede de aço inoxidável AISI 304, de mesmas dimensões.</p>

                <p class="mb-2 pl-6 text-justify">II. Prata e cobre são os melhores materiais para serem utilizados nos tubos internos de um trocador de calor.</p>

                <p class="mb-2 pl-6 text-justify">III. Entre os materiais mencionados na figura, o quartzo fundido é o melhor isolante para ser utilizado em qualquer temperatura.</p>

                <p class="mb-2 pl-6 text-justify">IV. Todos os materiais mencionados tendem a ser piores isolantes térmicos com o aumento da temperatura.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I.',
            'opcao_b' => 'II.',
            'opcao_c' => 'III.',
            'opcao_d' => 'II e IV.',
            'opcao_e' => 'I, III e IV.',
            'alternativa_correta' => 'B',
        ]);

        // =====================================================================
        // QUESTÃO 31
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Em 2016, a revista científica <i>Nature</i> apresentou um estudo em que se indicava que a emissão de metano, durante a produção e a utilização de gás natural, petróleo e carvão, é de 20% a 60% maior do que se julgava. Dado que o metano é 28 vezes mais eficiente na retenção do calor na atmosfera da Terra, constatou-se haver desafios adicionais na luta contra as mudanças climáticas. Nesse sentido, tem aumentado o número de pesquisas sobre como utilizar o gás metano, em vez de "lançá-lo" na atmosfera. Um pesquisador sugeriu que o metano fosse queimado como forma de se atenuar o problema. A tabela a seguir apresenta os dados de calor de formação padrão a 25 °C.</p>

                <div class="overflow-x-auto my-4">
                    <table class="min-w-full border border-gray-300 text-sm text-center">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border border-gray-300 px-3 py-2">Substância</th>
                                <th class="border border-gray-300 px-3 py-2">H°<sub>f</sub> (kJ/mol)</th>
                                <th class="border border-gray-300 px-3 py-2">Substância</th>
                                <th class="border border-gray-300 px-3 py-2">H°<sub>f</sub> (kJ/mol)</th>
                                <th class="border border-gray-300 px-3 py-2">Substância</th>
                                <th class="border border-gray-300 px-3 py-2">H°<sub>f</sub> (kJ/mol)</th>
                                <th class="border border-gray-300 px-3 py-2">Substância</th>
                                <th class="border border-gray-300 px-3 py-2">H°<sub>f</sub> (kJ/mol)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 px-3 py-1">CO<sub>2</sub>(g)</td><td class="border border-gray-300 px-3 py-1">–393,5</td>
                                <td class="border border-gray-300 px-3 py-1">CO(g)</td><td class="border border-gray-300 px-3 py-1">–110,3</td>
                                <td class="border border-gray-300 px-3 py-1">NH<sub>3</sub>(g)</td><td class="border border-gray-300 px-3 py-1">–46,1</td>
                                <td class="border border-gray-300 px-3 py-1">NaCl(s)</td><td class="border border-gray-300 px-3 py-1">–412,1</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-3 py-1">C<sub>2</sub>H<sub>2</sub>(g)</td><td class="border border-gray-300 px-3 py-1">+226,8</td>
                                <td class="border border-gray-300 px-3 py-1">CH<sub>4</sub>(g)</td><td class="border border-gray-300 px-3 py-1">–74,8</td>
                                <td class="border border-gray-300 px-3 py-1">H<sub>2</sub>O(v)</td><td class="border border-gray-300 px-3 py-1">–241,8</td>
                                <td class="border border-gray-300 px-3 py-1">H<sub>2</sub>O(l)</td><td class="border border-gray-300 px-3 py-1">–285,8</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-3 py-1">O<sub>3</sub>(g)</td><td class="border border-gray-300 px-3 py-1">+143</td>
                                <td class="border border-gray-300 px-3 py-1">SO<sub>2</sub>(g)</td><td class="border border-gray-300 px-3 py-1">–296,8</td>
                                <td class="border border-gray-300 px-3 py-1">H<sub>2</sub>O<sub>2</sub>(l)</td><td class="border border-gray-300 px-3 py-1">–187,6</td>
                                <td class="border border-gray-300 px-3 py-1">SO<sub>3</sub>(g)</td><td class="border border-gray-300 px-3 py-1">–395,7</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nos dados apresentados, verifica-se que o calor de reação da combustão do metano corresponde a</p>
            ',
            'referencia' => '',
            'opcao_a' => '–973,3 kJ/mol.',
            'opcao_b' => '+973,3 kJ/mol.',
            'opcao_c' => '–890,3 kJ/mol.',
            'opcao_d' => '+890,3 kJ/mol.',
            'opcao_e' => '–1 367 kJ/mol.',
            'alternativa_correta' => 'C',
        ]);

        // =====================================================================
        // QUESTÃO 32
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">É difícil a separação de misturas azeotrópicas por destilação fracionada, tal como ocorre, por exemplo, no acetato de etila e etanol. Uma das possibilidades para resolver esse problema é alterar a pressão de operação, de modo a se conseguir uma diferença na composição da mistura azeotrópica.</p>

                <p class="mb-2 text-justify">Com base nesse princípio, é sugerido o fluxograma de processo a seguir, com duas colunas de destilação. Nesse sistema, é alimentada uma mistura que contém 20% de acetato de etila e 80% de etanol, em base molar.</p>

                <div class="flex justify-center my-4">
                    <div class="text-center">
                        <img src="/img/questoes/engenharia_quimica/q32_fluxograma_destilacao.png" alt="Fluxograma com duas colunas de destilação" class="max-w-xs mx-auto">
                    </div>
                </div>

                <p class="mb-2 text-justify">As figuras a seguir apresentam os diagramas de equilíbrio temperatura/composição em duas pressões diferentes (1,0 bar e 0,1 bar). Neles, x e y são frações molares de acetato de etila, e T é a temperatura. Nota-se a formação de duas misturas azeotrópicas com composições aproximadas de 55% e 72% de acetato de etila, em base molar.</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
                    <div class="text-center">
                        <img src="/img/questoes/engenharia_quimica/q32_diagrama_1bar.png" alt="Diagrama de equilíbrio a 1,0 bar" class="max-w-xs mx-auto">
                        <p class="text-sm mt-1">p = 1,0 bar</p>
                    </div>
                    <div class="text-center">
                        <img src="/img/questoes/engenharia_quimica/q32_diagrama_01bar.png" alt="Diagrama de equilíbrio a 0,1 bar" class="max-w-xs mx-auto">
                        <p class="text-sm mt-1">p = 0,1 bar</p>
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas figuras apresentadas e no que foi descrito, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Para que se consiga a separação completa de acetato de etila e etanol, é preciso que a coluna de destilação 1 opere sob pressão de 0,1 bar, e a coluna 2, sob pressão de 1,0 bar.</p>

                <p class="mb-2 pl-6 text-justify">II. Da análise dos diagramas de equilíbrio, pode-se inferir corretamente que as pressões de vapor de acetato de etila e de etanol são baixas, o que os torna inflamáveis.</p>

                <p class="mb-2 pl-6 text-justify">III. Como produtos de fundo das colunas de destilação 1 e 2, tem-se, respectivamente, etanol e acetato de etila puros.</p>

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

        // =====================================================================
        // QUESTÃO 33
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A figura a seguir mostra as curvas do diagrama tensão-deformação referentes aos ensaios de tração realizados com dois materiais (A e B).</p>

                <div class="flex justify-center my-4">
                    <div class="text-center">
                        <img src="/img/questoes/engenharia_quimica/q33_diagrama_tensao_deformacao.png" alt="Diagrama tensão-deformação para materiais A e B" class="max-w-sm mx-auto">
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nos dados experimentais apresentados, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'A tensão de ruptura do material B ocorre na tensão de 480 MPa.',
            'opcao_b' => 'O ponto de ruptura do material B ocorre na tensão de 300 MPa.',
            'opcao_c' => 'A limitação elástica do material A ocorre na tensão de 550 MPa.',
            'opcao_d' => 'O ponto de ruptura do material A ocorre na tensão de 450 MPa.',
            'opcao_e' => 'O limite de escoamento do material A ocorre na tensão de 300 MPa.',
            'alternativa_correta' => 'A',
        ]);

        // =====================================================================
        // QUESTÃO 34
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Analise o pseudocódigo a seguir, em que <i>re</i> corresponde à resistência equivalente, considerando que os valores das variáveis r1, r2, r3, esc e nres estejam armazenados na memória.</p>

                <pre class="bg-white border border-gray-300 rounded p-4 text-sm font-mono leading-relaxed overflow-x-auto my-4"><code>Início
    <span class="text-red-500">Se</span> esc == 1 <span class="text-red-500">e</span> nres == 2
        <span class="text-red-500">Então</span> re := r1 + r2
    <span class="text-red-500">Se não, se</span> esc == 1 <span class="text-red-500">e</span> nres == 3
        <span class="text-red-500">Então</span> re := r1 + r2 + r3
    Fim
    <span class="text-red-500">Se</span> esc == 2 <span class="text-red-500">e</span> nres == 2
        <span class="text-red-500">Então</span> re := (r1*r2) / (r1 + r2)
    <span class="text-red-500">Se não, se</span> esc == 2 <span class="text-red-500">e</span> nres == 3
        <span class="text-red-500">Então</span> re := 1 / (1/r1 + 1/r2 + 1/r3)
    Fim
    <span class="text-red-500">Escreva</span> re
Fim</code></pre>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base no algoritmo apresentado, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Quando esc = 1 e nres = 2, o cálculo da resistência equivalente envolve um laço iterativo, o resultado é armazenado em re e o seu valor é impresso no console.',
            'opcao_b' => 'Quando esc = 1 e nres = 3, é realizado o cálculo da resistência equivalente pela soma de r1 e r2, o resultado é armazenado em re e o seu valor é impresso no console.',
            'opcao_c' => 'Quando esc = 2 e nres = 2, é realizado o cálculo da resistência equivalente pela soma de r1, r2 e r3, o resultado é armazenado em re e o seu valor é impresso no console.',
            'opcao_d' => 'Quando esc = 2 e nres = 3, é realizado o cálculo da resistência equivalente pela soma de r1, r2 e r3, o resultado é armazenado em re e o seu valor é impresso no console.',
            'opcao_e' => 'Quando esc = 2 e nres = 2, é realizado o cálculo da resistência equivalente por meio de (r1*r2) / (r1 + r2), o resultado é armazenado em re e o seu valor é impresso no console.',
            'alternativa_correta' => 'E',
        ]);

        // =====================================================================
        // QUESTÃO 35
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Um dos métodos para a obtenção do fator de atrito (<i>f</i>) é o uso do diagrama de Moody. Utilizando-se esse diagrama, é possível obter o fator de atrito para qualquer tipo de escoamento, fluido e rugosidade de uma tubulação. Para tal, é necessário o conhecimento da rugosidade relativa do tubo e do tipo de escoamento, por meio do número de Reynolds.</p>

                <p class="mb-2 text-justify">No diagrama de Moody, apresentado a seguir, estão evidenciados os regimes de escoamento e os valores de rugosidade para alguns materiais.</p>

                <div class="flex justify-center my-4">
                    <div class="text-center w-full">
                        <img src="/img/questoes/engenharia_quimica/q35_diagrama_moody.png" alt="Diagrama de Moody" class="max-w-xl mx-auto">
                        <p class="text-sm mt-2">MORAN, M. J. et al. <b>Principles of engineering thermodynamics.</b> 8. ed. Hoboken, Nova Jersey (EUA): John Wiley &amp; Sons, 2015 (adaptado).</p>
                    </div>
                </div>

                <p class="mb-2 text-justify">Com base no diagrama de Moody e admitindo a densidade e a viscosidade dinâmica da água a 20 °C iguais, respectivamente, a 1 000 kg/m³ e 1,0·10<sup>-3</sup> Pa·s, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A água escoa em uma tubulação de ferro fundido com 50 cm de diâmetro à velocidade de 2 m/s, e o regime desse escoamento é turbulento.</p>

                <p class="mb-2 pl-6 text-justify">II. Em um tubo de 20 cm de diâmetro, passa água a 0,005 m/s, o regime é laminar e o fator de atrito é 0,064.</p>

                <p class="mb-2 pl-6 text-justify">III. A água escoa em um tubo liso de 10 cm de diâmetro a 2 m/s, e o regime é plenamente turbulento.</p>
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
            'alternativa_correta' => 'C',
        ]);

        // =====================================================================
        // QUESTÃO 36
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Suponha que, em uma unidade fabril, sejam geradas 40 t/h de uma corrente aquosa (densidade = 1 g/mL) contaminada com produtos orgânicos que dão DQO (demanda química de oxigênio) de 25 000 mg/L. O custo de tratamento realizado por uma empresa especializada é de R$ 2,00/kg de DQO.</p>

                <p class="mb-2 text-justify">Uma possibilidade de redução desse custo é a remoção de parte da carga orgânica usando-se destilação (<i>stripper</i>). A simulação desse processo indicou que a DQO é reduzida para 5 000 mg/L, havendo recuperação de 1 000 kg/h de um líquido combustível que, valorado ao preço energético do gás natural, custaria R$ 1 200,00/t, e o consumo de vapor de 10 t/h, R$ 120,00/t.</p>

                <p class="mb-2 text-justify">A estimativa do investimento para a instalação de todo o sistema do <i>stripper</i> é de R$ 25 000 000,00. A empresa considera 1 ano como o tempo de retorno do investimento máximo para projetos dessa grandeza. Os custos operacionais de manutenção e de pessoal são desprezíveis, já que são absorvidos por outras unidades.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Acerca do projeto apresentado, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O projeto é viável, segundo o critério estabelecido pela empresa.</p>

                <p class="mb-2 pl-6 text-justify">II. O ganho com a instalação do <i>stripper</i> será de R$ 1 610,00/h.</p>

                <p class="mb-2 pl-6 text-justify">III. A despesa da empresa com o tratamento de efluente será reduzida em mais de 80%.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'III, apenas.',
            'opcao_c' => 'I e II, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'D',
        ]);

        // =====================================================================
        // QUESTÃO 37
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A atividade catalítica de enzimas envolve a ligação aos seus substratos para formar o complexo enzima-substrato. O substrato se liga a uma região específica da enzima, chamada sítio ativo. Quando ligado ao sítio ativo, o substrato é convertido em produto da reação, o qual é, então, liberado da enzima. A reação catalisada por enzimas pode ser esquematizada da forma apresentada a seguir.</p>

                <div class="flex justify-center my-4">
                    <div class="text-center">
                        <img src="/img/questoes/engenharia_quimica/q37_reacao_enzimatica.png" alt="Esquema da reação catalisada por enzimas" class="max-w-md mx-auto">
                        <p class="text-sm mt-2">COOPER, G. M. <b>The Cell: a molecular approach.</b> 2. ed. (MA): Sinauer Associates, 2000 (adaptado).</p>
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base no modelo chave-fechadura, sabe-se que os centros ativos de uma enzima encaixam-se perfeitamente em seus substratos específicos. Nesse modelo, as enzimas reconhecem seus substratos através da</p>
            ',
            'referencia' => '',
            'opcao_a' => 'energia de ativação.',
            'opcao_b' => 'temperatura e do pH do meio.',
            'opcao_c' => 'irreversibilidade da reação enzimática.',
            'opcao_d' => 'forma tridimensional das moléculas do substrato.',
            'opcao_e' => 'concentração de sais presentes na solução de substrato.',
            'alternativa_correta' => 'D',
        ]);

        // =====================================================================
        // QUESTÃO 38
        // =====================================================================
        Questao::create([
            'categoria' => 'Engenharia Química',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A utilização de filtro de pedras no polimento de lagoas de estabilização vem sendo estudada e apresentada em vários eventos da área ambiental. Em um estudo sobre o tratamento de dejetos suínos, visando-se ao reuso do efluente na irrigação, foi verificada a influência de determinados parâmetros na eficiência do filtro de pedras.</p>

                <p class="mb-2 text-justify">Em relação ao pH e à temperatura, foram obtidos os dados de entrada do filtro de pedras (EFP) e de saída do filtro de pedras (SFP), conforme mostram os gráficos de boxplot, apresentados a seguir.</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-4">
                    <div class="text-center">
                        <img src="/img/questoes/engenharia_quimica/q38_boxplot_temperatura.png" alt="Boxplot de temperatura EFP e SFP" class="max-w-xs mx-auto">
                        <p class="text-sm mt-1">Temperatura (°C)</p>
                    </div>
                    <div class="text-center">
                        <img src="/img/questoes/engenharia_quimica/q38_boxplot_ph.png" alt="Boxplot de pH EFP e SFP" class="max-w-xs mx-auto">
                        <p class="text-sm mt-1">pH</p>
                    </div>
                </div>

                <p class="text-sm text-right mb-2">OLIVEIRA, J. L. R.; ARAUJO, I. S.; ALVES, R. G. C. M.; BELLI FILHO, P.; COSTA, R. H. R. Utilização de filtro de pedras no polimento de lagoas de estabilização para o tratamento de dejetos de suínos visando ao reuso do efluente na irrigação. In: <b>ANAIS DO 24° CONGRESSO BRASILEIRO DE ENGENHARIA SANITÁRIA E AMBIENTAL</b>, ABES. Belo Horizonte (MG), 2007.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nos resultados apresentados nos gráficos, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'A eficiência do filtro de pedras sofre efeito significativo do pH.',
            'opcao_b' => '50% dos valores de pH na saída do filtro ficaram entre 8,2 e 8,6.',
            'opcao_c' => 'A eficiência do filtro de pedras não sofre efeito significativo da temperatura.',
            'opcao_d' => '25% das temperaturas medidas na entrada do filtro eram superiores a 19 °C.',
            'opcao_e' => 'O valor da mediana, na entrada e na saída do filtro, para o pH foi reduzido de 9,1 para 8,8.',
            'alternativa_correta' => 'C',
        ]);
    }
}
