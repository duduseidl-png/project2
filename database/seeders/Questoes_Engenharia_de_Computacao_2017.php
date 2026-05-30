<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class Questoes_Engenharia_de_Computacao_2017 extends Seeder
{
    public function run(): void
    {
        // =========================================================
        // QUESTÃO 09 — Diagrama Tensão × Deformação (Gabarito: E)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A figura a seguir representa o diagrama de tensão V versus deformação H para diferentes materiais poliméricos.</p>

                <div class="bg-gray-50 border border-gray-200 rounded p-3 mb-2 text-sm text-center text-gray-700">
                    <p class="font-semibold">Diagrama Tensão (V) × Deformação (H)</p>
                    <p class="mt-1 text-xs text-gray-500">O diagrama apresenta cinco curvas (I a V) com diferentes inclinações iniciais (módulo de elasticidade) e extensões horizontais (nível de deformação). A curva I possui inclinação alta e deformação pequena; a curva II possui inclinação baixa e deformação grande; a curva III possui inclinação baixa e deformação pequena; a curva IV possui inclinação alta e deformação grande; a curva V possui inclinação baixa e deformação pequena, similar à III.</p>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Assinale a opção que apresenta, respectivamente, o módulo de elasticidade e o nível de deformação de uma das curvas do diagrama apresentado.</p>
            ',
            'referencia' => 'GARCIA, A. et al. <b>Ensaios dos materiais.</b> 2. ed. Rio de Janeiro: Livros Técnicos e Científicos Editora Ltda, 2012 (adaptado).',
            'opcao_a' => 'Curva I – alto e grande.',
            'opcao_b' => 'Curva II – baixo e grande.',
            'opcao_c' => 'Curva III – baixo e pequeno.',
            'opcao_d' => 'Curva IV – alto e grande.',
            'opcao_e' => 'Curva V – baixo e pequeno.',
            'alternativa_correta' => 'E',
        ]);

        // =========================================================
        // QUESTÃO 10 — Meio Ambiente e Economia (Gabarito: D)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A forte inserção brasileira no comércio internacional e a crescente preocupação mundial com os problemas ambientais desafiam o Brasil para construir uma política de integração entre o setor produtivo e o meio ambiente.</p>

                <p class="mb-2 text-justify">O meio ambiente é fornecedor de matéria-prima e, ao mesmo tempo, receptor de resíduos oriundos das atividades produtivas, o que deve ser necessariamente considerado para o estabelecimento de políticas ambientais e econômicas mais eficientes na gestão e uso dos recursos naturais.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir desses textos, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Os benefícios da biodiversidade e dos serviços ecossistêmicos são de difícil valoração econômica.</p>

                <p class="mb-2 pl-6 text-justify">II. As mudanças climáticas resultantes da emissão de gases de efeito estufa têm gerado oportunidades para o desenvolvimento e a utilização de fontes renováveis de energia, como alternativas ao uso de combustíveis fósseis.</p>

                <p class="mb-2 pl-6 text-justify">III. A degradação ambiental pode ocasionar limitações ao crescimento econômico sustentável.</p>

                <p class="mb-2 pl-6 text-justify">IV. A geração de riqueza e desenvolvimento sem a elevação do padrão de consumo dos recursos naturais constitui impedimento para o crescimento de países em desenvolvimento.</p>

                <p class="mb-2 pl-6 text-justify">V. Os tratados internacionais ambientais exigem entrelaçamento entre lucros obtidos, desenvolvimento social de comunidades tradicionais e conservação dos ecossistemas.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => 'Disponível em: http://www.mma.gov.br. Acesso em: 17 jul. 2017 (adaptado). MOURA, A. M.; ROMA, J. C.; SEROA, N. <b>Problemas econômicos, soluções ambientais.</b> Boletim regional, urbano e ambiental. Brasília: Ipea, n. 15, jul./dez. 2015 (adaptado).',
            'opcao_a' => 'I e IV.',
            'opcao_b' => 'I e V.',
            'opcao_c' => 'II, III e IV.',
            'opcao_d' => 'I, II, III e V.',
            'opcao_e' => 'II, III, IV e V.',
            'alternativa_correta' => 'D',
        ]);

        // =========================================================
        // QUESTÃO 11 — Sistema Toyota / Just in Time (Gabarito: C)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O sistema Toyota de produção apresenta-se como uma alternativa mais eficiente ao modelo fordista de produção, que explora as vantagens de produção em série. O modelo toyotista consiste em cadeia de suprimentos enxuta, flexível e altamente terceirizada, que prevê a eliminação quase total dos estoques e a busca constante pela agilização do processo produtivo.</p>

                <p class="mb-2 text-justify">O sistema logístico e produtivo conhecido como <i>just in time</i> é uma filosofia de administração da produção baseada no modelo Toyota de produção. Esse novo enfoque na administração da manufatura surgiu de uma visão estratégica e inovadora das pessoas envolvidas na gestão empresarial, buscando vantagem competitiva por intermédio de uma melhor utilização do processo produtivo.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas informações apresentadas, avalie as afirmações a seguir, a respeito do sistema produtivo <i>just in time</i>.</p>

                <p class="mb-2 pl-6 text-justify">I. Estimula o desenvolvimento de melhorias constantes, não apenas dos procedimentos e processos, mas também do homem dentro da empresa, o que permite desenvolver o potencial humano dentro das organizações e ampliar a base de confiança obtida pela transparência e honestidade das ações.</p>

                <p class="mb-2 pl-6 text-justify">II. A implementação dos princípios da organização começa pela fábrica e suas repercussões estendem-se por toda a empresa, o que caracteriza o princípio da visibilidade, fundamentado no objetivo de tornar visíveis os problemas onde quer que possam existir.</p>

                <p class="mb-2 pl-6 text-justify">III. Tem como objetivo administrar a manufatura de forma bem simples e eficiente, otimizando o uso dos recursos de capital, equipamento e mão de obra, o que resulta em um sistema capaz de atender às exigências do cliente, em termos de qualidade e prazo de entrega, ao menor custo.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'SOBRAL, F.; PECI, A. <b>Administração: teoria e prática no contexto brasileiro.</b> São Paulo: Pearson, 2013 (adaptado).',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'II, apenas.',
            'opcao_c' => 'I e III, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'C',
        ]);

        // =========================================================
        // QUESTÃO 12 — Lei de Resfriamento de Corpos (Gabarito: A)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">De acordo com a Lei de Resfriamento de Corpos, a taxa de variação da temperatura de um corpo em relação ao tempo é proporcional à diferença entre a temperatura do corpo e a temperatura ambiente.</p>

                <p class="mb-2 text-justify">Considere que <strong>T(t)</strong> é a temperatura do corpo em função do tempo, <strong>A</strong> é a temperatura do ambiente, <strong>t</strong> é o tempo e <strong>k</strong> é a constante de proporcionalidade.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, o modelo matemático correspondente à Lei de Resfriamento de Corpos e a função resultante de sua resolução são dados, respectivamente, por</p>
            ',
            'referencia' => '',
            'opcao_a' => 'dT/dt = −k(T − A) ; T(t) = (T(0) − A)e<sup>−kt</sup> + A',
            'opcao_b' => 'dT/dt = −kT − A ; T(t) = (T(0) − A)e<sup>−kt</sup> + A',
            'opcao_c' => 'dT/dt = −k(T − A) ; T(t) = e<sup>−kt</sup> + A',
            'opcao_d' => 'dT/dt = k(T − A) ; T(t) = e<sup>−kt</sup> + A',
            'opcao_e' => 'dT/dt = k(T − A) ; T(t) = e<sup>kt</sup> + A',
            'alternativa_correta' => 'A',
        ]);

        // =========================================================
        // QUESTÃO 13 — Escudo Térmico de Veículos Espaciais (Gabarito: E)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Os veículos espaciais apresentam estrutura externa constituída por um conjunto de blocos que formam um escudo térmico, cuja função é proteger motores e demais componentes de possíveis danos causados pelo calor, além de reduzir a temperatura interna do veículo.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Esses escudos térmicos são construídos com material</p>
            ',
            'referencia' => '',
            'opcao_a' => 'metálico, dada sua leveza e elevada resistência ao calor.',
            'opcao_b' => 'polimérico, dada sua baixa resistência ao calor e à corrosão.',
            'opcao_c' => 'cerâmico poroso, dada sua elevada resistência mecânica à tração.',
            'opcao_d' => 'polimérico, em razão de sua alta massa específica e de sua resistência ao calor.',
            'opcao_e' => 'cerâmico poroso, em razão de seu baixo coeficiente de dilatação térmica e de sua baixa condutividade térmica.',
            'alternativa_correta' => 'E',
        ]);

        // =========================================================
        // QUESTÃO 14 — Pressão Hidrostática × Profundidade (Gabarito: A)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A medida de profundidade em ambientes aquáticos está relacionada à pressão hidrostática, através da relação aproximadamente linear P = f(z), em que z é a profundidade e P é a pressão. Assuma que a densidade da água do mar ρ = 1,025 × 10<sup>3</sup> kg·m<sup>−3</sup>, que não há variação dessa densidade com a profundidade e que o valor da aceleração da gravidade g = 9,8 m·s<sup>−2</sup>.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, assinale a opção cujo gráfico relaciona adequadamente a profundidade com a pressão hidrostática.</p>

                <div class="bg-gray-50 border border-gray-200 rounded p-3 mb-2 text-sm text-gray-700">
                    <p><strong>Nota:</strong> A relação correta é P = ρgz, o que resulta em uma reta crescente a partir da origem, com coeficiente angular de aproximadamente 10,045 kPa/m. Para uma profundidade de 4 000 m, P ≈ 40 180 kPa. O gráfico correto (A) mostra uma reta crescente de (0, 0) até aproximadamente (4 000 m, 40 221 kPa).</p>
                </div>
            ',
            'referencia' => '',
            'opcao_a' => 'Reta crescente a partir da origem: quanto maior a profundidade, maior a pressão (relação linear P = ρgz).',
            'opcao_b' => 'Reta decrescente: quanto maior a profundidade, menor a pressão.',
            'opcao_c' => 'Curva exponencial crescente com a profundidade.',
            'opcao_d' => 'Reta horizontal: pressão constante independente da profundidade.',
            'opcao_e' => 'Curva parabólica crescente com a profundidade.',
            'alternativa_correta' => 'A',
        ]);

        // =========================================================
        // QUESTÃO 15 — Estatística / Dispersão Relativa (Gabarito: B)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Suponha que determinado programa de computador seja executado por meio de 13 etapas, com tempo médio de 50 segundos ao todo e dispersão relativa de 10% em torno da média.</p>

                <p class="mb-2 text-justify">Considere que uma equipe de engenharia propõe um novo algoritmo que reduz em 30% o tempo de execução de todas as 13 etapas desse programa.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, avalie as afirmações a seguir, a respeito do tempo de execução do novo algoritmo.</p>

                <p class="mb-2 pl-6 text-justify">I. O tempo médio por etapa será de 32,5 segundos.</p>

                <p class="mb-2 pl-6 text-justify">II. O desvio-padrão permanecerá inalterado.</p>

                <p class="mb-2 pl-6 text-justify">III. A dispersão relativa em torno da média permanecerá inalterada.</p>

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
        // QUESTÃO 16 — Eficiência Energética Residencial (Gabarito: C)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Em uma campanha publicitária que visa à redução do consumo de energia elétrica em residências, identificam-se as recomendações a seguir:</p>

                <ul class="list-disc list-inside mb-2 pl-4 text-sm text-justify space-y-1">
                    <li>substitua lâmpadas incandescentes por fluorescentes compactas ou lâmpadas de LED;</li>
                    <li>evite usar o chuveiro elétrico com a chave na posição "inverno" ou "quente";</li>
                    <li>acumule grande quantidade de roupa para ser passada a ferro elétrico de uma só vez;</li>
                    <li>evite o uso de tomadas múltiplas para ligar vários aparelhos simultaneamente;</li>
                    <li>utilize, na instalação elétrica, fios de diâmetros recomendados às suas finalidades.</li>
                </ul>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A característica comum a essas recomendações é a proposta de economizar energia por intermédio da redução</p>
            ',
            'referencia' => '',
            'opcao_a' => 'da potência de aparelhos e dispositivos elétricos.',
            'opcao_b' => 'do tempo de utilização de aparelhos e dispositivos elétricos.',
            'opcao_c' => 'do consumo de energia elétrica convertida em energia térmica.',
            'opcao_d' => 'do consumo de energia elétrica por correntes de fuga.',
            'opcao_e' => 'do consumo de energia térmica convertida em energia elétrica.',
            'alternativa_correta' => 'C',
        ]);

        // =========================================================
        // QUESTÃO 17 — Multiplicadores de Lagrange / Lata Cilíndrica (Gabarito: D)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A importância da otimização no processo produtivo é inegável. Do ponto de vista matemático, para otimizar determinada grandeza, é necessário modelá-la de acordo com uma função e, a partir daí, conforme a situação, procurar um máximo ou um mínimo. Uma das formas usadas para minimizar funções é o método dos multiplicadores de Lagrange.</p>

                <p class="mb-2 text-justify">Um fabricante de latinhas de refrigerante deve propor uma lata cilíndrica de volume V<sub>0</sub>. Essa lata será fabricada usando-se duas ligas metálicas distintas, sendo uma para a parte lateral e outra para a base e a tampa. Ele deseja calcular o raio (r) e a altura (h) da lata para que o custo de sua produção seja o menor possível. Sabe-se que a área total da lata é dada por A(r, h) e que o custo total de produção da lata, que depende apenas do material utilizado na sua produção, é C(r, h).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nessa situação, avalie as afirmações a seguir, acerca da solução desse problema.</p>

                <p class="mb-2 pl-6 text-justify">I. O custo de produção da lata pode ser expresso por C(r, h) = K<sub>1</sub>(2πrh) + K<sub>2</sub>(2πr<sup>2</sup>), em que K<sub>1</sub> e K<sub>2</sub> são constantes que dependem do custo de cada uma das ligas metálicas por unidade de área.</p>

                <p class="mb-2 pl-6 text-justify">II. A função a ser minimizada da área total da lata é A(r, h) = 2πrh + 2πr<sup>2</sup>.</p>

                <p class="mb-2 pl-6 text-justify">III. O vínculo na minimização, relacionado ao volume da lata, é dado por g(r, h) = πr<sup>2</sup>h − V<sub>0</sub>.</p>

                <p class="mb-2 pl-6 text-justify">IV. O sistema de equações a ser montado é ∇C(r, h) = λ∇g(r, h), no qual λ é denominado multiplicador de Lagrange.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'I e IV.',
            'opcao_c' => 'II e III.',
            'opcao_d' => 'I, III e IV.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => 'D',
        ]);

        // =========================================================
        // QUESTÃO 18 — Ensaio de Flexão a 3 Pontos (Gabarito: B)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O ensaio de flexão é utilizado em materiais frágeis ou de alta dureza, tais como cerâmicas estruturais ou aços-ferramenta. Em uma de suas modalidades mais comuns, o ensaio de flexão a 3 pontos, é provocada uma flexão ao se aplicar o carregamento em 3 pontos, o que causa uma tensão de tração surgida no ponto central e inferior da amostra, onde a fratura do material terá início.</p>

                <p class="mb-2 text-justify">Assumindo-se um comportamento de tensão-deformação linear, a tensão de flexão σ do material pode ser obtida por meio da fórmula:</p>

                <p class="mb-2 text-center font-semibold">σ = (3Fd) / (2wh<sup>2</sup>)</p>

                <p class="mb-2 text-justify">em que F é a carga, d é a distância entre os pontos de apoio, w é a largura do corpo de prova e h é a espessura do corpo de prova.</p>

                <p class="mb-2 text-justify">Considere dois corpos de prova A e B do mesmo compósito reforçado com fibras de vidro, cuja resistência à flexão é de 290 MPa. O corpo de prova B tem o triplo da largura e a metade da espessura do corpo de prova A e ambos são submetidos ao mesmo ensaio de flexão.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nessa situação, qual porcentagem da força necessária para o rompimento do corpo de prova A deverá ser aplicada ao corpo de prova B para que este também se rompa?</p>
            ',
            'referencia' => '',
            'opcao_a' => '50%',
            'opcao_b' => '75%',
            'opcao_c' => '100%',
            'opcao_d' => '125%',
            'opcao_e' => '200%',
            'alternativa_correta' => 'B',
        ]);

        // =========================================================
        // QUESTÃO 19 — Circuito Combinatório / Catracas Eletrônicas (Gabarito: C)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere que o gestor do restaurante de uma universidade pretenda implantar um sistema de catracas eletrônicas utilizando circuitos combinatórios para o acesso dos clientes à sala de alimentação. O funcionamento básico desse sistema é descrito a seguir.</p>

                <ul class="list-disc list-inside mb-2 pl-4 text-sm text-justify space-y-1">
                    <li>Deve haver quatro filas de espera: A, B, C e D;</li>
                    <li>deve haver sensores que indiquem a presença de clientes nas filas, sendo atribuído o valor 1 quando houver cliente na fila, e 0 quando a fila estiver vazia;</li>
                    <li>quando determinada fila estiver vazia, sua catraca deverá ficar travada, e as filas devem estar na ordem de prioridade a seguir: A > B > C > D;</li>
                    <li>no máximo, duas catracas poderão estar abertas em um mesmo instante, respeitando-se a ordem de prioridade;</li>
                    <li>as catracas das filas A, B, C e D devem ser representadas pelas variáveis C1, C2, C3 e C4, respectivamente;</li>
                    <li>o valor de saída 1 deverá indicar que a catraca está aberta, e o valor 0, que a catraca está fechada.</li>
                </ul>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, qual circuito combinatório deverá resolver o problema de acesso dos clientes à sala de alimentação do restaurante da universidade?</p>

                <div class="bg-gray-50 border border-gray-200 rounded p-3 mb-2 text-sm text-gray-700">
                    <p class="font-semibold">Descrição das opções (representadas por diagramas de circuito lógico com as entradas A, B, C, D e saídas C1, C2, C3, C4):</p>
                    <ul class="list-disc list-inside mt-1 space-y-1">
                        <li><strong>A:</strong> Circuito que abre C1 quando A=1; C2 quando A=1 e B=1; não respeita a restrição de máximo 2 catracas.</li>
                        <li><strong>B:</strong> Circuito que abre C1 apenas quando somente A está presente; não considera prioridade corretamente.</li>
                        <li><strong>C:</strong> Circuito que abre C1 se A=1; C2 se B=1 e A=1; limita a no máximo 2 catracas abertas respeitando prioridade A > B > C > D.</li>
                        <li><strong>D:</strong> Circuito que ignora a restrição de máximo 2 catracas simultâneas.</li>
                        <li><strong>E:</strong> Circuito que abre catracas em ordem inversa de prioridade.</li>
                    </ul>
                </div>
            ',
            'referencia' => '',
            'opcao_a' => 'Circuito A: abre C1 e C2 sem respeitar o limite máximo de duas catracas.',
            'opcao_b' => 'Circuito B: abre apenas C1 independentemente das outras filas.',
            'opcao_c' => 'Circuito C: abre no máximo duas catracas em ordem de prioridade A > B > C > D.',
            'opcao_d' => 'Circuito D: abre todas as catracas das filas com clientes simultaneamente.',
            'opcao_e' => 'Circuito E: abre catracas em ordem inversa de prioridade.',
            'alternativa_correta' => 'C',
        ]);

        // =========================================================
        // QUESTÃO 20 — Compiladores e Linguagens Regulares (Gabarito: A)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Um compilador transforma uma linguagem, em geral textual, em outra linguagem. Um dos tipos de linguagens que um compilador pode transformar são as linguagens regulares, que podem ser descritas utilizando-se expressões regulares compostas por símbolos isolados agrupados com operadores * e ∪ e organizadas com auxílio de parênteses.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A palavra 10010100 pertence à linguagem representada por (100*)* .</p>

                <p class="mb-2 pl-6 text-justify">II. A palavra 10010 pertence à linguagem representada por (1(10)*0)* .</p>

                <p class="mb-2 pl-6 text-justify">III. Existe somente uma expressão regular para representar uma linguagem regular.</p>

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

        // =========================================================
        // QUESTÃO 21 — Microcontrolador / Registrador de Controle (Gabarito: E)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Um microcontrolador controla o dispositivo em que ele se encontra embutido através da sua interface de programação de aplicativos (API). Essencialmente, essa interface consiste em um conjunto de registradores de dados, de controle e de estado. Em um microcontrolador hipotético, os <i>bits</i> 5, 4 e 3 do registrador de controle MODOEVENTO de 16 <i>bits</i> controlam a configuração do tipo de evento que gera um gatilho em um pino específico, conforme a seguinte codificação binária:</p>

                <div class="overflow-x-auto mb-2">
                    <table class="mx-auto border-collapse text-sm text-center">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border border-gray-400 px-3 py-1">Código (bits 5,4,3)</th>
                                <th class="border border-gray-400 px-3 py-1">Significado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="border border-gray-400 px-3 py-1">000</td><td class="border border-gray-400 px-3 py-1">Desabilitado</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">001</td><td class="border border-gray-400 px-3 py-1">Sensível a borda de subida</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">010</td><td class="border border-gray-400 px-3 py-1">Sensível a borda de descida</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">011</td><td class="border border-gray-400 px-3 py-1">Sensível a ambas as bordas</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">100</td><td class="border border-gray-400 px-3 py-1">Sensível a nível alto</td></tr>
                            <tr><td class="border border-gray-400 px-3 py-1">101</td><td class="border border-gray-400 px-3 py-1">Sensível a nível baixo</td></tr>
                        </tbody>
                    </table>
                </div>

                <p class="mb-2 text-justify">O bit 0, à extrema direita, é o menos significativo, e o bit 15, o mais significativo. Em linguagem C, os símbolos |, & e ~ correspondem aos operadores lógicos bit a bit OR, AND e NOT, respectivamente.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando-se essa situação, qual instrução em C deve ser utilizada para configurar o pino, de forma que ele fique sensível a ambas as bordas?</p>
            ',
            'referencia' => '',
            'opcao_a' => '<code>MODOEVENTO = 0x0018</code>',
            'opcao_b' => '<code>MODOEVENTO |= 0x0018</code>',
            'opcao_c' => '<code>MODOEVENTO &amp;= ~0x0018</code>',
            'opcao_d' => '<code>MODOEVENTO = (MODOEVENTO | 0x0018) &amp; ~0x0038</code>',
            'opcao_e' => '<code>MODOEVENTO = (MODOEVENTO &amp; ~0x0038) | 0x0018</code>',
            'alternativa_correta' => 'E',
        ]);

        // =========================================================
        // QUESTÃO 22 — Ponteiros em C / Memória (Gabarito: A)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere o código em C, a seguir, compilado em um sistema computacional de 32 bits, que exemplifica o uso do tipo de dados ponteiro.</p>

                <div class="bg-gray-100 rounded p-3 mb-2 text-sm font-mono whitespace-pre-wrap">
