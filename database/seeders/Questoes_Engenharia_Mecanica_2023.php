<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class Questoes_Engenharia_Mecanica_2023 extends Seeder
{
    public function run(): void
    {
        // =====================================================================
        // Engenharia Mecânica – Questões 10 a 38
        // =====================================================================

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A figura a seguir representa um dos tipos mais comuns de furo, o furo cego.</p>
                <p class="mb-2 text-justify">Na situação representada na figura, tem-se disponível uma broca helicoidal de aço rápido para usinar o furo com diâmetro Ø = 8 mm e profundidade A = 25 mm num aço de baixo carbono. Para essa situação, a velocidade de corte apropriada é de 35 m/min e o avanço é de 0,18 mm/rotação.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando a situação apresentada, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Utilizando-se a broca de 8 mm de diâmetro, desconsiderando a ponta da broca para efeito de deslocamento da ferramenta e com avanço automático, o tempo principal de corte será menor que 10 s.</p>
                <p class="mb-2 pl-6 text-justify">II. O risco de ocorrer excentricidade no formato do furo é desconsiderado, pois é pequeno o diâmetro da broca utilizada na usinagem da peça.</p>
                <p class="mb-2 pl-6 text-justify">III. No projeto da peça, o furo em questão é considerado de alta precisão, de forma que, após sua furação, haverá a operação de acabamento.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'HIBBELER, R. C. Resistência dos Materiais. São Paulo: Pearson, 2009 (adaptado).',
            'opcao_a' => 'II, apenas.',
            'opcao_b' => 'III, apenas.',
            'opcao_c' => 'I e II, apenas.',
            'opcao_d' => 'I e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Suponha que uma indústria metalomecânica queira produzir peças com característica de resistência ao desgaste. A empresa tem experiência na fabricação de peças a partir de dois tipos de materiais para a produção do mesmo tipo de componente, conforme descrito a seguir.</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300 text-center">
                        <thead class="bg-gray-100">
                            <tr><th class="border px-3 py-2">Material</th><th class="border px-3 py-2">Descrição</th></tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-2 font-medium">Material A</td><td class="border px-3 py-2">Aço com alto teor de carbono</td></tr>
                            <tr><td class="border px-3 py-2 font-medium">Material B</td><td class="border px-3 py-2">Aço com baixo teor de carbono</td></tr>
                        </tbody>
                    </table>
                </div>
                <p class="mb-2 text-justify">Considere que a rota comum de fabricação para componentes com essa exigência de resistência ao desgaste envolve a usinagem, seguida de tratamento térmico, e que essa empresa possui equipamentos e competência para realizar diferentes operações de tratamento térmico para essa demanda.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir das informações apresentadas, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Se o componente for fabricado com o material A, este deve ser aquecido por tempos prolongados de exposição a temperaturas ligeiramente subcríticas, visando-se produzir cementita esferoidal em uma matriz de ferrita e eliminando-se a presença de perlita.',
            'opcao_b' => 'Se o componente for fabricado com o material A, este deve ser aquecido abaixo da zona crítica, seguindo-se o resfriamento prolongado e, após esses procedimentos, deve ser realizado um revenido, para alívio de tensões internas.',
            'opcao_c' => 'Se o componente for fabricado com o material B, este deve ser aquecido acima da temperatura crítica, acrescentando-se carbono em sua superfície, por certo período de tempo.',
            'opcao_d' => 'Se o componente for fabricado com qualquer um dos materiais, A ou B, estes devem ser aquecidos acima da zona crítica e, em seguida devem ser retirados do forno e resfriados ao ar natural.',
            'opcao_e' => 'Se o componente for fabricado com o material B, deve ser aplicado um recozimento, com o objetivo de aumentar a dureza do material e a resistência ao desgaste.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere que, para abastecer uma cidade de 360 000 habitantes, será construída uma nova estação de tratamento de água (ETA), com vazão total de 3 600 m³/h. O engenheiro responsável pelo projeto da ETA calculou que a bomba hidráulica do tipo centrífuga, responsável pelo processo de filtragem, deve vencer a altura estática de 3 m, a perda de carga deve ser de 42 m e o peso específico da água igual a 10 kN/m³. A bomba escolhida tem modernas características construtivas e, de acordo com informações técnicas obtidas no manual do fabricante, há a garantia de que o conjunto moto-bomba apresenta rendimento global de 50%.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando a situação apresentada, conclui-se que a potência do motor elétrico que acionará a bomba hidráulica da referida ETA corresponde a</p>
            ',
            'referencia' => '',
            'opcao_a' => '30 kW.',
            'opcao_b' => '60 kW.',
            'opcao_c' => '450 kW.',
            'opcao_d' => '840 kW.',
            'opcao_e' => '900 kW.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Uma empresa foi contratada para obter, experimentalmente, a força de arrasto em uma partícula metálica esférica com diâmetro de 1 mm quando submetida a escoamento de ar a 75 m/s. Diante das dificuldades de se trabalhar com um protótipo de pequenas dimensões, a equipe de engenheiros propôs a construção de um modelo em escala 200 vezes maior, o qual será testado em glicerina. Considere que as viscosidades cinemáticas do ar e da glicerina correspondam, respectivamente, a 1,5×10<sup>-5</sup> m²/s e 1,2×10<sup>-3</sup> m²/s.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Dado que existe relação de semelhança entre o modelo e o protótipo, a velocidade de escoamento da glicerina, no referido experimento, deve ser de</p>
            ',
            'referencia' => '',
            'opcao_a' => '35 m/s.',
            'opcao_b' => '30 m/s.',
            'opcao_c' => '25 m/s.',
            'opcao_d' => '20 m/s.',
            'opcao_e' => '15 m/s.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Suponha que um engenheiro tenha analisado o isolamento de um tubo fino que evita a condensação do fluido refrigerante conduzido. Usando um paquímetro, ele verificou que o tubo tem 0,54 cm de raio externo, mas esse raio chega a 0,6 cm com o isolamento de lã de vidro.</p>
                <p class="mb-2 text-justify">Considerou-se que a condutividade térmica da lã de vidro é de 0,038 W/(m °C) e, após consulta na literatura, o engenheiro observou que o raio crítico de isolamento é dado por r<sub>crit</sub> = k/h, em que k é a condutividade térmica, e h = 7,0 W/(m² °C) é o coeficiente de transferência de calor por convecção.</p>
                <p class="mb-2 text-justify">O engenheiro analisou também, como material alternativo, o isolamento de silicato de sódio, cuja condutividade térmica é de 0,055 W/(m °C).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas análises realizadas, o engenheiro concluiu corretamente que</p>
            ',
            'referencia' => '',
            'opcao_a' => 'a lã de vidro e o silicato de sódio têm o mesmo fluxo de calor.',
            'opcao_b' => 'a lã de vidro tem melhor isolamento com o aumento do raio do isolante.',
            'opcao_c' => 'a lã de vidro tem menor fluxo de calor com a redução do raio do isolante.',
            'opcao_d' => 'o silicato de sódio tem melhor isolamento com o aumento do raio do isolante.',
            'opcao_e' => 'o silicato de sódio tem menor fluxo de calor com o aumento do raio do isolante.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Suponha que um sistema de condicionamento de ar é utilizado para manter a temperatura interna de um quarto a 23 °C no verão. Após serem realizadas diversas medidas da temperatura superficial interna de uma parede do quarto, com 5 m de comprimento e 4 m de altura, foi obtido o valor médio de 27 °C.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando-se os dados apresentados e que o coeficiente de transferência de calor por convecção no interior do quarto corresponde a 5 W/(m² °C), desprezados os efeitos da radiação nesse ambiente, verifica-se que a taxa de transferência de calor que passa pela referida parede é de</p>
            ',
            'referencia' => '',
            'opcao_a' => '20 W.',
            'opcao_b' => '100 W.',
            'opcao_c' => '180 W.',
            'opcao_d' => '360 W.',
            'opcao_e' => '400 W.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Conforme a bibliografia de sistemas de geração de potência a vapor, que inclui a norma API-611, a qual trata de turbinas a vapor, ciclos de geração de potência a vapor requerem um título no interior de qualquer parte da turbina acima de 90%, de forma a serem evitados ou minimizados problemas com a erosão das pás.</p>
                <p class="mb-2 text-justify">O diagrama T×s apresentado mostra um Ciclo Rankine Irreversível, com vapor saturado na entrada da turbina, tendo a saída um título perto da faixa crítica.</p>
                <p class="mb-2 text-right text-sm">MORAN, M. J.; SHAPIRO, H. N. <b>Princípios de Termodinâmica para Engenharia</b>. Rio de Janeiro: LTC, 2013 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considere a intenção de se aumentar a eficiência desse ciclo mudando parâmetros, como pressão da caldeira, pressão do condensador, condições na entrada da turbina e/ou condições na entrada da bomba.</p>
                <p class="mb-2 text-justify">Acerca da situação apresentada, assinale a opção que indica a melhor ação para se alcançar o aumento de eficiência desejado, sem reduzir-se o título na saída da turbina.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Aumentar a temperatura do vapor na saída da turbina, sem modificar a pressão da caldeira.',
            'opcao_b' => 'Superaquecer o vapor na caldeira, sem modificar a pressão na caldeira e no condensador.',
            'opcao_c' => 'Apenas reduzir a pressão no condensador, sem modificar a pressão do vapor saturado na saída da caldeira.',
            'opcao_d' => 'Apenas aumentar a pressão do vapor saturado na saída da caldeira, sem modificar a pressão no condensador.',
            'opcao_e' => 'Subresfriar o líquido na entrada da bomba, mantendo a pressão do vapor saturado na saída da caldeira inalterada.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere que um reservatório cilíndrico armazena água à pressão e à temperatura ambientes. A área da base do reservatório é de 0,5 m², e seu nível máximo corresponde a 2 m. No instante inicial, o nível da água no interior do reservatório é de 1 m. Após 10 s, o reservatório passa a ser abastecido com a vazão de 5 L/s de água.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando essas condições, assinale a opção em que está representado o comportamento dinâmico do nível a ser medido por um sensor.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Gráfico A: nível permanece estável em 1 m até t = 10 s, depois sobe linearmente até atingir 2 m e se estabiliza.',
            'opcao_b' => 'Gráfico B: nível começa em 1 m, oscila e depois sobe linearmente com ultrapassagem além de 2 m.',
            'opcao_c' => 'Gráfico C: nível começa em 2 m e desce linearmente a partir de t = 10 s.',
            'opcao_d' => 'Gráfico D: nível começa em 1 m, cresce exponencialmente a partir de t = 10 s e ultrapassa o limite de 2 m.',
            'opcao_e' => 'Gráfico E: nível permanece constante em 1 m ao longo de todo o período.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Suponha que uma placa plana retangular esteja sujeita à condução de calor bidimensional em regime permanente, imposta pelas condições de contorno em suas extremidades. Suponha, ainda, que a placa foi dividida em seis elementos quadrados, sendo identificados 12 nós, conforme apresentado na figura a seguir.</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-400 text-center" style="max-width: 320px; margin: 0 auto;">
                        <tbody>
                            <tr>
                                <td class="border border-gray-400 px-4 py-3 font-bold">1</td>
                                <td class="border border-gray-400 px-4 py-3 font-bold">2</td>
                                <td class="border border-gray-400 px-4 py-3 font-bold">3</td>
                                <td class="border border-gray-400 px-4 py-3 font-bold">4</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-400 px-4 py-3 font-bold">5</td>
                                <td class="border border-gray-400 px-4 py-3 font-bold bg-gray-100">6</td>
                                <td class="border border-gray-400 px-4 py-3 font-bold bg-gray-100">7</td>
                                <td class="border border-gray-400 px-4 py-3 font-bold">8</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-400 px-4 py-3 font-bold">9</td>
                                <td class="border border-gray-400 px-4 py-3 font-bold">10</td>
                                <td class="border border-gray-400 px-4 py-3 font-bold">11</td>
                                <td class="border border-gray-400 px-4 py-3 font-bold">12</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="mb-2 text-right text-sm">CENGEL, Y. A.; GHAJAR, A. J. <b>Transferência de calor e massa: uma abordagem prática</b>. 4. ed. Porto Alegre: AMGH, 2012 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando que o material possa ser modelado como isotrópico, verifica-se que a equação que representa a temperatura do nó 7, obtida com base na equação de diferenças finitas, é</p>
            ',
            'referencia' => '',
            'opcao_a' => 'T<sub>7</sub> = (T<sub>1</sub> + T<sub>3</sub> + T<sub>9</sub> + T<sub>11</sub>) / 4',
            'opcao_b' => 'T<sub>7</sub> = (T<sub>2</sub> + T<sub>5</sub> + T<sub>7</sub> + T<sub>10</sub>) / 4',
            'opcao_c' => 'T<sub>7</sub> = (T<sub>3</sub> + T<sub>6</sub> + T<sub>8</sub> + T<sub>11</sub>) / 4',
            'opcao_d' => 'T<sub>7</sub> = (T<sub>1</sub> + T<sub>3</sub> + T<sub>8</sub> + T<sub>11</sub>) / 2',
            'opcao_e' => 'T<sub>7</sub> = (T<sub>2</sub> + T<sub>4</sub> + T<sub>8</sub> + T<sub>10</sub>) / 2',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">O termo insalubridade tem o seguinte significado: o que é nocivo ou prejudicial à saúde. Um ambiente insalubre é composto por agentes (substâncias ou condições) que podem causar dano ao colaborador. Com base nessas características, a Consolidação das Leis Trabalhistas (CLT) preconiza que as atividades são insalubres quando levam à exposição do colaborador a um nível acima do limite tolerável, predefinidos por normas, conforme sua natureza, intensidade e tempo de exposição. Os parâmetros de insalubridade são definidos pela NR15, em que são apresentadas as disposições gerais acerca das atividades de insalubridade, de acordo com os agentes presentes, sendo eles o químico, o físico, o biológico ou alguma condição adversa.</p>
                <p class="mb-2 text-right text-sm">Disponível em: https://www.gov.br/trabalho-e-emprego. Acesso em: 8 ago. 2023 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base no que é preconizado na NR15, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'O pagamento do adicional de insalubridade está atrelado a uma condição em que o ambiente não apresentará mais risco.',
            'opcao_b' => 'A insalubridade é identificada por meio de avaliação do ambiente, a qual deve ser realizada por um profissional qualificado, com formação em segurança do trabalho e, portanto, habilitado a identificar os riscos do ambiente de atuação dos colaboradores.',
            'opcao_c' => 'O adicional de insalubridade ou periculosidade é um direito adquirido e só deve cessar quando o colaborador fizer uso de equipamentos de proteção individuais apropriados às atividades exercidas ao longo da sua jornada de trabalho.',
            'opcao_d' => 'O valor acrescido ao salário do colaborador, no caso de ser identificado mais de um fator de insalubridade, corresponderá à média dos valores percentuais que forem determinados pela norma, de acordo com os parâmetros elegíveis.',
            'opcao_e' => 'Ao se analisar a insalubridade de um ambiente, deve-se proceder à consulta ao colaborador que esteja atuando na condição de risco e, com base na sua experiência, determinar o grau de risco a que ele está exposto, devendo-se, em seguida, informar o profissional superior para que providências possam ser tomadas em prol da saúde da equipe de trabalho.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Para serem evitadas falhas estruturais em dimensionamento de máquinas e estruturas, é necessária a análise dos elementos de tensões mais críticas. Para a análise das tensões principais e de cisalhamento, um método simples para os cálculos é a utilização do círculo de Mohr.</p>
                <p class="mb-2 text-justify">Considere um elemento de tensão que apresente tensão normal de tração σ<sub>x</sub> = 60 MPa e σ<sub>y</sub> = 0 MPa. Sabendo-se que a tensão normal máxima é de 80 MPa.</p>
                <p class="mb-2 text-right text-sm">BEER, F. P. <b>Resistência dos Materiais</b>. São Paulo: Makron Books, 1995 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Os valores dos módulos de τ<sub>xy</sub> e da tensão de cisalhamento máxima serão, respectivamente, iguais a</p>
            ',
            'referencia' => '',
            'opcao_a' => '40 MPa e 50 MPa.',
            'opcao_b' => '40 MPa e 100 MPa.',
            'opcao_c' => '50 MPa e 50 MPa.',
            'opcao_d' => '50 MPa e 100 MPa.',
            'opcao_e' => '100 MPa e 50 MPa.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A flexão ocorre na grande maioria das estruturas e máquinas existentes, sendo que a demanda da sociedade em projetar equipamentos com menor custo e segurança faz com que o projetista analise todos os elementos estruturais, garantindo que os pontos mais críticos da seção mais crítica sejam avaliados. Para isso, é necessário o conhecimento dos esforços internos das estruturas, os quais, no caso de estruturas planas, são momento fletor, força cortante e força normal axial.</p>
                <p class="mb-2 text-justify">A figura a seguir representa um elemento de máquina sujeito à aplicação de momentos <b>M<sub>1</sub></b> e <b>2M<sub>1</sub></b> em dois pontos específicos, sendo o vão total dividido em três partes iguais de comprimento L/3, com apoio simples em A e apoio duplo em B.</p>
                <p class="mb-2 text-right text-sm">GERE, J. M. <b>Mecânica dos Materiais</b>, 5. ed. São Paulo: Cengage Learning, 2013 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A soma das reações em A e B são nulas.</p>
                <p class="mb-2 pl-6 text-justify">II. A reação em B tem módulo de 3M<sub>1</sub>/L.</p>
                <p class="mb-2 pl-6 text-justify">III. O momento fletor máximo tem módulo 3M<sub>1</sub>.</p>
                <p class="mb-2 pl-6 text-justify">IV. A força cortante máxima tem módulo (3/2)M<sub>1</sub>/L.</p>

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

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere que um momento M de intensidade 180 kN·cm seja aplicado na manivela do motor mostrado na figura a seguir. Na posição mostrada, a força F é necessária para manter o sistema em equilíbrio. As dimensões do mecanismo são: AB = 4,5 cm, BC = 6 cm e a excentricidade = 3 cm. Os pesos são desprezíveis.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nos dados apresentados, verifica-se que, para a determinação dos esforços de projeto atuantes no pistão e considerando-se os pesos desprezíveis, o valor da força F é igual a</p>
            ',
            'referencia' => '',
            'opcao_a' => '30 kN.',
            'opcao_b' => '45 kN.',
            'opcao_c' => '60 kN.',
            'opcao_d' => '90 kN.',
            'opcao_e' => '105 kN.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Suponha que uma indústria de manufatura tenha encomendado um projeto de uma esteira de transporte para alimentação nas células de produção. A figura a seguir representa o dispositivo mecânico de tração de uma esteira, composto por um motor elétrico, uma caixa de transmissão por engrenagens e uma transmissão por polias e correia. As polias apresentam relação de diâmetros d<sub>2</sub>/d<sub>1</sub> = 5 e o motor acoplado à caixa de redução tem potência nominal de 2 cv e opera com rotação fixa de 880 rpm.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando que, ao utilizar um tacômetro, o engenheiro verificou que a rotação no eixo de tração da esteira é de 44 rpm, conclui-se que a relação de transmissão da caixa de transmissão por engrenagens é igual a</p>
            ',
            'referencia' => '',
            'opcao_a' => '20:1.',
            'opcao_b' => '19,8:1.',
            'opcao_c' => '9:1.',
            'opcao_d' => '5:1.',
            'opcao_e' => '4:1.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Nos projetos de máquinas, os conceitos de dinâmica do corpo rígido são fundamentais para o desenvolvimento de modelos matemáticos, evitando-se a construção de protótipos e, consequentemente, minimizando-se custos.</p>
                <p class="mb-2 text-justify">A figura a seguir representa um disco com um cordão enrolado em torno de seu centro geométrico, simulando o comportamento de um ioiô. O disco tem massa M, raio R e momento de inércia em relação ao centro de massa igual a I = MR²/2. Considere M = 0,2 kg, R = 10 cm e aceleração da gravidade g = 10 m/s².</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nessa situação, se o disco é solto a partir do repouso, o valor da velocidade após 9 segundos é</p>
            ',
            'referencia' => '',
            'opcao_a' => '4 m/s.',
            'opcao_b' => '6 m/s.',
            'opcao_c' => '40 m/s.',
            'opcao_d' => '60 m/s.',
            'opcao_e' => '600 m/s.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere que um mecanismo do tipo Scotch Yoke tenha sido utilizado em uma mesa de vibração em um processo industrial e que ensaios experimentais determinaram o gráfico do deslocamento do êmbolo do mencionado mecanismo. O gráfico apresenta um movimento senoidal com amplitude de 4 mm e período de 2π segundos (Y em mm × t em s).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando o gráfico desse mecanismo, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O tempo para que o movimento se repita, a partir do repouso, é de 4π segundos.</p>
                <p class="mb-2 pl-6 text-justify">II. O máximo valor atingido pelo êmbolo, ou seja, sua amplitude, é de 8,0 mm.</p>
                <p class="mb-2 pl-6 text-justify">III. A frequência desse sistema é dada por f = 1/(2π) Hz.</p>
                <p class="mb-2 pl-6 text-justify">IV. A frequência angular do êmbolo é de 1 rad/s.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e II, apenas.',
            'opcao_b' => 'I e IV, apenas.',
            'opcao_c' => 'II e III, apenas.',
            'opcao_d' => 'III e IV, apenas.',
            'opcao_e' => 'I, II, III e IV.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Um novo tipo de indústria está nascendo devido à "quarta revolução industrial", o que facilita os processos e as demandas referentes ao setor de manutenção e às atribuições que lhe competem, visto que se favorecem o controle e os acessos remotos, os processos automatizados e os seus dispositivos. Um Planejamento e Controle da Manutenção (PCM) deverá levar a uma configuração por meio da qual se busca a excelência diante dos desafios apresentados, favorecendo-se uma melhor qualidade no processo e na interação entre os setores.</p>
                <p class="mb-2 text-right text-sm">SILVA, D. S.; LIMA, E. V. O Planejamento e Controle da Manutenção na Indústria 4.0. <b>IX Congresso Brasileiro de Engenharia de Produção</b>. Ponta Grossa, PR, Brasil, 04 a 06 de dezembro de 2019 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Visando à competitividade mais eficiente e a um processo operacional de melhor qualidade, as organizações têm recorrido à manutenção de forma estratégica, dada sua importância vital para a relação direta entre eficiência e melhoria de gestão. Considerando as informações apresentadas, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'A manutenção não programada prevê que todas as tarefas sejam realizadas conforme o limitador de tempo estabelecido de forma prévia.',
            'opcao_b' => 'A manutenção corretiva é planejada de forma programada para que se possa realizar o reparo quando houver falha durante um processo.',
            'opcao_c' => 'A manutenção efetiva ocorre de acordo com a manutenção realizada, não se levando em conta o tempo de execução em cada uma das etapas.',
            'opcao_d' => 'A elaboração de um plano de manutenção deverá ser realizada pelo gerente da empresa, visto que ele conhece os colaboradores envolvidos e o ambiente de trabalho em questão.',
            'opcao_e' => 'A manutenção preditiva garante um processo qualificado em sua execução, baseado na supervisão centralizada e na aplicação de sistematização das técnicas de acompanhamento, reduzindo, assim, a necessidade de manutenção corretiva.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Tolerâncias dimensionais são desvios aceitáveis das dimensões nominais e destinam-se a limitar os erros dimensionais na fabricação de peças. A figura a seguir apresenta o desenho de um conjunto com peças montadas com as representações das cotas, tolerâncias e do ajuste adequado: <b>60 H7/p6</b>.</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-xs border border-gray-300 text-center">
                        <thead class="bg-gray-100">
                            <tr><th class="border px-2 py-1" colspan="2">Dim. nominal (mm)</th><th class="border px-2 py-1" colspan="2">H7 (Furo)</th><th class="border px-2 py-1" colspan="2">p6 (Eixo)</th></tr>
                            <tr><th class="border px-2 py-1">acima de</th><th class="border px-2 py-1">até</th><th class="border px-2 py-1">af. inf.</th><th class="border px-2 py-1">af. sup.</th><th class="border px-2 py-1">af. inf.</th><th class="border px-2 py-1">af. sup.</th></tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-2 py-1">50</td><td class="border px-2 py-1">65</td><td class="border px-2 py-1">0</td><td class="border px-2 py-1">+30</td><td class="border px-2 py-1">+41</td><td class="border px-2 py-1">+60</td></tr>
                            <tr><td class="border px-2 py-1">65</td><td class="border px-2 py-1">80</td><td class="border px-2 py-1">0</td><td class="border px-2 py-1">+30</td><td class="border px-2 py-1">+43</td><td class="border px-2 py-1">+62</td></tr>
                        </tbody>
                    </table>
                </div>
                <p class="mb-2 text-right text-sm">ASSOCIAÇÃO BRASILEIRA DE NORMAS TÉCNICAS. <b>NBR 6158</b>: Sistema de tolerâncias e ajustes. Rio de Janeiro: ABNT, 1995.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas informações apresentadas, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'A tolerância da peça hachurada é igual a 0,030 mm.',
            'opcao_b' => 'A interferência mínima verificada no conjunto é 0,002 mm.',
            'opcao_c' => 'O ajuste da figura é descrito como a situação em que a dimensão mínima do furo é maior que a dimensão máxima do eixo.',
            'opcao_d' => 'A peça hachurada pode ter a dimensão verificada no controle de qualidade da produção por um calibrador tampão passa/não passa adequado.',
            'opcao_e' => 'A dimensão real da peça com furo do conjunto representado na figura é igual a 60,15 mm e, portanto, o referido furo está dentro das dimensões da tolerância estipulada.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A galvanização é uma operação de revestimento, obtida por imersão de uma peça de aço em um banho de zinco, por um determinado período de tempo, em que o aço é trazido até a temperatura do banho. Ao ser alcançada essa temperatura, ou próximo dela, forma-se uma camada aderente de liga de zinco-ferro na superfície do aço e outra de zinco puro. Ambas as camadas contribuem para a capacidade de resistência à corrosão e para a vida útil do revestimento aplicado.</p>
                <p class="mb-2 text-right text-sm">GENTIL, V. <b>Corrosão</b>. 7. ed. Rio de Janeiro: LTC, 2022 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A respeito desse tema, e considerando Fe²⁺/Fe = −0,44 V, conclui-se que o metal a ser reduzido na aplicação da galvanização do ferro corresponde a</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Ni²⁺(aq) + 2e⁻ → Ni(s) &nbsp;&nbsp; E⁰ = −0,25 V.',
            'opcao_b' => 'Cd²⁺(aq) + 2e⁻ → Cd(s) &nbsp;&nbsp; E⁰ = −0,40 V.',
            'opcao_c' => 'Zn²⁺(aq) + 2e⁻ → Zn(s) &nbsp;&nbsp; E⁰ = −0,76 V.',
            'opcao_d' => 'Pb²⁺(aq) + 2e⁻ → Pb(s) &nbsp;&nbsp; E⁰ = −0,13 V.',
            'opcao_e' => 'Cu²⁺(aq) + 2e⁻ → Cu(s) &nbsp;&nbsp; E⁰ = −0,34 V.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Atualmente, as bicicletas utilizadas no ciclismo devem ser extremamente leves, para propiciarem melhor desempenho e menor desgaste ao atleta. Nesse sentido, para atender às necessidades dos atletas, diversos materiais foram desenvolvidos em substituição aos materiais metálicos tradicionais (aço e alumínio).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando que, entre os materiais desenvolvidos para o ciclismo, incluem-se os materiais compósitos, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Os materiais compósitos com fibras de carbono são extremamente leves e resistentes, o que permite a redução do peso da bicicleta e do desgaste sofrido pelo atleta.</p>
                <p class="mb-2 pl-6 text-justify">II. Os materiais compósitos com fibras de carbono apresentam baixa densidade, uma vez que são constituídos por fibras de carbono e resina, que são materiais poliméricos.</p>
                <p class="mb-2 pl-6 text-justify">III. Os materiais compósitos com fibras de carbono permitem que as fibras de carbono sejam posicionadas em determinada direção na matriz de resina, o que promove o aumento da resistência mecânica, e a resina, menos resistente, distribui os carregamentos sofridos para as fibras.</p>

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
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere que uma construtora tenha solicitado um projeto de piscina aquecida que apresente ótima eficiência energética, seja ecologicamente correto e economicamente viável. Para atender essas exigências, foi utilizada uma bomba de calor com COP = 4, fornecendo uma taxa de calor de 4 kW para a água da piscina, e cujo compressor consome uma potência de 1 kW.</p>
                <p class="mb-2 text-right text-sm">MORAN, M. J.; SHAPIRO, H. N. <b>Princípios de Termodinâmica para Engenharia</b>. Rio de Janeiro: LTC, 2018 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando que, depois de um determinado tempo, a demanda de aquecimento da piscina passou a ser de 6 kW e que é necessário satisfazer essa nova demanda, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O calor extraído do ar exterior deve ter um aumento de 2 kW.</p>
                <p class="mb-2 pl-6 text-justify">II. A bomba de calor de COP = 4 deve ser substituída por uma de COP = 6.</p>
                <p class="mb-2 pl-6 text-justify">III. O consumo do compressor deve ter aumento de 2 kW.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'II, apenas.',
            'opcao_b' => 'III, apenas.',
            'opcao_c' => 'I e II, apenas.',
            'opcao_d' => 'I e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">O processo de fabricação por laminação é importante para a fabricação de inúmeros componentes, como, por exemplo, terminais elétricos. Tais componentes são fabricados a partir de chapas laminadas de cobre, que partem de tarugos (espessura de 500 mm) provenientes do processo de lingotamento contínuo. Inicialmente, sofrem processos de laminação a quente e, posteriormente, laminação a frio, até ser atingida a espessura necessária (1,2 mm). Os terminais apresentam encruamento e excelente acabamento superficial, resultantes de processos subsequentes de corte e dobramento.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas informações apresentadas, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A laminação a frio promove melhor acabamento do produto, garantindo um bom controle dimensional e boa resistência mecânica, resultantes do encruamento.</p>
                <p class="mb-2 pl-6 text-justify">II. No processo de laminação a quente, os esforços são menores que no processo de laminação a frio, além de se permitir a eliminação de vazios de solidificação e porosidades inerentes aos produtos brutos de fusão.</p>
                <p class="mb-2 pl-6 text-justify">III. A laminação a quente, que diz respeito à execução do processo em temperatura acima da temperatura de recristalização do material, facilita a deformação plástica (maior trabalhabilidade), mas promove elevado encruamento, gerado pelas grandes deformações.</p>

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

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">O atual cenário empresarial se caracteriza por rápidas transformações nos mercados, nas tecnologias e nos desenhos organizacionais. Diante desse panorama, as empresas buscam inovação para crescerem e se manterem nos mercados.</p>
                <p class="mb-2 text-right text-sm">POSSOLLI, G. E. <b>Gestão da inovação e do conhecimento</b>. Curitiba: InterSaberes, 2012 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Acerca do processo de inovação, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A realização de pequena alteração em um produto ou serviço representa uma inovação incremental.</p>
                <p class="mb-2 pl-6 text-justify">II. O desenvolvimento de um novo serviço de internet para acesso a bancos ou sistemas de pagamentos de contas é considerado uma inovação de produto.</p>
                <p class="mb-2 pl-6 text-justify">III. A inovação radical alcança um grau que permite criar mercados e modelos de negócio, apresentando soluções mais eficientes que as existentes até então.</p>
                <p class="mb-2 pl-6 text-justify">IV. Um ecossistema de inovação é um ambiente formado por diferentes agentes (empresas, universidades, institutos de pesquisa, entidades governamentais etc.) comprometidos com o estímulo à inovação por meio da interação e cooperação.</p>

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

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">As falhas contribuem para reduzir a confiabilidade das operações produtivas, e isso pode trazer uma série de implicações: ambientes de trabalho inseguros, perdas de produção, redução da qualidade e, por consequência, menor lucratividade para o negócio. Sendo assim, o planejamento, a organização e o controle da manutenção industrial assumem um papel estratégico na organização.</p>
                <p class="mb-2 text-right text-sm">GREGÓRIO, G. F. P.; SANTOS, D. F.; PRATA, A. B. <b>Engenharia de Manutenção</b>. Porto Alegre: SAGAH, 2018 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A respeito do papel da manutenção industrial e considerando as informações apresentadas, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O defeito é um evento que faz com que o equipamento pare de funcionar.</p>
                <p class="mb-2 pl-6 text-justify">II. A taxa de falhas indica o número médio de falhas de um equipamento em determinado período.</p>
                <p class="mb-2 pl-6 text-justify">III. Na estrutura centralizada, é facilitado o compartilhamento das melhores práticas de trabalho e de experiências entre os membros da equipe de manutenção, pois os profissionais de manutenção ficam alocados em uma oficina central.</p>
                <p class="mb-2 pl-6 text-justify">IV. A manutenção preditiva consiste no monitoramento de um ou mais parâmetros de um equipamento com o objetivo de serem realizadas as ações necessárias antes que a falha aconteça, independentemente da condição do item monitorado.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I.',
            'opcao_b' => 'III.',
            'opcao_c' => 'I e IV.',
            'opcao_d' => 'II e III.',
            'opcao_e' => 'II e IV.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A soldagem a arco submerso é usada em uma larga faixa de aplicações industriais, sendo de grande utilidade em estaleiros, caldeirarias, mineradoras, siderúrgicas e fábricas de perfis e estruturas metálicas. É usada, ainda, na fabricação de vasos de pressão, navios, barcos, vagões e no revestimento ou na recuperação de peças que necessitam de ligas, com propriedades específicas como resistência ao desgaste abrasivo e tenacidade.</p>
                <p class="mb-2 text-justify">Sabe-se que nesse processo de soldagem, o arco elétrico, que aquece e funde o eletrodo nu e a parte do metal de base em contato com o metal de adição, está coberto por uma camada de material granular fusível, conhecido como fluxo.</p>
                <p class="mb-2 text-right text-sm">MARQUES, P. V.; MODENESI, P. J.; BRACARENSE, A. Q. <b>Soldagem: fundamentos e tecnologia</b>. Belo Horizonte: Editora UFMG, 2005 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas sobre o processo de soldagem a arco submerso, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. A alta qualidade da solda e sua alteração da composição química são atribuídas à presença do fluxo no processo, inclusive influenciando nas propriedades mecânicas da união soldada.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. Os fluxos para soldagem a arco submerso são compostos por uma mistura de óxidos e outros minerais, podendo, ainda, conter ferro-ligas com diversas funções de operações.</p>

                <p class="mb-2 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Quando um desenho de engenharia é passado ao setor de produção, ele deve conter todas as informações necessárias para se construir a peça ou sistema, sendo acompanhado de dimensões e notas explicativas que descrevam o tamanho e a localização de todos os componentes.</p>
                <p class="mb-2 text-justify">Considere que o sistema a ser fabricado seja o macaco de parafuso, com destaque para a peça 4, denominada corpo do macaco, apresentada em vista em meio corte com as seguintes cotas: Ø45, Ø44, Ø26, Ø35, M20, Ø62, R2, R70, R140, além das cotas lineares 72, 8, 64 e 30.</p>
                <p class="mb-2 text-right text-sm">LEAKE, J. M. <b>Manual de desenho técnico para engenharia</b>: desenho, modelagem e visualização. 2. ed. Rio de Janeiro: LTC, 2015 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando a figura apresentada e a respeito da comunicação normativa das informações do desenho técnico-mecânico, para fins de produção do conjunto, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O desenho que mostra o dispositivo montado deveria, conforme exigência normativa, apresentar as cotas dimensionais das peças do conjunto.</p>
                <p class="mb-2 pl-6 text-justify">II. De acordo com a hachura representada na vista em meio corte da peça 4, sabe-se que o corpo do macaco deverá ser fabricado em liga de ferro fundido.</p>
                <p class="mb-2 pl-6 text-justify">III. Na mesma vista em meio corte da peça 4, a cotagem da rosca indica que o passo desse perfil é normal.</p>

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
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Com o avanço da tecnologia, os materiais da impressora 3D estão se multiplicando, bem como a necessidade de atender às solicitações específicas de aplicações. O gráfico a seguir ilustra a curva tensão × deformação para três tipos de filamento comuns de impressoras 3D FDM: o ácido poliláctico (PLA), o acrilonitrila-butadieno-estireno (ABS) e o polietileno tereftalato de etileno glicol (PETG).</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300 text-center">
                        <thead class="bg-gray-100">
                            <tr><th class="border px-3 py-1">Material</th><th class="border px-3 py-1">Tensão máx. (MPa)</th><th class="border px-3 py-1">Deformação na ruptura (%)</th></tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1">ABS</td><td class="border px-3 py-1">29</td><td class="border px-3 py-1">3,69</td></tr>
                            <tr><td class="border px-3 py-1">PLA</td><td class="border px-3 py-1">46</td><td class="border px-3 py-1">7,08</td></tr>
                            <tr><td class="border px-3 py-1">PETG</td><td class="border px-3 py-1">32,6</td><td class="border px-3 py-1">7,74</td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Acerca do gráfico apresentado, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O PETG foi o material com a maior tenacidade entre os testados.</p>
                <p class="mb-2 pl-6 text-justify">II. O PLA, entre os materiais testados, é o com maior módulo de elasticidade.</p>
                <p class="mb-2 pl-6 text-justify">III. O ABS, comparado ao PLA, suportou uma carga menor até a ruptura, porém se mostrou um material mais frágil entre os testados.</p>

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

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Suponha que uma empresa especializada em fabricação de peças cortadas a laser tenha contabilizado um desperdício anual de 40% de toda a matéria prima utilizada. Após uma análise do seu processo produtivo, constatou-se que grande parte do resíduo gerado era oriundo de partes não aproveitadas das chapas de aço utilizadas na produção das peças. Decidiu-se, então, que a empresa iria buscar alternativas a fim de melhorar sua sustentabilidade e reduzir o impacto ambiental causado pelo resíduo gerado.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir das informações apresentadas, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A implementação de medidas que possibilitem o reuso da sucata podem eliminar o impacto ambiental relacionado à geração de resíduos sólidos resultantes do processo produtivo.</p>
                <p class="mb-2 pl-6 text-justify">II. A venda, para empresas de reciclagem, do resíduo gerado no processo de corte de chapas de aço pode ser uma solução para a redução do impacto ambiental e do prejuízo por desperdício de material.</p>
                <p class="mb-2 pl-6 text-justify">III. O desperdício de material é inerente ao processo de corte a laser em chapa de aço, mas pode ser minimizado, por exemplo, pelo uso de técnicas que se baseiam em projeto assistido por computador e que maximizem a área de chapa de aço utilizada na produção de peças.</p>

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
            'categoria' => 'Engenharia Mecânica',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Na manutenção dos sistemas mecânicos, é fundamental a análise dos sistemas elétricos, como, por exemplo, do motor de acionamento de sistemas de engrenamento. Caso haja alguma restrição no giro das engrenagens, a potência exigida do motor poderá aumentar, causando danos ao sistema.</p>
                <p class="mb-2 text-justify">A seguir, é apresentado um motor elétrico com sistema de engrenamento, sendo os raios das engrenagens B e C iguais a 96 mm e 60 mm, respectivamente. O eixo AB gira a 480 rpm e a potência original é de 96 kW. Considere π = 3.</p>
                <p class="mb-2 text-right text-sm">BEER, F. P.; JOHNSTON, E. R. <b>Resistência dos Materiais</b>. 3. ed. São Paulo: Makron Book, 1996 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A respeito do motor apresentado na figura e considerando as informações do texto, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O torque necessário para acionamento é de 2000 N·m.</p>
                <p class="mb-2 pl-6 text-justify">II. A velocidade linear no ponto de engrenamento é nula.</p>
                <p class="mb-2 pl-6 text-justify">III. A velocidade angular da engrenagem C é de 300 rpm.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'II, apenas.',
            'opcao_c' => 'I e III, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'A',
        ]);
    }
}
