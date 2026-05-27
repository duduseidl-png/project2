<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class Questoes_Engenharia_de_Computacao_2023 extends Seeder
{
    public function run(): void
    {
        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Os resistores são dispositivos utilizados com finalidade de limitar a corrente elétrica em um circuito elétrico. Eles conseguem desempenhar essa função por apresentarem a propriedade da resistência elétrica, que é a capacidade de um corpo se opor à passagem de corrente elétrica. Diversos materiais podem ser utilizados como resistores, tais como níquel-cromo, carbono e grafite.</p>

                <p class="mb-2 text-justify">Diante disso, considere uma situação hipotética em que seja preciso construir resistores cilíndricos na forma da figura a seguir, a fim de serem utilizados em um circuito de corrente contínua que possui tensão igual a 12 V. Na figura, L representa o comprimento do material e A representa a área de seção transversal.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <img src="/img/questoes/engenharia_de_computacao/img7.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>

                <p class="mb-2 text-justify">Observe, também, a tabela a seguir, a qual especifica características de três tipos de materiais utilizados para fabricação dos resistores hipotéticos, como a resistividade <strong>ρ</strong>, o comprimento L e a área A.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <img src="/img/questoes/engenharia_de_computacao/img8.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>       
            ',
            'enunciado' => ' 
                <p class="mb-2 text-justify">Com base nessas informações, é correto afirmar que, a fim de se obter a configuração de resistores viável para se ter uma corrente menor do que 300 mA, é preciso utilizar apenas</p>              
            ',
            'referencia' => '',
            'opcao_a' => '2 resistores de grafite em série.',
            'opcao_b' => '3 resistores de carbono em série.',
            'opcao_c' => '2 resistores de grafite em paralelo.',
            'opcao_d' => '2 resistores de carbono em paralelo.',
            'opcao_e' => '3 resistores de níquel-cromo em série.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">O  protocolo  de  roteamento  interno  OSPF  (open  shortest  path  first)  representa  um sistema autônomo (SA) como um grafo ponderado, em que roteadores são os vértices, conexões entre os roteadores são as arestas e atrasos nas conexões são os pesos. No OSPF, a identificação de cada conexão e seu respectivo atraso são passados de roteador em roteador até que todos os roteadores formem uma base de dados com o grafo que descreve o SA. O OSPF utiliza uma versão distribuída do algoritmo de caminhos mínimos de Dijkstra para computar as melhores rotas para todos os possíveis destinos e para produzir as tabelas de rotas para cada roteador. Cada rota computada é a que apresenta o menor valor para a soma dos atrasos nas conexões usadas na rota entre a rede de origem e a rede de destino.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Acerca do protocolo OSPF e com base nas informações apresentadas no texto, avalie as afirmações a seguir.</p>
                
                <p class="mb-2 pl-6 text-justify">I. Quando há diferentes caminhos possíveis entre uma origem e um destino, a rota selecionada é a que apresenta o menor número de conexões.</p>
                <p class="mb-2 pl-6 text-justify">II. Há uma instância da base de dados relativa a conexões e a atrasos, formando o grafo que descreve o SA em cada roteador que compõe o SA.</p>
                <p class="mb-2 pl-6 text-justify">III. O algoritmo de Dijkstra é executado por um único roteador dentro do SA e a tabela de rotas resultante é passada para todos os roteadores no SA.</p>
                <p class="mb-2 pl-6 text-justify">IV. Para todos os roteadores dentro de um SA, há a necessidade de tráfego de informações acerca de atrasos e de conexões entre roteadores.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => 'Disponível em: https://memoria.rnp.br/newsgen/9705/n1-1.html. Acesso em: 1 mar. 2023 (adaptado).',
            'opcao_a' => 'I e III.',
            'opcao_b' => 'II e III.',
            'opcao_c' => 'II e IV.',
            'opcao_d' => 'I, II e IV.',
            'opcao_e' => 'I, III e IV.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Uma relação <b>R</b> em um conjunto <b>S</b> é uma relação de equivalência se ela satisfizer todas as propriedades a seguir:</p>
                <p class="mb-2 text-justify">1. Reflexividade. Para todo <i>a</i> &isin; <b>S</b>, <i>a</i> <b>R</b> <i>a</i>;</p>
                <p class="mb-2 text-justify">2. Simetria. Para todos <i>a</i>, <i>b</i> &isin; <b>S</b>, a <b>R</b> <i>b</i> &hArr; <i>b</i> <b>R</b> <i>a</i>;
                <p class="mb-2 text-justify">3. Transitividade. Para todos <i>a</i>, <i>b</i>, c &isin; <b>S</b>, se a <b>R</b> <i>b</i> e <i>b</i> <b>R</b> <i>c</i>, então, a <b>R</b> <i>c</i>.</p>

                <p class="mb-2 text-justify">Uma partição de um conjunto <b>S</b> é uma coleção de subconjuntos disjuntos não vazios, cuja união é igual a <b>S</b>. Se <b>R</b> é uma relação de equivalência em um conjunto <b>S</b> e se <i>x</i> &isin; <b>S</b>, denota-se por [<i>x</i>] o conjunto de todos os elementos relacionados a <i>x</i> em <b>S</b> e chama-se esse conjunto de classe de equivalência de <i>x</i>.</p>

                <p class="text-sm text-right mb-4">GERSTING, J. L. <b>Fundamentos matemáticos para a ciência da computação:</b> um tratamento moderno de matemática discreta. 5. ed. Rio de Janeiro: LTC, 2008 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir dessas informações, considere que, em um cluster computacional, haja 10 computadores com configurações de hardware diferentes. Os administradores desse cluster pretendem desenvolver um algoritmo de escalonamento de tarefas que mantenha processos de uma mesma aplicação sendo executados em máquinas semelhantes, mesmo com estruturas arquiteturais distintas. Assim, os administradores fizeram uma tabela relacionando os computadores. Essa tabela foi montada considerando pares de computadores. Dessa forma, dois computadores do cluster fazem parte de uma linha na tabela se possuem alguma característica semelhante, ou seja, se apresentam algum tipo de relacionamento (por exemplo, quantidade de memória ou de núcleos de processamento semelhantes). Obviamente, apesar de não estar evidente na tabela, um computador também tem relação consigo mesmo.</p>
                <p class="mb-2 text-justify">Os computadores estão numerados de 1 até 10 e a tabela resultante pode ser vista a seguir.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-2/5 md:w-2/5">
                        <img src="/img/questoes/engenharia_de_computacao/img9.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>  

                <p class="mb-2 text-justify">Com base nesse cenário e no conceito de relações de equivalência, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'A relação descrita pela tabela é uma relação de equivalência.',
            'opcao_b' => 'A relação descrita pela tabela apresenta a propriedade de simetria, mas não a de transitividade.',
            'opcao_c' => 'A relação descrita pela tabela apresenta a propriedade de transitividade, mas não a de simetria.',
            'opcao_d' => 'O subconjunto de computadores representados pelos números 1, 3, 5, 7 e 10 forma uma classe de equivalência.',
            'opcao_e' => 'O subconjunto de computadores representados pelos números 2, 3, 4, 8 e 9 forma uma classe de equivalência.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Uma forma sistemática de analisar circuitos elétricos de qualquer tamanho, visando à simulação em computadores, consiste em representá-los por meio de grafos. Essa representação implica a substituição dos elementos do ramo do circuito por uma conexão orientada (arco) e de nós do circuito por vértices, resultando em um grafo orientado. A orientação dos arcos coincide com a orientação dos sentidos de referência associados de tensão e corrente, adotados pela convenção passiva.</p>
                <p class="mb-2 text-justify">Grafos são ditos conexos se existir, ao menos, um caminho entre quaisquer dois nós. Corte refere-se a um conjunto de arcos que, se removido, divide o grafo (tornando-o desconexo). A lei de Kirchoff das correntes, usando a nomenclatura de grafos, pode ser enunciada como “para qualquer rede de parâmetros concentrados e para qualquer de seus cortes, a soma algébrica de todas as correntes através dos arcos do corte é zero.”</p>

                <p class="text-sm text-right mb-4">Disponível em: http://www.peb.ufrj.br/. Acesso em: 16 jun. 2023 (adaptado).</p>

                <p class="mb-2 text-justify">A figura a seguir representa um circuito elétrico e o seu grafo equivalente.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <img src="/img/questoes/engenharia_de_computacao/img10.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div> 
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Após aplicar a lei de Kirchoff das correntes para os cortes <i>X</i> = {1, 4, 5}, <i>Y</i> = {1, 2, 3, 5} e <i>Z</i> = {1, 4, 3, 6}, assinale a opção que apresenta equações válidas para a soma algébrica das correntes em dois desses cortes.</p>       
            ',
            'referencia' => '',
            'opcao_a' => '<div class="option-content inline-math" style="display: inline-block; font-family: \'Times New Roman\', serif; font-size: inherit;"><i>I<sub>1</sub></i> + <i>I<sub>4</sub></i> - <i>I<sub>5</sub></i> = <i>0</i> e <i>I<sub>1</sub></i> + <i>I<sub>2</sub></i> + <i>I<sub>3</sub></i> - <i>I<sub>5</sub></i> = <i>0</i></div>',
            'opcao_b' => '<div class="option-content inline-math" style="display: inline-block; font-family: \'Times New Roman\', serif; font-size: inherit;"><i>I<sub>1</sub></i> + <i>I<sub>4</sub></i> + <i>I<sub>5</sub></i> = <i>0</i> e <i>I<sub>1</sub></i> + <i>I<sub>2</sub></i> + <i>I<sub>3</sub></i> + <i>I<sub>5</sub></i> = <i>0</i></div>',
            'opcao_c' => '<div class="option-content inline-math" style="display: inline-block; font-family: \'Times New Roman\', serif; font-size: inherit;"><i>I<sub>1</sub></i> + <i>I<sub>4</sub></i> + <i>I<sub>5</sub></i> = <i>0</i> e <i>I<sub>1</sub></i> + <i>I<sub>3</sub></i> + <i>I<sub>4</sub></i> - <i>I<sub>6</sub></i> = <i>0</i></div>',
            'opcao_d' => '<div class="option-content inline-math" style="display: inline-block; font-family: \'Times New Roman\', serif; font-size: inherit;"><i>I<sub>1</sub></i> + <i>I<sub>2</sub></i> - <i>I<sub>3</sub></i> - <i>I<sub>5</sub></i> = <i>0</i> e <i>I<sub>1</sub></i> + <i>I<sub>3</sub></i> + <i>I<sub>4</sub></i> - <i>I<sub>6</sub></i> = <i>0</i></div>',
            'opcao_e' => '<div class="option-content inline-math" style="display: inline-block; font-family: \'Times New Roman\', serif; font-size: inherit;"><i>I<sub>1</sub></i> + <i>I<sub>2</sub></i> - <i>I<sub>3</sub></i> - <i>I<sub>5</sub></i> = <i>0</i> e <i>I<sub>1</sub></i> - <i>I<sub>3</sub></i> + <i>I<sub>4</sub></i> - <i>I<sub>6</sub></i> = <i>0</i></div>',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Uma lista pode ser dividida em duas partes: o primeiro elemento (a cabeça da lista) e os demais elementos (sua cauda). Por exemplo, em uma lista de inteiros [1, 2, 3, 4], a cabeça dessa lista é o valor inteiro 1, enquanto sua cauda é a lista de inteiros [2, 3, 4]. Uma lista vazia é representada por [ ].</p>
                <p class="mb-2 text-justify">O código a seguir define duas funções descritas em uma linguagem de programação funcional que manipulam listas de inteiros. A função enade recebe uma lista de inteiros e produz uma nova lista de inteiros. A função auxiliar é chamada pela função enade e possui dois parâmetros: um número inteiro e uma lista de inteiros. Essa função produz uma lista de inteiros.</p>

                <div style=" color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">
                    <p class="mb-2 text-justify">enade :: [Int] -> [Int]</p>
                    <p class="mb-2 text-justify">enade [] = []</p>
                    <p class="mb-2 text-justify">enade (cabeca:cauda) = auxiliar cabeca (enade cauda)</p>
                    <p class="mb-2 text-justify">auxiliar :: Int -> [Int] -> [Int]</p>
                    <p class="mb-2 text-justify">auxiliar x [] = [x]</p>
                    <p class="mb-2 text-justify">auxiliar x (cabeca:cauda)</p>
                    <p class="mb-2 pl-6 text-justify">| (x `mod` 2 == 0) = x:cabeca:cauda</p>
                    <p class="mb-2 pl-6 text-justify">| otherwise = cabeca:auxiliar x cauda</p>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando o código apresentado, é correto afirmar que se a função enade for executada recebendo como parâmetro de entrada a lista [1, 2, 3, 4, 5, 6, 7, 8], o resultado será</p>       
            ',
            'referencia' => '',
            'opcao_a' => '[ ].',
            'opcao_b' => '[2, 4, 6, 8].',
            'opcao_c' => '[1, 2, 3, 4, 5, 6, 7, 8].',
            'opcao_d' => '[2, 4, 6, 8, 1, 3, 5, 7].',
            'opcao_e' => '[2, 4, 6, 8, 7, 5, 3, 1].',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify"><i>Memory leak</i>, ou vazamento de memória, é um problema que ocorre em sistemas computacionais quando uma parte da memória, alocada para uma determinada operação, não é liberada quando se torna desnecessária. Na linguagem C, esse tipo de problema é quase sempre relacionado ao uso incorreto das funções malloc( ) e free( ). Esse erro de programação pode levar a falhas no sistema se a memória for completamente consumida.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir dessas informações, assinale a opção que apresenta um trecho com <i>memory leak</i>.</p>       
            ',
            'referencia' => '',
            'opcao_a' => '<div style="display: inline-block; vertical-align: top; color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">void f( ) {
                            <p class="mb-0 pl-4 text-justify">void *s;</p>
                            <p class="mb-0 pl-4 text-justify">s = malloc(50);</p>
                            <p class="mb-0 pl-4 text-justify">free(s);</p>
                            <p class="mb-0 text-justify">}</p>
                        </div>
            ',
            'opcao_b' => '<div style="display: inline-block; vertical-align: top; color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">int f( ) {
                            <p class="mb-0 pl-4 text-justify">float *a;</p>
                            <p class="mb-0 pl-4 text-justify">return 0;</p>
                            <p class="mb-0 text-justify">}</p>
                        </div>
            ',
            'opcao_c' => '<div style="display: inline-block; vertical-align: top; color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">int f(char *data) { 
                            <p class="mb-0 pl-4 text-justify">void *s;</p>
                            <p class="mb-0 pl-4 text-justify">s = malloc(50);</p>
                            <p class="mb-0 pl-4 text-justify">int size = strlen(data);</p>
                            <p class="mb-0 pl-4 text-justify">if (size > 50)</p>
                            <p class="mb-0 pl-10 text-justify">return(-1);</p>
                            <p class="mb-0 pl-4 text-justify">free(s);</p>
                            <p class="mb-0 pl-4 text-justify">return 0;</p>
                            <p class="mb-0 text-justify">}</p>   
                        </div>                    
            ',
            'opcao_d' => '<div style="display: inline-block; vertical-align: top; color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">int *f(int n) {
                            <p class="mb-0 pl-4 text-justify">int *num = malloc(sizeof(int)*n);</p>
                            <p class="mb-0 pl-4 text-justify">return num;</p>
                            <p class="mb-0 text-justify">}</p>

                            <p class="mb-0 text-justify">int main(void){</p>
                            <p class="mb-0 pl-4 text-justify">int *num;</p>
                            <p class="mb-0 pl-4 text-justify">num = f(10);</p>
                            <p class="mb-0 pl-4 text-justify">free(num);</p>
                            <p class="mb-0 pl-4 text-justify">return 0;</p>
                            <p class="mb-0 text-justify">}</p> 
                        </div>                     
            ',
            'opcao_e' => '<div style="display: inline-block; vertical-align: top; color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">void f(int n) {
                            <p class="mb-0 pl-4 text-justify">char *m = malloc(10);</p>
                            <p class="mb-0 pl-4 text-justify">char *n = malloc(10);</p>
                            <p class="mb-0 pl-4 text-justify">free(m);</p>
                            <p class="mb-0 pl-4 text-justify">m = n;</p>
                            <p class="mb-0 pl-4 text-justify">free(m);</p>
                            <p class="mb-0 pl-4 text-justify">free(n);</p>
                            <p class="mb-0 text-justify">}</p>
                        </div>
            ',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Na programação de sistemas embarcados, algumas posições de memória servem para diferentes propósitos, não apenas para armazenar valores. Em algumas dessas memórias, cada um dos <i>bits</i> possui um significado diferente, sendo necessário manipulá-los individualmente ou em pequenos grupos. Por isso, o conhecimento da álgebra booliana, bem como dos operadores utilizados para realizar operações binárias nas linguagens de programação, é essencial para o desenvolvimento desse tipo de sistema.</p>               
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir dessas informações, observe o código apresentado a seguir, escrito na linguagem C, que faz uso de operações binárias sobre variáveis inteiras.</p>
                
                <div style=" color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">
                    <p class="mb-0 text-justify">#include <stdio.h></p>
                    <p class="mb-0 text-justify">int main()</p>
                    <p class="mb-0 text-justify">{</p>

                    <p class="mb-0 pl-4 text-justify">int a, b;</p>
                    <p class="mb-0 pl-4 text-justify">int x, y, z;</p>
                    <p class="mb-0 pl-4 text-justify">scanf("%d %d", &a, &b);</p>
                    <p class="mb-0 pl-4 text-justify">x = a; y = b; z = a + b;</p>
                    <p class="mb-0 pl-4 text-justify">while (a) {</p>

                    <p class="mb-0 pl-8 text-justify">x = x | b;</p>
                    <p class="mb-0 pl-8 text-justify">y = y ^ a;</p>
                    <p class="mb-0 pl-8 text-justify">z = z & (a+b);</p>
                    <p class="mb-0 pl-8 text-justify">a = a >> 1;</p>
                    <p class="mb-0 pl-8 text-justify">b = b << 1;</p>
                    <p class="mb-0 pl-4 text-justify">}</p>

                    <p class="mb-0 pl-4 text-justify">printf ("%d %d %d\n", x, y, z);</p>
                    <p class="mb-0 pl-4 text-justify">return 0;</p>
                    <p class="mb-0 text-justify">}</p>
                </div>

               <p class="mb-2 text-justify">Após a chamada desse programa, caso o usuário entre com os valores 10 e 1, nessa ordem, qual será, exatamente, o valor da saída do programa?</p>
            ',
            'referencia' => 'ALMEIDA, R. M.; MORAES, C. H. V.; SERAPHIM, T. F. P. <b>Programação de Sistemas Embarcados:</b> desenvolvendo software para microcontroladores em linguagem C. Rio de Janeiro: Elsevier, 2016 (adaptado).',
            'opcao_a' => '10    1   0',
            'opcao_b' => '10    1   11',
            'opcao_c' => '11    11  11',
            'opcao_d' => '15    12  2',
            'opcao_e' => '15    13  0',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Dada uma sequência de caracteres <i>S</i> = <i>s<sub>1</sub>,</i> <i>s<sub>2</sub>,</i> <i>...,</i> <i>s<sub>n</sub></i>, uma subsequência de <i>S</i> é dada pela remoção de zero ou mais caracteres de <i>S</i>. Formalmente, a sequência <i>X</i> = <i>x<sub>1</sub>,</i> <i>x<sub>2</sub>,</i> <i>...,</i> <i>x<sub>k</sub></i> é subsequência de <i>S</i> se existe uma sequência crescente de índices <i>i<sub>1</sub>,</i> <i>...,</i> <i>i<sub>k</sub></i> de <i>S</i>, tal que <i>x<sub>j</sub></i> = <i>S<sub>ij</sub></i> para todo <i>j</i> = <i>1, 2, ..., k</i>. Define-se, também, um prefixo da sequência <i>S</i> com comprimento <i>i</i> para <i>i</i> = <i>0, ..., n,</i> como <i>S<sub>i</sub></i> = <i>s<sub>1</sub>,</i> <i>s<sub>2</sub>,</i> <i>...,</i> <i>s<sub>i</sub>,</i>.</p>
                <p class="mb-2 text-justify">O problema da Subsequência Comum Mais Longa (LCS) e suas variações, definido a seguir, pode ser utilizado em análise de textos e em bioinformática. O problema da LCS pressupõe duas sequências de caracteres <i>A</i> = <i>a<sub>1</sub>,</i> <i>a<sub>2</sub>,</i> <i>...,</i> <i>a<sub>n</sub></i> e <i>B</i> = <i>b<sub>1</sub>,</i> <i>b<sub>2</sub>,</i> <i>...,</i> <i>b<sub>m</sub>,</i> de comprimentos <i>n</i> e <i>m</i>, respectivamente. Dadas essas duas sequências, é preciso encontrar uma sequência de maior comprimento possível que seja, simultaneamente, subsequência de <i>A</i> e de <i>B</i>.</p>
                <p class="mb-0 text-justify">A partir dessas informações, considere que <i>Z</i> = <i>z<sub>1</sub>,</i> <i>z<sub>2</sub>,</i> <i>...,</i> <i>z<sub>k</sub></i> seja uma LCS das sequências <i>A</i> e <i>B</i>.</p>
                <p class="mb-2 text-justify">Em relação ao problema da LCS, avalie as afirmações a seguir.</p>
                
               
                <p class="mb-2 pl-6 text-justify">I. Se <i>a<sub>n</sub></i> = <i>b<sub>m</sub>,</i> então <i>z<sub>k</sub>,</i> = <i>a<sub>n</sub>,</i> <i>z<sub>k</sub></i> = <i>b<sub>m</sub></i> e <i>Z<sub>k-1</sub></i> é uma LCS de <i>A<sub>n-1</sub></i> e <i>B<sub>m-1</sub></i>.</p>
                <p class="mb-2 pl-6 text-justify">II. Se <i>a<sub>n</sub></i> &ne; <i>b<sub>m</sub></i> e <i>z<sub>k</sub></i> &ne; <i>a<sub>n</sub>,</i> então <i>Z</i> é uma LCS de <i>A<sub>n-1</sub></i> e <i>B</i>.</p>
                <p class="mb-2 pl-6 text-justify">III. Seja <i>lcs(i,j)</i> o comprimento da LCS entre <i>A<sub>i</sub></i> e <i>B<sub>j</sub></i>. Para <i>i, j > 0,</i> se <i>a<sub>i</sub></i> &ne; <i>b<sub>j</sub></i>, então <i>lcs(i,j)</i> = <i>min{lcs(i, j-1), lcs(i-1, j)}</i>.</p>
                <p class="mb-2 pl-6 text-justify">IV. Seja <i>lcs(i,j)</i> o comprimento da LCS entre <i>A<sub>i</sub></i> e <i>B<sub>j</sub></i>. Para <i>i, j > 0</i>, se <i>a<sub>i</sub></i> = <i>b<sub>j</sub></i>, então <i>lcs(i,j)</i> = <i>lcs(i-1,j-1)+1</i>.</p>    
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>       
            ',
            'referencia' => '',
            'opcao_a' => 'I e III.',
            'opcao_b' => 'I e IV.',
            'opcao_c' => 'II e III.',
            'opcao_d' => 'I, II e IV.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => '',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Vetores de tamanho dinâmico são muito utilizados como estruturas de dados para armazenar listas e tabelas de dispersão (tabelas <i>hash</i>). Essa representação permite que o número máximo de elementos a ser inserido não precise ser pré-determinado. Uma técnica para implementar vetores de tamanho dinâmico é aquela que dobra o tamanho do vetor quando o número de itens a ser armazenado ultrapassa o tamanho atual do vetor. Essa operação requer uma alocação de memória para conter o vetor com o dobro do tamanho atual e a realização de cópia dos elementos para o novo vetor. Com base nessas informações, considere uma lista linear implementada com um vetor dinâmico. Assuma que todos os itens inseridos na lista tenham o mesmo tamanho e que o vetor tenha tamanho inicial para comportar apenas 1 item.</p>
                <p class="mb-2 text-justify"></p>

                <p class="mb-2 text-justify"></p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando uma sequência de <i>n</i> inserções no final dessa lista, o tempo médio por inserção e o tempo total gasto para executar todas as <i>n</i> operações são, respectivamente, da ordem de</p>       
            ',
            'referencia' => '',
            'opcao_a' => '&Theta;(log <i>n</i>) e &Theta;(<i>n</i> log <i>n</i>).',
            'opcao_b' => '&Theta;(1) e &Theta;(<i>n</i>).',
            'opcao_c' => '&Theta;(1) e &Theta;(<i>n</i><sup>2</sup>).',
            'opcao_d' => '&Theta;(<i>n</i>) e &Theta;(<i>n</i><sup>2</sup>).',
            'opcao_e' => '&Theta;(&radic;<i>n</i>) e &Theta;(<i>n</i><sup>3/2</sup>).',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">É chamado de compilação o processo de conversão do código escrito pelo programador para um arquivo binário que o computador consegue executar. Esse processo é realizado por um programa chamado compilador. Entre as diversas tarefas de um compilador, destaca-se a de identificar os possíveis erros sintáticos e semânticos. Com base nessas informações, considere uma linguagem de programação em que a sintaxe de uma operação aritmética seja dada pela seguinte gramática livre de contexto:</p>
                <p class="mb-2 text-justify">S → var = E; | var = E; S</p>
                <p class="mb-2 text-justify">E → E + E | E - E | E * E | E/E | E(E) | var</p>
                <p class="mb-2 text-justify">Inspirado nessa gramática, um profissional submete a seguinte sentença ao compilador dessa linguagem de programação:</p>
                <p class="mb-2 text-justify">a = a / (b - b);</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base na gramática da linguagem de programação e acerca do processo de análise sintática e semântica da sentença proposta pelo profissional, é correto afirmar que</p>
            ',
            'referencia' => '',
            'opcao_a' => 'a gramática gera a sentença apresentada e o erro presente na expressão está fora do escopo das análises sintática e semântica.',
            'opcao_b' => 'a gramática gera a sentença apresentada, porém o analisador semântico transmitirá uma mensagem de erro.',
            'opcao_c' => 'o analisador léxico transmitirá uma mensagem de erro, pois a gramática não gera a sentença apresentada.',
            'opcao_d' => 'o analisador semântico transmitirá uma mensagem de erro, pois a gramática não gera a sentença apresentada.',
            'opcao_e' => 'a gramática gera a sentença apresentada, porém o analisador léxico transmitirá uma mensagem de erro.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Computação em nuvem representa um conceito relativo ao compartilhamento de recursos, tais como capacidade de processamento, armazenamento, comunicação de dados e pessoal qualificado para manter sistemas computacionais disponíveis na internet. Quando esse compartilhamento constitui um serviço disponível para qualquer pessoa, o serviço é conhecido como nuvem pública. Quando as mesmas tecnologias são empregadas para uma única empresa, não permitindo que terceiros utilizem parte dos recursos, temos uma nuvem privada.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as vantagens que o gerente de uma empresa espera obter na contratação de um serviço de nuvem pública, avalie as afirmações a seguir.</p>
                
                <p class="mb-2 pl-6 text-justify">I. Um serviço de nuvem pública proporciona a redução de custos operacionais, pois é possível dimensionar a necessidade desses recursos com base na demanda, visto que há momentos em que a empresa precisa de mais recursos e há momentos em que ela precisa de menos recursos.</p>
                <p class="mb-2 pl-6 text-justify">II. Um serviço de nuvem pública gera aumento da velocidade de execução do <i>software</i> e de acesso ao <i>software</i> a partir de qualquer localidade, pois a nuvem pública garante acesso rápido em qualquer parte do mundo, o que contrasta com um servidor localizado na cidade da empresa.</p>
                <p class="mb-2 pl-6 text-justify">III. Um serviço de nuvem pública viabiliza a redução do investimento inicial com equipamentos, com infraestrutura e com pessoal para iniciar a operação, visto que torna possível adiar a instalação desses recursos na empresa até que a operação se demonstre economicamente viável.</p>
                <p class="mb-2 pl-6 text-justify">IV. Um serviço de nuvem pública propicia aumento de segurança da informação, pois as rotinas de segurança são responsabilidade do administrador da nuvem pública, não do contratante, o que contrasta com um servidor localizado dentro da empresa.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'I e III.',
            'opcao_c' => 'II e IV.',
            'opcao_d' => 'I, III e IV.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">A fim de melhorar a qualidade de vida de seus cidadãos e de criar eficiência nos serviços e nas operações urbanas, um grupo de vereadores de uma pequena cidade decidiu fazer algumas propostas de lei que, se aprovadas e devidamente implementadas, tendem a aproximar a cidade do conceito de “cidade inteligente” por meio da implementação de novos sistemas de <i>software</i>. O grupo de vereadores, preocupado com acessibilidade, consultou especialistas da área de interação humano-computador (IHC) e levantou informações a respeito de fundamentos de acessibilidade em IHC. Entre eles, estão os seguintes:</p>
                <p class="mb-2 text-justify">Fundamento 1. Um produto ou serviço é <b>equitativo</b> quando é projetado de modo que possa atender a todos os usuários, independentemente de suas habilidades físicas, sensoriais ou cognitivas.</p>
                <p class="mb-2 text-justify">Fundamento 2. Um produto ou serviço deve ter <b>informações perceptíveis</b>, o que pode envolver o uso de recursos como, por exemplo, texto alternativo para imagens ou contrastes de cores suficientes para usuários com deficiências visuais ou com daltonismo.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando esse contexto, avalie as afirmações a seguir.</p>
                
                <p class="mb-2 pl-6 text-justify">I. Uma lei que prevê que semáforos devem exibir ícones universais associados a cada uma de suas cores está relacionada ao Fundamento 1.</p>
                <p class="mb-2 pl-6 text-justify">II. Ainda que esteja relacionado à acessibilidade em IHC, o Fundamento 1 deixa de tratar da inclusão de pessoas cegas.</p>
                <p class="mb-2 pl-6 text-justify">III.	Dado que a cidade possui uma página na <i>web</i> para a obtenção de informações, uma lei que preveja a existência de telas digitais públicas que permitam o acesso às informações disponibilizadas é suficiente para caracterizar a aplicação do Fundamento 2.</p>

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

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Considere um banco de dados relacional formado por três tabelas, conforme é apresentado na figura a seguir. As chaves primárias das tabelas cliente e funcionario são chaves estrangeiras da tabela pessoa.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <img src="/img/questoes/engenharia_de_computacao/img11.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>

                <p class="mb-2 text-justify">A partir dessas informações, considere que se queira realizar uma consulta que liste o nome e o saldo devedor de um subconjunto dos clientes. Essa consulta tem por objetivo encontrar clientes que são funcionários e que possuem saldo devedor maior do que seu salário.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nessas informações, assinale a opção que apresenta corretamente a consulta SQL, em ordem crescente por saldo devedor.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'SELECT * FROM cliente as c INNER JOIN pessoa as p, funcionario as f WHERE c.saldo_devedor > f.salario AND c.id_cliente=p.id_pessoa AND f.id_funcionario=p.id_pessoa ORDER BY c.saldo_devedor ASC',
            'opcao_b' => 'SELECT p.nome, c.saldo_devedor FROM cliente as c, pessoa as p WHERE c.saldo_devedor > f.salario AND c.id_cliente=p.id_pessoa AND f.id_funcionario=p.id_pessoa ORDER BY c.saldo_devedor DESC',
            'opcao_c' => 'SELECT p.nome, c.saldo_devedor FROM cliente as c, pessoa as p, funcionario as f WHERE c.saldo_devedor < f.salario AND c.id_cliente=p.id_pessoa AND f.id_funcionario=p.id_pessoa ORDER BY c.saldo_devedor ASC',
            'opcao_d' => 'SELECT p.nome, c.saldo_devedor FROM cliente as c LEFT OUTER JOIN pessoa as p on c.id_cliente=p.id_pessoa LEFT OUTER JOIN funcionario as f on p.id_pessoa=f.id_funcionario WHERE c.saldo_devedor > f.salario ORDER BY f.salario, c.saldo_devedor ASC',
            'opcao_e' => 'SELECT p.nome, c.saldo_devedor FROM cliente as c RIGHT OUTER JOIN pessoa as p ON c.id_cliente=p.id_pessoa RIGHT OUTER JOIN funcionario as f on p.id_pessoa=f.id_funcionario WHERE c.saldo_devedor > f.salario ORDER BY c.saldo_devedor ASC',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">As figuras a seguir representam dois circuitos que possuem a finalidade de construção de filtros para sinais analógicos.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-4/5 md:w-4/5">
                        <img src="/img/questoes/engenharia_de_computacao/img12.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando que os amplificadores operacionais apresentados são ideais, avalie as afirmações a seguir.</p>
                
                <p class="mb-2 pl-6 text-justify">I. Existe uma faixa de frequências na qual a impedância de entrada do circuito da Figura 1 é inferior à do circuito da Figura 2.</p>
                <p class="mb-2 pl-6 text-justify">II. Ambos os circuitos realizam a função de filtro passa-baixa de primeira ordem.</p>
                <p class="mb-2 pl-6 text-justify">III. A frequência de corte de ambos os filtros é igual.</p>

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

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Um determinado sistema embarcado possui uma porta paralela de 8 <i>bits</i>, na qual cada pino pode ser configurado individualmente como interface de entrada ou de saída. A direção de cada pino da porta é definida pelo <i>bit</i> correspondente do registrador de direção de 8 <i>bits</i> PORT_DIR da seguinte forma: valor 0 para configuração como entrada e valor 1 para configuração como saída.</p>
                <p class="mb-2 text-justify">Os <i>bits</i> de entrada da porta são armazenados no registrador PORT_IN e os <i>bits</i> de saída da porta são armazenados no registrador PORT_OUT, ambos de 8 <i>bits</i>. Os pinos que correspondem ao <i>nibble</i> (conjunto de 4 <i>bits</i>) menos significativo da porta de I/O são conectados aos seguintes dispositivos externos: alarme (SPK1), chave 2 (CH2), LED (LED1) e chave 1 (CH1), conforme a figura a seguir.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <img src="/img/questoes/engenharia_de_computacao/img13.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>

                <p class="mb-2 text-justify">Considere que uma tensão V<sub>DD</sub> na porta corresponda ao valor lógico 1 e que uma tensão próxima a 0 V corresponda ao valor lógico 0.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas informações apresentadas e no esquema da figura, avalie as afirmações a seguir.</p>
                
                <p class="mb-2 pl-6 text-justify">I. O <i>nibble</i> menos significativo do registrador PORT_DIR deverá ser carregado com o valor 9 (decimal) pelo <i>software</i> do sistema para configuração adequada da porta de I/O.</p>
                <p class="mb-2 pl-6 text-justify">II. Quando ambas as chaves (1 e 2) estiverem fechadas simultaneamente, o registrador PORT_IN possuirá o valor binário X1X0 no <i>nibble</i> menos significativo (X significa irrelevante).</p>
                <p class="mb-2 pl-6 text-justify">III. Para acionar o alarme e o LED, simultaneamente, o registrador PORT_OUT deverá ser carregado com o valor binário 1X0X no <i>nibble</i> menos significativo (X significa irrelevante).</p>

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
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Os sistemas digitais são componentes essenciais em uma ampla variedade de aplicações, desde dispositivos eletrônicos portáteis até sistemas de controle industrial. Um dos principais aspectos do projeto desse tipo de sistema é a descrição do circuito em uma <i>Hardware Description Language</i> (HDL), como Verilog ou VHDL. Essas linguagens permitem descrever o comportamento e a estrutura do circuito de forma abstrata, viabilizando a síntese e a simulação do sistema.</p>
                <p class="mb-2 text-justify">Um exemplo de circuito sequencial é o contador de 4 bits assíncrono, mostrado na figura a seguir, o qual foi implementado utilizando <i>flip-flops</i> JK.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <img src="/img/questoes/engenharia_de_computacao/img14.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>

                <p class="mb-2 text-justify">Nesse contexto, considere que um engenheiro proponha as duas traduções desse circuito em Verilog e VHDL, equivalentes entre si, conforme observado a seguir.</p>

                <div style=" color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">
                    <p class="mb-0 text-justify">Verilog:</p>
                    <p class="mb-0 text-justify">//-----------------------------------------------</p>
                    <p class="mb-0 text-justify">module contador_4bits (</p>
                    <p class="mb-0 pl-5 text-justify">input wire clk,</p>
                    <p class="mb-0 pl-5 text-justify">input wire reset,</p>
                    <p class="mb-0 pl-5 text-justify">output reg [1:0] count</p>
                    <p class="mb-0 text-justify">);</p>

                    <p class="mb-0 pl-5 text-justify">always @(posedge clk or posedge reset) begin</p>
                    <p class="mb-0 pl-10 text-justify">if (reset)</p>
                    <p class="mb-0 pl-14 text-justify">count <= 0;</p>
                    <p class="mb-0 pl-10 text-justify">else</p>
                    <p class="mb-0 pl-14 text-justify">count <= count + 1;</p>
                    <p class="mb-0 pl-5 text-justify">end</p>
                    <p class="mb-0 text-justify">endmodule</p>

                    <p class="mb-0 text-justify">//-----------------------------------------------</p>

                    <p class="mb-0 text-justify">VHDL:</p>
                    <p class="mb-0 text-justify">//-----------------------------------------------</p>

                    <p class="mb-0 text-justify">library ieee;</p>
                    <p class="mb-0 text-justify">use ieee.std_logic_1164.all;</p>
            
                    <p class="mb-5 text-justify"></p>

                    <p class="mb-0 text-justify">entity contador_4bits is</p>
                    <p class="mb-0 pl-5 text-justify">port (</p>
                    <p class="mb-0 pl-9 text-justify">clk : in std_logic;</p>
                    <p class="mb-0 pl-9 text-justify">reset : in std_logic;</p>
                    <p class="mb-0 pl-9 text-justify">count : out integer range 0 to 3</p>
                    <p class="mb-0 pl-3 text-justify">);</p>
                    <p class="mb-0 text-justify">end entity contador_4bits;</p>

                    <p class="mb-5 text-justify"></p>

                    <p class="mb-0 text-justify">architecture behavioral of contador_4bits is</p>
                    <p class="mb-0 text-justify">begin</p>
                    <p class="mb-0 pl-5 text-justify">process(clk, reset)</p>
                    <p class="mb-0 pl-5 text-justify">variable q : integer range 0 to 3;</p>
                    <p class="mb-0 pl-4 text-justify">begin</p>
                    <p class="mb-0 pl-12 text-justify">if reset = &apos;1&apos; then</p>
                    <p class="mb-0 pl-16 text-justify">q := 0;</p>
                    <p class="mb-0 pl-12 text-justify">elsif rising_edge(clk) then</p>
                    <p class="mb-0 pl-16 text-justify">q := q + 1;</p>
                    <p class="mb-0 pl-12 text-justify">end if;</p>
                    <p class="mb-0 pl-4 text-justify">count <= q;</p>
                    <p class="mb-0 pl-4 text-justify">end process;</p>
                    <p class="mb-0 text-justify">end architecture behavioral;</p>

                    <p class="mb-0 text-justify">//-----------------------------------------------</p>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas, avalie as asserções a seguir e a relação proposta entre elas.</p>
                
                <p class="mb-2 pl-6 text-justify">I. Qualquer um dos códigos corresponde ao circuito contador de 4 bits mostrado na figura.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. Ao atingir o valor máximo da contagem, o valor da saída será zerado no próximo ciclo de <i>clock</i> e o processo será reiniciado.</p>

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
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Considere um cenário em que um computador seja organizado com múltiplos processadores, os quais compartilham a mesma memória RAM. Cada processador possui múltiplos núcleos.</p>
                <p class="mb-2 text-justify">Nesse arranjo, o sistema operacional permite múltiplas <i>threads</i>, as quais podem ser dinamicamente alocadas para execução em diferentes núcleos e processadores.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir das informações apresentadas nessa situação, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Sistemas com múltiplos processadores devem alocar a mesma quantidade de memória RAM para cada processador do arranjo.',
            'opcao_b' => 'Como há múltiplos processadores, são desnecessários os semáforos, uma vez que não há acessos concorrentes a recursos compartilhados.',
            'opcao_c' => 'Como a exclusão mútua não é possível em arquitetura de múltiplos processadores, apenas uma aplicação pode ser executada de cada vez, mas com múltiplas <i>threads</i>.',
            'opcao_d' => 'Os processos que possuem múltiplas <i>threads</i> em execução são mantidos por meio de funções da biblioteca no código da aplicação e dispensam serviços do sistema operacional.',
            'opcao_e' => 'Dados trocados durante a comunicação entre processos podem ser armazenados nas áreas de memória compartilhada, mas o acesso a essas áreas é intermediado pelo sistema operacional.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">A técnica de virtualização de <i>hardware</i> consiste em emular um computador no qual a camada de <i>software</i> é executada sem que detalhes do computador físico e de seus componentes sejam expostos. Em um ambiente de computação distribuída, a técnica pode ser útil para que o sistema operacional e os <i>softwares</i> do usuário sejam executados em uma máquina virtual com características permanentes, em conformidade com o que foi projetado, verificado e validado, mesmo que um computador físico diferente seja empregado.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nesse contexto, é correto afirmar que</p>
            ',
            'referencia' => '',
            'opcao_a' => 'adquirir licenças de <i>software</i> do usuário no volume de uma licença para cada computador físico, o que favorece a economia de licenças, pois <i>softwares</i> em máquinas virtuais não correspondem a cópias extras.',
            'opcao_b' => 'utilizar um computador com capacidade extra de comunicação de dados para favorecer o seu desempenho, pois um sistema distribuído em máquinas virtuais consome mais recursos de rede do que o mesmo sistema distribuído sendo executado em um computador físico.',
            'opcao_c' => 'utilizar um computador com capacidade extra de memória principal para favorecer o seu desempenho, pois um sistema distribuído em máquinas virtuais requer mais espaço de memória física do que o mesmo sistema distribuído sendo executado em um computador físico.',
            'opcao_d' => 'adquirir computadores físicos com processadores similares para favorecer a compatibilidade, pois sistemas distribuídos fortemente acoplados compartilham recursos intensamente, funcionando de forma mais eficiente em máquinas virtuais quando os computadores físicos são compatíveis.',
            'opcao_e' => 'adquirir dispositivos de armazenamento físico com, pelo menos, o dobro da capacidade do dispositivo virtual a ser usado a fim de favorecer a disponibilidade, pois os sistemas operacionais da máquina virtual e da máquina física devem ter espaço equivalente de dados para que exista o mapeamento direto entre o dispositivo virtual e o dispositivo físico.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Alguns sistemas com memória virtual utilizam uma técnica chamada de paginação. Nesses sistemas, existe um conjunto de endereços de memória, denominados endereços virtuais, que são gerados durante a execução dos programas, com o uso de indexação, de registradores-base, de registradores-segmento ou de outras técnicas. Um endereço virtual é dividido em número de página virtual e deslocamento. O número de página virtual é usado como índice dentro da tabela de páginas para encontrar o quadro correspondente. O endereço físico de memória é a concatenação entre o endereço do quadro com o deslocamento do endereço virtual.</p>
                <p class="mb-2 text-justify">Um mecanismo denominado TLB (do inglês, <i>translation lookaside buffer</i>), tipicamente implementado em <i>hardware</i>, fornece auxílio durante a atividade de mapeamento de endereços virtuais para endereços físicos sem passar pela tabela de página. A função do TLB é agilizar o processo de tradução de endereços lógicos para físicos.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com relação à memória paginada, avalie as asserções a seguir e a relação proposta entre elas.</p>
                
                <p class="mb-2 pl-6 text-justify">I. Quando um processo é escalonado para execução, tanto a MMU (<i>Memory Management Unit</i>) quanto o TLB são reconfigurados para o novo processo.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. Para livrar-se de resíduos do processo executado anteriormente, a tabela de páginas do novo processo deve tornar-se a tabela atual, o que, em geral, é feito por meio da cópia da tabela ou de um ponteiro para ela em registradores em <i>hardware</i>.</p>

                <p class="mb-2 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => 'TANENBAUM, A. S. <b>Sistemas Operacionais Modernos</b>. 3. ed. São Paulo: Pearson Prentice Hall, 2009 (adaptado).',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                    <p class="mb-2 text-justify">Considere que uma equipe de engenheiros projete um sistema robótico para reciclagem de resíduos sólidos, o qual utiliza visão computacional para separar objetos de plástico e de vidro. Com o objetivo de automatizar o processo de classificação, opta-se pela técnica <i>support vector machine</i> (SVM).</p>
                    <p class="mb-2 text-justify">No método SVM, <i>i</i> é o índice do vetor suporte <i>(1</i> ≤ <i>i</i> ≤ <i>5),</i> <i>w</i> é o coeficiente angular (peso) e <i>b</i> é o coeficiente linear (polarização) da reta de separação. O par ordenado (<i>x</i>, <i>y</i>) é a saída do sistema de Visão Computacional que representa os vetores de características dos supostos materiais, plástico ou vidro, com classificação normalizada em ƒ (<i>i</i>) &isin; {-1, +1} . A separação linear do material é resultado da diferença entre os pontos <i>P<sub>1</sub></i> = <i>w.x</i> + <i>b</i> e <i>P<sub>2</sub></i> = <i>y</i>, conforme a equação a seguir.</p>

                <p class="mb-2 text-justify">$$
                    f(i) = \begin{cases}
                        +1, & \text{se } w x_i + b - y_i \ge 0 \\\\
                        -1, & \text{se } w x_i + b - y_i < 0
                    \end{cases}
                $$</p>

                    <p class="mb-2 text-justify">O pseudocódigo apresentado a seguir foi projetado para solucionar o problema de classificação com valores de <i>w</i> e <i>b</i> obtidos a partir de um conjunto de dados de treinamento.</p>

                <div style=" color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">
                    <p class="mb-0 text-justify">Início</p>
                    <p class="mb-0 pl-10 text-justify">w <- 0.4</p>
                    <p class="mb-0 pl-10 text-justify">b <- 2.7</p>
                    <p class="mb-0 pl-10 text-justify">para i de 1 até 5 faça</p>
                    <p class="mb-0 pl-20 text-justify">yr <- w * x[i] + b</p>
                    <p class="mb-0 pl-20 text-justify">se yr - y[i] > 0 então</p>
                    <p class="mb-0 pl-27 text-justify">f[i] <- 1</p>
                    <p class="mb-0 pl-20 text-justify">senão</p>
                    <p class="mb-0 pl-27 text-justify">f[i] <- -1</p>
                    <p class="mb-0 pl-20 text-justify">fimse</p>
                    <p class="mb-0 pl-10 text-justify">fimpara</p>
                    <p class="mb-0 pl-10 text-justify">para i de 1 até 5 faça</p>
                    <p class="mb-0 pl-17 text-justify">se f[i] = -1 então</p>
                    <p class="mb-0 pl-24 text-justify">escreva("Plástico")</p>
                    <p class="mb-0 pl-17 text-justify">senão</p>
                    <p class="mb-0 pl-24 text-justify">escreva("Vidro")</p>
                    <p class="mb-0 pl-10 text-justify">fimse</p>
                    <p class="mb-0 pl-4 text-justify">fimpara</p>
                    <p class="mb-2 text-justify">Fim</p>
                </div>

                <p class="mb-0 text-justify">Observe a seguinte tabela com dados de teste.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-1/5 md:w-1/5">
                        <img src="/img/questoes/engenharia_de_computacao/img15.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>

            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando essas informações, assinale a opção que apresenta a classificação correta da sequência dos materiais na saída do algoritmo.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Plástico, Vidro, Vidro, Plástico, Vidro.',
            'opcao_b' => 'Plástico, Plástico, Vidro, Vidro, Vidro.',
            'opcao_c' => 'Plástico, Vidro, Plástico, Vidro, Vidro.',
            'opcao_d' => 'Plástico, Plástico, Plástico, Vidro, Vidro.',
            'opcao_e' => 'Plástico, Vidro, Vidro, Plástico, Plástico.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Considere que, para melhorar o desempenho de sistemas computacionais, projetistas de <i>hardware</i> decidam aumentar o número de processadores em vez de aumentar a frequência de <i>clock</i>. Dessa forma, surge a necessidade de utilizar <i>softwares</i> que explorem o paralelismo. Um problema típico encontrado no desenvolvimento desse tipo de <i>software</i> é a dependência de dados. Nesse contexto, considere que dois processadores precisem realizar, simultaneamente, o acesso a uma mesma matriz A.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas informações apresentadas, com relação aos trechos de código em linguagem C apresentados a seguir, assinale a opção que apresenta uma situação de conflito de dados.</p>
            ',
            'referencia' => '',
            'opcao_a' => '
                        <span style="display: inline-block; vertical-align: top; font-size: inherit;">
                            <span style="display: block; margin: 0; font-size: inherit;">Processador 1:</span>
                            <span style="display: block; margin: 0; color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">int a = &amp;A[0][0];</span>
                            <span style="display: block; margin: 0.2rem 0 0 0; font-size: inherit;">Processador 2:</span>
                            <span style="display: block; margin: 0; color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">int b = &amp;A[0][0];</span>
                        </span>
            ',          
            'opcao_b' => '
                        <span style="display: inline-block; vertical-align: top; font-size: inherit;">
                            <span style="display: block; margin: 0; font-size: inherit;">Processador 1:</span>
                            <span style="display: block; margin: 0; color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">*A[0][0] = 10;</span>
                            <span style="display: block; margin: 0.2rem 0 0 0; font-size: inherit;">Processador 2:</span>
                            <span style="display: block; margin: 0; color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">*A[0][1] = 20;</span>
                        </span>
            ',
            'opcao_c' => '
                        <span style="display: inline-block; vertical-align: top; font-size: inherit;">
                            <span style="display: block; margin: 0; font-size: inherit;">Processador 1:</span>
                            <span style="display: block; margin: 0; color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">*A[0][0] = 10;</span>
                            <span style="display: block; margin: 0.2rem 0 0 0; font-size: inherit;">Processador 2:</span>
                            <span style="display: block; margin: 0; color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">int b = &A[0][0];</span>
                        </span>
            ',
            'opcao_d' => '
                        <span style="display: inline-block; vertical-align: top; font-size: inherit;">
                            <span style="display: block; margin: 0; font-size: inherit;">Processador 1:</span>
                            <span style="display: block; margin: 0; color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">int a = &A[0][0];</span>
                            <span style="display: block; margin: 0.2rem 0 0 0; font-size: inherit;">Processador 2:</span>
                            <span style="display: block; margin: 0; color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">*A[0][0] = 20;</span>
                        </span>            
            ',
            'opcao_e' => '
                        <span style="display: inline-block; vertical-align: top; font-size: inherit;">
                            <span style="display: block; margin: 0; font-size: inherit;">Processador 1:</span>
                            <span style="display: block; margin: 0; color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">*A[0][0] = 10;</span>
                            <span style="display: block; margin: 0.2rem 0 0 0; font-size: inherit;">Processador 2:</span>
                            <span style="display: block; margin: 0; color: var(--text-color); font-family: Courier New, monospace; font-size: inherit;">*A[0][0] = 20;</span>
                        </span>            
            ',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Um sinal em tempo contínuo pode ser processado, a partir de suas amostras, por um sistema que opere em tempo discreto. Para isso, é importante manter a taxa de amostragem do sinal suficientemente alta para permitir a reconstrução do sinal original sem erro ou com um erro dentro de uma dada tolerância.</p>
                <p class="mb-2 text-justify"></p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, considerando o teorema da amostragem, avalie as asserções a seguir e a relação proposta entre elas.</p>
                
                <p class="mb-2 pl-6 text-justify">I. Para que um sinal contínuo seja reconstruído a partir de suas amostras é necessário que ele possua um espectro em frequência limitado e que a frequência de amostragem seja maior do que duas vezes a largura de faixa do sinal.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. Na situação proposta, o espectro do sinal amostrado, será limitado em frequência, o que permitirá a reconstrução do sinal original antes da amostragem.</p>

                <p class="mb-2 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => 'LATHI, B. P. <b>Sinais e Sistemas Lineares</b>, 2. ed., Porto Alegre: Bookman, 2007 (adaptado).',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Suponha que uma empresa de transportes deseje calcular uma rota de Manaus para São Paulo utilizando a estratégia da busca gulosa, técnica de busca local que seleciona a melhor alternativa disponível a cada passo. Observe, a seguir, um grafo de conexão de cidades até o destino final e o quadro com estimativas de distância de São Paulo até as demais cidades do grafo.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-4/5 md:w-4/5">
                        <img src="/img/questoes/engenharia_de_computacao/img16.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nessas informações, é correto afirmar que a solução encontrada a partir da utilização do algoritmo será</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Manaus -> Macapá -> São Paulo',
            'opcao_b' => 'Manaus -> Porto Velho -> Cuiabá -> Goiânia -> São Paulo',
            'opcao_c' => 'Manaus -> Porto Velho -> Palmas -> Goiânia -> São Paulo',
            'opcao_d' => 'Manaus -> Macapá -> Belém -> Palmas -> Goiânia -> São Paulo',
            'opcao_e' => 'Manaus -> Macapá -> Belém -> Palmas -> Porto Velho -> Cuiabá -> Goiânia -> São Paulo',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Considere que uma empresa planeje desenvolver um sistema de controle automático para manter, em um ambiente industrial, a temperatura constante por meio de um controlador proporcional-integral-derivativo (PID). O controlador PID pode ser implementado em qualquer linguagem que possua estruturas de dados adequadas para a manutenção do histórico e da taxa de mudança do sinal de erro.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando essa situação, avalie as afirmações a seguir.</p>
                
                <p class="mb-2 pl-6 text-justify">I. A implementação do componente Integral requer a soma de todos os erros acumulados desde o início da operação do sistema, o que torna necessário o uso de uma estrutura de dados do tipo fila.</p>
                <p class="mb-2 pl-6 text-justify">II. A parte Proporcional do controlador PID é implementada ao ajustar, proporcionalmente, a variável de controle à diferença entre a temperatura desejada e a temperatura atual.</p>
                <p class="mb-2 pl-6 text-justify">III. Uma pilha é adequada para o componente Derivativo, pois a taxa de mudança do erro é calculada apenas com a amostra mais recente e a anterior do sinal de erro.</p>

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
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Cada roteador em redes de computadores precisa implementar alguma estratégia de enfileiramento para controlar como os pacotes são armazenados em <i>buffer</i> enquanto esperam para serem transmitidos, independentemente do mecanismo de alocação de recursos. O algoritmo de enfileiramento aloca tanto largura de banda, ao transmitir pacotes, quanto espaço de <i>buffer</i>, ao decidir quais pacotes são descartados.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas, avalie as afirmações a seguir.</p>
                
                <p class="mb-2 pl-6 text-justify">I. O algoritmo FIFO (<i>First-In, First-Out</i>) é adequado para situações em que o tráfego de dados com rajadas de longa duração provoca descarte de pacotes.</p>
                <p class="mb-2 pl-6 text-justify">II. O algoritmo de enfileiramento justo ponderado (WFQ, do inglês <i>Weighted Fair Queuing</i>) permite definir um peso para cada fila, definindo quantos <i>bits</i> são transmitidos sempre que o roteador atender a uma determinada fila.</p>
                <p class="mb-2 pl-6 text-justify">III. O algoritmo de enfileiramento por prioridade (PQ, do inglês <i>Priority Queuing</i>) evita que uma fila de menor prioridade fique indefinidamente sem ser atendida (<i>starvation</i>), utilizando o algoritmo <i>Round-Robin</i> para servir a todas as filas.</p>
                <p class="mb-2 pl-6 text-justify">IV. Os roteadores que implementam o algoritmo de detecção antecipada aleatória (RED, do inglês <i>Random Early Detection</i>) mantêm a média acumulada do tamanho de suas filas e, quando esse tamanho ultrapassa, em algum enlace, um determinado limiar, uma fração dos pacotes é descartada aleatoriamente.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => 'PETERSON, L. L.; DAVIE, B. S. <b>Redes de Computadores:</b> uma abordagem de sistemas. Rio de Janeiro: Elsevier, 2013 (adaptado).',
            'opcao_a' => 'I e III.',
            'opcao_b' => 'I e IV.',
            'opcao_c' => 'II e IV.',
            'opcao_d' => 'I, II e III.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">O TCP (<i>Transmission Control Protocol</i>) e o UDP (<i>User Datagram Protocol</i>) são opções frequentemente usadas em sistemas distribuídos para realizar transferência de dados entre máquinas, ainda que não sejam os únicos protocolos que funcionam com base no protocolo IP (<i>Internet Protocol</i>).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com relação a esses protocolos, avalie as afirmações a seguir.</p>
                
                <p class="mb-2 pl-6 text-justify">I. O protocolo TCP é usado para implementar o mecanismo de <i>sockets</i> utilizado em sistemas distribuídos, como mecanismo de troca de mensagens confiável.</p>
                <p class="mb-2 pl-6 text-justify">II. O protocolo UDP é mais eficiente do que o protocolo TCP quanto ao tempo de envio de dados entre os nós de um sistema distribuído, pois gera menor <i>overhead</i>.</p>
                <p class="mb-2 pl-6 text-justify">III. O protocolo UDP é uma escolha adequada para fluxos de dados em tempo real, especialmente daqueles dados que admitem perda ou corrupção de parte de seu conteúdo, tais como vídeos ou voz.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'II, apenas.',
            'opcao_b' => 'III, apenas.',
            'opcao_c' => 'I e II, apenas.',
            'opcao_d' => 'I e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">A análise de desempenho de sistemas computacionais é uma atividade crítica para identificar gargalos, otimizar recursos e garantir a eficiência do <i>hardware</i> e do <i>software</i> utilizados.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, a respeito do impacto de desempenho gerado pelo número de <i>threads</i> e de núcleos de processamento em <i>hardware</i> e em <i>software</i>, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'O desempenho do sistema aumenta de maneira linear em relação ao aumento do número de <i>threads</i> e de núcleos de processamento.',
            'opcao_b' => 'O número de <i>threads</i> tem um impacto direto no desempenho do sistema, enquanto a influência do número de núcleos de processamento é insignificante.',
            'opcao_c' => 'O desempenho do sistema é afetado positivamente pelo aumento do número de <i>threads</i> e de núcleos de processamento até um certo limite dependente da aplicação.',
            'opcao_d' => 'O número de núcleos de processamento tem um impacto direto no desempenho do sistema, independentemente do número de <i>threads</i> utilizado.',
            'opcao_e' => 'O número de <i>threads</i> e de núcleos de processamento não possui relação direta com o desempenho do sistema, pois esse resultado é determinado, exclusivamente, por técnicas e por algoritmos utilizados no <i>software</i>.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">A segurança de sistemas de computação é uma preocupação crescente devido à constante evolução das ameaças e das vulnerabilidades presentes no ambiente digital. Garantir a integridade, a confidencialidade e a disponibilidade de dados e de recursos é essencial para proteger os sistemas e as informações sensíveis. A segurança abrange, também, aspectos como autenticação, controle de acesso, criptografia, detecção e prevenção de intrusões, entre outros mecanismos de proteção.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A respeito da segurança de sistemas de computação, avalie as afirmações a seguir.</p>
                
                <p class="mb-2 pl-6 text-justify">I. A criptografia é um mecanismo que permite detectar a vulnerabilidade dos dados, tornando-os ilegíveis para usuários não autorizados.</p>
                <p class="mb-2 pl-6 text-justify">II. A auditoria de segurança é o processo de verificação de identidade de um usuário ou de um sistema, garantindo que apenas entidades confiáveis tenham acesso aos recursos.</p>
                <p class="mb-2 pl-6 text-justify">III. O controle de acesso consiste em definir e em gerenciar as permissões de usuários e de sistemas para acessar recursos e para realizar operações específicas.</p>
                <p class="mb-2 pl-6 text-justify">IV. A detecção e a prevenção de intrusão são técnicas utilizadas para identificar atividades maliciosas em um sistema e para tomar medidas a fim de evitar a ocorrência dessas atividades.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'I e IV.',
            'opcao_c' => 'III e IV.',
            'opcao_d' => 'I, II e III.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Engenharia de Computação',
            'ano' => 2023,
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Os sistemas distribuídos consistem em múltiplos componentes de <i>software</i> que se comunicam e que cooperam entre si para realizar tarefas complexas. Um padrão arquitetural comumente utilizado em sistemas distribuídos é o de microsserviços, o qual divide o sistema em componentes independentes e escaláveis, cada um executando sua própria funcionalidade específica. Essa abordagem facilita a manutenção, o teste e a escalabilidade do sistema como um todo.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Em relação a esse tema, qual dos seguintes benefícios é associado à arquitetura de microsserviços em sistemas distribuídos?</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Capacidade de escalabilidade.',
            'opcao_b' => 'Garantia de consistência de dados.',
            'opcao_c' => 'Melhor desempenho de processamento.',
            'opcao_d' => 'Menor consumo de recursos de <i>hardware</i>.',
            'opcao_e' => 'Redução da complexidade de comunicação entre os componentes.',
            'alternativa_correta' => 'A',
        ]);   
    }
}