#include &lt;stdio.h&gt;
void main(void) {
    int salario1, salario2;
    int *ptr;
    salario1 = 6750;
    ptr = &amp;salario1;
    salario2 = *ptr + 1000;
}
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir das informações apresentadas, assinale a opção que apresenta a memória principal e seu conteúdo, após o programa ser executado.</p>

                <div class="bg-gray-50 border border-gray-200 rounded p-3 mb-2 text-sm text-gray-700">
                    <p class="font-semibold mb-1">Análise:</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li><code>salario1 = 6750</code> → 0x00001A5E (little-endian: 5E 1A 00 00)</li>
                        <li><code>salario2 = 6750 + 1000 = 7750</code> → 0x00001E46 (little-endian: 46 1E 00 00)</li>
                        <li><code>ptr</code> aponta para <code>salario1</code> → contém o endereço de salario1 (ex: 0x00000070 → 70 00 00 00)</li>
                    </ul>
                </div>
            ',
            'referencia' => '',
            'opcao_a' => 'salario1 = 0x00001A5E; salario2 = 0x00001E46; ptr = endereço de salario1 (ex.: 0x00000070). Valores em little-endian: salario1[5E,1A,00,00], salario2[46,1E,00,00], ptr[70,00,00,00].',
            'opcao_b' => 'salario1 = 0x00001A5E; salario2 = 0x00000458; ptr = endereço de salario1.',
            'opcao_c' => 'salario1 = 0x00001A5E; salario2 = 0x00001A5E; ptr = 0x00000070 (big-endian).',
            'opcao_d' => 'salario1, salario2 e ptr com valores em big-endian invertido.',
            'opcao_e' => 'salario1 = 0x00001A5E; salario2 = 0x00001A60; ptr = endereço de salario1.',
            'alternativa_correta' => 'A',
        ]);

        // =========================================================
        // QUESTÃO 23 — Filtros Digitais / Estabilidade (Gabarito: B)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Os filtros digitais são de grande importância em tratamento de sinais. Com códigos relativamente pequenos, é possível implementar filtros de ordem bastante elevada, o que em circuitos analógicos demandaria uma quantidade considerável de amplificadores operacionais. A seguir, reproduz-se um fragmento de código que implementa um filtro digital estruturado.</p>

                <div class="bg-gray-100 rounded p-3 mb-2 text-sm font-mono whitespace-pre-wrap">
