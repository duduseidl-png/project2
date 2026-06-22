<?php

namespace Database\Seeders;

use App\Models\Questao;
use Illuminate\Database\Seeder;

class Questoes_Formacao_Geral_2019 extends Seeder
{
    public function run(): void
    {
        Questao::create([
            'categoria' => 'Formação Geral',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Augusto de Campos é um artista concretista brasileiro cuja poética estabelece a relação de diálogo entre o aspecto visual, sonoro e tátil do texto verbal.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-1/2 md:w-1/2">
                        <img src="/img/questoes/formacao_geral_2019/img1.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base no poema apresentado (Despoesia, Augusto de Campos), avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O aspecto sensorial é construído por meio da exploração da dimensão visual das palavras, sendo a imagem um elemento essencial do texto.</p>
                <p class="mb-2 pl-6 text-justify">II. O artista utiliza técnicas de diagramação, harmonizando os componentes gráficos e espaciais, que se transformam em elementos de construção de sentidos diversos.</p>
                <p class="mb-2 pl-6 text-justify">III. A impressão de movimento caótico cria o efeito de uma espécie de big-bang que atua sobre ambas as palavras: poema e bomba.</p>
                <p class="mb-2 pl-6 text-justify">IV. A utilização do espaço é secundária para a construção de sentidos da obra, já que a palavra escrita, nesse caso, é suficiente para a leitura do poema.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'CAMPOS, A. <strong>Despoesia.</strong> São Paulo: Perspectiva, 1994 (adaptado).',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'II e IV, apenas.',
            'opcao_c' => 'III e IV, apenas.',
            'opcao_d' => 'I, II e III, apenas.',
            'opcao_e' => 'I, II, III e IV.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Formação Geral',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Na história das civilizações humanas, a agricultura esteve relacionada à origem de um fenômeno que se tornaria o marco da economia alimentar: o aumento demográfico. Entretanto, apesar de toda a força civilizatória da agricultura, muitos povos tornaram-se vulneráveis por falta de alimentos.</p>

                <p class="mb-2 text-justify">Mesmo com o aumento do volume de alimentos, o número de indivíduos subnutridos é grande, como demonstrado pelos dados estatísticos da Organização das Nações Unidas para a Agricultura e Alimentação (FAO). A análise dos dados revela que, até 2014, a quantidade de pessoas desnutridas no mundo estava diminuindo, porém, entre 2015 e 2017, esse número aumenta.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando a segurança alimentar e a nutrição no mundo, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O conceito de segurança alimentar e nutricional admite que a fome e a desnutrição são problemas de oferta adequada e garantia de alimentos saudáveis, respeitando-se a diversidade cultural e a sustentabilidade socioeconômica e ambiental.</p>
                <p class="mb-2 pl-6 text-justify">II. A segurança alimentar e nutricional compreende a produção e a disponibilidade de alimentos, bem como o acesso à alimentação adequada e saudável.</p>
                <p class="mb-2 pl-6 text-justify">III. A escassez da oferta de alimentos nas últimas décadas decorre da falta de processos de produção e disseminação tecnológica que garantam a produção no campo frente às mudanças climáticas.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'LIMA, J. S. G. Segurança alimentar e nutricional: sistemas agroecológicos são a mudança que a intensificação ecológica não alcança. <strong>Ciência e Cultura,</strong> v. 69, n. 2, 2017 (adaptado).',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'III, apenas.',
            'opcao_c' => 'I e II, apenas.',
            'opcao_d' => 'II e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Formação Geral',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Segundo resultados da última Pesquisa Nacional de Saneamento Básico (PNSB) de 2008, a quase totalidade dos municípios brasileiros tinha serviço de abastecimento de água em pelo menos um distrito (99,4%). Além da existência da rede, uma das formas de se avaliar a eficiência do serviço de abastecimento de água à população é examinar o volume diário per capita da água distribuída por rede geral. No ano de 2008, foram distribuídos diariamente, no conjunto do país, 320 litros per capita, média que variou bastante entre as regiões. Na Região Sudeste, o volume distribuído alcançou 450 litros per capita, enquanto na Região Nordeste ele não chegou à metade desta marca, apresentando uma média de 210 litros per capita. Embora o volume total tenha aumentado em todas as regiões do país, comparando-se com os números apresentados pela PNSB de 2000, as diferenças regionais permaneceram praticamente inalteradas.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas informações apresentadas, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. Em algumas regiões do Brasil, os índices referidos estão abaixo da média nacional, indicando diferenças de acesso de qualidade a abastecimento de água que podem impactar a saúde pública.</p>

                <p class="font-bold my-2" style="text-align: center !important; width: 100%;">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. O aumento da eficiência da política pública de abastecimento de água no Brasil contribui para o desenvolvimento nacional, para a redução dos desequilíbrios regionais e para a promoção da inclusão social.</p>

                <p class="mb-2 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => 'Disponível em: https://biblioteca.ibge.gov.br/index.php/biblioteca-catalogo?view=detalhes&id=280933. Acesso em: 01 out. 2019 (adaptado).',
            'opcao_a' => 'As asserções I e II são verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são falsas.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'categoria' => 'Formação Geral',
            'ano' => 2019,
            'contextualizacao' => '
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-3 text-sm text-center items-center">
                    <div>
                        <p class="mb-2 font-bold">Aldeia Watoriki, Terra Indígena Yanomami, Amazonas/Roraima</p>
                        <img src="/img/questoes/formacao_geral_2019/img2.jpg" class="w-full h-48 object-cover mb-2 rounded" alt="Aldeia Watoriki, Terra Indígena Yanomami, Amazonas/Roraima">
                        <p class="-mt-1">Disponível em: http://www.funai.gov.br/. Acesso em: 26 ago. 2019 (adaptado).</p>
                    </div>
                    <div>
                        <p class="mb-2 font-bold">Aldeia Gavião Parkatejê, Terra Indígena Mãe Maria, Pará</p>
                        <img src="/img/questoes/formacao_geral_2019/img3.jpg" class="w-full h-48 object-cover mb-2 rounded" style="margin-top: 1.05mm;" alt="Aldeia Gavião Parkatejê, Terra Indígena Mãe Maria, Pará">
                        <p class="-mt-2">Disponível em: http://www.videosnaaldeia.org.br. Acesso em: 27 set. 2019 (adaptado).</p>
                    </div>
                </div>

                <p class="mb-2 text-justify">O Supremo Tribunal Federal definiu, em 2009, os critérios para o reconhecimento de determinada terra como território indígena, sendo eles: o marco da tradicionalidade da ocupação; o marco temporal da ocupação; o marco da concreta abrangência e finalidade prática da ocupação tradicional; e, por fim, o marco da proporcionalidade, que consiste na aplicação do princípio da proporcionalidade em matéria indígena. De acordo com o marco da tradicionalidade da ocupação, para que uma terra indígena possa ser considerada tradicional, as comunidades indígenas devem demonstrar o caráter de perdurabilidade de sua relação com a terra, caráter este demonstrado em sentido de continuidade etnográfica.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nas informações acerca dos referidos marcos para o reconhecimento de determinada terra como indígena, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A tradicionalidade é um elemento fundamental para a perpetuação dos vínculos territoriais das populações indígenas, já que remete ao caráter estático de seus modos de vida.</p>
                <p class="mb-2 pl-6 text-justify">II. Os marcos de reconhecimento da ocupação viabilizam o alcance do direito de utilização das terras em diferentes tipos de atividades produtivas por parte das comunidades indígenas.</p>
                <p class="mb-2 pl-6 text-justify">III. O critério de ocupação tradicional considera que a terra indígena proporciona elementos materiais e simbólicos essenciais à transmissão dos legados culturais entre gerações.</p>
                <p class="mb-2 pl-6 text-justify">IV. O reconhecimento de terras ancestrais integra-se à lógica da homogeneidade cultural, já que esta medida valoriza a cultura e a participação dos povos indígenas como elementos do amálgama cultural brasileiro.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => 'Disponível em: https://doi.org/10.12957/publicum.2018.37271. Acesso em: 27 set. 2019 (adaptado).',
            'opcao_a' => 'I e III.',
            'opcao_b' => 'I e IV.',
            'opcao_c' => 'II e III.',
            'opcao_d' => 'I, II e IV.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Formação Geral',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">Conforme dados do Atlas da Violência 2019, verifica-se o crescimento no número de homicídios de mulheres no país durante o período de 2007 a 2017. Nesse período, a taxa de homicídios entre as mulheres negras cresceu mais do que a taxa de homicídios entre as mulheres não negras. A classificação de raça/cor do IBGE agrega negras como a soma de pretas e pardas e não negras como a soma de brancas, amarelas e indígenas.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <img src="/img/questoes/formacao_geral_2019/img4.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. O maior crescimento dos casos de homicídios de mulheres negras em comparação com os casos de mulheres não negras indica a relevância dos estudos a respeito das múltiplas variáveis relacionadas a este fenômeno social.</p>

                <p class="font-bold my-2" style="text-align: center !important; width: 100%;">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. A análise do gráfico permite concluir que, no início da série histórica, havia um contexto favorável à superação da situação social de maior vulnerabilidade da mulher negra, em razão da menor diferença entre as taxas de homicídios.</p>

                <p class="mb-2 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => 'Instituto de Pesquisa Econômica Aplicada (IPEA); Fórum Brasileiro de Segurança Pública (Orgs.). <strong>Atlas da violência 2019.</strong> Brasília: Ipea, 2019 (adaptado).',
            'opcao_a' => 'As asserções I e II são verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são falsas.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Formação Geral',
            'ano' => 2019,
            'contextualizacao' => '
                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <img src="/img/questoes/formacao_geral_2019/img5.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>

                <p class="mb-2 text-right text-sm"> Disponível em: https://publications.iadb.org/en/publication/16231/guia-operacional-de-acessibilidade-para-projetos-emdesenvolvimento-urbano-com. Acesso em: 11 set. 2019 (adaptado).</p>

                <p class="mb-2 text-justify">O princípio da acessibilidade dispõe que na construção de espaços, na formatação de produtos e no planejamento de serviços deve-se considerar que as pessoas com deficiência (PCD) são usuárias legítimas, dignas e independentes. Nenhum serviço pode ser concedido, permitido, autorizado ou delegado sem acessibilidade plena, para não obstaculizar o exercício pleno dos direitos pelas pessoas com deficiência. A acessibilidade é um direito de todos os cidadãos e, por isso, não se limita a propiciar a inclusão de pessoas com deficiência, mas também de pessoas com mobilidade reduzida, idosos, gestantes e em situação vulnerável.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Projetar e adaptar as vias públicas facilita a circulação das pessoas com dificuldade de locomoção e usuários de cadeiras de rodas, sendo uma medida adequada de acessibilidade.</p>
                <p class="mb-2 pl-6 text-justify">II. Padronizar as calçadas com implantação universal de rampas, faixas de circulação livres de barreiras, guias e pisos antiderrapantes atende ao princípio da acessibilidade.</p>
                <p class="mb-2 pl-6 text-justify">III. Garantir a ajuda de terceiros a pessoas com deficiências, nos edifícios públicos e em espaços abertos públicos, é uma previsão legal convergente ao princípio da acessibilidade.</p>
                <p class="mb-2 pl-6 text-justify">IV. Implantar sinalização sonora nos semáforos e informações em braille nas sinalizações dos espaços urbanos para pessoas com deficiência visual são providências de acessibilidade adequadas.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'OLIVEIRA, S. M. de. Cidade e acessibilidade: inclusão social das pessoas com deficiências. In: <strong>VIII Simpósio Iberoamericano em comércio internacional, desenvolvimento e integração regional,</strong> 2017 (adaptado).',
            'opcao_a' => 'III, apenas.',
            'opcao_b' => 'I e IV, apenas.',
            'opcao_c' => 'II e III, apenas.',
            'opcao_d' => 'I, II e IV, apenas.',
            'opcao_e' => 'I, II, III e IV.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Formação Geral',
            'ano' => 2019,
            'contextualizacao' => '
                <p class="mb-2 text-justify">O esgotamento profissional, conhecido como Síndrome de Burnout, foi incluído na Classificação Internacional de Doenças da Organização Mundial da Saúde (OMS). Essa síndrome, que foi incluída no capítulo de problemas associados ao emprego ou ao desemprego, foi descrita como uma síndrome resultante de um estresse crônico no trabalho não administrado com êxito e caracterizado por três elementos: sensação de esgotamento, cinismo ou sentimentos negativos relacionados a seu trabalho e eficácia profissional reduzida. A nova classificação, publicada em 2018 e aprovada durante a 72ª Assembleia Mundial da OMS, entrará em vigor no dia 1º de janeiro de 2022. A Classificação Internacional de Doenças da OMS estabelece uma linguagem comum que facilita o intercâmbio de informações entre os profissionais da área da saúde ao redor do planeta.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Os programas de formação de lideranças focados na obstinação e na resistência ao erro têm sido eficazes na redução da vulnerabilidade a esse tipo de síndrome.</p>
                <p class="mb-2 pl-6 text-justify">II. A compreensão dos sintomas de forma isolada do contexto sociocultural dificulta o estabelecimento do chamado nexo causal entre trabalho e adoecimento.</p>
                <p class="mb-2 pl-6 text-justify">III. As relações de trabalho onde predominam o sentido de realização profissional tendem a reforçar elos de coesão e reconhecimento social favoráveis à saúde psíquica.</p>
                <p class="mb-2 pl-6 text-justify">IV. A prevalência do protocolo clínico pautado no tratamento medicamentoso é condição determinante para a superação desse problema de saúde pública.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => 'Disponível em: https://noticias.uol.com.br/ultimas-noticias/afp/2019/05/27/oms-inclui-a-sindrome-de-burnout-na-lista-de-doencas.htm. Acesso em: 06 jul. 2019 (adaptado).',
            'opcao_a' => 'I, apenas.',
            'opcao_b' => 'II e III, apenas.',
            'opcao_c' => 'III e IV, apenas.',
            'opcao_d' => 'I, II e IV, apenas.',
            'opcao_e' => 'I, II, III e IV.',
            'alternativa_correta' => 'B',
        ]);
    }
}
