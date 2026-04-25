<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class QuestaoSeeder extends Seeder
{
    public function run(): void
    {
        Questao::create([
            'curso' => 'Engenharia de Computação',
            'categoria' => 'Formação Geral',
            'contextualizacao'=> '
                <p class="mb-2 text-justify">O crescimento das cidades promove o aumento da demanda por serviços de água tratada, esgotamento sanitário, manejo das águas pluviais, limpeza urbana e coleta de resíduos sólidos. No Brasil, o processo de urbanização ocorreu de forma rápida e desigual, o que resultou no agravamento de injustiças sociais e econômicas. Os serviços de saneamento básico considerados direitos humanos fundamentais não são acessíveis a uma parcela significativa da população, principalmente àquela em que se concentram os segmentos populacionais em situação de vulnerabilidade.</p>

                <p class="mb-2 text-justify">O atendimento integral e universalizado junto às populações periféricas e em situação de vulnerabilidade constitui um grande desafio, por demandar políticas públicas e investimentos subsidiados e permanentes.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Acerca do saneamento básico no Brasil, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A grave desigualdade social, evidenciada pela segregação nos espaços urbanos, é uma das barreiras para a universalização do acesso aos serviços de saneamento básico.</p>

                <p class="mb-2 pl-6 text-justify">II. O serviço de abastecimento de água no Brasil situa-se no mesmo patamar de fornecimento e de infraestrutura que o sistema de coleta e tratamento do esgoto.</p>

                <p class="mb-2 pl-6 text-justify">III. A universalização do acesso aos serviços de saneamento básico requer investimentos em políticas públicas e em tecnologias sociais que priorizem a democratização e o atendimento às populações em situação de vulnerabilidade.</p>

                <p class="mb-2 pl-6 text-justify">IV. O aumento da incidência de doenças transmitidas pela água resulta não somente da inadequação dos serviços de saneamento, mas também da precariedade das condições de moradia da população em situação de vulnerabilidade.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em.</p>
            ',
            'referencia' => 'Disponível em: https://www.periodicos.unimontes.br/index.php/verdegrande/article/view/6018. Acesso em: 22 jun. 2023 (adaptado).',
            'opcao_a' => 'I e II.',
            'opcao_b' => 'I e IV.',
            'opcao_c' => 'II e III.',
            'opcao_d' => 'I, III e IV.',
            'opcao_e' => 'II, III e IV.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'curso' => 'Engenharia de Computação',
            'categoria' => 'Formação Geral',
            'contextualizacao'=> '
                <p class="mb-2 text-justify">No Brasil, os idosos têm sido cada vez mais obrigados a permanecer no trabalho formal ou informal, mesmo após a aposentadoria, visto que os recursos provenientes desta, na maioria dos casos, são insuficientes para a manutenção dos indivíduos. Um fator que pode ter agravado essa situação foi a aprovação da reforma previdenciária de 2019, que modificou as regras de idade e contribuição para o acesso ao direito ao benefício da aposentadoria. Tal mudança pode ter resultado em um número ainda maior de idosos que disputam com as populações jovens e com sistemas de automação, no mercado atual, o trabalho precarizado. Essa situação contribui para o acirramento do preconceito contra essa faixa etária, denominado etarismo.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando o texto apresentado, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. O conceito de etarismo fundamenta-se no fato de os idosos terem capacidade de trabalho reduzida e imporem custo elevado à previdência social, o que compromete a sua sustentabilidade econômica.</p>

                <p class="mb-2 pl-6 text-justify">II. As ações legislativas que visem ao prolongamento do tempo de atuação da população idosa no mercado de trabalho devem ser acompanhadas por uma política de promoção da saúde e da qualidade de vida.</p>

                <p class="mb-2 pl-6 text-justify">III. As ações intergeracionais no mercado de trabalho têm como premissa o desenvolvimento de tecnologias que dotem o idoso de capacidade de trabalho equivalente à de seus colegas jovens.</p>

                <p class="mb-2 text-justify">É correto o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'II, apenas.',
            'opcao_b' => 'III, apenas.',
            'opcao_c' => 'I e II, apenas.',
            'opcao_d' => 'I e III, apenas.',
            'opcao_e' => 'I, II e III.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'curso' => 'Engenharia de Computação',
            'categoria' => 'Formação Geral',
            'contextualizacao' => '
                <p class="mb-2 text-justify">A fome e a insegurança alimentar, antigos problemas da sociedade, são agravados em regiões com elevados índices de desigualdade social. Propor soluções para esse quadro requer uma abordagem multidimensional, que possibilite a interação entre as dimensões sociais, culturais, políticas, econômicas e ambientais envolvidas na produção e na distribuição de alimentos.</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-3 text-sm text-center items-center">
                    <div>
                        <img src="/img/questoes/q1_img1.jpg" class="w-full h-48 object-cover mb-2 rounded">
                        <p class="-mt-1">Foto: Unicef/Sayed Bidel. Impacto dos conflitos sobre pessoas mais vulneráveis.</p>
                    </div>
                    <div>
                        <img src="/img/questoes/q1_img2.jpg" class="w-full h-48 object-cover mb-2 rounded" style="margin-top: 1.05mm;">
                        <p>Foto: FAO/Anatolii Stepanov. Colheita de trigo perto da vila de Krasne, na Ucrânia.</p>
                    </div>
                </div>

                <div class="flex justify-center mb-3 text-sm text-center">
                    <div class="w-full md:w-2/3">
                        <img src="/img/questoes/q1_img3.jpg" alt="Secas em Madagascar" class="w-full h-auto mb-2 rounded">
                        <p>Foto: Unicef/Safidy Andriananten. Secas em Madagascar colocam o país africano entre aqueles onde há mais fome.</p>
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando o texto e as imagens apresentados, avalie as asserções a seguir e a relação proposta entre elas.</p>
                
                <p class="mb-1 pl-6">I. A fome no mundo é um fenômeno biológico e sociológico inevitável.</p>
                
                <p class="text-center font-bold my-2">PORQUE</p>
                
                <p class="mb-2 pl-6">II. A disponibilidade desigual de alimentos, o acirramento de conflitos geopolíticos, a formação de cadeias agrícolas globais e o aumento das catástrofes climáticas são fatores que impactam a segurança alimentar de um grande número de populações.</p>
                
                <p class="mb-1">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => 'Disponível em: https://news.un.org/pt/story/2022/05/1788102. Acesso em: 10 jun. 2023.',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'D',
        ]);

         Questao::create([
            'curso' => 'Engenharia de Computação',
            'categoria' => 'Formação Geral',
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Estudos realizados em 2021 pelo Fundo das Nações Unidas para a Infância (Unicef), em parceria com a Organização Mundial da Saúde (OMS), mostraram que, no Brasil, houve uma queda brusca da taxa de vacinação infanti l nos últi mos anos: entre 2017 e 2021, a taxa caiu de 93,1% para 71,49%, considerando-se crianças com menos de um ano de idade.</p>
                
                <p class="mb-2 text-justify">Essa redução da cobertura vacinal deixa a população infanti l muito vulnerável e exposta a doenças que já estavam prati camente erradicadas, tal como o sarampo, que em 2018 voltou a ser uma preocupaçãopara os brasileiros. Além do sarampo, corre-se o risco de outras doenças voltarem a acometer as crianças, como a poliomielite, a meningite, a rubéola e a difteria.</p>

                <p class="mb-2 text-justify">O gráfico a seguir mostra as taxas de vacinação infantil, em crianças menores de um ano de idade, no período de 2017 a 2021.</p>

                <div class="flex justify-center mb-6 text-sm text-center">
                    <div class="w-full md:w-2/3">
                        <img src="/img/questoes/q1_img4.jpg" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>
            ',
            'enunciado' => '
                <p class="mb-2">Considerando as informações apresentadas no texto e no gráfico, assinale a opção correta.</p>
            ',
            'referencia' => 'Disponível em: https://portal.fiocruz.br/noticia/vacinacao-infantil-sofre-queda-brusca-no-brasil. Acesso em: 23 de jun. 2023 (adaptado).',
            'opcao_a' => 'O percentual de vacinação com o imunizante da poliomielite se manteve constante na maior parte do período de 2017 a 2021.',
            'opcao_b' => 'A baixa cobertura vacinal de crianças menores de um ano de idade é um dos indicadores de baixo desempenho das políticas públicas de atenção primária em saúde.',
            'opcao_c' => 'A cobertura vacinal de crianças menores de um ano de idade foi muito variável, com alto índice vacinal da BCG e média cobertura da vacina tetraviral, no período de 2017 a 2021.',
            'opcao_d' => 'O aumento da taxa de vacinação infantil contra a febre amarela em 2021, em comparação com o índice registrado em 2017, revela que as campanhas de conscientização da população foram bem-sucedidas quanto ao alcance da meta de vacinação contra essa enfermidade.',
            'opcao_e' => 'A pandemia de Covid-19, ao ampliar a conscientização da população sobre a necessidade de manter alto índice vacinal para evitar o reaparecimento de doenças infectocontagiosas, contribuiu para o aumento da cobertura vacinal contra outras doenças, conforme indicado no gráfico.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'curso' => 'Engenharia de Computação',
            'categoria' => 'Formação Geral',
            'contextualizacao'=> '
                <p class="font-bold mb-2">TEXTO 1</p>
                <p class="mb-2 text-justify">A Inteligência Artificial (IA) generativa é capaz de criar novos dados, únicos, que possibilitam aprender por conta própria, indo além do que a tecnologia tradicional proporciona, visto que esta precisa de intervenção humana. Um exemplo de IA generativa é o ChatGPT, que pode gerar imagens, músicas e textos completamente novos. Entre outras coisas, por meio da IA generativa, é possível elaborar modelos de previsão de testes clínicos, realizar a identificação de padrões em exames médicos e, ainda, auxiliar no diagnóstico de doenças.</p>
                <p class="text-sm text-right mb-4">Disponível em: https://olhardigital.com.br/2023/07/12/internet-e-redes-sociais/inteligencia-artificial-generativa-o-que-e-como-funciona-e-onde-usar/. Acesso em: 2 ago. 2023 (adaptado).</p>

                <p class="font-bold mb-2">TEXTO 2</p>
                <p class="mb-2 text-justify">Acredita-se que a tecnologia de IA generativa será disruptiva e, portanto, capaz de alterar drasticamente a maneira como o ser humano se relaciona com as máquinas. O uso da IA generativa pode causar importante revolução no segmento de produção de conteúdo. Muitas dessas consequências poderão ser maléficas para diversos setores da sociedade. Além do mau uso dessa tecnologia e das questões éticas, avalia-se que ela pode agravar a desigualdade econômico-social, tanto entre nações quanto entre indivíduos da mesma nação.</p>
                <p class="text-sm text-right mb-2">Disponível em: https://canaltech.com.br/inteligencia-artificial/o-que-e-ia-generativa/. Acesso em: 2 ago. 2023 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2">Considerando os textos apresentados, é correto afirmar que a IA generativa</p>
            ',
            'referencia' => '',
            'opcao_a' => 'proporciona novos recursos de linguagem que geram tecnologias capazes de realizar interações próprias dos seres humanos.',
            'opcao_b' => 'restringe o aprendizado ao que é legalmente estabelecido e úti l ao ser humano, o que facilita seu modo de agir no mundo do conhecimento e do trabalho.',
            'opcao_c' => 'promove a igualdade econômico-social ao substituir o ser humano no exercício de profissões cujas atividades sejam repetitivas e exijam pouco conhecimento.',
            'opcao_d' => 'gera pouco impacto socioeconômico em países com elevado desenvolvimento tecnológico, pois, neles, os processos de criação e inovação já estão bem consolidados.',
            'opcao_e' => 'estimula o desenvolvimento intelectual dos seres humanos, uma vez que ela assume parte do conhecimento, resolvendo problemas antes delegados apenas a especialistas.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'curso' => 'Engenharia de Computação',
            'categoria' => 'Formação Geral',
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Os seguintes ícones foram utilizados em um estudo realizado por um grupo de trabalho de monitoramento da relação das mulheres com a mobilidade urbana na cidade de São Paulo. Na pesquisa, perguntou-se às mulheres como elas se sentiam nas situações representadas por tais imagens.</p>
                <p class="mb-2 text-justify">As respostas relativas a cada tipo de mobilidade urbana são apresentadas a seguir.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-full md:w-2/3">
                        <img src="/img/questoes/q1_img5.JPG" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>

                <p class="text-sm text-right mb-4">Coletivo Fórum Regional das Mulheres da Zona Norte, Rede MÁS, Sampapé! (2018). <strong>Relatório de Análises, Resultados e Recomendações</strong>. Projeto Mulheres Caminhantes! Auditoria de Segurança de Gênero e Caminhabilidade Terminal Santana, São Paulo, SP (adaptado).</p>
                <p class="mb-2 text-justify">Considerando o estudo apresentado e relacionando o trabalho de monitoramento social das necessidades de mulheres no contexto urbano aos pressupostos do direito à cidade, avalie as afirmações a seguir.</p>
            ',
            'enunciado' => '
                <p class="mb-2 pl-6 text-justify">I. A predominância de comentários negativos indica o medo generalizado que as mulheres sentem ao se deslocarem ativamente pela cidade, inclusive quanto à percepção de seu corpo no espaço urbano.</p>
                <p class="mb-2 pl-6 text-justify">II. Os comentários negativos sobre os modos coletivos de transporte estão relacionados à lotação nesses meios e a situações de assédio, tendo sido o metrô avaliado como um espaço um pouco mais seguro para as mulheres, em comparação com outras formas de mobilidade.</p>
                <p class="mb-2 pl-6 text-justify">III. Os comentários negativos refletem a percepção das mulheres quanto ao perigo a que se expõem e sugerem que o medo relacionado à vulnerabilidade de gênero aponta para uma geografia particular nas cidades, em que os meios de transporte afetam os movimentos rotineiros das mulheres no espaço urbano.</p>
                <p class="mb-1">É correto o que se afirma em</p>
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
            'curso' => 'Engenharia de Computação',
            'categoria' => 'Formação Geral',
            'contextualizacao' => '
                <p class="font-bold mb-1">TEXTO 1</p>
                <p class="mb-1 text-justify">Maria Bárbara tinha o verdadeiro tipo das velhas maranhenses criadas na fazenda. Tratava muito dos avós, quase todos portugueses. Quando falava dos pretos, dizia “os sujos” e, quando se referia a um mulato dizia “o cabra”. Maria Bárbara tinha grande admiração pelos portugueses, dedicava-lhes um entusiasmo sem limites, preferia-os em tudo aos brasileiros. Quando a filha foi pedida por Manuel Pedroso, então principiante no comércio da capital, ela dissera: “Bem! Ao menos tenho a certeza de que é branco!”</p>
                <p class="text-sm text-right mb-4">AZEVEDO, A. <strong>O mulato</strong>. São Luís: Typografia o Paiz, 1881 (adaptado).</p>
                
                <p class="font-bold mb-1">TEXTO 2</p>
                <p class="mb-1 text-justify">A morte brinca com balas nos dedos gatilhos dos meninos. Dorvi se lembrou do combinado, o juramento feito em voz uníssona, gritado sob o pipocar dos tiros:</p>
                <p class="mb-1 text-justify">— A gente combinamos de não morrer!</p>
                <p class="mb-1 text-justify">Balas enfeitam o coração da noite. Não gosto de filmes da tevê. Morre e mata de menti ra. Aqui, não. Às vezes a morte é leve como a poeira. E a vida se confunde com um pó branco qualquer. Às vezes é uma fumaça adocicada enchendo o pulmão da gente.</p> 

                <p class="text-sm text-right mb-4">EVARISTO, C. <strong>Olhos d´agua</strong>. Rio de Janeiro: Pallas. Fundação Biblioteca Nacional, 2016 (adaptado).</p>
                    
                <p class="font-bold mb-2">TEXTO 3</p>
                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-2/5 md:w-2/5">
                        <img src="/img/questoes/q1_img6.JPG" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>

                <p class="text-sm text-right mb-4">DEL NUNES. <strong>O Cria</strong>. Disponível em: https://www.instagram.com/p/CgCSOKegX4J/. Acesso em: 13 jun. 2023.</p>
                <p class="mb-2 text-justify">O Cria é uma releitura da pintura “O Mestiço” de Cândido Portinari. Em sua obra, Del Nunes personifica a identidade do jovem brasileiro das periferias do Brasil. Oriundo de São Cristóvão, bairro periférico de Salvador, o artista transmite em suas produções a essência da cultura preta, cria e recria momentos do povo negro apagados pela história, divulgando-as nas redes sociais.</p>
                
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir das informações apresentadas e tendo em vista a possibilidade das várias manifestações culturais estabelecerem relação com a construção da memória e a definição da identidade cultural de um povo, avalie as afirmações a seguir.</p>
                
                <p class="mb-2 pl-6 text-justify">I. Os trechos das obras apresentadas nos textos 1 e 2 e a ressignificação artística proposta no texto 3 resgatam uma reflexão acerca da condição histórica da maioria da população brasileira.</p>
                <p class="mb-2 pl-6 text-justify">II. Ao longo do processo histórico de constituição da identidade do povo brasileiro, o convívio cooperativo e cordial entre as diferentes culturas contribuiu para a integração e o respeito às diferenças étnicas e religiosas.</p>
                <p class="mb-2 pl-6 text-justify">III. A produção de conteúdo artístico que proponha a reflexão sobre a condição social da população negra provoca a quebra do silenciamento imposto pelo processo de segregação historicamente promovido pelo processo de colonização.</p>
                <p class="mb-2 pl-6 text-justify">IV. A arte expressa no texto 3, ao imitar uma obra clássica de Portinari, apresenta limitação na promoção do empoderamento da população afrodescendente, provocando um acirramento cultural.</p>
                
                <p class="mb-1">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'II.',
            'opcao_b' => 'IV.',
            'opcao_c' => 'I e III.',
            'opcao_d' => 'I e IV.',
            'opcao_e' => 'II e III.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'curso' => 'Engenharia de Computação',
            'categoria' => 'Formação Geral',
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Recentemente, a população carcerária feminina do Brasil tornou-se a terceira maior do mundo. A situação do encarceramento feminino por tráfico de drogas e outras situações que circundam o assunto foi tema de discussão da Secretaria de Políticas sobre Drogas do Ministério da Justiça e Segurança Pública (Senad/MJSP), em seminário realizado em abril de 2023. O evento contou com a participação de 23 países. Segundo os dados apresentados pela Senad, a incidência penal sobre drogas no Brasil é uma das principais causas de prisão de mulheres, chegando a 54% dos casos de encarceramento, contra 28% dos homens, índice que impacta em aspectos como maternidade e primeira infância.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Acerca do tema apresentado, avalie as asserções a seguir e a relação proposta entre elas.</p>
                
                <p class="mb-2 pl-6 text-justify">I. A maioria das mulheres envolvidas em atividades do tráfico encontra-se em posições hierarquicamente inferiores, sendo classificadas como “mulas e aviões”, o que revela a reprodução, no mercado ilegal, da divisão sexual do trabalho observada no mercado formal.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. O sistema penal agrava a situação de vulnerabilidade das mulheres encarceradas, seja pela invisibilização com que as trata, seja por meio da violência institucional que reproduz a violência estrutural das relações sociais patriarcais.</p>

                <p class="mb-2 text-justify">A respeito dessas asserções, assinale a opção correta.</p>
            ',
            'referencia' => 'Disponível em: https://www.gov.br/mj/pt-br/assuntos/noticias/senad-discute-situacao-de-mulheres-encarceradas-no-contexto-de-drogas-no-brasil. Acesso em: 15 jun. 2023 (adaptado).
            ',
            'opcao_a' => 'As asserções I e II são proposições verdadeiras, e a II é uma justificativa correta da I.',
            'opcao_b' => 'As asserções I e II são proposições verdadeiras, mas a II não é uma justificativa correta da I.',
            'opcao_c' => 'A asserção I é uma proposição verdadeira, e a II é uma proposição falsa.',
            'opcao_d' => 'A asserção I é uma proposição falsa, e a II é uma proposição verdadeira.',
            'opcao_e' => 'As asserções I e II são proposições falsas.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'curso' => 'Engenharia de Computação',
            'categoria' => 'Formação Geral',
            'contextualizacao'=> '
                <p class="mb-2 text-justify">A sociedade do século XXI não é mais uma sociedade disciplinar, mas, sim, uma sociedade do desempenho. Os seus habitantes também não se chamam mais sujeitos de obediência, mas, sim, sujeitos de desempenho e produção. São empresários de si mesmos.</p>

                <p class="text-sm text-right mb-4">BYUNG-CHUL HAN. <strong>Sociedade do Cansaço</strong>. Petrópolis: Vozes, 2015 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando o texto apresentado, avalie as afirmações a seguir.</p>
                
                <p class="mb-2 pl-6 text-justify">I. Os recursos tecnológicos, como notificações de mensagens em tempo real e controle da velocidade de áudio em redes de mensagens, são fatores que podem contribuir para a precarização das relações de trabalho na sociedade contemporânea.</p>
                <p class="mb-2 pl-6 text-justify">II. As medidas pessoais de proteção à saúde mental e de promoção da qualidade de vida incluem a desativação de aplicativos e mecanismos de notificações instantâneas, bem como a fixação de horários para uso profissional e uso recreativo das tecnologias digitais.</p>
                <p class="mb-2 pl-6 text-justify">III.	As medidas públicas de prevenção das doenças e dos danos sociais associados ao uso excessivo dos recursos tecnológicos de comunicação envolvem estímulos ao letramento digital, à alfabetização midiática e à regulamentação do uso de plataformas digitais no ambiente de trabalho.</p>

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
            'curso' => 'Engenharia de Computação',
            'categoria' => 'Componente Específico',
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Os resistores são dispositivos utilizados com finalidade de limitar a corrente elétrica em um circuito elétrico. Eles conseguem desempenhar essa função por apresentarem a propriedade da resistência elétrica, que é a capacidade de um corpo se opor à passagem de corrente elétrica. Diversos materiais podem ser utilizados como resistores, tais como níquel-cromo, carbono e grafite.</p>

                <p class="mb-2 text-justify">Diante disso, considere uma situação hipotética em que seja preciso construir resistores cilíndricos na forma da figura a seguir, a fim de serem utilizados em um circuito de corrente contínua que possui tensão igual a 12 V. Na figura, L representa o comprimento do material e A representa a área de seção transversal.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <img src="/img/questoes/q1_img7.JPG" class="w-full h-auto mb-2 rounded">
                    </div>
                </div>

                <p class="mb-2 text-justify">Observe, também, a tabela a seguir, a qual especifica características de três tipos de materiais utilizados para fabricação dos resistores hipotéticos, como a resistividade <strong>ρ</strong>, o comprimento L e a área A.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-3/5 md:w-3/5">
                        <img src="/img/questoes/q1_img8.JPG" class="w-full h-auto mb-2 rounded">
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
            'curso' => 'Engenharia de Computação',
            'categoria' => 'Componente Específico',
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
            'curso' => 'Engenharia de Computação',
            'categoria' => 'Componente Específico',
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
                        <img src="/img/questoes/q1_img9.JPG" class="w-full h-auto mb-2 rounded">
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
            'curso' => 'Engenharia de Computação',
            'categoria' => 'Componente Específico',
            'contextualizacao'=> '
                <p class="mb-2 text-justify">Uma forma sistemática de analisar circuitos elétricos de qualquer tamanho, visando à simulação em computadores, consiste em representá-los por meio de grafos. Essa representação implica a substituição dos elementos do ramo do circuito por uma conexão orientada (arco) e de nós do circuito por vértices, resultando em um grafo orientado. A orientação dos arcos coincide com a orientação dos sentidos de referência associados de tensão e corrente, adotados pela convenção passiva.</p>
                <p class="mb-2 text-justify">Grafos são ditos conexos se existir, ao menos, um caminho entre quaisquer dois nós. Corte refere-se a um conjunto de arcos que, se removido, divide o grafo (tornando-o desconexo). A lei de Kirchoff das correntes, usando a nomenclatura de grafos, pode ser enunciada como “para qualquer rede de parâmetros concentrados e para qualquer de seus cortes, a soma algébrica de todas as correntes através dos arcos do corte é zero.”</p>

                <p class="text-sm text-right mb-4">Disponível em: http://www.peb.ufrj.br/. Acesso em: 16 jun. 2023 (adaptado).</p>

                <p class="mb-2 text-justify">A figura a seguir representa um circuito elétrico e o seu grafo equivalente.</p>

                <div class="flex justify-center mb-4 text-sm text-center">
                    <div class="w-2/5 md:w-2/5">
                        <img src="/img/questoes/q1_img10.JPG" class="w-full h-auto mb-2 rounded">
                    </div>
                </div> 
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Após aplicar a lei de Kirchoff das correntes para os cortes <i>X</i> = {1, 4, 5}, <i>Y</i> = {1, 2, 3, 5} e <i>Z</i> = {1, 4, 3, 6}, assinale a opção que apresenta equações válidas para a soma algébrica das correntes em dois desses cortes.</p>       
            ',
            'referencia' => '',
            'opcao_a' => '<p class="mb-2 text-justify"><i><sub>I1</sub></i> + <i><sub>I4</sub></i> - <i><sub>I5</sub></i> = </p>',
            'opcao_b' => '',
            'opcao_c' => '',
            'opcao_d' => '',
            'opcao_e' => '',
            'alternativa_correta' => '',
        ]);

    








        //ENGENHARIA CIVIL
        Questao::create([
            'curso' => 'Engenharia Civil',
            'categoria' => 'Formação Geral',
            'contextualizacao' => 'Um projeto de ponte precisa considerar esforços de tração, compressão e flexão. A análise da seção transversal e das cargas é essencial para garantir a segurança estrutural.',
            'enunciado' => 'Qual dos seguintes materiais apresenta maior resistência à compressão para uso em pilares de concreto armado?',
            'referencia' => '',
            'opcao_a' => 'Aço carbono simples.',
            'opcao_b' => 'Concreto armado com fibras de vidro.',
            'opcao_c' => 'Madeira laminada colada.',
            'opcao_d' => 'Alumínio fundido.',
            'opcao_e' => 'Plástico reforçado com fibra de carbono.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'curso' => 'Engenharia de Controle e Automação',
            'categoria' => 'Formação Geral',
            'contextualizacao' => 'Em sistemas automatizados, o uso de controladores PID é comum para ajustar a resposta dinâmica de processos industriais.',
            'enunciado' => 'O termo “integral” em um controlador PID serve principalmente para:',
            'referencia' => '',
            'opcao_a' => 'Reduzir o erro em regime permanente.',
            'opcao_b' => 'Aumentar a velocidade de resposta do sistema.',
            'opcao_c' => 'Filtrar ruídos de alta frequência.',
            'opcao_d' => 'Limitar a saída do atuador.',
            'opcao_e' => 'Compensar variações de carga instantâneas.',
            'alternativa_correta' => 'A',
        ]);

        Questao::create([
            'curso' => 'Engenharia de Produção',
            'categoria' => 'Formação Geral',
            'contextualizacao' => 'Uma linha de montagem usa técnicas de melhoria contínua para reduzir desperdícios e aumentar eficiência.',
            'enunciado' => 'Qual ferramenta do Lean Manufacturing é usada para identificar os principais tipos de desperdício?',
            'referencia' => '',
            'opcao_a' => '5S.',
            'opcao_b' => 'Kanban.',
            'opcao_c' => 'Ishikawa.',
            'opcao_d' => 'Just in Time.',
            'opcao_e' => 'Poka-yoke.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'curso' => 'Engenharia Elétrica',
            'categoria' => 'Formação Geral',
            'contextualizacao' => 'Em circuitos de corrente alternada, a diferença de fase entre tensão e corrente influencia a potência real disponível.',
            'enunciado' => 'Quando a corrente está defasada 90° em relação à tensão em um circuito puramente reativo, a potência real é:',
            'referencia' => '',
            'opcao_a' => 'Máxima e positiva.',
            'opcao_b' => 'Máxima e negativa.',
            'opcao_c' => 'Zero.',
            'opcao_d' => 'Indefinida.',
            'opcao_e' => 'Metade da potência aparente.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'curso' => 'Engenharia Mecânica',
            'categoria' => 'Formação Geral',
            'contextualizacao' => 'O dimensionamento de molas helicoidais de compressão depende da constante elástica e das propriedades do material.',
            'enunciado' => 'Qual grandeza descreve a rigidez de uma mola?',
            'referencia' => '',
            'opcao_a' => 'Módulo de elasticidade.',
            'opcao_b' => 'Constante de molas.',
            'opcao_c' => 'Coeficiente de atrito.',
            'opcao_d' => 'Densidade do material.',
            'opcao_e' => 'Taxa de deformação.',
            'alternativa_correta' => 'B',
        ]);

        Questao::create([
            'curso' => 'Engenharia Química',
            'categoria' => 'Formação Geral',
            'contextualizacao' => 'A análise de equilíbrio químico é essencial para processos industriais que dependem de conversão e rendimento.',
            'enunciado' => 'O princípio de Le Chatelier indica que um sistema em equilíbrio reage a uma perturbação:',
            'referencia' => '',
            'opcao_a' => 'Aumentando a temperatura sempre.',
            'opcao_b' => 'Mudando para favorecer a direção de menor energia.',
            'opcao_c' => 'Alterando as concentrações para reduzir a perturbação.',
            'opcao_d' => 'Diminuindo a pressão em todos os casos.',
            'opcao_e' => 'Mantendo o equilíbrio inalterado.',
            'alternativa_correta' => 'C',
        ]);
    }
}
