<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class Questoes_Engenharia_Civil_2023 extends Seeder
{
    public function run(): void
    {
        // =====================================================================
        // Engenharia Civil – Questões 10 a 38
        // =====================================================================

        // BOTAR IMAGENS E RETIRAR TEXTOS DESCRITIVOS DO CLAUDE

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Em uma instalação elétrica, os dispositivos de proteção desempenham um papel importante. São eles que asseguram um funcionamento seguro das instalações. Como os riscos existentes são de natureza, de magnitudes e de resultados diversos, existem diferentes dispositivos que desempenham funções específicas. Entre eles, encontram-se os fusíveis, os disjuntores magnéticos e os termomagnéticos, os relés metálicos ou bimetálicos, os disjuntores DR (disjuntor diferencial residual), os para-raios e os relés de sobretensão. Uma classificação usual desses dispositivos é feita com base no tipo de proteção à qual são destinados.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com relação a esse assunto, caso se queira assegurar a proteção de pessoas contra o choque acidental durante a instalação elétrica, o dispositivo que se recomenda é o</p>
            ',
            'referencia' => '',
            'opcao_a' => 'fusível.',
            'opcao_b' => 'para-raios.',
            'opcao_c' => 'disjuntor DR.',
            'opcao_d' => 'relé de sobretensão.',
            'opcao_e' => 'disjuntor termomagnético.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A beleza da orla brasileira com suas jangadas, piscinas naturais e coqueirais contrasta com a falta de saneamento básico. É comum, nas praias brasileiras, o surgimento das chamadas línguas negras (manchas de esgoto no encontro com as águas do mar) resultante da falta de tratamento sanitário.</p>
                <p class="mb-2 text-justify">A solução para esse problema passa pela implantação de sistemas de esgotamento sanitário que incluam a coleta, o transporte, o tratamento e a disposição final dos esgotos domésticos. Nesse contexto, as estações de tratamento de esgoto (ETEs) são formadas por um conjunto intercalado de unidades integradas de tratamento, desempenhando, cada uma delas, funções específicas.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas informações apresentadas, assinale a opção que corresponde corretamente à sequência de unidades que constituem uma ETE.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Gradeamento, lagoas aeróbias, tanques de lodo ativado, lagoas anaeróbias e biodigestores.',
            'opcao_b' => 'Medidor de vazão, câmara de coagulação, tanque de floculação, decantadores, filtros de antracito e câmara de cloração.',
            'opcao_c' => 'Calha parshall, caixa de areia, tanques de lodo ativado e lagoas aeróbias, com encaminhamento dos lodos para aterros sanitários.',
            'opcao_d' => 'Gradeamento, caixa de areia, decantadores primários, tanques de lodo ativados e decantadores secundários, com encaminhamento do lodo primário e secundário para leitos de secagem.',
            'opcao_e' => 'Calha parshall, coagulação, tanques de floculação, decantadores e filtros ascendentes, com encaminhamento dos efluentes de lavagem dos filtros para redes de drenagem de águas pluviais.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A fim de promover o controle de enchentes ao longo de uma das principais avenidas de um município, será construído um canal de drenagem retangular cuja declividade de fundo (I<sub>o</sub>) é de 0,04 m/m e cujo coeficiente de rugosidade de Manning (n) é de 0,02, com largura de base de 4 m e altura da lâmina de água de 2 m.</p>
                <p class="mb-2 text-justify">Sabe-se que a fórmula de Manning constitui a principal base de cálculo para os problemas de engenharia relacionados a escoamentos de superfície livre e é dada por:</p>
                <p class="mb-2 text-center font-mono">Q = (1/n) · A · R<sub>h</sub><sup>2/3</sup> · I<sub>o</sub><sup>1/2</sup></p>
                <p class="mb-2 text-justify">em que: Q é a vazão do canal (m³/s); A é a área molhada (m²) — área da seção reta, normal à direção do fluxo; R<sub>h</sub> é o raio hidráulico (m) — relação entre a área molhada e o perímetro molhado; I<sub>o</sub> é a declividade de fundo ou declividade longitudinal do canal (m/m); e n é o coeficiente de rugosidade de Manning para o material de revestimento do canal.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Na situação apresentada, pode-se afirmar que a vazão do canal será de</p>
            ',
            'referencia' => '',
            'opcao_a' => '0,8 m³/s.',
            'opcao_b' => '4 m³/s.',
            'opcao_c' => '8 m³/s.',
            'opcao_d' => '40 m³/s.',
            'opcao_e' => '80 m³/s.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Na construção de um hotel em uma zona rural isolada, por erro no projeto estrutural, alguns pilares de concreto da estrutura necessitam ser reforçados. Para isso, eles devem ser encamisados com concreto (ou graute) de resistência superior à da estrutura original. A fim de viabilizar esse procedimento, o engenheiro executor propôs ao engenheiro estrutural que a dosagem do novo concreto fosse realizada na própria obra, pois o procedimento sairia mais barato, dada a localização isolada da edificação. Diante dessa sugestão, o engenheiro estrutural solicitou que fossem realizados ensaios de caracterização do novo concreto.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando essas informações, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O engenheiro executor deve elaborar um novo traço do concreto com fator água/cimento inferior ao do concreto original.</p>
                <p class="mb-2 pl-6 text-justify">II. O engenheiro executor deve fazer uso de aditivos plastificantes na composição do novo traço de concreto.</p>
                <p class="mb-2 pl-6 text-justify">III. O engenheiro executor deve utilizar sílica ativa no sentido de fortalecer a zona de transição.</p>
                <p class="mb-2 pl-6 text-justify">IV. O engenheiro executor deve moldar três corpos cilíndricos de 100 mm de diâmetro x 300 mm de altura e ensaiá-los à compressão axial ao sétimo dia, ao décimo quarto dia e ao vigésimo oitavo dia.</p>
                <p class="mb-2 pl-6 text-justify">V. O engenheiro executor deve caracterizar os agregados, brita e areia, e mantê-los úmidos a fim de reter a água de amassamento do concreto e, assim, combater a retração.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I, II e III.',
            'opcao_b' => 'I, III e V.',
            'opcao_c' => 'I, IV e V.',
            'opcao_d' => 'II, III e IV.',
            'opcao_e' => 'II, IV e V.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Na construção de um grande empreendimento habitacional com 10 edifícios, os engenheiros utilizaram, nos pavimentos, lajes pré-moldadas de concreto do tipo vigota, usando lajota cerâmica como elemento de enchimento. Na entrega do primeiro prédio do empreendimento, o engenheiro executor identificou que as lajes apresentavam flechas imediatas iguais aos limites estabelecidos por norma para o estado limite de serviço na etapa de vistoria.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando que os prédios do empreendimento são todos iguais, após essa vistoria, o engenheiro executor deverá</p>
            ',
            'referencia' => '',
            'opcao_a' => 'aprovar a entrega da edificação, pois, apesar de a flecha imediata ser igual ao limite, ela não o ultrapassa.',
            'opcao_b' => 'aprovar a entrega da edificação, pois, apesar de a flecha imediata ser igual ao limite, não confere um estado limite último.',
            'opcao_c' => 'reprovar a entrega da edificação e recomendar que seja feita a regularização do revestimento inferior da laje para que o aspecto estético seja respeitado.',
            'opcao_d' => 'reprovar a entrega da edificação, recomendar o reforço das lajes para esse prédio e indicar ao engenheiro calculista que reavalie o projeto estrutural para os demais prédios.',
            'opcao_e' => 'aprovar a entrega da edificação, recomendar que seja feita a regularização do revestimento inferior da laje para que o aspecto estético seja respeitado e indicar ao engenheiro calculista que reavalie a estrutura dos demais prédios.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Um edifício de 15 pavimentos foi construído sobre um terreno argiloso, saturado, normalmente adensado, com planta quadrada de 20 m de largura. Admite-se que o carregamento aplicado no terreno é uniformemente distribuído na área da planta do edifício. Após 50 anos, construiu-se outro edifício de dimensões similares distante 6 m do primeiro.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. Os recalques obtidos pelos edifícios após a construção do segundo prédio seriam idênticos caso ambos fossem construídos ao mesmo tempo.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. Os acréscimos de tensão de um edifício com relação ao outro dependem dos valores do carregamento, da dimensão dos edifícios e da profundidade em que se realiza o cálculo.</p>

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
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">O concreto é um material de construção resultante da mistura, em quantidades racionais, de aglomerante (cimento), agregados (pedra e areia) e água. Após a mistura, o concreto deve possuir trabalhabilidade suficiente para as operações de manuseio, de transporte e de lançamento em formas, adquirindo coesão e resistência com o passar do tempo, devido às reações que se processam entre aglomerante e água. Em alguns casos, são adicionados aditivos que modificam suas características físicas e químicas.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir dessas informações, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A granulometria e o fator água/cimento devem ser considerados quando se desejar modificar a consistência do concreto fresco.</p>
                <p class="mb-2 pl-6 text-justify">II. O fator água/cimento é inversamente proporcional à resistência à compressão.</p>
                <p class="mb-2 pl-6 text-justify">III. O uso de aditivo redutor de água pode ser dispensado caso o concreto esteja com trabalhabilidade adequada, confeccionado com agregados satisfatórios e com a correta quantidade de água.</p>

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
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Um canal hidráulico experimental de concreto foi construído de forma retangular, com 8 m de largura de base. Sabe-se que a altura do nível de água é de 4 m e que a velocidade média de escoamento é de 1 m/s.</p>
                <p class="mb-2 text-justify">Para esse caso, as equações do Número de Froude (Fr) e do Número de Reynolds (Re) podem ser definidas como:</p>
                <p class="mb-2 pl-6 font-mono">Fr = V / √Y</p>
                <p class="mb-2 pl-6 font-mono">Re = 4·10<sup>6</sup> · V · R<sub>h</sub></p>
                <p class="mb-2 text-justify">em que: V é a velocidade (m/s); Y é a altura da lâmina de água (m); e R<sub>h</sub> é o raio hidráulico (m).</p>
                <p class="mb-2 text-justify">O regime de escoamento em condutos livres pode ser classificado como:</p>
                <p class="mb-2 pl-6 text-justify">Fr &lt; 1 em fluvial; Fr = 1 em crítico; e Fr &gt; 1 em torrencial.</p>
                <p class="mb-2 pl-6 text-justify">Re &lt; 500 em laminar; 500 &lt; Re &lt; 1 000 em zona de transição; e Re &gt; 1 000 em turbulento.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nessas informações, é correto afirmar que o escoamento no canal ocorre por meio de um regime</p>
            ',
            'referencia' => '',
            'opcao_a' => 'fluvial e laminar.',
            'opcao_b' => 'fluvial e turbulento.',
            'opcao_c' => 'crítico de transição.',
            'opcao_d' => 'torrencial e laminar.',
            'opcao_e' => 'torrencial e turbulento.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">O Bus Rapid Transit (BRT) é um tipo de transporte de média capacidade que busca melhorar o sistema de transporte coletivo nas cidades. A respeito desse assunto, sabe-se que Londres, Moscou, Tóquio e Nova Iorque têm, como principal sistema de transporte, o metrô; já Lyon opera, principalmente, com Light Rail Transit (LRT); e Istambul, Bogotá, Lima, Guangzhou e Jacarta operam, majoritariamente, com BRT. A tabela a seguir mostra a comparação de produtividade desses sistemas em cada uma dessas cidades.</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300 text-center">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border px-3 py-2">Sistema</th>
                                <th class="border px-3 py-2">Cidade</th>
                                <th class="border px-3 py-2">Produtividade (1000 passageiros/dia/km)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1">BRT</td><td class="border px-3 py-1">Istambul</td><td class="border px-3 py-1">14</td></tr>
                            <tr><td class="border px-3 py-1">BRT</td><td class="border px-3 py-1">Bogotá</td><td class="border px-3 py-1">20</td></tr>
                            <tr><td class="border px-3 py-1">BRT</td><td class="border px-3 py-1">Lima</td><td class="border px-3 py-1">13</td></tr>
                            <tr><td class="border px-3 py-1">BRT</td><td class="border px-3 py-1">Guangzhou</td><td class="border px-3 py-1">35</td></tr>
                            <tr><td class="border px-3 py-1">BRT</td><td class="border px-3 py-1">Jacarta</td><td class="border px-3 py-1">2</td></tr>
                            <tr><td class="border px-3 py-1">Metrô</td><td class="border px-3 py-1">Moscou</td><td class="border px-3 py-1">25</td></tr>
                            <tr><td class="border px-3 py-1">Metrô</td><td class="border px-3 py-1">Londres</td><td class="border px-3 py-1">9</td></tr>
                            <tr><td class="border px-3 py-1">Metrô</td><td class="border px-3 py-1">Tóquio</td><td class="border px-3 py-1">34</td></tr>
                            <tr><td class="border px-3 py-1">Metrô</td><td class="border px-3 py-1">Nova Iorque</td><td class="border px-3 py-1">14</td></tr>
                            <tr><td class="border px-3 py-1">LRT</td><td class="border px-3 py-1">Lyon</td><td class="border px-3 py-1">4</td></tr>
                        </tbody>
                    </table>
                </div>
                <p class="mb-2 text-right text-sm">LINDAU, L.A.; HIDALGO, D.; LOBO, A.A. Barriers to planning and implementing Bus Rapid Transit systems. Embarq Brazil, United States and Mexico, Laboratório de Sistemas de Transportes da Universidade Federal do Rio Grande do Sul, 2014 (adaptado).</p>
                <p class="mb-2 text-justify">Nesse contexto, suponha que se pretenda implantar um corredor de BRT em uma avenida com extensão de 9 km para uma demanda de 18 000 passageiros na hora de pico, a qual corresponde a 10% da demanda diária.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando os dados apresentados, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O corredor da avenida transportará uma quantidade de passageiros por quilômetro equivalente a 80% da quantidade correspondente ao metrô de Moscou.</p>
                <p class="mb-2 pl-6 text-justify">II. A produtividade do corredor da avenida será inferior à do BRT de Jacarta.</p>
                <p class="mb-2 pl-6 text-justify">III. O corredor da avenida operará em condições idênticas às do BRT de Bogotá.</p>

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
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Treliça é uma estrutura de membros esbeltos ligados entre si pelas suas extremidades. Para analisar ou projetar uma treliça, deve-se calcular o valor da força atuante em cada um dos seus membros. A força no membro pode ser de tração, de compressão ou nula. A fim de se obter essas forças, dois métodos geralmente são utilizados: 1) o método dos nós; e/ou 2) o método das seções. A aplicação desses métodos torna-se mais simples se, primeiramente, os membros que não estão sujeitos a nenhum carregamento (membros de força nula) são identificados. Os membros de força nula são usados para dar mais estabilidade à treliça durante a construção ou são usados como apoio adicional caso o carregamento externo seja alterado. Alguns dos membros de força nula de uma treliça podem ser determinados apenas por observação de cada um dos nós, sem a necessidade de cálculos.</p>
                <p class="mb-2 text-right text-sm">HIBBELER, R. C. <b>Estática: mecânica para engenharia</b>. 12. ed. São Paulo: Pearson Prentice Hall, 2011 (adaptado).</p>
                <p class="mb-2 text-justify">A treliça analisada possui carregamentos de 2 kN no nó C e 5 kN no nó D, com nós conectados por pinos: A, B, C, D (superiores) e H, G, F (inferiores).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando-se que todos os nós da treliça representada pela figura são conectados por pinos, é correto afirmar, apenas a partir da observação desses nós, que são elementos de força nula</p>
            ',
            'referencia' => 'HIBBELER, R. C. Estática: mecânica para engenharia. 12. ed. São Paulo: Pearson Prentice Hall, 2011 (adaptado).',
            'opcao_a' => 'BH e CH.',
            'opcao_b' => 'BH, CF e CG.',
            'opcao_c' => 'CF, CG e DF.',
            'opcao_d' => 'CF, CH e DF.',
            'opcao_e' => 'BH, CG, CH e DF.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">As vigas Gerber isostáticas são constituídas por uma associação de vigas isostáticas que possuem estabilidade própria com outras vigas que se apoiam sobre as primeiras, dando estabilidade ao conjunto. A ligação entre as vigas componentes se dá por meio de rótulas internas, as quais transmitem forças verticais e horizontais, mas não transmitem momento fletor.</p>
                <p class="mb-2 text-justify">A viga Gerber em questão é decomposta em quatro partes identificadas pelos algarismos 1, 2, 3 e 4, sendo que as partes com estabilidade própria sustentam as partes instáveis.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Para a obtenção das reações de apoio dessa viga Gerber, a ordem de resolução correta é</p>
            ',
            'referencia' => '',
            'opcao_a' => '1, 2, 3 e 4.',
            'opcao_b' => '2, 1, 3 e 4.',
            'opcao_c' => '3, 1, 4 e 2.',
            'opcao_d' => '4, 3, 1 e 2.',
            'opcao_e' => '4, 2, 1 e 3.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">As provas de carga em estacas podem fornecer dois tipos de curvas carga versus recalque, conforme se observa na figura a seguir. Dessa forma, o engenheiro, ao analisar os resultados deste ensaio, deverá ter o conhecimento para interpretar os resultados e para avaliar se as fundações da sua obra foram projetadas e executadas de forma adequada.</p>
                <p class="mb-2 text-right text-sm">ALONSO, U.R. <b>Previsão e controle de fundações</b>. São Paulo: Blucher, 1991 (adaptado).</p>
                <p class="mb-2 text-justify">O gráfico apresenta duas curvas (a) e (b) de carga versus recalque, em que P<sub>R</sub> representa a carga de ruptura. A curva (a) apresenta ruptura definida, enquanto a curva (b) apresenta comportamento assintótico sem ruptura nítida.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as formas das curvas carga versus recalque apresentadas na figura, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A carga de ruptura P<sub>R</sub> pode ser obtida diretamente pela observação das curvas (a) e (b).</p>
                <p class="mb-2 pl-6 text-justify">II. Na curva (a), ao alcançar a carga de ruptura P<sub>R</sub>, a estaca inicia um deslocamento incessante até atingir o recalque máximo.</p>
                <p class="mb-2 pl-6 text-justify">III. A curva (b) é característica de comportamento de fundações que apresentam atrito negativo, pois os recalques diminuem de acordo com a carga aplicada.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'ALONSO, U.R. Previsão e controle de fundações. São Paulo: Blucher, 1991 (adaptado).',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'II, apenas.',
            'opcao_c' => 'I e III, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">As características de funcionamento de sistemas de elevação de água podem ser avaliadas por meio de curvas características da tubulação e da bomba, que são as representações cartesianas de curvas do tipo H=f(Q), em que H representa a altura manométrica e Q representa a vazão recalcada. Para a bomba, pode ser analisada, ainda, a curva de rendimento em função da vazão.</p>
                <p class="mb-2 text-justify">Nesse contexto, suponha que uma bomba centrífuga será utilizada para elevar água entre dois reservatórios por meio de uma adutora. As curvas características do sistema indicam que:</p>
                <ul class="list-disc pl-6 mb-2">
                    <li class="mb-1">Com 1 bomba: ponto de operação em Q ≈ 20 L/s e H ≈ 30 m, rendimento ≈ 34%.</li>
                    <li class="mb-1">Com 2 bombas em série: ponto de operação em Q ≈ 20 L/s e H ≈ 60 m, cada bomba fornecendo H = 30 m, rendimento ≈ 60%.</li>
                    <li class="mb-1">Com 2 bombas em série: a vazão recalcada passa de 20 L/s (1 bomba) para 27,5 L/s (2 bombas).</li>
                </ul>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando essas condições, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Ao serem instaladas duas bombas em série, cada uma delas irá operar com um rendimento de 60%.</p>
                <p class="mb-2 pl-6 text-justify">II. Ao serem instaladas duas bombas em série, cada uma delas irá fornecer uma altura manométrica de 17 m.</p>
                <p class="mb-2 pl-6 text-justify">III. Ao ser instalada apenas uma bomba, ela irá recalcar uma vazão 20 L/s e irá operar com um rendimento de 34%.</p>
                <p class="mb-2 pl-6 text-justify">IV. Ao serem instaladas duas bombas em série, a vazão recalcada no sistema sofrerá um aumento de 7,5 L/s em relação àquela recalcada pela operação de uma única bomba.</p>

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
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Suponha que um engenheiro está fazendo estudos para a ampliação do terminal rodoviário de um município com 400 mil habitantes, cuja população cresce 10% ao ano.</p>
                <p class="mb-2 text-justify">Para o estudo, ele considerou as seguintes informações:</p>
                <ul class="list-disc pl-6 mb-2">
                    <li class="mb-1">a receita do terminal rodoviário é proveniente do pagamento da taxa de serviço por passageiro.</li>
                    <li class="mb-1">a população total do município utiliza o terminal rodoviário duas vezes por ano.</li>
                    <li class="mb-1">o investimento necessário para a ampliação foi estabelecido em R$ 2 000 000,00 (dois milhões de reais).</li>
                </ul>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base no exposto, acerca das estimativas de atendimento, de arrecadação e de retorno do investimento, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Será necessário atender a um milhão de passageiros para recuperar o investimento decorrente da ampliação, considerando-se a cobrança de uma taxa de serviço de R$ 3,00 (três reais).',
            'opcao_b' => 'Será de dois anos o prazo mínimo de recuperação do capital se a taxa de serviço for R$ 1,00 (um real) e se for integralmente destinada à cobertura do investimento.',
            'opcao_c' => 'Deverá ser arrecadado R$ 1,50 (um real e cinquenta centavos) por passageiro para que o investimento seja recuperado em até três anos.',
            'opcao_d' => 'Deverá ser cobrada uma taxa de serviço de R$ 1,00 (um real) para a recuperação do investimento em, no mínimo, quatro anos.',
            'opcao_e' => 'Serão atendidos mais de três milhões de passageiros em três anos.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">O uso do sistema Light Wood Frame (LWF) no Brasil tem ganhado força com a busca de sistemas construtivos mais eficientes, seja pela redução do tempo de construção, seja pela padronização dos processos, ou até mesmo para contribuir com a sustentabilidade ambiental. De acordo com a NBR 16936, LWF são sistemas construtivos estruturados por peças leves de madeira maciça serrada, ou por produto derivado de madeira, com fechamentos em chapas unidas às peças de madeira, formando painéis com resistência e rigidez aplicadas tanto no plano do painel quanto de forma perpendicular a ele.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando essas informações, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. O sistema Light Wood Frame (LWF) permite redução do prazo de construção devido à manufatura das paredes ocorrer em ambiente controlado por procedimentos de fabricação, restando, no canteiro de obras, os serviços de fundação, de montagem dos elementos e de acabamento fino.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. A industrialização de componentes da construção civil tende a reduzir a geração de resíduos, compreendida como um dos grandes problemas causados pela construção civil.</p>

                <p class="mb-2 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A representação de objetos em desenho técnico e projetivo efetua-se por meio de um sistema apropriado de projeções. A representação deve ser clara e simples, de forma que seja facilmente compreendida por quem irá utilizá-la.</p>
                <p class="mb-2 text-justify">A figura apresentada é um sólido tridimensional com cortes e recortes, cujas vistas ortogonais devem ser identificadas corretamente.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando a imagem apresentada, assinale a opção que indica corretamente as projeções ortogonais que representam, respectivamente, as vistas frontal e superior dessa figura.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'A',
            'opcao_b' => 'B',
            'opcao_c' => 'C',
            'opcao_d' => 'D',
            'opcao_e' => 'E',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A evolução dos Sistemas Inteligentes de Transporte (Intelligent Transport Systems — ITS) ocorreu de forma acelerada, multifacetada e, muitas vezes, baseada nos avanços tecnológicos considerados revolucionários para o setor de transportes. Inúmeras ferramentas estão hoje disponíveis para diversos contextos e escalas, com aplicações que geram impactos, de forma direta, tanto localmente quanto em toda a sociedade. Com a perspectiva do alto crescimento populacional nas cidades para os próximos anos, aumentam também as preocupações com problemas relacionados à mobilidade urbana e, consequentemente, aumenta a busca por soluções e por tecnologias que facilitem a vida das pessoas. Para tanto, existem diversas tecnologias disponíveis, cujo emprego tem sido gradualmente aceito e utilizado em gestão do tráfego e do transporte público, além do transporte de carga.</p>
                <p class="mb-2 text-right text-sm">PANHAN, A.M.; MENDES, L.S.; BREDA, G.D. <b>Construindo Cidades Inteligentes</b>. Curitiba: Appris, 2016 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A respeito do uso de ITS no âmbito do planejamento da mobilidade urbana, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Os ITS constituem uma ferramenta de suporte à análise da mobilidade urbana.</p>
                <p class="mb-2 pl-6 text-justify">II. A produção de dados e a análise de informações, nos ITS, baseiam-se na participação dos usuários dos modais de transporte.</p>
                <p class="mb-2 pl-6 text-justify">III. Os ITS integram sistemas de captura de dados para transformação em informações, com intuito de planejar e de controlar o transporte e o tráfego.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'PANHAN, A.M.; MENDES, L.S.; BREDA, G.D. Construindo Cidades Inteligentes. Curitiba: Appris, 2016 (adaptado).',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'III, apenas.',
            'opcao_c' => 'I e II, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A relação que existe entre uma força e a aceleração produzida por essa força foi descoberta por Isaac Newton, o que o levou à formulação de leis básicas de movimento da mecânica newtoniana, entre elas, a que estabelece que, se nenhuma força atua sobre um corpo, sua velocidade não pode mudar, ou seja, o corpo não pode sofrer aceleração. Lembre-se de que as leis de Newton são válidas apenas quando o observador está parado ou em movimento retilíneo uniforme.</p>
                <p class="mb-2 text-right text-sm">HALLIDAY, D. <b>Fundamentos de Física: mecânica</b>. Tradução: Ronaldo Sérgio de Biasi. 10. ed. Rio de Janeiro: LTC, 2016 (adaptado).</p>
                <p class="mb-2 text-justify">Essa informação acerca de uma das leis de Newton apoia projetos geométricos de estradas na concepção de raios de giro das curvas para promover a estabilidade dos veículos no movimento curvilíneo, proporcionando segurança e conforto a quem está dentro de um veículo no ato do deslocamento. Isso implica considerar que, quando se está dentro de um carro e o motorista faz uma curva para a direita, o corpo do passageiro imediatamente é prensado para o lado esquerdo do veículo, apontando para fora da trajetória circular feita no momento da curva.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse caso, a lei básica da Física que explica a situação relatada é a</p>
            ',
            'referencia' => 'HALLIDAY, D. Fundamentos de Física: mecânica. 10. ed. Rio de Janeiro: LTC, 2016 (adaptado).',
            'opcao_a' => 'inércia.',
            'opcao_b' => 'ação e reação.',
            'opcao_c' => 'força centrífuga.',
            'opcao_d' => 'força centrípeta.',
            'opcao_e' => 'força gravitacional.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A equação de continuidade do fluxo de tráfego, que é conhecida, também, como relação fundamental do tráfego, é dada pela equação em que o fluxo é resultado do produto da velocidade (v) pela densidade (d). A velocidade de fluxo livre (V<sub>livre</sub>) representa a velocidade regulamentada para a via, enquanto a densidade de saturação (d<sub>saturação</sub>) representa a concentração máxima em regime de congestionamento. O Modelo Linear de Greenshields demonstra a relação linear entre a densidade e a velocidade.</p>
                <p class="mb-2 text-right text-sm">ELFTERIADOU, L. <b>An Introduction to Traffic Flow Theory</b>. New York: Springer, 2014 (adaptado).</p>
                <p class="mb-2 text-justify">Considerando-se que, em um trecho de autoestrada, a velocidade de fluxo livre é de 120 km/h, a densidade de saturação é de 250 veículos/km e a capacidade da via se situa na metade da densidade de saturação:</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Qual é o fluxo de tráfego máximo?</p>
            ',
            'referencia' => 'ELFTERIADOU, L. An Introduction to Traffic Flow Theory. New York: Springer, 2014 (adaptado).',
            'opcao_a' => '1 875 veículos/h.',
            'opcao_b' => '3 750 veículos/h.',
            'opcao_c' => '7 500 veículos/h.',
            'opcao_d' => '15 000 veículos/h.',
            'opcao_e' => '30 000 veículos/h.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A elaboração e a leitura de projetos fazem parte do dia a dia de todo engenheiro civil em seu exercício profissional, independentemente de sua área específica de atuação. A leitura e a análise desses documentos resultam em construções mais seguras e de maior durabilidade, garantindo a correta execução do que foi elaborado pelo projetista e evitando, assim, possíveis manifestações patológicas na construção.</p>
                <p class="mb-2 text-justify">A figura apresenta o detalhamento da seção transversal de uma viga com armadura longitudinal inferior, armadura longitudinal superior e estribos, bem como o diagrama de momento fletor causado por um carregamento distribuído q (kN/m). O diagrama de momento fletor é positivo (côncavo para cima) ao longo do vão.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas informações apresentadas, é correto afirmar que a principal função da armadura longitudinal localizada na parte inferior é combater</p>
            ',
            'referencia' => '',
            'opcao_a' => 'a força normal atuante na viga.',
            'opcao_b' => 'a força cortante atuante na viga.',
            'opcao_c' => 'o momento torsor atuante na viga.',
            'opcao_d' => 'o momento fletor positivo atuante na viga.',
            'opcao_e' => 'o momento fletor negativo atuante na viga.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A verificação do histórico de tensões a que um solo foi submetido pode ser feita por meio do ensaio de adensamento e do cálculo das tensões geostáticas efetivas de campo. Assim, é possível verificar em qual condição de adensamento o material se encontra nos dias atuais. O conhecimento do histórico de tensões é importante na engenharia geotécnica, pois, por meio dessas informações, pode-se avaliar as propriedades de compressibilidade de um solo, evitando possíveis problemas pós-conclusão das obras para a sociedade.</p>
                <p class="mb-2 text-justify">O perfil de solo apresentado é composto por uma camada de argila não saturada (NA) com γ<sub>nat</sub> = 13 kN/m³ nos primeiros 2 m (acima do nível d\'água) e γ<sub>sat</sub> = 18 kN/m³ abaixo do nível d\'água. O ponto A encontra-se a 5 m de profundidade. O peso específico da água é igual a 10 kN/m³ e a tensão de pré-adensamento da amostra extraída a 5 m é igual a 100 kPa.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nessas informações, é correto afirmar que o valor da razão de pré-adensamento (RPA) ou <i>over consolidation ratio</i> (OCR) no ponto A é de</p>
            ',
            'referencia' => '',
            'opcao_a' => '2,00.',
            'opcao_b' => '1,25.',
            'opcao_c' => '1,00.',
            'opcao_d' => '0,80.',
            'opcao_e' => '0,50.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Suponha que uma ferrovia, que cruza uma área urbana densamente habitada, é utilizada para transportar grãos a um terminal portuário. Sabe-se que as composições ferroviárias possuem um comprimento de 600 m e circulam a uma velocidade de 5 km/h. Os conflitos provocados pela passagem do trem por dentro da cidade ocorrem em uma passagem de nível, a qual é operada por cancelas e por semáforos.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nessa situação, admitindo-se que o semáforo opera com um tempo adicional de 32 segundos antes e de 16 segundos após a passagem de cada trem, o tráfego de veículos é interrompido durante</p>
            ',
            'referencia' => '',
            'opcao_a' => '432 segundos.',
            'opcao_b' => '448 segundos.',
            'opcao_c' => '464 segundos.',
            'opcao_d' => '480 segundos.',
            'opcao_e' => '496 segundos.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">O tempo de concentração em bacias hidrográficas é definido como o tempo de viagem da gota de água da chuva que atinge a região mais remota da bacia, desde o início de seu escoamento, até o momento em que atinge o exutório.</p>
                <p class="mb-2 text-right text-sm">COLLISCHONN, W.; DORNELLES, F. <b>Hidrologia para Engenharia e Ciências Ambientais</b>. Porto Alegre: ABRH, 2013 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando esse conceito, pode-se afirmar que o tempo de concentração é maior em bacias nas quais</p>
            ',
            'referencia' => 'COLLISCHONN, W.; DORNELLES, F. Hidrologia para Engenharia e Ciências Ambientais. Porto Alegre: ABRH, 2013 (adaptado).',
            'opcao_a' => 'as extensões são grandes e de baixa declividade.',
            'opcao_b' => 'as extensões são pequenas e o solo já está úmido.',
            'opcao_c' => 'o solo está saturado e possui declividades acentuadas.',
            'opcao_d' => 'o solo está não saturado e a velocidade da água é maior.',
            'opcao_e' => 'as extensões são moderadas e a velocidade da água é maior.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A capacidade de carga é a tensão que provoca a ruptura do maciço de solo em que a fundação está embutida. As fórmulas de capacidade de carga são instrumentos eficazes na previsão da tensão admissível, destacando-se, entre as inúmeras formulações, a de Terzaghi. As fórmulas de capacidade de carga são determinadas a partir do conhecimento do tipo de ruptura que o solo pode sofrer, dependendo das condições de carregamento. Se o solo apresenta ruptura geral, a tensão de ruptura do solo σ<sub>R</sub> pode ser obtida por:</p>
                <p class="mb-2 text-center font-mono">σ<sub>R</sub> = c · N<sub>c</sub> · S<sub>c</sub> + (1/2) · γ · B · N<sub>γ</sub> · S<sub>γ</sub> + q · N<sub>q</sub> · S<sub>q</sub></p>
                <p class="mb-2 text-justify">em que: c é a coesão do solo; γ é o peso específico do solo no qual se apoia a fundação; B é a menor largura da sapata; q é a pressão efetiva do solo na cota de apoio da fundação (q = γh); N<sub>c</sub>, N<sub>γ</sub> e N<sub>q</sub> são os fatores de capacidade de carga, funções de ângulo de atrito interno φ; e S<sub>c</sub>, S<sub>γ</sub> e S<sub>q</sub> são fatores de forma.</p>
                <p class="mb-2 text-justify">A sapata quadrada é submetida a uma carga de P = 500 kN com: c = 0; γ = 20 kN/m³; S<sub>γ</sub> = 0,8; S<sub>q</sub> = 1,0; N<sub>γ</sub> = 25; N<sub>q</sub> = 40; h = 1 m; B = 1 m. O peso da própria sapata é desprezado.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse caso, o fator de segurança será igual a</p>
            ',
            'referencia' => '',
            'opcao_a' => '0,50.',
            'opcao_b' => '1,00.',
            'opcao_c' => '1,60.',
            'opcao_d' => '2,00.',
            'opcao_e' => '2,50.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">No planejamento de um canteiro de obra, é preciso considerar que a disposição dos resíduos deve atender à Resolução CONAMA n. 307, a qual estabelece diretrizes, critérios e procedimentos para a gestão dos resíduos da construção civil.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Os resíduos de gesso e de vidro são classificados como resíduos Classe B e devem ser acondicionados de forma a ficarem separados de outros resíduos.</p>
                <p class="mb-2 pl-6 text-justify">II. Os resíduos Classe A são reutilizáveis ou recicláveis como agregados, tais como, componentes cerâmicos, argamassa e concreto, e devem ser segregados dos demais.</p>
                <p class="mb-2 pl-6 text-justify">III. O canteiro de obras deve dispor de uma caçamba ou baia para acondicionar os resíduos da Classe C e da Classe D, viabilizando a reutilização e a reciclagem desses resíduos.</p>

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
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">As figuras a seguir apresentam, respectivamente, a planta de duas lajes adjacentes e o diagrama de momento fletor para a direção x.</p>
                <p class="mb-2 text-justify">A Laje 1 possui dimensões de 3,2 m × 4 m e a Laje 2 possui dimensões de 2,5 m × 4 m, compartilhando a borda interna na seção B. O diagrama de momento fletor para a direção x apresenta os seguintes valores (em kN·m):</p>
                <ul class="list-disc pl-6 mb-2">
                    <li class="mb-1">Laje 1: momento positivo de campo = 5,31; momento negativo na borda B = 5,99 (antes da compatibilização).</li>
                    <li class="mb-1">Laje 2: momento positivo de campo = 2,40; momento negativo na borda B = 2,87 (antes da compatibilização).</li>
                    <li class="mb-1">Seção B (compatibilizada): momento = 5,65 kN·m (média ponderada entre 5,99 e 2,87).</li>
                </ul>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base no diagrama de momento fletor apresentado, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A continuidade entre as lajes adjacentes foi admitida na seção B.</p>
                <p class="mb-2 pl-6 text-justify">II. A intensidade do momento fletor compatibilizado na seção B é de 5,65 kN·m.</p>
                <p class="mb-2 pl-6 text-justify">III. O aumento do momento fletor positivo na laje 1 ocorreu devido à compatibilização.</p>

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
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere a seguinte entrada de dados {13, 10, 50, 23, 15} para o pseudocódigo apresentado a seguir.</p>
                <div class="bg-gray-50 border border-gray-200 rounded p-3 mb-2 font-mono text-sm">
                    <p>1&nbsp;&nbsp;inicio</p>
                    <p>2&nbsp;&nbsp;variavel inteiro i,j</p>
                    <p>3&nbsp;&nbsp;variavel real num[5]</p>
                    <p>4&nbsp;&nbsp;variavel real vaux</p>
                    <p>5&nbsp;&nbsp;para i de 1 ate 5</p>
                    <p>6&nbsp;&nbsp;&nbsp;&nbsp;escrever "valor ", i, " = "</p>
                    <p>7&nbsp;&nbsp;&nbsp;&nbsp;ler num[i]</p>
                    <p>8&nbsp;&nbsp;proximo</p>
                    <p>9&nbsp;&nbsp;para i de 1 ate 4</p>
                    <p>10&nbsp;&nbsp;&nbsp;para j de i+1 ate 5</p>
                    <p>11&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;se num[i] >= num[j] então</p>
                    <p>12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vaux &lt;- num[i]</p>
                    <p>13&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num[i] &lt;- num[j]</p>
                    <p>14&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num[j] &lt;- vaux</p>
                    <p>15&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fimse</p>
                    <p>16&nbsp;&nbsp;&nbsp;proximo</p>
                    <p>17&nbsp;&nbsp;proximo</p>
                    <p>18&nbsp;&nbsp;para i de 1 ate 5</p>
                    <p>19&nbsp;&nbsp;&nbsp;&nbsp;escrever num[i], "- "</p>
                    <p>20&nbsp;&nbsp;proximo</p>
                    <p>21&nbsp;&nbsp;fim</p>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Para a estrutura de repetição (linhas 9 a 17) ao final do terceiro passo (i=3), a execução do pseudocódigo resultará em num[4] igual a</p>
            ',
            'referencia' => '',
            'opcao_a' => '10.',
            'opcao_b' => '13.',
            'opcao_c' => '15.',
            'opcao_d' => '23.',
            'opcao_e' => '50.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Nas operações de terraplenagem, cortes são segmentos que requerem escavação no terreno natural para se alcançar a linha do greide projetado. Aterros constituem segmentos cuja implementação requer o depósito de materiais para a composição do corpo estradal segundo os gabaritos de projeto. É de grande importância para as operações de terraplenagem, tanto na etapa de projeto como na própria construção, que se tenha o adequado conhecimento das variações volumétricas ocorrentes durante a movimentação dos materiais envolvidos.</p>
                <p class="mb-2 text-justify">A relação de volumes para o material considerado é:</p>
                <ul class="list-disc pl-6 mb-2">
                    <li class="mb-1">Corte → Solto: fator de empolamento = 4/3 (volume solto é 1,333× o volume de corte).</li>
                    <li class="mb-1">Aterro → Corte: fator de compactação = 5/4 (volume de corte é 1,25× o volume de aterro).</li>
                </ul>
                <p class="mb-2 text-justify">O aterro será construído no formato de um prisma trapezoidal com as seguintes dimensões (em metros): bases superior = 6 m e inferior = 12 m, altura = 5 m e comprimento = 8 m.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir dessas informações, é correto afirmar que o volume de material a ser retirado do terreno natural (V<sub>corte</sub>) para ser transportado para a construção de um aterro, tal como representado pela figura 2, é de</p>
            ',
            'referencia' => '',
            'opcao_a' => '374,40 m³.',
            'opcao_b' => '390,00 m³.',
            'opcao_c' => '468,00 m³.',
            'opcao_d' => '561,60 m³.',
            'opcao_e' => '702,00 m³.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia Civil',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A energia de deformação é adotada para avaliar os efeitos de forças de impacto sobre estruturas e é igual ao trabalho realizado por uma força (de compressão ou de tração) aplicada ao elemento estrutural a uma taxa constante. Com base na curva de tensão versus deformação de um material, são definidas duas outras propriedades adicionais: uma representa a energia por unidade de volume que o material pode absorver sem escoar; e a outra representa a energia por unidade de volume necessária para fazer o material entrar em ruptura. Ambas são determinadas a partir do gráfico tensão versus deformação, cuja área corresponde à energia de deformação.</p>
                <p class="mb-2 text-justify">O gráfico de tensão (σ) versus deformação (ε) apresenta os pontos: O (origem), A (limite de proporcionalidade/escoamento), B (ruptura final, abaixo de A), C (tensão máxima, acima de A) e D (deformação na ruptura). A área OAB representa a energia até o escoamento, e a área total OACD representa a energia total até a ruptura.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Os limites no gráfico que representam as duas propriedades adicionais citadas no texto são</p>
            ',
            'referencia' => '',
            'opcao_a' => 'OAB — Módulo de resiliência; e ACDB — Módulo de tenacidade.',
            'opcao_b' => 'ACDB — Módulo de resiliência; e OAB — Módulo de tenacidade.',
            'opcao_c' => 'OACD — Módulo de resiliência; e ACDB — Módulo de tenacidade.',
            'opcao_d' => 'OACD — Módulo de resiliência; e OAB — Módulo de tenacidade.',
            'opcao_e' => 'OAB — Módulo de resiliência; e OACD — Módulo de tenacidade.',
            'alternativa_correta' => 'E',
        ]);
    }
}