inicio
    defina u, y  numérico  // Entrada e saída respectivas do sistema
    defina x1, x2, xt  numérico  // Variáveis auxiliares
    x1 := 0;
    x2 := 0;
    repita
        leia u;
        y := x1 - x2;
        xt := x1;
        x1 := -x2;
        x2 := 0.5 * xt - x2 + u;
        escreva y;
    fim repita
fim
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. O algoritmo forma um sistema assintoticamente estável, linear, invariante e discreto no tempo.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. Os polos do sistema formado pelo algoritmo estão no semiplano complexo esquerdo, excluindo-se o eixo imaginário.</p>

                <p class="mb-1 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'B',
        ]);

        // =========================================================
        // QUESTÃO 24 — Heurísticas / Busca A* (Gabarito: B)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Heurísticas são regras para escolher aquelas alternativas que têm maior probabilidade de levar a uma solução aceitável para um problema. O grau de informação de uma heurística permite avaliar em que sentido uma heurística é melhor que outra.</p>

                <p class="mb-2 text-justify">Para configurar os movimentos de um robô em uma linha de montagem, foram construídas duas heurísticas, h1 e h2. Ambas são admissíveis, têm como objetivo encontrar a sequência de montagem de menor custo a ser realizada pelo robô e estão baseadas em parâmetros, como quantidade e complexidade de movimentos e custo de mudança de direção.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir das informações apresentadas, assinale a opção correta.</p>
            ',
            'referencia' => 'LUGER, G. F. <b>Inteligência Artificial.</b> São Paulo: Pearson, 2013 (adaptado).',
            'opcao_a' => 'Se o erro de estimativa de h1 for menor que o erro de h2 para qualquer estado do processo de montagem, o custo do caminho resultante da busca baseada em h1 será menor que o da busca baseada em h2.',
            'opcao_b' => 'Se for construída uma heurística h3 = máximo(h1, h2), a heurística h3 terá um grau de informação maior ou igual a h1 e h2, para qualquer estado do processo de montagem.',
            'opcao_c' => 'Se o grau de informação de h2 for superior ao grau de informação de h1, o número de estados expandidos durante o processo de busca, utilizando-se h2, será inferior ao número de estados expandidos utilizando-se h1.',
            'opcao_d' => 'Se as heurísticas h1 e h2 forem consistentes, a heurística h3 = h1 + h2 será uma heurística admissível e consistente para qualquer estado do processo de montagem.',
            'opcao_e' => 'Se a heurística h1 possuir um grau de informação igual a zero, o algoritmo de busca A* irá se comportar como um algoritmo de busca guloso (<i>greedy search</i>), do tipo melhor primeiro (<i>best first</i>).',
            'alternativa_correta' => 'B',
        ]);

        // =========================================================
        // QUESTÃO 25 — Segurança de Redes (Gabarito: D)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Um provedor de serviços de segurança de redes e sistemas distribuídos enumerou três componentes de rede essenciais para a garantia da segurança dos dados corporativos: <i>firewall</i> de rede; sistemas de prevenção e detecção de intrusão; e <i>gateways</i> antivírus.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Acerca desses componentes de rede, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Os <i>gateways</i> antivírus trabalham no nível da camada de rede e verificam o fluxo de dados em busca de assinaturas de vírus conhecidas.',
            'opcao_b' => 'O <i>firewall</i> de rede deve ser configurado para detectar transferência de informação através de um canal camuflado (<i>covert channel</i>) baseado em túneis.',
            'opcao_c' => 'Um <i>firewall</i> de camada de rede (<i>network layer firewall</i>) permite uma filtragem mais detalhada dos dados que um <i>firewall</i> de camada de aplicação (<i>application layer firewall</i>) ao custo de um pior desempenho.',
            'opcao_d' => 'Os sistemas de prevenção de intrusão são vistos como uma extensão do <i>firewall</i> e são capazes de detectar anomalias de tráfego ou conteúdo malicioso antes que eles alcancem a rede.',
            'opcao_e' => 'O sistema de detecção de intrusão é capaz de identificar ataques iniciados dentro da rede protegida e agir proativamente para neutralizar a ameaça.',
            'alternativa_correta' => 'D',
        ]);

        // =========================================================
        // QUESTÃO 26 — Estruturas de Dados / Fila e Pilha (Gabarito: A)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Estruturas de dados, tais como filas e pilhas, são utilizadas em diversas aplicações para automação industrial por meio de linguagens de programação textuais. O texto estruturado (ST) é uma das opções de linguagem de programação definidas pela norma IEC 61131-3. O trecho de código a seguir foi implementado nesse contexto.</p>

                <div class="bg-gray-100 rounded p-3 mb-2 text-sm font-mono whitespace-pre-wrap">
