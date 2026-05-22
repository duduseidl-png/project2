<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class Questoes_Administracao_2022 extends Seeder
{
    public function run(): void
    {
        // =====================================================================
        // Componente Específico – Questões 09 a 35
        // =====================================================================

        Questao::create([
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">As tabelas 1, 2 e 3 apresentam informações acerca dos investimentos financeiros A, B e C.</p>

                <p class="mb-1 font-semibold">Tabela 1 – Risco e Retorno dos investimentos</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300 text-center">
                        <thead class="bg-gray-100">
                            <tr><th class="border px-3 py-1"></th><th class="border px-3 py-1">A</th><th class="border px-3 py-1">B</th><th class="border px-3 py-1">C</th></tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1 text-left font-medium">Retorno</td><td class="border px-3 py-1">20%</td><td class="border px-3 py-1">24%</td><td class="border px-3 py-1">30%</td></tr>
                            <tr><td class="border px-3 py-1 text-left font-medium">Risco</td><td class="border px-3 py-1">13%</td><td class="border px-3 py-1">14%</td><td class="border px-3 py-1">20%</td></tr>
                            <tr><td class="border px-3 py-1 text-left font-medium">CV</td><td class="border px-3 py-1">0,65</td><td class="border px-3 py-1">0,58</td><td class="border px-3 py-1">0,67</td></tr>
                        </tbody>
                    </table>
                </div>
                <p class="mb-3 text-sm text-justify">CV = Coeficiente de Variação = Risco/Retorno</p>

                <p class="mb-1 font-semibold">Tabela 2 – Matriz de correlação dos investimentos</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300 text-center">
                        <thead class="bg-gray-100">
                            <tr><th class="border px-3 py-1"></th><th class="border px-3 py-1">A</th><th class="border px-3 py-1">B</th><th class="border px-3 py-1">C</th></tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1 font-medium">A</td><td class="border px-3 py-1">1</td><td class="border px-3 py-1">0,60</td><td class="border px-3 py-1">0,78</td></tr>
                            <tr><td class="border px-3 py-1 font-medium">B</td><td class="border px-3 py-1">0,60</td><td class="border px-3 py-1">1</td><td class="border px-3 py-1">-0,55</td></tr>
                            <tr><td class="border px-3 py-1 font-medium">C</td><td class="border px-3 py-1">0,78</td><td class="border px-3 py-1">-0,55</td><td class="border px-3 py-1">1</td></tr>
                        </tbody>
                    </table>
                </div>

                <p class="mb-1 font-semibold">Tabela 3 – Matriz de Covariâncias dos investimentos</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300 text-center">
                        <thead class="bg-gray-100">
                            <tr><th class="border px-3 py-1"></th><th class="border px-3 py-1">A</th><th class="border px-3 py-1">B</th><th class="border px-3 py-1">C</th></tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1 font-medium">A</td><td class="border px-3 py-1">0,0169</td><td class="border px-3 py-1">0,00546</td><td class="border px-3 py-1">0,02028</td></tr>
                            <tr><td class="border px-3 py-1 font-medium">B</td><td class="border px-3 py-1">0,00546</td><td class="border px-3 py-1">0,0196</td><td class="border px-3 py-1">-0,0154</td></tr>
                            <tr><td class="border px-3 py-1 font-medium">C</td><td class="border px-3 py-1">0,02028</td><td class="border px-3 py-1">-0,0154</td><td class="border px-3 py-1">0,0400</td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, considerando as informações apresentadas e a formação de uma carteira composta por dois ativos, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. A carteira de investimento de mínimo risco deve ser formada pelos ativos B e C.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. As combinações de ativos com correlações positivas e próximas à unidade diminuem o efeito de diversificação na carteira de investimentos.</p>

                <p class="mb-2 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Entre as teorias utilizadas na Administração, a Teoria Matemática é a que mantém o foco no processo decisório racional, baseado em procedimentos matemáticos, estatísticos e computacionais. Essa teoria surgiu entre os anos 1940 e 1950 e, desde então, está presente nas práticas e nas tendências gerenciais. A teoria dos jogos, a teoria das filas, a teoria das probabilidades e a programação linear, aplicadas aos problemas gerenciais de técnicas e métodos recorrentes nas ciências matemáticas originaram-se da Teoria Matemática.</p>
                <p class="mb-2 text-justify">A evolução recente de usos da Teoria Matemática está evidenciada nos métodos e processos de <i>Big Data</i>, <i>Business Intelligence</i> e <i>Business Analytics</i>, que utilizam plataformas computacionais com grandes volumes de dados em diferentes formatos (numérico, textual, visual).</p>
                <p class="mb-2 text-right text-sm">ANDRADE, R.; AMBONI, N. <b>TGA – Teoria Geral da Administração</b>. São Paulo: Elsevier, 2017 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando a apropriação da Teoria Matemática nas áreas funcionais ou nas especialidades de Administração, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A área gerencial de Produção e Operações, dado o seu foco em planejamento, gestão e controle de produção, mantém a tradição de uso pouco intensivo da Teoria Matemática, e seu foco são as métricas e os métodos contábeis, como a análise de balanços e de demonstrativos.</p>
                <p class="mb-2 pl-6 text-justify">II. A área gerencial de Marketing, cujo foco é a comunicação e a propaganda, prioriza a utilização de métodos qualitativos, enfatizando o uso de métodos de pesquisa operacional, teoria das filas e programação linear.</p>
                <p class="mb-2 pl-6 text-justify">III. A área gerencial de Recursos Humanos, embora tradicionalmente mantenha o foco em aspectos instrumentais e interpretativos da gestão de pessoas, tem tido aumento no uso de métodos matemáticos, em suas diversas funções.</p>

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
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O desenvolvimento das instituições no interior da sociedade capitalista, desencadeado por transformações tecnológicas no final do século XIX, levou à racionalização material e imaterial dos processos produtivos. Essas instituições foram minuciosamente estudadas por Max Weber (1864-1920), que focou na análise da organização cotidiana da sociedade, na divisão e na coordenação das mais diversas atividades laborais. Essas atividades eram baseadas na divisão racional do trabalho, na exigência de especialização e diferenciação das funções exercidas pelos trabalhadores, e classificadas de acordo com critérios técnicos, mediante a subordinação a uma autoridade hierarquicamente organizada e altamente especializada.</p>
                <p class="mb-2 text-right text-sm">SANTOS, F. R. Max Weber e a racionalidade burocrática. <b>Revista Espaço Acadêmico</b>, n. 169, jun. 2015 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando o texto apresentado e as características da organização burocrática, conforme a teoria weberiana, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A organização burocrática pressupõe a substituição das normas de decisão baseadas nas relações sociais, típicas da mentalidade patrimonialista, por regras e procedimentos que possibilitam a impessoalidade e a objetividade.</p>
                <p class="mb-2 pl-6 text-justify">II. A burocracia como decorrência da busca por eficiência é disseminada nas organizações do sistema capitalista.</p>
                <p class="mb-2 pl-6 text-justify">III. A teoria burocrática pressupõe a divisão do trabalho, a existência de hierarquia e o uso de registros escritos.</p>

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
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Além dos resultados econômicos, a dimensão ética da atividade empresarial tornou-se uma das principais preocupações dos gestores. A adoção de uma conduta pautada em princípios morais de respeito ao ambiente e aos valores da comunidade é uma exigência incontornável das sociedades contemporâneas. O impacto social e ambiental das atividades empresariais pode influenciar, inclusive, a competitividade das organizações.</p>
                <p class="mb-2 text-right text-sm">ALMEIDA, F. J. R. Ética e desempenho social das organizações: um modelo teórico de análise dos fatores culturais e contextuais. <b>RAC – Revista de Administração Contemporânea</b>, v. 11, n. 3, p. 105-25, 2007 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">De acordo com o texto, os gestores devem</p>
            ',
            'referencia' => '',
            'opcao_a' => 'promover ações socioambientais e culturais para obter ganhos de mercado.',
            'opcao_b' => 'ser intolerantes perante os abusos de poder na concorrência entre empresas.',
            'opcao_c' => 'deixar de explorar recursos ambientais, a fim de conformar-se às exigências contemporâneas.',
            'opcao_d' => 'considerar resultados econômicos, ambientais e sociais como relevantes na concorrência entre empresas.',
            'opcao_e' => 'priorizar a preservação do meio ambiente e dos valores da comunidade, em detrimento do desempenho econômico.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A Teoria da Contingência propõe o pressuposto de que as organizações recebem influências do ambiente onde estão inseridas. Desse modo, o ambiente pode contribuir para remodelar características específicas da empresa em determinado momento.</p>
                <p class="mb-2 text-justify">Nesses termos, uma mesma organização que possua diferentes sedes pode ser condicionada a planejar e a executar seu processo decisório de maneiras distintas para lugares distintos. A unificação de procedimentos, processos e decisões, que seria, a priori, adequada para facilitar o gerenciamento, torna-se pressionada por fatores como negociações com grupos locais, cultura local, disponibilidade de recursos e legislações locais.</p>
                <p class="mb-2 text-right text-sm">MOURA, G. D.; CAMARGO, T. F.; ZANIN, A. Competitividade de mercado e gerenciamento de resultados: um estudo sob a ótica da Teoria da Contingência. <b>Revista de Ciências da Administração</b>, v. 19, n. 49, 2017, p. 86-101 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando o texto apresentado, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. Pelo pressuposto da Teoria da Contingência, os planos e projetos do nível estratégico corporativo e de níveis funcionais, como, por exemplo, Produção e Operações, Marketing ou Recursos Humanos, são definidos levando-se em conta a influência de fatores externos.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. A Teoria da Contingência, como uma teoria da Administração, mantém relação direta com a Teoria da Comunicação, o que demonstra que ela tem caráter integrativo com as demais teorias e gera impacto em diferentes tarefas gerenciais de nível funcional.</p>

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
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Em virtude da crise ocasionada pela pandemia de Covid-19, uma empresa precisou demitir 20% de seus funcionários. No intuito de reduzir os impactos desse processo, a empresa buscará realizar a recolocação profissional desses funcionários por meio da contratação de consultoria.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando a situação apresentada, que procedimento deve ser adotado pela empresa?</p>
            ',
            'referencia' => '',
            'opcao_a' => '<i>Coaching</i>.',
            'opcao_b' => 'Socialização.',
            'opcao_c' => 'Agenciamento.',
            'opcao_d' => '<i>Outplacement</i>.',
            'opcao_e' => '<i>Empowerment</i>.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Os executivos da área de gestão de processos e serviços de uma multinacional de telefonia móvel estão analisando o aumento das consultas ao Serviço de Atendimento ao Cliente (SAC) em determinada região do Brasil. Durante três semanas consecutivas, os profissionais do Departamento de Pesquisa e Desenvolvimento da empresa coletaram dados do SAC relativos a dias úteis das três semanas estudadas.</p>
                <p class="mb-2 text-justify">A gestão da empresa, após analisar o resultado da pesquisa, observou que havia necessidade de expansão do serviço, mesmo considerando o risco associado à implantação desse projeto de expansão, dadas as mudanças no cenário macroeconômico.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando que a amostra represente o universo do fenômeno em questão, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O número de consultas estimado pela equação de regressão linear simples tem aumentado ao longo do tempo.</p>
                <p class="mb-2 pl-6 text-justify">II. O histórico de dados (n. de consultas ao SAC) apresenta, aparentemente, sazonalidade e distribuição regular.</p>
                <p class="mb-2 pl-6 text-justify">III. A regressão é o melhor método para prever dados sazonais como, por exemplo, o número de consultas ao SAC na segunda-feira da semana 4.</p>

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
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Ao utilizar o modelo de análise de mercado proposto por Porter, procura-se identificar as forças que atuam em um mercado dinâmico e competitivo, determinando-se a intensidade da competição em dado setor.</p>
                <p class="mb-2 text-right text-sm">PORTER, M. <b>Estratégias competitivas</b>. Técnicas de análise para indústrias e concorrência. São Paulo: Atlas, 2005.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando o modelo das Cinco Forças Competitivas de Porter, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O poder de barganha de compradores é caracterizado pelo reduzido número de empresas concorrentes na indústria, acrescido de maior demanda de produtos pelos consumidores finais.</p>
                <p class="mb-2 pl-6 text-justify">II. A ameaça de produtos e serviços substitutos acontece quando uma empresa mantém, por muito tempo, a mesma tecnologia e o mesmo portfólio de produtos, acrescidos de acompanhamento aquém das tendências de evolução tecnológica das demais empresas do mercado.</p>
                <p class="mb-2 pl-6 text-justify">III. A ameaça de novos entrantes ocorre quando já existe uma empresa detentora de marca tradicional e clientes fidelizados e, por esse motivo, a empresa que tentar adentrar esse mercado tenderá a desencorajar-se, visto que terá de investir vultosos recursos na tentativa de competir.</p>

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
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O relatório Focus, emitido semanalmente pelo Banco Central, reúne vários indicadores e estimativas de economistas das mais renomadas instituições financeiras do país. Três dos indicadores mais relevantes que compõem o relatório de mercado do Banco Central são: Produto Interno Bruto (PIB); Índice Nacional de Preços ao Consumidor Amplo (IPCA); Sistema Especial de Liquidação e de Custódia (Taxa Selic).</p>
                <p class="mb-2 text-justify">Os gráficos apresentados mostram as estimativas do relatório Focus, em abril de 2022, relativas à taxa de crescimento percentual do PIB (%), ao IPCA (%) e à taxa Selic (%), respectivamente, para os anos de 2022 a 2025.</p>
                <p class="mb-2 text-right text-sm">Disponível em: https://www.bcb.gov.br. Acesso em: 18 jul. 2022 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações e os gráficos apresentados, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. As estimativas de abril/22 apontam que, em 2023, a economia brasileira tenderá a crescer mais que a taxa de crescimento de 2022.</p>
                <p class="mb-2 pl-6 text-justify">II. As estimativas de abril/22 apontam que a taxa de juros tenderá a ficar estável entre 2022 e 2024.</p>
                <p class="mb-2 pl-6 text-justify">III. As estimativas de abril/22 apontam tendência de crescimento da inflação nos últimos 12 meses analisados.</p>

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
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Segundo o Instituto Ethos, em uma economia inclusiva, "os investimentos públicos e privados, as regras, as instituições, as tecnologias e os programas devem estar voltados também para o atendimento das necessidades e dos direitos de todos os seres humanos, sem o que não será possível construir ambientes sociais saudáveis em nenhuma atividade produtiva."</p>
                <p class="mb-2 text-right text-sm">Disponível em: http://www3.ethos.org.br. Acesso em: 23 ago. 2022 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando esse contexto, na economia inclusiva, deve-se</p>
            ',
            'referencia' => '',
            'opcao_a' => 'desenvolver valores éticos, sem a preocupação de torná-la uma economia verde e responsável.',
            'opcao_b' => 'desestimular qualquer tipo de concorrência, a qual sempre enfraquece a cooperação comunitária.',
            'opcao_c' => 'excluir a participação da base da pirâmide no processo produtivo e no mercado de bens e serviços.',
            'opcao_d' => 'respeitar as leis, mesmo que as regras de negócio possam desrespeitar direitos dos seres humanos.',
            'opcao_e' => 'promover o desenvolvimento equilibrado, considerando os capitais financeiro, humano, social e natural.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Ao analisar o ambiente setorial para o planejamento estratégico da empresa onde trabalha, o diretor comercial da ABX Ltda. utilizou como ferramenta de análise o modelo das cinco forças proposto por Porter. Nessa análise, o diretor considerou, em valores percentuais, a medida de cada uma dessas forças para se tornarem favoráveis ou desfavoráveis à empresa, conforme tabela a seguir.</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300 text-center">
                        <thead class="bg-gray-100">
                            <tr><th class="border px-3 py-1 text-left">Dimensão</th><th class="border px-3 py-1">Favorável</th><th class="border px-3 py-1">Desfavorável</th></tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1 text-left">Rivalidade entre os concorrentes</td><td class="border px-3 py-1">63%</td><td class="border px-3 py-1">37%</td></tr>
                            <tr><td class="border px-3 py-1 text-left">Ameaça de novos entrantes</td><td class="border px-3 py-1">72%</td><td class="border px-3 py-1">28%</td></tr>
                            <tr><td class="border px-3 py-1 text-left">Poder de barganha dos fornecedores</td><td class="border px-3 py-1">57%</td><td class="border px-3 py-1">43%</td></tr>
                            <tr><td class="border px-3 py-1 text-left">Poder de barganha dos clientes</td><td class="border px-3 py-1">59%</td><td class="border px-3 py-1">41%</td></tr>
                            <tr><td class="border px-3 py-1 text-left">Ameaça de produtos ou serviços substitutos</td><td class="border px-3 py-1">30%</td><td class="border px-3 py-1">70%</td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nos resultados dessa análise, infere-se que o ambiente competitivo da empresa apresenta</p>
            ',
            'referencia' => '',
            'opcao_a' => 'concorrentes diretos com alta participação de mercado.',
            'opcao_b' => 'possibilidade de troca por produtos ou serviços substitutos.',
            'opcao_c' => 'fornecedores com domínio de mercado para definir preços e prazos.',
            'opcao_d' => 'entrada de novos competidores facilitada pelo baixo investimento inicial.',
            'opcao_e' => 'clientes com capacidade para determinar as margens de lucratividade da empresa.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A empresa XYZ adota um planejamento e controle de produção totalmente manual, em que não há integração entre as áreas. Por meio de uma consultoria, a XYZ está analisando a implantação de novas técnicas e filosofias de produção para aumentar a vantagem competitiva.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Acerca da implantação de técnicas e filosofias de produção no caso mencionado, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A empresa XYZ pode reduzir problemas, diminuir custos e eliminar perdas utilizando ferramentas da qualidade, como, por exemplo, Diagrama de Ishikawa, Brainstorming e Gráficos de Controle.</p>
                <p class="mb-2 pl-6 text-justify">II. O Sistema <i>Enterprise Resource Planning</i> (ERP) pode ajudar na integração dos setores da organização, uma vez que oferece subsídios para tomadas de decisão.</p>
                <p class="mb-2 pl-6 text-justify">III. A implantação da filosofia <i>Just in Time</i> possibilitará o controle da produção e a redução dos níveis de estoque da empresa XYZ.</p>

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
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O proprietário de uma clínica de estética realizou uma pesquisa de satisfação em que foram avaliados oito atributos. Os consumidores foram questionados sobre a importância de tais atributos na escolha de uma clínica de estética, atribuindo uma nota ao desempenho da clínica em relação aos atributos apresentados. Para tanto, foram atribuídas as seguintes escalas.</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-3">
                    <div>
                        <p class="mb-1 font-semibold text-sm">Tabela 1 – Escala de importância</p>
                        <table class="w-full text-sm border border-gray-300">
                            <thead class="bg-gray-100"><tr><th class="border px-2 py-1">Pontuação</th><th class="border px-2 py-1">Importância</th></tr></thead>
                            <tbody>
                                <tr><td class="border px-2 py-1 text-center">1</td><td class="border px-2 py-1">Sem importância</td></tr>
                                <tr><td class="border px-2 py-1 text-center">2</td><td class="border px-2 py-1">Pouco importante</td></tr>
                                <tr><td class="border px-2 py-1 text-center">3</td><td class="border px-2 py-1">Importante</td></tr>
                                <tr><td class="border px-2 py-1 text-center">4</td><td class="border px-2 py-1">Extremamente importante</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <p class="mb-1 font-semibold text-sm">Tabela 2 – Escala de desempenho</p>
                        <table class="w-full text-sm border border-gray-300">
                            <thead class="bg-gray-100"><tr><th class="border px-2 py-1">Pontuação</th><th class="border px-2 py-1">Desempenho</th></tr></thead>
                            <tbody>
                                <tr><td class="border px-2 py-1 text-center">1</td><td class="border px-2 py-1">Ruim</td></tr>
                                <tr><td class="border px-2 py-1 text-center">2</td><td class="border px-2 py-1">Regular</td></tr>
                                <tr><td class="border px-2 py-1 text-center">3</td><td class="border px-2 py-1">Bom</td></tr>
                                <tr><td class="border px-2 py-1 text-center">4</td><td class="border px-2 py-1">Excelente</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <p class="mb-1 font-semibold text-sm">Tabela 3 – Pesquisa de satisfação</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr><th class="border px-2 py-1">Nº</th><th class="border px-2 py-1">Descrição do atributo</th><th class="border px-2 py-1">Importância (média)</th><th class="border px-2 py-1">Desempenho (média)</th></tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-2 py-1 text-center">1</td><td class="border px-2 py-1">Serviço feito da maneira correta da primeira vez</td><td class="border px-2 py-1 text-center">3,83</td><td class="border px-2 py-1 text-center">2,63</td></tr>
                            <tr><td class="border px-2 py-1 text-center">2</td><td class="border px-2 py-1">Qualificação dos funcionários</td><td class="border px-2 py-1 text-center">3,63</td><td class="border px-2 py-1 text-center">3,20</td></tr>
                            <tr><td class="border px-2 py-1 text-center">3</td><td class="border px-2 py-1">Atendimento rápido</td><td class="border px-2 py-1 text-center">3,60</td><td class="border px-2 py-1 text-center">3,50</td></tr>
                            <tr><td class="border px-2 py-1 text-center">4</td><td class="border px-2 py-1">Serviço disponível quando necessário</td><td class="border px-2 py-1 text-center">3,40</td><td class="border px-2 py-1 text-center">3,05</td></tr>
                            <tr><td class="border px-2 py-1 text-center">5</td><td class="border px-2 py-1">Preços baixos</td><td class="border px-2 py-1 text-center">3,38</td><td class="border px-2 py-1 text-center">2,00</td></tr>
                            <tr><td class="border px-2 py-1 text-center">6</td><td class="border px-2 py-1">Execução apenas do serviço necessário</td><td class="border px-2 py-1 text-center">3,10</td><td class="border px-2 py-1 text-center">3,11</td></tr>
                            <tr><td class="border px-2 py-1 text-center">7</td><td class="border px-2 py-1">Próximo de casa</td><td class="border px-2 py-1 text-center">2,52</td><td class="border px-2 py-1 text-center">2,65</td></tr>
                            <tr><td class="border px-2 py-1 text-center">8</td><td class="border px-2 py-1">Envio de informações sobre os serviços</td><td class="border px-2 py-1 text-center">2,05</td><td class="border px-2 py-1 text-center">3,33</td></tr>
                        </tbody>
                    </table>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base na combinação dos dados de importância e desempenho dos atributos avaliados, que ação o proprietário da clínica de estética deve priorizar?</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Ofertar serviços adicionais.',
            'opcao_b' => 'Mudar a localização da clínica.',
            'opcao_c' => 'Adotar um padrão de atendimento mais ágil.',
            'opcao_d' => 'Buscar a execução de serviços sem erros.',
            'opcao_e' => 'Ampliar as ações de comunicação dos serviços oferecidos pela empresa.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O plano de negócios como parte fundamental do processo empreendedor é um instrumento que visa estruturar as principais concepções e alternativas para uma análise correta de viabilidade do negócio pretendido. A realização do plano de negócios envolve diversas etapas, sendo a análise do mercado e da competitividade importante para se reverem e se adaptarem estratégias aos novos desafios. A figura a seguir apresenta o modelo de estratégias competitivas genéricas concebido por Porter.</p>
                <p class="mb-2 text-right text-sm">PORTER, M. <b>Estratégias competitivas</b>. Técnicas de análise para indústrias e concorrência. São Paulo: Atlas, 2005.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir das informações apresentadas no texto e na figura das Estratégias Competitivas Genéricas de Porter, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Na liderança de custos, o empreendedor deve optar por uma estratégia de custo mais vantajosa que a de seus concorrentes, o que significa obter economias de escalas por meio de tecnologias apropriadas e, sobretudo, de alta produtividade.</p>
                <p class="mb-2 pl-6 text-justify">II. Na estratégia de diferenciação, o empreendedor deve buscar ser o único em algum fator que o mercado consumidor considera importante, o que significa ser singular, diferenciado no marketing e em outras características.</p>
                <p class="mb-2 pl-6 text-justify">III. Na estratégia de enfoque no custo, o empreendedor deve identificar uma solução de custo mais vantajosa e uma oferta de produto diferenciada dos seus concorrentes, o que significa a criação de produtos com preços mais baixos e massificados.</p>

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
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Praticar a responsabilidade social empresarial requer atenção a múltiplas exigências no tocante a relações de parceria entre clientes e fornecedores, produção de qualidade, contribuições para o desenvolvimento da comunidade, investimentos em pesquisa tecnológica, preservação do meio ambiente, redução de ações predatórias, participação dos trabalhadores nos resultados organizacionais, qualificação profissional, respeito ao cidadão etc. Ao praticar conduta ética e socialmente responsável, a organização alcança o respeito das pessoas e das comunidades que atinge, engajando seus colaboradores e conquistando a preferência dos consumidores.</p>
                <p class="mb-2 text-right text-sm">AMORIM, T. N. G. F. Responsabilidade social corporativa. <i>In</i>: ALBUQUERQUE, J. L. (org.) <b>Gestão ambiental e responsabilidade social:</b> conceitos, ferramentas e aplicações. São Paulo: Atlas, 2009 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando a abordagem realizada no texto, pode-se afirmar que uma empresa cumpre seu papel social com êxito quando</p>
            ',
            'referencia' => '',
            'opcao_a' => 'a preferência dos consumidores e o engajamento dos colaboradores não são influenciados pelo modelo de gestão implementado pela empresa.',
            'opcao_b' => 'o respeito pelas pessoas e pelas comunidades antecede a prática da empresa, considerando que a responsabilidade social empresarial é uma exigência imposta pelo mercado e pelos fornecedores.',
            'opcao_c' => 'o modelo de gestão for pautado tanto pela responsabilidade social quanto pela atmosfera interna, contribuindo, assim, para a prevalência de condutas éticas, respeito às pessoas e engajamento dos colaboradores.',
            'opcao_d' => 'a preservação do meio ambiente é atendida pela empresa, pois é um fator que amplia a sua participação no mercado, considerando que esse é um dos problemas contemporâneos que mais exige atenção das organizações.',
            'opcao_e' => 'a participação dos trabalhadores nos resultados organizacionais reflete o engajamento deles no conjunto dos procedimentos internos, primando pela ética e pelas ações sociais e fortalecendo, assim, a imagem pública da empresa.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Uma cooperativa de produtores agrícolas deseja escoar sua produção de cocos advinda das fazendas de origem para os centros consumidores, com o objetivo de atender as demandas desses locais no mês seguinte. Devido ao aumento do custo de produção e transporte, a cooperativa decidiu contratar um administrador para ajudar a reduzir o custo de distribuição, definindo o volume a ser transportado de cada região de origem para cada centro consumidor.</p>
                <p class="mb-2 text-justify">Suponha que 1 e 2 sejam as regiões de origem das fazendas de coco, e 3 e 4, os centros consumidores. A tabela 1 apresenta os valores dos fretes (em reais, por tonelada) para o referido transporte, entre cada par de origem-centro consumidor. A tabela 2 mostra os dados da oferta para cada ponto de origem, e a tabela 3, o volume para cada centro consumidor (destino).</p>

                <p class="mb-1 font-semibold text-sm">Tabela 1 – Valores de fretes por toneladas de coco (R$/tonelada)</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300 text-center">
                        <thead class="bg-gray-100">
                            <tr><th class="border px-3 py-1">Origem</th><th class="border px-3 py-1">Destino 3</th><th class="border px-3 py-1">Destino 4</th></tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1 font-medium">1</td><td class="border px-3 py-1">R$ 100/ton.</td><td class="border px-3 py-1">R$ 150/ton.</td></tr>
                            <tr><td class="border px-3 py-1 font-medium">2</td><td class="border px-3 py-1">R$ 90/ton.</td><td class="border px-3 py-1">R$ 135/ton.</td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-3">
                    <div>
                        <p class="mb-1 font-semibold text-sm">Tabela 2 – Oferta por origem (toneladas)</p>
                        <table class="w-full text-sm border border-gray-300 text-center">
                            <thead class="bg-gray-100"><tr><th class="border px-3 py-1">Origem</th><th class="border px-3 py-1">Oferta</th></tr></thead>
                            <tbody>
                                <tr><td class="border px-3 py-1">1</td><td class="border px-3 py-1">400</td></tr>
                                <tr><td class="border px-3 py-1">2</td><td class="border px-3 py-1">300</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <p class="mb-1 font-semibold text-sm">Tabela 3 – Demanda por destino (toneladas)</p>
                        <table class="w-full text-sm border border-gray-300 text-center">
                            <thead class="bg-gray-100"><tr><th class="border px-3 py-1">Destino</th><th class="border px-3 py-1">Demanda</th></tr></thead>
                            <tbody>
                                <tr><td class="border px-3 py-1">3</td><td class="border px-3 py-1">250</td></tr>
                                <tr><td class="border px-3 py-1">4</td><td class="border px-3 py-1">450</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <p class="mb-2 text-justify text-sm">Considere X<sub>ij</sub> uma variável pertencente ao conjunto dos números Reais, não negativos, que representa a quantidade de coco (em toneladas) a ser enviada de cada origem "i" ao destino "j".</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Nesse contexto, um modelo de apoio à decisão, de Programação Linear, que, quando resolvido, ajudará a cooperativa a tomar a decisão de quantas toneladas de coco devem ser enviadas de cada origem para cada destino é</p>
            ',
            'referencia' => '',
            'opcao_a' => '<b>Função Objetivo:</b> Minimizar Z = 100·X<sub>13</sub> + 150·X<sub>14</sub> + 90·X<sub>23</sub> + 135·X<sub>24</sub> | <b>Sujeito a:</b> X<sub>13</sub> + X<sub>14</sub> = 400; X<sub>23</sub> + X<sub>24</sub> = 300; X<sub>13</sub> + X<sub>23</sub> = 250; X<sub>14</sub> + X<sub>24</sub> = 450; X<sub>13</sub>, X<sub>14</sub>, X<sub>23</sub>, X<sub>24</sub> ≥ 0',
            'opcao_b' => '<b>Função Objetivo:</b> Minimizar Z = 400·(100·X<sub>13</sub> + 150·X<sub>14</sub>) + 300·(125·X<sub>23</sub> + 135·X<sub>24</sub>) | <b>Sujeito a:</b> X<sub>13</sub> + X<sub>23</sub> = 250; X<sub>14</sub> + X<sub>24</sub> = 450; X<sub>13</sub>, X<sub>14</sub>, X<sub>23</sub>, X<sub>24</sub> ≥ 0',
            'opcao_c' => '<b>Função Objetivo:</b> Maximizar Z = 400·(100·X<sub>13</sub> + 150·X<sub>14</sub>) + 300·(125·X<sub>23</sub> + 135·X<sub>24</sub>) | <b>Sujeito a:</b> X<sub>13</sub> + X<sub>23</sub> = 250; X<sub>14</sub> + X<sub>24</sub> = 450; X<sub>13</sub>, X<sub>14</sub>, X<sub>23</sub>, X<sub>24</sub> ≥ 0',
            'opcao_d' => '<b>Função Objetivo:</b> Maximizar Z = (100 + 400 + 250)·X<sub>13</sub> + (150 + 300 + 250)·X<sub>14</sub> + (90 + 400 + 250)·X<sub>23</sub> + (135 + 300 + 250)·X<sub>24</sub>',
            'opcao_e' => '<b>Função Objetivo:</b> Minimizar Z = 100·X<sub>13</sub> + 150·X<sub>14</sub> + 90·X<sub>23</sub> + 135·X<sub>24</sub> (sem restrições de oferta e demanda)',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Uma <i>startup</i>, cuja missão é auxiliar estudantes de diversas áreas a encontrarem o seu primeiro emprego, tem um modelo de negócio cujas receitas são obtidas predominantemente a partir de anúncios pagos por recrutadores. Atualmente, a <i>startup</i> possui um cadastro com mais de 350 000 estudantes, que contém desde informações curriculares até dados pessoais dos candidatos. Visando expandir suas receitas, os fundadores estão cogitando a venda de dados dos usuários de sua base para outras empresas de varejo, que têm interesse em obter informações de perfil desse público. Após consulta à Lei n. 13.709/2018 (Lei Geral de Proteção de Dados – LGPD), descobriram que a comercialização de dados pessoais é proibida no ordenamento jurídico brasileiro.</p>
                <p class="mb-2 text-justify">Entretanto, o artigo 12 da referida lei dispõe que dados anonimizados não serão considerados dados pessoais para os fins desta Lei, salvo quando o processo de anonimização puder ser revertido com esforços razoáveis. Considera-se dado anonimizado aquele relativo a titular que não possa ser identificado, considerando a utilização de meios técnicos razoáveis e disponíveis na ocasião de seu tratamento.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas informações apresentadas, a comercialização dos dados pela <i>startup</i> é</p>
            ',
            'referencia' => '',
            'opcao_a' => 'viável, desde que não sejam fornecidas imagens dos usuários.',
            'opcao_b' => 'viável, desde que sejam excluídos o CPF e o nome dos usuários.',
            'opcao_c' => 'viável, desde que respeitados os critérios de anonimização dos dados.',
            'opcao_d' => 'inviável, uma vez que não é possível garantir a anonimização dos dados.',
            'opcao_e' => 'inviável, uma vez que as técnicas atuais de armazenamento de dados impedem a separação de informações pessoais.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A saúde financeira de uma empresa depende do bom controle de seus fluxos de caixa e ciclo financeiro, além de sua capacidade de gerar lucro e de definir boas estratégias de financiamento e de investimento. A liquidez se refere à agilidade com que um investidor consegue desfazer-se de um investimento para voltar a ter dinheiro na mão, sem que, para isso, tenha prejuízo. A liquidez imediata apenas considera valores já disponíveis em caixa, saldos bancários, aplicações, entre outros.</p>
                <p class="mb-1 font-semibold text-sm">Informações financeiras sobre as empresas</p>
                <div class="overflow-x-auto mb-3">
                    <table class="w-full text-sm border border-gray-300 text-center">
                        <thead class="bg-gray-100">
                            <tr><th class="border px-3 py-1 text-left">Grupo Contábil</th><th class="border px-3 py-1">Empresa Alfa</th><th class="border px-3 py-1">Empresa Delta</th><th class="border px-3 py-1">Empresa Gama</th></tr>
                        </thead>
                        <tbody>
                            <tr><td class="border px-3 py-1 text-left">Disponível</td><td class="border px-3 py-1">R$ 450.000</td><td class="border px-3 py-1">R$ 600.000</td><td class="border px-3 py-1">R$ 670.000</td></tr>
                            <tr><td class="border px-3 py-1 text-left">Passivo Circulante</td><td class="border px-3 py-1">R$ 518.000</td><td class="border px-3 py-1">R$ 618.000</td><td class="border px-3 py-1">R$ 718.000</td></tr>
                        </tbody>
                    </table>
                </div>
                <p class="mb-2 text-right text-sm">Disponível em: https://www.sebraeatende.com.br. Acesso em: 17 jul. 2022 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas, os valores de liquidez imediata para as empresas Alfa, Delta e Gama, respectivamente, são</p>
            ',
            'referencia' => '',
            'opcao_a' => '0,87; 0,97; 0,93.',
            'opcao_b' => '0,52; 0,62; 0,72.',
            'opcao_c' => '0,68; 0,18; 0,48.',
            'opcao_d' => '9,68; 1,22; 1,39.',
            'opcao_e' => '1,15; 1,03; 1,07.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Uma fornecedora de itens de limpeza doméstica para supermercados optou por mudar o posicionamento estratégico de escala para o de diferenciação, investindo em matérias-primas mais eficientes, que melhorem a performance dos produtos, por meio da diversidade de fragrâncias e embalagens, visando atender clientes com maior poder aquisitivo.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Para comunicar sua mudança estratégica, de forma a reforçar sua nova posição de diferenciação, a empresa deve</p>
            ',
            'referencia' => '',
            'opcao_a' => 'priorizar grandes investimentos em mídias de massa, como televisões e jornais.',
            'opcao_b' => 'aguardar que os efeitos sejam percebidos pelos consumidores e, assim, alimentar o efeito boca a boca entre os consumidores, explorando o efeito surpresa.',
            'opcao_c' => 'investir em treinamento dos funcionários e aperfeiçoamento dos produtos, mantendo, ao mesmo tempo, a estratégia de comunicação da posição anterior, para justificar os novos investimentos.',
            'opcao_d' => 'manter o escopo amplo de comunicação (funcionários, clientes com menor e maior poder aquisitivo), de forma a mudar de posição estratégica na medida em que haja demanda por diferentes públicos.',
            'opcao_e' => 'apresentar os novos produtos ao público interno, por meio de reuniões com os funcionários, e ao público externo, por meio de comunicação segmentada e reforço do caráter <i>premium</i> de seus novos produtos.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O fluxograma da Empresa XYV apresenta as etapas do processo de vendas, identificadas pelas letras A a J, desde o início até o fim, incluindo etapas como recebimento do pedido, verificação de disponibilidade do produto, seleção, emissão de cupom fiscal, entrega e informação ao cliente sobre prazo em caso de indisponibilidade.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando o fluxograma de vendas da Empresa XYV e os símbolos representativos de fluxograma, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A etapa I (Cliente irá aguardar?) representa uma tomada de decisão do cliente, porém o símbolo utilizado (n. 3) é inadequado, devendo ser substituído pelo símbolo n. 6.</p>
                <p class="mb-2 pl-6 text-justify">II. Para que o fluxograma corresponda à realidade dos procedimentos, o símbolo utilizado na etapa F (Emitir o Cupom Fiscal) deve ser substituído pelo símbolo n. 5, mudança que resultará em fluxo que se desenvolve sem anormalidades.</p>
                <p class="mb-2 pl-6 text-justify">III. A etapa H (Informar ao cliente a falta do produto e o prazo de entrega) corresponde a uma informação prestada pela empresa ao cliente e, portanto, o símbolo utilizado (n. 2) produzirá o mesmo efeito se alterado para o símbolo n. 3.</p>
                <p class="mb-2 pl-6 text-justify">IV. Considerando que o cliente tenha decidido aguardar a entrega do produto (etapa I), os termos da etapa B (Receber o pedido) podem ser mantidos, sendo impróprio alterá-los para "Receber o produto", uma vez que o processo do fluxograma deverá ser reiniciado.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'III.',
            'opcao_b' => 'IV.',
            'opcao_c' => 'I e II.',
            'opcao_d' => 'I e IV.',
            'opcao_e' => 'II e III.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Embora praticada, pelo menos, desde os anos 1970, é a partir de 2010 que se verifica a intensificação da Gestão Baseada em Dados, que consiste em tomar dados de sistemas de informação transacionais ou de inteligência de mercado, que costumavam ficar depositados sem maior utilização, e transformá-los em informações e conhecimento de valor para decisões operacionais e estratégicas. Métodos de aprendizado de máquina e estatística avançada, antes ignorados, passaram a fazer parte do dia a dia de empresas e governos.</p>
                <p class="mb-2 text-right text-sm">Disponível em: https://www.ceara.gov.br. Acesso em: 24 jun. 2022 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir das informações apresentadas no texto, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'A utilização da Gestão Baseada em Dados possibilitou, desde 1970, a transformação dos dados em informação, conhecimento e decisão.',
            'opcao_b' => 'A Gestão Baseada em Dados consiste em uma inovação pública voltada a incrementar a gestão de dados a partir de um novo papel das tecnologias da informação transacionais.',
            'opcao_c' => 'A utilização da Gestão Baseada em Dados para apoio à gestão ganhou destaque a partir de 2010, provocando um aumento de práticas inovadoras em empresas e governos.',
            'opcao_d' => 'Os projetos públicos de Gestão Baseada em Dados são iniciativas que inovam, articulando soluções de tecnologia da informação típicas do setor privado para apoio à construção de políticas públicas estratégicas.',
            'opcao_e' => 'O projeto apresentado no texto materializa uma aproximação entre gestão governamental e privada em que Estado aprende com o setor empresarial práticas bem-sucedidas de Gestão Baseada em Dados e as aplica em favor dos cidadãos.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">A pesquisa de marketing inclui identificação, coleta, análise, disseminação e uso de informações, e cada fase desse processo é importante. Identificamos ou definimos o problema ou oportunidade de pesquisa de marketing e, a seguir, determinamos as informações necessárias para investigá-lo. Em seguida, identificam-se as fontes relevantes de informações e avaliam-se os métodos de coleta de dados com sofisticação e complexidade variadas em função da sua utilidade.</p>
                <p class="mb-2 text-right text-sm">MALHOTRA, N. K. <b>Pesquisa de marketing: uma orientação aplicada</b>. 6. ed. São Paulo: Prentice Hall, 2011 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando o texto apresentado, assinale a opção que apresenta apenas procedimentos de coleta e de análise de dados qualitativos que podem ser utilizados nas pesquisas de marketing.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Questionário; Séries Históricas; Cointegração Bivariada.',
            'opcao_b' => 'Experimento; Survey; Modelagem de Equações Estruturais.',
            'opcao_c' => 'Pesquisa Documental; Histograma; Diagrama de Dispersão.',
            'opcao_d' => 'Entrevista em Profundidade; Grupo Focal; Análise de Discurso.',
            'opcao_e' => 'Observação Participante; Levantamento de Tendências; Análise Preditiva.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O termo cidades inteligentes surgiu na literatura referindo-se a aglomerações urbanas que fazem o uso integrado de Tecnologias da Informação e Comunicação, aliadas a uma gestão pública eficiente e dinâmica, com vistas a melhorar a qualidade de vida dos cidadãos. Apesar de ser um conceito ainda em construção, para caracterizar um município como uma cidade inteligente, há consenso entre pesquisadores de que é necessária a criação de políticas voltadas para o acesso público e gratuito aos dados, e também para a inovação e sustentabilidade.</p>
                <p class="mb-2 text-right text-sm">Disponível em: https://commons.wikimedia.org. Acesso em: 20 jun. 2022 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas no texto e na figura da Roda da Cidade Inteligente (<i>Smart City Wheel</i>), avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Uma política de dados abertos restringe a interconectividade global e local em cidades inteligentes.</p>
                <p class="mb-2 pl-6 text-justify">II. Nas cidades inteligentes, a dimensão econômica costuma ter enfoque não apenas na produção industrial, mas também na diversificação de sua matriz econômica.</p>
                <p class="mb-2 pl-6 text-justify">III. A inovação, nas cidades inteligentes, incorpora opções limpas e não motorizadas de mobilidade.</p>
                <p class="mb-2 pl-6 text-justify">IV. O planejamento urbano verde centrado no cidadão constitui característica importante de uma cidade inteligente.</p>

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

        Questao::create([
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Nos últimos anos, observou-se uma transformação rápida no ecossistema dos negócios de impacto no Brasil e no mundo. Diversos modelos e iniciativas surgiram com o propósito de minimizar um problema social e/ou ambiental por meio de sua atividade principal (seu produto/serviço e/ou sua forma de operação).</p>
                <p class="mb-2 text-right text-sm">Disponível em: https://aliancapeloimpacto.org.br. Acesso em: 16 jul. 2022 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A respeito dos negócios de impacto, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Os negócios de impacto social são impedidos de obter lucro em suas operações, em virtude de seu caráter filantrópico.</p>
                <p class="mb-2 pl-6 text-justify">II. As ferramentas tradicionais de gestão podem ser utilizadas no gerenciamento dos negócios de impacto social, apesar de suas diferenças conceituais.</p>
                <p class="mb-2 pl-6 text-justify">III. Uma outra forma de se referir às empresas de impacto social é o termo <i>startup</i>, conceito fundado para denominar esse tipo de organização.</p>
                <p class="mb-2 pl-6 text-justify">IV. Os negócios de impacto caracterizam-se como empreendedorismo por necessidade, visto que são criados a partir da necessidade de geração de renda.</p>
                <p class="mb-2 pl-6 text-justify">V. O ecossistema dos negócios de impacto inclui aceleradoras e incubadoras que atuam com esses modelos de negócios.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e III.',
            'opcao_b' => 'I e IV.',
            'opcao_c' => 'II e III.',
            'opcao_d' => 'II e V.',
            'opcao_e' => 'IV e V.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 font-bold">TEXTO 1</p>
                <p class="mb-2 text-justify">O binômio "ideia inovadora + tecnologia" não é a chave inequívoca para o sucesso, por quê? A chave da questão é o "modelo de negócios", que pode ser traduzido como o elemento que faz a conexão entre o que a tecnologia proporciona e o que o mercado quer. Uma nova tecnologia que não tenha um modelo específico de negócios deve saber como extrair valor da inovação tecnológica. Portanto, o empreendedor precisa estruturar bem o seu modelo de negócio, compreendendo como os vários recursos interagem e como a empresa pode criar e capturar valor a partir dessa interação. Os modelos de negócios inovadores que surgiram no segmento do turismo modificaram a estrutura do mercado, e as agências de turismo do passado que tinham como <i>business core</i> o cliente médio ficaram pelo caminho.</p>
                <p class="mb-2 text-right text-sm">AFONSO, J. R. R.; NOBREGA, M. Tecnologia disruptiva e empreendedorismo. <b>Revista Conjuntura Econômica</b>, v. 76, n. 4, p. 18-21, abr. 2022 (adaptado).</p>

                <p class="mb-2 font-bold">TEXTO 2</p>
                <p class="mb-2 text-justify">Infográfico: Número de anos que levou para cada produto ganhar 50 milhões de usuários — Companhias Aéreas: 68 anos; Automóveis: 62 anos; Telefones: 50 anos; Eletricidade: 46 anos; Cartão de Crédito: 28 anos; Televisão: 22 anos; Caixa Eletrônico: 18 anos; Computador: 14 anos; Internet: 7 anos; Celular: 12 anos; YouTube: 4 anos; Facebook: 3 anos; Twitter: 2 anos; Pokémon Go: 19 dias.</p>
                <p class="mb-2 text-right text-sm">Disponível em: https://analistamodelosdenegocios.com.br. Acesso em: 15 jul. 2022 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando os textos e as ferramentas para desenvolvimento de modelos de negócios, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. As características como design arrojado e desempenho do produto determinam os resultados que uma <i>startup</i> obterá no processo de desenvolvimento de novas tecnologias.</p>
                <p class="mb-2 pl-6 text-justify">II. Os modelos de negócios com características disruptivas provocaram transformações nos padrões e modelos de negócios existentes no turismo.</p>
                <p class="mb-2 pl-6 text-justify">III. As empresas que não utilizam as tecnologias disponíveis para alcançar seus clientes estão condenadas ao fracasso, em decorrência das mudanças de padrões no segmento de turismo.</p>
                <p class="mb-2 pl-6 text-justify">IV. O encaixe problema-solução, no desenvolvimento de um modelo de negócio, auxilia o empreendedor a criar produtos e serviços alinhados às necessidades dos clientes.</p>
                <p class="mb-2 pl-6 text-justify">V. O <i>Business Model Canvas</i> é uma ferramenta muito utilizada para o desenvolvimento de modelos de negócios, sendo composto por blocos que auxiliam o empreendedor na identificação e visualização de diferentes aspectos do modelo do negócio.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I, II e V.',
            'opcao_b' => 'I, III e IV.',
            'opcao_c' => 'I, III e V.',
            'opcao_d' => 'II, III e IV.',
            'opcao_e' => 'II, IV e V.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Frente às dificuldades de avaliação de desempenho de pessoal durante o período de isolamento social em razão da pandemia de Covid-19, foi recomendada a adaptação de uma medida de uso consolidado em Marketing para a área de Gestão de pessoas. A proposta foi utilizar o que chamaram de "Net Performance Promoters Score (NPPS)", ou "Escore Líquido de Promotores de Desempenho (ELPD)", com avaliação a partir de três perguntas para cada trabalhador/colaborador.</p>
                <p class="mb-2 text-justify">Concernente à primeira questão, respondentes que indicassem de 1 a 6 seriam categorizados como "detratores", os que indicassem 9 ou 10 seriam categorizados como "promotores", e os demais seriam categorizados como "passivos". O ELPD é definido como a diferença entre o percentual de promotores e o percentual de detratores.</p>
                <p class="mb-2 text-right text-sm">AGUINIS, H.; BURGI-TIAN, J. Measuring performance during crises and beyond: the Performance Promoter Score. <b>Business Horizons</b>, v. 64, n. 1, p. 149-160, 2021 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando o texto apresentado, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O ELPD constitui uma alternativa de avaliação de desempenho centrada no trabalhador/colaborador, por meio de averiguação tanto quantitativa quanto qualitativa.</p>
                <p class="mb-2 pl-6 text-justify">II. As empresas com valores positivos de ELPD são as que apresentam evidência de desempenho superior e de satisfação de pessoal, dada a predominância de detratores de produtividade no trabalho.</p>
                <p class="mb-2 pl-6 text-justify">III. A pandemia de Covid-19 redefiniu o conceito de trabalho e, consequentemente, o de avaliação de desempenho, cuja operacionalização tornou-se mais simples, prática e conveniente, como é tradição nas pesquisas de marketing.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'III, apenas.',
            'opcao_c' => 'I e II, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'categoria' => 'Administração',
            'ano' => 2022,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Um dos principais fatores para o sucesso organizacional na atualidade é a adoção da liderança situacional. Entende-se por liderança situacional aquela pautada na adaptação da forma de liderar tomando-se como parâmetro o contexto em que a empresa e a equipe se encontram. Na liderança situacional, implementam-se mudanças de tal forma que seja possível promover a motivação, a produtividade e o engajamento da equipe, o que repercute nos resultados empresariais. Para a maioria das empresas, a liderança que reconhece e valoriza o mérito individual é altamente recomendável.</p>
                <p class="mb-2 text-right text-sm">LONGENECKER, J. G.; PETTY, J. W.; PALICH, L. E.; HOY, F. <b>Administração de pequenas empresas:</b> lançando e desenvolvendo iniciativas empreendedoras. São Paulo: Cengage, 2018 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas no texto sobre liderança e sucesso organizacional, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'A preocupação com os funcionários da empresa implica entender suas demandas emocionais e expectativas de uma liderança sensível e eficaz, que motivará a busca de melhores resultados, considerando a forte competição entre as empresas.',
            'opcao_b' => 'As novas abordagens de liderança, diante do mundo empresarial competitivo, envolvem sensibilidade e preocupação com os funcionários das empresas, reconhecimento e valorização do mérito individual e atendimento às demandas emocionais dos funcionários.',
            'opcao_c' => 'A forma mais justa e contemporânea de atender às expectativas dos funcionários de uma empresa é por meio da liderança eficaz, pautada pela adoção de postura situacional, em que o líder é apoiado pelos subordinados quando estes percebem que os gestores não são autocráticos.',
            'opcao_d' => 'As empresas têm adotado o modelo de liderança situacional alinhado aos interesses dos funcionários, especialmente diante de forte competitividade empresarial, em razão da velocidade da informação veiculada na internet, o que contribui para o engajamento da equipe em busca do sucesso organizacional.',
            'opcao_e' => 'O suporte, o apreço e a preocupação são condições relevantes para a compreensão, pelos líderes, dos aspectos emocionais dos funcionários de uma empresa, por isso, no modelo de liderança situacional, deve constar o mérito individual dos colaboradores como elemento necessário para o êxito empresarial.',
            'alternativa_correta' => 'B',
        ]);
    }
}

