<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class Questoes_Engenharia_Mecanica_2019 extends Seeder
{
    public function run(): void
    {
        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">As figuras a seguir ilustram a perspectiva e as vistas (lateral e em corte) de um sistema mecânico chamado calço "V" regulável, utilizado para posicionamento de peças para medição. As vistas foram geradas automaticamente por um sistema CAD.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando os desenhos apresentados nas figuras, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A figura 1 mostra uma perspectiva isométrica caracterizada por ser uma projeção ortográfica que permite uma visualização tridimensional do sistema.</p>
                <p class="mb-2 pl-6 text-justify">II. A figura 2a mostra uma vista lateral esquerda do sistema e o seu posicionamento está correto de acordo com o sistema de projeção em terceiro diedro.</p>
                <p class="mb-2 pl-6 text-justify">III. A figura 2b mostra um corte total do sistema e a representação em corte do parafuso é recomendada por norma técnica.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'GORDON, N.; FERREIRA, J. <strong>Telecurso 2000 Profissionalizante - elementos de máquinas.</strong> vol. 49. Rio de Janeiro: Fundação Roberto Marinho, 2000 (adaptado).',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'III, apenas.',
            'opcao_c' => 'I e II, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'ANULADA',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">As diretivas de restrições para uso de certas substâncias perigosas provocaram o desenvolvimento de ligas de soldagem de componentes eletrônicos que não contivessem chumbo (Pb) em sua composição, como, por exemplo, a liga de estanho (Sn) e de bismuto (Bi), cujo diagrama de fases é apresentado na questão. Considere que esses materiais apresentam, entre outras características, temperatura de fusão relativamente baixa.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas informações e no diagrama apresentados, a composição mássica da liga Sn-Bi mais adequada para a soldagem de componentes eletrônicos é de</p>
            ',
            'referencia' => 'CALLISTER, JR.; W. D.; RETHWISCH, D. G. <strong>Ciência e engenharia de materiais: uma introdução.</strong> 9. ed. Rio de Janeiro: LTC, 2018 (adaptado).',
            'opcao_a' => '100% de Sn e 0% de Bi.',
            'opcao_b' => '79% de Sn e 21% de Bi.',
            'opcao_c' => '60% de Sn e 40% de Bi.',
            'opcao_d' => '43% de Sn e 57% de Bi.',
            'opcao_e' => '0% de Sn e 100% de Bi.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere a figura a seguir, em que se apresenta a leitura de um micrômetro com escala métrica, no qual cada rotação do fuso representa 0,5 mm de movimento linear; conectado a esse fuso, é colocado um colar (tambor) com 50 divisões.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas informações e no micrômetro representado na figura, assinale a opção correta.</p>
            ',
            'referencia' => 'Disponível em: &lt;https://www.stefanelli.eng.br&gt;. Acesso em: 18 jun. 2019 (adaptado).',
            'opcao_a' => 'A resolução desse instrumento de medida é igual a 0,01 mm.',
            'opcao_b' => 'O deslocamento do colar nesse instrumento é superior a 14 mm na escala fixa.',
            'opcao_c' => 'A parte da medida do micrômetro atribuída à leitura da escala do tambor é igual a 0,039 mm.',
            'opcao_d' => 'A escala do nônio amplia em 1 000 vezes a precisão de um micrômetro similar que possui apenas escala fixa e a escala do tambor.',
            'opcao_e' => 'Os comprimentos lineares que exijam tolerâncias de milésimos de milímetro são medidos adequadamente por esse instrumento.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A energia eólica, abundante, renovável, limpa e disponível em muitos lugares, é produzida por meio de aerogeradores, nos quais a força do vento é captada por pás de uma turbina que aciona um gerador elétrico. A quantidade de energia convertida é função da densidade do ar, da área coberta pela rotação das pás e da velocidade do vento. Para que a energia eólica seja considerada tecnicamente aproveitável, é necessário que sua densidade de potência seja maior ou igual a 500 W/m² a uma altura de 50 m, o que requer uma velocidade mínima do vento de 7 a 8 m/s ao nível do solo.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir dessas informações e considerando que a densidade de potência disponível no vento seja dada pela equação DP = &frac12;&rho;V³, em que &rho; = 1,23 kg/m³ é a densidade do ar e V é a velocidade do vento na altura das pás, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Com uma velocidade do vento na altura das pás de 7 m/s, a energia eólica gerada será considerada tecnicamente aproveitável.</p>
                <p class="mb-2 pl-6 text-justify">II. A densidade de potência eólica será reduzida nos aerogeradores se eles estiverem a uma altura superior a 50 m.</p>
                <p class="mb-2 pl-6 text-justify">III. A potência disponível será maior se houver aumento da área coberta pela rotação das pás.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'Disponível em: &lt;http://www.brasilengenharia.com&gt;. Acesso em: 14 jun. 2019 (adaptado).',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'III, apenas.',
            'opcao_c' => 'I e II, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Uma equipe de trabalho decide adquirir uma garrafa térmica para armazenar seu café ao longo do dia e seus membros precisam entrar em acordo quanto ao modelo de garrafa a ser escolhido. Para tanto, depois de uma pesquisa, um deles adquiriu uma garrafa cujo folheto de instruções apresentava a imagem e as características com as seguintes partes: vácuo, superfícies espelhadas, tampa de material isolante térmico, revestimento externo protetor e apoio de material isolante térmico.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas e com relação às características da garrafa térmica selecionada, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O material isolante térmico da tampa e do apoio é essencial para aumentar a resistência térmica de condução e convecção.</p>
                <p class="mb-2 pl-6 text-justify">II. O vácuo é necessário para reduzir a troca de calor por condução e convecção entre o café e o ambiente externo.</p>
                <p class="mb-2 pl-6 text-justify">III. As superfícies espelhadas possuem a função de inibir a troca de calor por radiação.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'Disponível em: &lt;http://www.quintaldafisica.blogspot.com&gt;. Acesso em: 19 jun. 2019 (adaptado).',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'II, apenas.',
            'opcao_c' => 'I e III, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Suponha o projeto do chassi de um caminhão constituído por duas vigas prismáticas, longitudinais, biapoiadas sobre dois eixos transversais que servirá para transportar uma carga de 7,2 toneladas uniformemente distribuída na carroceria, em que se desconsidera o peso da cabine. Sabe-se que o carregamento é igualmente distribuído entre as vigas, que a distância entre os eixos é de 7 metros e que a seção transversal de cada viga é retangular, com 100 mm de largura e 300 mm de altura (Considere g = 10 m/s²).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nessa situação, o momento fletor máximo em cada viga e a tensão normal associada são, respectivamente,</p>
            ',
            'referencia' => '',
            'opcao_a' => '31,5 kN.m e 21 MPa.',
            'opcao_b' => '31,5 kN.m e 189 MPa.',
            'opcao_c' => '31,5 N.m e 21 kPa.',
            'opcao_d' => '63,0 kN.m e 42 MPa.',
            'opcao_e' => '63,0 N.m e 189 kPa.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A simulação numérica do movimento de um fluido é realizada utilizando-se as equações de conservação de massa, energia, quantidade de movimento, entre outras. Considere um estudo que utiliza simulação computacional para analisar o escoamento de um fluido ao redor de um automóvel.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, pode-se afirmar que, em regime</p>
            ',
            'referencia' => '',
            'opcao_a' => 'transiente, com incremento grande de tempo, é possível capturar oscilações de alta frequência.',
            'opcao_b' => 'permanente, com incremento variado de tempo, é possível capturar oscilações de todas as faixas de frequência.',
            'opcao_c' => 'permanente, com incremento pequeno de tempo, é possível capturar oscilações de alta frequência.',
            'opcao_d' => 'permanente, com incremento grande de tempo, é possível capturar oscilações de baixa frequência.',
            'opcao_e' => 'transiente, com incremento pequeno de tempo, é possível capturar oscilações de alta frequência.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere a figura a seguir que ilustra um mesmo corpo rígido sujeito a forças e momentos em duas situações (a) e (b), onde a situação (a) apresenta forças F1, F2, F3 e F4 aplicadas em diferentes pontos e momentos M1 e M2, e a situação (b) apresenta uma força resultante F<sub>R</sub> e um momento resultante M<sub>R0</sub> aplicados no ponto O.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas informações apresentadas, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. Se a força F<sub>R</sub> for igual à somatória vetorial F1 + F2 + F3 + F4 e M<sub>R0</sub> for igual à somatória vetorial M1 + M2 adicionada aos momentos das forças F1, F2, F3 e F4 em relação ao ponto O, os sistemas (a) e (b) serão considerados equivalentes.</p>

                <p class="mb-2 text-justify text-center font-semibold">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. O momento das forças depende da escolha do ponto de referência.</p>

                <p class="mb-2 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => 'BEER, F. et al. <strong>Mecânica vetorial para engenheiros: estática.</strong> 11. ed. Porto Alegre: AMGH, 2019 (adaptado).',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A modelagem adequada de sistemas mecânicos é de fundamental importância para que as respostas das simulações computacionais sejam condizentes com as respostas dos sistemas físicos. Na figura a seguir, m é a massa; k1, k2 e k3 são os coeficientes de rigidez; e c1, c2 e c3 são os coeficientes de amortecimento. Considere k1 = k2 = k3 = k e c1 = c2 = c3 = c.</p>

                <p class="mb-2 text-justify">O sistema consiste em uma massa m conectada a três molas e três amortecedores: k1 e c1 em paralelo na vertical, k2 e c2 em série com k3 e c3 horizontalmente.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir das informações apresentadas no texto e na figura, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Considerando-se que o deslocamento da massa m em função do tempo seja x, o modelo matemático utilizado em uma simulação computacional será m&ẍ; + (3/2)c&ẋ; + (3k/2)x = 0.</p>
                <p class="mb-2 pl-6 text-justify">II. A frequência angular natural do sistema é &omega;<sub>n</sub> = &radic;(3k/2m).</p>
                <p class="mb-2 pl-6 text-justify">III. Caso o sistema da figura seja excitado com uma frequência igual à natural, a amplitude tende para o infinito com quaisquer valores de k1, k2, k3, c1, c2 e c3.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'BALACHANDRAN, B.; MAGRAB, B. E. <strong>Vibrações Mecânicas.</strong> 4. ed. São Paulo: Cengage Learning, 2011 (adaptado).',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'II, apenas.',
            'opcao_c' => 'I e II apenas.',
            'opcao_d' => 'I e III apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Os combustíveis fósseis, particularmente os derivados de petróleo, têm larga aplicação na sociedade moderna, sendo utilizados para a alimentação de motores a combustão interna de veículos, de queimadores a gás e de fornos industriais. De sua queima, resulta o fenômeno conhecido como chuva ácida, que se caracteriza pelo reduzido valor do seu pH (&lt; 4,5) e tem como principais consequências a alteração química das águas dos rios e lagos, a degradação de monumentos históricos construídos a partir de carbonatos (mármore) e o comprometimento da vida útil de estruturas metálicas e de equipamentos.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, é correto afirmar que, a partir da combustão do óleo combustível derivado de petróleo, favorecem a ocorrência da chuva ácida os gases</p>
            ',
            'referencia' => '',
            'opcao_a' => 'CO2 e N2.',
            'opcao_b' => 'C2H5 e N2.',
            'opcao_c' => 'SO2 e CH4.',
            'opcao_d' => 'CO2 e SO2.',
            'opcao_e' => 'CH4 e O2.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Em relação aos impactos ambientais decorrentes do funcionamento de barragens de rejeito, sabe-se que a alteração</p>

                <ul class="list-disc pl-6 mb-2 text-justify">
                    <li class="mb-1">da paisagem está relacionada, atualmente, à presença da barragem desativada, que, devido à praia de rejeito e à vegetação com baixa densidade, continua causando impacto visual;</li>
                    <li class="mb-1">do metabolismo vegetal, devido à deposição de material particulado na superfície das folhas, assim como nas demais fases desse processo, é um impacto negativo e indireto, consequência da alteração da qualidade do ar;</li>
                    <li class="mb-1">na dinâmica de ecossistemas aquáticos pode ser considerada um impacto indireto da alteração tanto da qualidade da água quanto da alteração da dinâmica hídrica superficial;</li>
                    <li class="mb-1">da dinâmica hídrica superficial e subterrânea é um impacto que persiste desde a construção da barragem, uma vez que esta modifica permanentemente o regime de escoamento superficial de água, podendo afetar negativamente a vazão dos cursos d\'água a jusante e a recarga de aquíferos;</li>
                    <li class="mb-1">da qualidade do ar e da qualidade da água ocorre já na fase de construção da barragem e permanece devido à presença das praias de rejeito.</li>
                </ul>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base no texto, é correto afirmar que os impactos ambientais descritos afetam, respectivamente, os meios</p>
            ',
            'referencia' => 'ANDRADE, L. C. R. Barragens de rejeitos da mineração de ferro: panorama geral brasileiro e avaliação de impactos associados. <strong>Revista de Ciências Exatas e Tecnologia.</strong> v. 13, n. 13, 2018 (adaptado).',
            'opcao_a' => 'físico, biológico, biológico, físico e físico.',
            'opcao_b' => 'biológico, biológico, físico, físico e físico.',
            'opcao_c' => 'físico, físico, biológico, biológico e físico.',
            'opcao_d' => 'físico, biológico, físico, biológico e físico.',
            'opcao_e' => 'biológico, físico, físico, físico e biológico.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Um trocador de calor é utilizado para aquecer a água de uma linha industrial por meio do aproveitamento da energia do gás de exaustão de uma central termelétrica. O gás de exaustão entra pela seção (1) a 150 ºC e sai pela seção (2) a 50 ºC, a uma vazão de 2,1 kg/s. Um sistema de bombeamento promove a passagem da água pelo tubo (3 – 4) a uma vazão de 0,8 kg/s. A temperatura de entrada da água na seção (3) é de 25 ºC. Em virtude das ineficiências deste equipamento, apenas 80% do calor disponibilizado internamente pelo gás de exaustão é aproveitado pela água no processo de aquecimento.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nessa situação, considerando-se que o gás de exaustão pode ser modelado como um gás ideal, com calor específico, à pressão constante, de 1,1 kJ/(kg ºC) e que o calor específico da água seja de 4,2 kJ/(kg ºC), qual a temperatura da água na saída do equipamento?</p>
            ',
            'referencia' => 'ÇENGEL, Y. A.; BOLES, M. A. <strong>Termodinâmica.</strong> 7. ed. Porto Alegre: AMGH, 2013 (adaptado).',
            'opcao_a' => '55,0 ºC.',
            'opcao_b' => '68,8 ºC.',
            'opcao_c' => '80,0 ºC.',
            'opcao_d' => '93,8 ºC.',
            'opcao_e' => '125,0 ºC.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A usinagem é um dos mais importantes processos de manufatura, podendo ser aplicada a uma grande variedade de materiais e formas geométricas. É frequentemente usada como processo complementar, ou de acabamento, quando o material foi produzido por fundição, conformação plástica ou metalurgia do pó. Na usinagem, uma ferramenta de corte é usada para remover excesso de material de um sólido, de tal maneira que o material remanescente tenha a forma da peça desejada. A usinagem pode ser dividida em processos de corte, que geralmente envolvem ferramentas mono e multicortantes, processos abrasivos e processos avançados de usinagem.</p>

                <p class="mb-2 text-justify">A figura a seguir ilustra cinco processos básicos de usinagem, identificados pelas letras (a) a (e), representando diferentes combinações de peça, ferramenta e movimentos.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir da figura apresentada e considerando as características dos processos de usinagem, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. As figuras (a), (b) e (c) representam, respectivamente, os processos de torneamento, fresamento de topo e aplainamento.</p>
                <p class="mb-2 pl-6 text-justify">II. As figuras (d) e (e) representam, respectivamente, os processos de furação e fresamento paralelo.</p>
                <p class="mb-2 pl-6 text-justify">III. O tempo total de usinagem por peça envolve o tempo de corte, o tempo improdutivo (carga, descarga, preparação das peças e posicionamento da ferramenta) e o tempo de troca de ferramentas.</p>
                <p class="mb-2 pl-6 text-justify">IV. O custo da hora-máquina envolve a depreciação, as despesas com a manutenção, a área ocupada, a quantidade de horas em operação e as despesas com os operadores.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => 'CASTRO, W. B.; KIMINAMI, C. S.; OLIVEIRA, M. F. <strong>Introdução aos processos de fabricação de produtos metálicos.</strong> São Paulo: Blucher, 2013 (adaptado).',
            'opcao_a' => 'I.',
            'opcao_b' => 'III.',
            'opcao_c' => 'I e II.',
            'opcao_d' => 'II e IV.',
            'opcao_e' => 'III e IV.',
            'alternativa_correta' => 'ANULADA',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">No gráfico a seguir, que mostra um diagrama de tensão média versus tensão alternada com os envelopes dos principais critérios de falha para carregamento flutuante, observam-se as seguintes grandezas: Sy = resistência ao escoamento; Sut = resistência última à tração; Sa = resistência alternante; Sm = resistência média; Se = limite de resistência à fadiga corrigido.</p>

                <p class="mb-2 text-justify">O diagrama apresenta as linhas de Soderberg, Goodman modificado, ASME-elíptico, Gerber e Langer de escoamento.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considere o dimensionamento de um eixo de transmissão de máquina-ferramenta sujeito a flexo-torção com fadiga de alto ciclo. Nessa situação, para um projeto seguro e otimizado, com vistas à maior relação potência/peso possível, deve-se utilizar o critério</p>
            ',
            'referencia' => 'BUDYNAS, R. G.; NISBETT, J. K. <strong>Elementos de máquinas de Shigley.</strong> 10. ed. Porto Alegre: AMGH, 2016 (adaptado).',
            'opcao_a' => 'de Langer de escoamento.',
            'opcao_b' => 'de Goodman modificado.',
            'opcao_c' => 'da ASME elíptico.',
            'opcao_d' => 'de Gerber.',
            'opcao_e' => 'de Soderberg.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Suponha que quatro robôs A, B, C e D tenham sido testados para realizar uma tarefa de medição de peças, que a diferença entre a medida real da peça e a encontrada por cada robô é &mu;, e que as distribuições normais dessas diferenças são apresentadas na figura a seguir. O robô A apresenta distribuição estreita centrada em 0; B, distribuição estreita centrada em ~1; C, distribuição larga centrada em ~2; e D, distribuição muito larga centrada em ~-2.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas informações apresentadas, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. O robô D não deve ser utilizado para realizar a tarefa de medição.</p>

                <p class="mb-2 text-justify text-center font-semibold">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. O desvio padrão do robô D é maior que o desvio padrão do robô B.</p>

                <p class="mb-2 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Ao se projetar sistemas vibratórios, devem ser considerados vários aspectos, principalmente os relacionados às massas e aos coeficientes de rigidez, pois tais parâmetros influenciam diretamente nas frequências naturais desses sistemas. Na figura a seguir, representa-se a resposta no tempo de um sistema vibratório com um grau de liberdade, mostrando amplitudes decrescentes de 8, 6 e 4 mm ao longo do tempo.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir das informações apresentadas no texto e na figura, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O amortecimento existente faz com que a frequência natural do sistema diminua com o tempo.</p>
                <p class="mb-2 pl-6 text-justify">II. Se a massa diminuir quatro vezes o seu valor, a frequência natural do sistema aumentará duas vezes.</p>
                <p class="mb-2 pl-6 text-justify">III. O sistema está em regime permanente, com frequência de excitação de 5 Hz.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'RAO, S. <strong>Vibrações mecânicas.</strong> 4. ed. São Paulo: Pearson Prentice Hall, 2008 (adaptado).',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'II, apenas.',
            'opcao_c' => 'I e III, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A tenacidade nos materiais metálicos, cerâmicos e em alguns polímeros é influenciada pela temperatura de trabalho, portanto, existe um valor de temperatura (ou um intervalo de temperatura) acima do qual o comportamento do material é predominantemente dúctil e abaixo do qual é predominantemente frágil. Essa temperatura é definida como temperatura de transição dúctil-frágil. Para fins de projeto, o conhecimento da temperatura de transição é essencial, pois a partir dela pode-se planejar as condições de serviço de forma a não ocorrer fratura frágil do componente projetado. Essa temperatura é determinada durante ensaios de impacto.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações e os dados apresentados, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. Os materiais com estrutura CCC apresentam uma transição dúctil-frágil nítida com a redução da temperatura.</p>

                <p class="mb-2 text-justify text-center font-semibold">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. As estruturas CCC possuem como característica a presença de muitos planos de escorregamento disponíveis.</p>

                <p class="mb-2 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => 'GARCIA, A., SPIM, J. A., SANTOS, C. A. <strong>Ensaios dos materiais.</strong> 2. ed. Rio de Janeiro: LTC, 2012 (adaptado).',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Usinas hidrelétricas podem ser consideradas uma fonte limpa para a produção de energia elétrica, porém, causam impacto ambiental devido à necessidade de construção de grandes reservatórios de água. Uma forma de minimizar o impacto ambiental é selecionar corretamente o tipo de equipamento a partir da altura da queda de água e da vazão disponível no local de instalação. Um dos parâmetros iniciais utilizados para a seleção de uma turbina é a velocidade específica. O gráfico apresentado mostra valores típicos da velocidade específica para diferentes tipos de turbina (Kaplan, Dériaz e Francis), relacionando-os à altura de queda disponível.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Conhecendo-se a altura de queda e a vazão, pode-se determinar a eficiência energética máxima da turbina.</p>
                <p class="mb-2 pl-6 text-justify">II. Conhecendo-se a velocidade específica, calcula-se a rotação de trabalho esperada da turbina para uma determinada altura de queda e vazão.</p>
                <p class="mb-2 pl-6 text-justify">III. Sabendo-se a velocidade específica, seleciona-se a turbina para que esta funcione próxima ao ponto de eficiência máxima.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'SCHREIBER, G. P. <strong>Usinas hidrelétricas.</strong> São Paulo: Edgard Blucher, 1978 (adaptado).',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'II, apenas.',
            'opcao_c' => 'I e III, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Uma casa com paredes de concreto recebe uma camada de isolamento térmico em seu exterior para manter o ambiente interno aquecido, sendo a madeira o material isolante. A figura representa o corte de uma parede da casa, com temperatura interna (T<sub>pi</sub>), temperatura da superfície externa da camada de madeira T<sub>pe</sub> = 10 °C, temperatura exterior T<sub>exterior</sub> = 2 °C, espessura da madeira L<sub>iso</sub> = 0,02 m e espessura do concreto L<sub>c</sub> = 0,1 m.</p>

                <p class="mb-2 text-justify">A taxa de transferência de calor por convecção entre a superfície externa e o meio externo é dada por: Q<sub>c</sub> = h·A·(T<sub>pe</sub> − T<sub>exterior</sub>). A taxa de transferência por condução na parede é dada por: Q<sub>p</sub> = (T<sub>pi</sub> − T<sub>pe</sub>) / (L<sub>c</sub>/(k<sub>c</sub>·A) + L<sub>iso</sub>/(k<sub>iso</sub>·A)).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nessa situação, sabendo-se que as condutividades térmicas do concreto e da madeira são, respectivamente, iguais a 2 W/(m.K) e 0,08 W/(m.K), que o coeficiente de troca de calor por convecção no meio externo é de 4 W/(m².K) e que a área da parede é de 2 m², é correto afirmar que a temperatura da superfície interna da parede de concreto (T<sub>pi</sub>) é de</p>
            ',
            'referencia' => '',
            'opcao_a' => '18,0 °C.',
            'opcao_b' => '18,8 °C.',
            'opcao_c' => '19,6 °C.',
            'opcao_d' => '20,4 °C.',
            'opcao_e' => '21,2 °C.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O desenho de um componente mecânico que deve ser fabricado em um torno CNC é apresentado a seguir. A peça é fornecida forjada e maciça com sobremetal de 0,5 mm. Sabe-se que, em uma etapa anterior, a peça já foi faceada até o comprimento final e torneada no diâmetro externo de 65 mm para gerar a superfície de fixação na castanha.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir das informações apresentadas no texto e no desenho, as operações necessárias para a fabricação da peça, na ordem sequencial correta, são</p>
            ',
            'referencia' => '',
            'opcao_a' => 'mandrilamento do perfil interno, furação, acabamento do perfil externo, sangramento radial externo e rosqueamento externo.',
            'opcao_b' => 'mandrilamento do perfil interno, acabamento do perfil externo, furação, sangramento radial externo e rosqueamento externo.',
            'opcao_c' => 'furação, mandrilamento do perfil interno, acabamento do perfil externo, sangramento radial externo e rosqueamento externo.',
            'opcao_d' => 'furação, mandrilamento do perfil interno, acabamento do perfil externo, rosqueamento externo e sangramento radial externo.',
            'opcao_e' => 'acabamento do perfil externo, rosqueamento externo, sangramento radial externo, furação e mandrilamento do perfil interno.',
            'alternativa_correta' => 'ANULADA',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Nos últimos anos, o controle das estações de tratamento de água e esgoto passou a ser obrigatório, pois contribui tanto para o aumento da sua produtividade (maior eficiência) quanto para a redução do volume dos rejeitos produzidos, específicos para cada tipo de processo. Para tal controle, é necessária a utilização de diversos tipos de sensores, especificamente adequados à grandeza a ser monitorada.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Os tipos de sensores que permitem a realização de medições das grandezas pressão, temperatura, vazão e nível são, respectivamente,</p>
            ',
            'referencia' => '',
            'opcao_a' => 'diafragma, bimetal, placa de orifício e flutuador.',
            'opcao_b' => 'magnético, termopar, radar e flutuador.',
            'opcao_c' => 'bourdon, capacitivo, ultrassom e turbina.',
            'opcao_d' => 'diafragma, termopar, radar e placa de orifício.',
            'opcao_e' => 'bourdon, capacitivo, placa de orifício e turbina.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O monitoramento, o acompanhamento e a inspeção de equipamentos e sistemas em pleno funcionamento de forma contínua compõem a chamada manutenção preditiva, que permite determinar o tempo adequado para a realização de intervenção de reparo ou substituição. Esse procedimento leva à redução das ações da denominada manutenção corretiva, diminuindo a necessidade de paradas nas atividades e garantindo a confiabilidade dos equipamentos.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando-se esse tema, as duas técnicas de inspeção usualmente aplicadas na manutenção preditiva de vasos de pressão são</p>
            ',
            'referencia' => '',
            'opcao_a' => 'técnica de ultrassom e técnica de aplicação de partícula magnética.',
            'opcao_b' => 'técnica de ultrassom e técnica de termografia infravermelha.',
            'opcao_c' => 'técnica de medição de espessura e técnica de aplicação de líquido penetrante.',
            'opcao_d' => 'técnica de medição de espessura e técnica de aplicação de partícula magnética.',
            'opcao_e' => 'técnica de termografia infravermelha e técnica de aplicação de líquido penetrante.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O CLP, ou controlador lógico programável, é um suporte eletrônico digital que armazena instruções de funções específicas, como lógica, sequenciamento, temporização, contagem e aritmética, para controlar, por meio de módulos de entradas e saídas, vários tipos de máquinas ou processos. Esse dispositivo opera com variáveis de entrada (sinais externos) e variáveis de saída (dispositivos controlados), que podem ser programados pela linguagem de programação Ladder. Sabe-se, ainda, que, no CLP, o contato pode ser normalmente aberto (NA) ou normalmente fechado (NF) e que o principal componente de saída é a bobina.</p>

                <p class="mb-2 text-justify">O diagrama Ladder apresentado contém duas linhas: a primeira com entradas I1 (NA) e I2 (NA) em série, acionando a bobina de saída Q1; a segunda com entrada I3 (NA) em paralelo com I4 (NF), acionando a bobina de saída Q2.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando essas informações e o diagrama de programação Ladder apresentado na figura, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. A saída Q1 estará acionada se as entradas I1 e I2 estiverem acionadas.</p>

                <p class="mb-2 text-justify text-center font-semibold">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. A saída Q2 não estará acionada se a entrada I4 estiver acionada.</p>

                <p class="mb-2 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => 'SILVEIRA, P. R.; SANTOS, W. E. <strong>Automação e controle discreto.</strong> 2. ed. São Paulo: Érica, 2004 (adaptado).',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Na gestão da capacidade de produção de uma empresa há três estratégias disponíveis para lidar com variações de demanda do mercado: manter o nível de produção constante o ano todo; ajustar a capacidade para atender, da maneira mais próxima possível, à demanda; tentar mudar a demanda visando ajustá-la à capacidade.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com relação ao planejamento da capacidade de produção de uma empresa, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A política de capacidade de produção constante deve prever a formação de estoques nos períodos de baixa demanda visando ao seu atendimento nos períodos em que ela esteja acima da capacidade.</p>
                <p class="mb-2 pl-6 text-justify">II. A política de ajuste da demanda é uma estratégia muito utilizada por setores como o da aviação civil, que ajusta os preços das passagens de acordo com a taxa de ocupação dos voos e a proximidade das viagens.</p>
                <p class="mb-2 pl-6 text-justify">III. Mesclando-se as três estratégias mencionadas, busca-se melhorar o desempenho de produtividade e o faturamento da empresa, sem deixar de atender à demanda.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'SLACK, S.; SLACK, J. <strong>Administração da produção.</strong> 2. ed., São Paulo: Atlas, 2008 (adaptado).',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'III, apenas.',
            'opcao_c' => 'I e II, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A figura a seguir representa um circuito elétrico contendo um gerador ideal (G) de tensão 9 V, três lâmpadas idênticas (L1, L2 e L3) de resistências elétricas de 30 &Omega; cada uma, um amperímetro ideal (A), um voltímetro ideal (V) e dois interruptores ideais (S1 e S2). L1 está em série com o circuito principal; L2 e L3 estão em paralelo entre si, controladas pelos interruptores S1 e S2 respectivamente.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base no circuito elétrico apresentado, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Com o interruptor S1 fechado e o S2 aberto, apenas duas lâmpadas acendem.</p>
                <p class="mb-2 pl-6 text-justify">II. Com ambos os interruptores fechados, o brilho da lâmpada L1 aumenta se comparado à situação em que S1 esteja fechado e S2 esteja aberto.</p>
                <p class="mb-2 pl-6 text-justify">III. Com ambos os interruptores fechados, a intensidade de corrente elétrica medida pelo amperímetro será de 0,15 A.</p>
                <p class="mb-2 pl-6 text-justify">IV. Com ambos os interruptores fechados, a diferença de potencial na lâmpada L3 será de 3 V.</p>

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
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere o gráfico a seguir, que representa o grau de comprometimento da definição dos custos de um produto com relação às etapas do seu desenvolvimento. O gráfico mostra que 80% a 90% dos custos são comprometidos durante a fase de desenvolvimento, enquanto o custo incorrido cresce principalmente na fase de produção, deixando margem reduzida para redução de custos nessa fase.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base no gráfico apresentado, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. A definição dos componentes a serem fabricados e os respectivos processos de fabricação estabelecem as exigências de capacidade produtiva, bem como a qualidade necessária aos mesmos.</p>

                <p class="mb-2 text-justify text-center font-semibold">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. A fase inicial do desenvolvimento de um produto é uma fase crítica com relação às decisões de projeto que implicam no comprometimento dos gastos em todas as etapas do ciclo de vida do produto.</p>

                <p class="mb-2 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => 'ROZENFELD, H. et al. <strong>Gestão de desenvolvimento de produtos: uma referência para melhoria de processo.</strong> São Paulo: Saraiva, 2006 (adaptado).',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Mecânica',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Os trens de engrenagens compostos se caracterizam por possuírem duas engrenagens no mesmo eixo e, consequentemente, com a mesma rotação. A relação de transmissão entre a rotação de saída e a de entrada em um par de engrenagens em contato não deve exceder 10:1. Para um ângulo de pressão de 25°, o número mínimo de dentes que o pinhão deve conter, para se evitar o fenômeno indesejável de interferência, é 12.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas e a teoria de engrenamento, assinale a opção que representa corretamente o menor número de dentes das engrenagens de um trem composto por dois estágios, com uma redução de 28:1, em que N2 representa o número de dentes do pinhão de entrada.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'N2 = 12 e N3 = 336.',
            'opcao_b' => 'N2 = 12, N3 = 84 e N4 = 336.',
            'opcao_c' => 'N2 = 12, N3 = 48, N4 = 12 e N5 = 84.',
            'opcao_d' => 'N2 = 12, N3 = 42, N4 = 15 e N5 = 150.',
            'opcao_e' => 'N2 = 12, N3 = 72 e N4 = 336.',
            'alternativa_correta' => 'C',
        ]);
    }
}