#define MAX 100
struct eventos {
    char ocorrencia[200];
    char dataHora[50];
};
struct eventos eve[MAX];
int inicio = 0;
int fim = 0;

int processaEvento (struct eventos *recuperado) {
    if (inicio == fim) {
        return -1;
    } else {
        inicio++;
        copiaEvento(recuperado, eve[inicio - 1]);
        return 0;
    }
}

int insereEvento (struct eventos *novo) {
    if (fim == MAX) {
        return -1;
    } else {
        copiaEvento(eve[fim], novo);
        fim++;
        return 0;
    }
}
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">É correto afirmar que a estrutura de dados e a funcionalidade desse código tratam-se de</p>
            ',
            'referencia' => '',
            'opcao_a' => 'uma fila que processa primeiro os eventos mais antigos.',
            'opcao_b' => 'uma pilha que processa primeiro os eventos mais antigos.',
            'opcao_c' => 'uma pilha que processa primeiro os eventos mais recentes.',
            'opcao_d' => 'uma pilha que processa os eventos na ordem escolhida pelo operador.',
            'opcao_e' => 'uma fila que processa os eventos de acordo com seu respectivo grau de prioridade.',
            'alternativa_correta' => 'A',
        ]);

        // =========================================================
        // QUESTÃO 27 — Sistema de Monitoramento de Carro / Módulos (Gabarito: D)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Um sistema monitora o deslocamento de um carro por meio do registro em um banco de dados, de segundo em segundo, das medidas de dois acelerômetros: um na direção longitudinal do movimento do carro, outro na direção transversal.</p>

                <p class="mb-2 text-justify">O projeto desse sistema é decomposto em três subprojetos. O primeiro, denominado MÓDULO_1, formado por <i>hardware</i> e <i>software</i>, é embarcado no carro e dotado de sistema de comunicação com a internet por GPRS. O segundo, MÓDULO_2, é um projeto de <i>software</i> aplicativo executado em plataforma Android para <i>tablet</i>, <i>smartphone</i> ou celular, para exibição de relatórios para usuários. O terceiro subprojeto, MÓDULO_3, é formado por <i>hardware</i> e <i>software</i> e instalado em um servidor em nuvem com conexão dedicada permanente com a internet.</p>

                <p class="mb-2 text-justify">O projeto tem as seguintes especificações:</p>
                <ul class="list-disc list-inside mb-2 pl-4 text-sm text-justify space-y-1">
                    <li>o MÓDULO_1 comunica-se com o MÓDULO_3 para enviar as leituras obtidas. Como o carro nem sempre está em área de cobertura de celular, é possível que uma comunicação possa enviar as leituras de até um dia inteiro;</li>
                    <li>o MÓDULO_2 comunica-se com o MÓDULO_3 para obter os dados exibidos no relatório;</li>
                    <li>os relatórios indicam os valores máximos de velocidade e aceleração e as respectivas posições do carro quando eles foram atingidos.</li>
                </ul>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir dessas informações, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O MÓDULO_1 deve ter capacidade de armazenamento de dados suficiente para um dia de leituras, a serem enviadas para o MÓDULO_3.</p>

                <p class="mb-2 pl-6 text-justify">II. Todos os subprojetos têm interface de comunicação pela internet e a interface com o usuário é feita no MÓDULO_2.</p>

                <p class="mb-2 pl-6 text-justify">III. O melhor local para se executar o processamento dos dados para o relatório é o MÓDULO_1, que está sempre conectado e tem maior capacidade de processamento.</p>

                <p class="mb-2 pl-6 text-justify">IV. O melhor local para se instalar o banco de dados para as leituras é o MÓDULO_3, que dispõe de maior capacidade de armazenamento e conexão permanente com a internet.</p>

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

        // =========================================================
        // QUESTÃO 28 — Programação Linear / Problema de Transporte (Gabarito: A)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Em pesquisa operacional, problemas de Programação Linear (PL) são aqueles para os quais a função objetivo e as restrições são todas lineares. Um importante problema prático modelado com PL é o problema do transporte.</p>

                <p class="mb-2 text-justify">Suponha uma situação em que tenhamos K portos, P<sub>1</sub>, P<sub>2</sub>, ..., P<sub>K</sub>, que irão suprir J mercados, M<sub>1</sub>, M<sub>2</sub>, ..., M<sub>J</sub>, com um certo produto. O porto P<sub>i</sub> possui uma quantidade S<sub>i</sub> do produto, sendo i = 1, 2, ..., K, e o mercado M<sub>j</sub> deve receber pelo menos uma quantidade r<sub>j</sub> do produto, sendo j = 1, 2, ..., J. Considere que b<sub>ij</sub> é o custo de transporte de uma unidade do produto do porto P<sub>i</sub> para o mercado M<sub>j</sub>, e y<sub>ij</sub> é a quantidade de produtos despachados do porto P<sub>i</sub> para o mercado M<sub>j</sub>. O problema é suprir as necessidades dos mercados com o custo de transporte mínimo.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base na situação apresentada, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A expressão a ser minimizada é Σ<sub>i=1</sub><sup>K</sup> Σ<sub>j=1</sub><sup>J</sup> y<sub>ij</sub> b<sub>ij</sub> .</p>

                <p class="mb-2 pl-6 text-justify">II. São restrições do problema: Σ<sub>j=1</sub><sup>J</sup> y<sub>ij</sub> ≤ S<sub>i</sub> para i = 1, 2, ..., K.</p>

                <p class="mb-2 pl-6 text-justify">III. São restrições do problema: Σ<sub>i=1</sub><sup>K</sup> y<sub>ij</sub> ≤ r<sub>j</sub> para j = 1, 2, ..., J.</p>

                <p class="mb-2 pl-6 text-justify">IV. A quantidade total despachada para o mercado M<sub>j</sub> é K · y<sub>ij</sub> .</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'II e IV.',
            'opcao_c' => 'III e IV.',
            'opcao_d' => 'I, II e III.',
            'opcao_e' => 'I, III e IV.',
            'alternativa_correta' => 'A',
        ]);

        // =========================================================
        // QUESTÃO 29 — Computação Verde / Virtualização (Gabarito: A)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A computação verde refere-se ao uso ambientalmente responsável de computadores e recursos relacionados. Essas práticas incluem a implementação da eficiência energética em PCs, servidores e periféricos, bem como o consumo reduzido de recursos e a destinação adequada de lixo eletrônico.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. Embora a virtualização contribua para a computação verde, o projeto e a gerência de uma arquitetura virtualizada apresentam problemas.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. Da virtualização podem decorrer problemas de segurança a partir de vulnerabilidades no hospedeiro, além de potencialmente haver maior desgaste das máquinas servidoras e, portanto, maior custo de manutenção.</p>

                <p class="mb-1 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => 'HARRIS, J. G. <b>Computing and green IT best practices on regulations and industry initiatives, virtualization, power management, materials recycling and telecommuting.</b> London: Emereo Pty Ltd, 2008 (adaptado).',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'A',
        ]);

        // =========================================================
        // QUESTÃO 30 — Marco Civil da Internet (Gabarito: A)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Considere que tenha ocorrido o vazamento de imagens íntimas, por meio de aplicativo de comunicação instantânea de celular, disponibilizado por provedor de aplicações, sem autorização das pessoas que aparecem nas imagens.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, de acordo com a Lei n. 12.965/2014, conhecida popularmente como Marco Civil da Internet, o provedor de aplicações de internet poderá</p>
            ',
            'referencia' => '',
            'opcao_a' => 'ser responsabilizado se deixar de remover as imagens disponibilizadas, dentro dos seus limites técnicos.',
            'opcao_b' => 'ser declarado inocente, caso fique provado que as imagens foram disponibilizadas a pedido da vítima.',
            'opcao_c' => 'mover uma ação contra a vítima, pelo uso indevido de seus serviços, por ela ter disponibilizado imagens íntimas na rede.',
            'opcao_d' => 'tornar indisponíveis todas as imagens da vítima compartilhadas e disponíveis na internet.',
            'opcao_e' => 'encerrar seu contrato com a vítima devido à falha de segurança ocorrida.',
            'alternativa_correta' => 'A',
        ]);

        // =========================================================
        // QUESTÃO 31 — Métodos Ágeis / Timboxing (Gabarito: D)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Um dos maiores problemas identificados na área de gerenciamento de projetos de <i>software</i> é o fato de que muitos desses projetos falham em atender ao cronograma, ao orçamento e à qualidade do produto. Métodos ágeis vêm sendo cada vez mais utilizados para evitar esse tipo de problema, pois se baseiam em princípios de adaptação e comunicação, ao contrário de métodos mais antigos, conhecidos como prescritivos, que priorizam a definição de processos bem detalhados que sejam seguidos por toda a equipe.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando esse contexto, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. A técnica de <i>timboxing</i> consiste na fixação prévia, pela equipe, dos prazos para execução do projeto, independentemente do seu ciclo de desenvolvimento.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. É preferível ter os requisitos mais importantes incorporados ao projeto, no prazo definido, a tentar incorporar todos eles e perder o controle do prazo, visto que os requisitos menos importantes podem ser tratados nas etapas finais do ciclo de desenvolvimento do projeto.</p>

                <p class="mb-1 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'D',
        ]);

        // =========================================================
        // QUESTÃO 32 — GPU e Pipeline OpenGL (Gabarito: B)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A unidade de processamento gráfico (GPU, <i>graphics processing unit</i>), originalmente projetada para síntese de imagens de alta qualidade, pode ser encontrada embarcada em uma placa de vídeo dedicada ou integrada diretamente em uma placa-mãe. Entre as suas interfaces de programação de aplicativos, destaca-se a API OpenGL. A versão OpenGL 4.0 abstrai a arquitetura da GPU como um fluxo de renderização que consegue transformar uma especificação dos vértices de objetos de interesse dados em um espaço vetorial para uma imagem digital foto-realística, tirando máximo proveito dos circuitos dedicados de renderização de primitivas básicas, como pontos, segmentos e triângulos.</p>

                <div class="bg-gray-50 border border-gray-200 rounded p-3 mb-2 text-sm text-center text-gray-700">
                    <p class="font-semibold">Pipeline de Renderização OpenGL 4.0</p>
                    <div class="mt-2 text-xs font-mono">
                        Especificação de Vértices → <strong>Vertex Shader</strong> → <strong>Tesselation Shader</strong> → <strong>Geometry Shader</strong> → Montagem de Primitivas Básicas → <strong>Rasterização</strong> → <strong>Fragment Shader</strong> → Operações por Pixel → Imagem
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base no diagrama apresentado e no procedimento de renderização de imagens de malhas triangulares, é correto afirmar que</p>
            ',
            'referencia' => 'Disponível em: https://www.khronos.org. Acesso em: 5 jul. 2017 (adaptado).',
            'opcao_a' => 'os vértices das facetas triangulares de uma malha precisam ter suas coordenadas projetadas no plano da imagem pela aplicação, antes do seu envio para o bloco <i>Vertex Shader</i>.',
            'opcao_b' => 'há procedimentos de otimização, como o descarte de facetas não visíveis e o recorte de uma cena completa em uma subcena enquadrada pelos parâmetros de câmera, antes da passagem para o bloco de Rasterização.',
            'opcao_c' => 'as coordenadas de textura devem ser associadas aos vértices da malha triangular quando se deseja texturizá-la, pois essas coordenadas são utilizadas no bloco <i>Vertex Shader</i> para acesso aos dados de textura.',
            'opcao_d' => 'o modelo de tonalização de Phong, que consiste na interpolação dos vetores normais atribuídos aos vértices, deve ser programado no bloco <i>Vertex Shader</i> para se computar a cor da superfície da malha renderizada.',
            'opcao_e' => 'as informações referentes a posições, cores, vetores normais da superfície, coeficientes do material da superfície e coordenadas de textura dos vértices são suficientes para geração de uma imagem foto-realística.',
            'alternativa_correta' => 'B',
        ]);

        // =========================================================
        // QUESTÃO 33 — Segurança em Banco de Dados / GRANT e DENY (Gabarito: A)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A política de segurança e as ferramentas para sua implementação em um banco de dados é, atualmente, um assunto de grande importância para toda organização que faz uso de sistemas computacionais no seu dia a dia. Não somente a vulnerabilidade a ataques de <i>hackers</i> ou usuários não autorizados, mas também o controle sobre o acesso restrito a determinadas informações são uma constante preocupação dos responsáveis por garantir a segurança e a confidencialidade das informações em um banco de dados.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Os comandos <code>GRANT</code>, <code>DENY</code> e <code>REVOKE</code> são responsáveis por definir as permissões de acesso dos usuários e grupos aos diversos elementos do esquema de um banco de dados.</p>

                <p class="mb-2 pl-6 text-justify">II. Caso o usuário User, integrante do grupo Group1, receba a permissão <code>GRANT SELECT</code> em uma tabela tbla dos, e o Group1 receba uma permissão <code>DENY SELECT</code> na mesma tabela tbla dos, o usuário User conseguirá realizar consultas nessa tabela.</p>

                <p class="mb-2 pl-6 text-justify">III. É vedado a um usuário, tendo recebido determinado grupo de permissões em uma tabela, transmitir esses privilégios para outros usuários.</p>

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

        // =========================================================
        // QUESTÃO 34 — Envelhecimento e Usabilidade de Smartphones (Gabarito: D)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O envelhecimento é um conjunto de alterações físicas e fisiológicas, como perda de memória, perda de coordenação e habilidades motoras finas, diminuição da capacidade auditiva, da sensibilidade tátil e da acuidade visual. Levando em consideração os principais elementos de interface dos modelos de <i>smartphones</i> dominantes no mercado, como tela sensível ao toque, gavetas de aplicativos representados por ícones e realimentação auditiva, a usabilidade desses modelos pode dificultar a acessibilidade dos idosos ao ambiente hipermídia móvel proporcionado por eles.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando esse contexto, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. O baixo nível de acessibilidade da população idosa aos <i>smartphones</i> revela a exclusão social na terceira idade.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. Os tipos de possibilidades de interação, também conhecidos como <i>affordance</i>, providos pelos <i>smartphones</i>, têm um impacto negativo nos idosos em termos de usabilidade.</p>

                <p class="mb-1 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => 'Disponível em: http://www.periodicos.puc-rio.br. Acesso em: 6 jul. 2017 (adaptado).',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'D',
        ]);

        // =========================================================
        // QUESTÃO 35 — Algoritmo de Dijkstra / Custos das Arestas (Gabarito: C)
        // =========================================================
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2017,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Em um algoritmo de roteamento de estado de enlace, a topologia da rede e todos os custos de enlace são conhecidos. Isso é alcançado fazendo-se cada nó transmitir pacotes de estado de enlace a todos os outros nós da rede, uma vez que cada um desses pacotes contém as identidades e os custos dos enlaces ligados a ele.</p>

                <p class="mb-2 text-justify">O algoritmo de Dijkstra pode ser usado para calcular o caminho de menor custo entre um nó de origem e todos os outros nós da rede. Durante sua execução, este algoritmo atualiza o vetor D, sendo D(v) o custo do caminho de menor custo entre o nó de origem e o nó v.</p>

                <p class="mb-2 text-justify">O grafo a seguir representa uma rede de roteadores. As arestas são rotuladas com os respectivos custos de cada ligação.</p>

                <div class="bg-gray-50 border border-gray-200 rounded p-3 mb-2 text-sm text-center text-gray-700">
                    <p class="font-semibold">Rede com 7 roteadores (1 a 7) — Arestas A, B, C, D, E, F</p>
                    <p class="mt-1 text-xs">Após a execução do algoritmo de Dijkstra pelo roteador 1, o vetor D retornou os seguintes valores:</p>
                    <div class="overflow-x-auto mt-2">
                        <table class="mx-auto border-collapse text-sm text-center">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="border border-gray-400 px-3 py-1">Nó</th>
                                    <th class="border border-gray-400 px-3 py-1">1</th>
                                    <th class="border border-gray-400 px-3 py-1">2</th>
                                    <th class="border border-gray-400 px-3 py-1">3</th>
                                    <th class="border border-gray-400 px-3 py-1">4</th>
                                    <th class="border border-gray-400 px-3 py-1">5</th>
                                    <th class="border border-gray-400 px-3 py-1">6</th>
                                    <th class="border border-gray-400 px-3 py-1">7</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-400 px-3 py-1 font-semibold">D</td>
                                    <td class="border border-gray-400 px-3 py-1">0</td>
                                    <td class="border border-gray-400 px-3 py-1">3</td>
                                    <td class="border border-gray-400 px-3 py-1">2</td>
                                    <td class="border border-gray-400 px-3 py-1">4</td>
                                    <td class="border border-gray-400 px-3 py-1">5</td>
                                    <td class="border border-gray-400 px-3 py-1">7</td>
                                    <td class="border border-gray-400 px-3 py-1">8</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="mt-2 text-xs text-gray-500">Topologia: 1–(A)–3, 1–(B)–2, 3–(C)–4, 2–(D)–4, 4–(E)–5, 5–(F)–7, e outros enlaces conforme os custos acima.</p>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse cenário, quais são os custos das arestas A, B, C, D, E e F, respectivamente?</p>
            ',
            'referencia' => 'KUROSE, J. F. <b>Redes de computadores e a Internet: uma abordagem top-down.</b> São Paulo: Pearson Education do Brasil, 2013 (adaptado).',
            'opcao_a' => '1, 2, 3, 2, 4 e 1.',
            'opcao_b' => '1, 2, 1, 2, 1 e 4.',
            'opcao_c' => '2, 1, 1, 4, 2 e 1.',
            'opcao_d' => '2, 1, 3, 1, 2 e 1.',
            'opcao_e' => '1, 1, 3, 4, 1 e 1.',
            'alternativa_correta' => 'C',
        ]);
    }
}
