<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questao;

class Questoes_Formacao_Geral_2022 extends Seeder
{
    public function run(): void
    {
        Questao::create([
            'categoria' => 'Formação Geral',
            'contextualizacao' => '
                <p class="mb-2 font-bold">TEXTO 1</p>
                <p class="mb-2 text-justify">A democracia representativa exige, para o seu funcionamento, um conjunto de características, as quais podem ser compreendidas como instituições. São elas: Funcionários eleitos; Eleições livres, justas e frequentes; Sufrágio inclusivo; Direito de concorrer a cargos eletivos; Liberdade de expressão; Fontes de informação diversificadas; Autonomia para as associações. Entre as categorias mencionadas, destacam-se duas como pilares do regime democrático.</p>
                <p class="mb-2 text-justify"><b>Liberdade de expressão:</b> os cidadãos têm o direito de se expressar, sem o perigo de punições severas, quanto aos assuntos políticos de uma forma geral, o que inclui a liberdade de criticar os funcionários do governo, o governo em si, o regime, a ordem socioeconômica e a ideologia dominante.</p>
                <p class="mb-2 text-justify"><b>Fontes de informação diversificadas:</b> os cidadãos têm o direito de buscar fontes de informação, alternativas, diversificadas e independentes. Ademais, a existência de fontes de informação alternativa deve ser protegida por lei.</p>
                <p class="mb-2 text-right text-sm">DAHL, R. A. <b>Sobre a democracia</b>, EDU: UnB, 2001 (adaptado).</p>

                <p class="mb-2 font-bold">TEXTO 2</p>
                <p class="mb-2 text-justify">Embora os regimes políticos possam ser derrubados e as ideologias criticadas e destituídas de sua legitimidade, por trás de um regime e de sua ideologia há sempre um modo de pensar e de sentir, uma série de hábitos culturais, uma nebulosa de instintos obscuros e de pulsões insondáveis.</p>
                <p class="mb-2 text-right text-sm">ECO, U. O Fascismo Eterno. <i>In</i>: <b>Cinco Escritos Morais</b>. Editora Record: Rio de Janeiro, 2002 (adaptado).</p>

                <p class="mb-2 font-bold">TEXTO 3</p>
                <p class="mb-2 text-justify">A figura a seguir exemplifica algumas condutas que, segundo Umberto Eco, podem ser consideradas contraditórias aos princípios democráticos.</p>
                <p class="mb-2 text-right text-sm">Disponível em: https://www.facebook.com/EditoraRecord/photos. Acesso em: 18 ago. 2022 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base na concepção de regimes políticos, abordada pelos autores, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. A democracia é o sistema que se propõe a assegurar aos seus cidadãos uma liberdade pessoal mais ampla do que outros modelos.</p>
                <p class="mb-2 pl-6 text-justify">II. A liberdade de expressão no sistema democrático garante que a manifestação de um agente político e de um cidadão possuam repercussões equivalentes.</p>
                <p class="mb-2 pl-6 text-justify">III. As <i>fake news</i> são manifestações relacionadas à categoria de fontes de informação diversificadas e podem ser utilizadas como estratégia para fragilizar o sistema democrático de governo.</p>
                <p class="mb-2 pl-6 text-justify">IV. O direito à liberdade de expressão permite a emissão de opinião crítica e discursos contrários à democracia e aos direitos humanos.</p>

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
            'categoria' => 'Formação Geral',
            'contextualizacao' => '
                <p class="mb-2 font-bold">TEXTO 1</p>
                <p class="mb-2 text-justify">Dados do levantamento feito pelo <i>TransgenderEurope</i> (TGEU) mostram que o Brasil permaneceu pelo 13º ano consecutivo como o país que mais mata pessoas transgêneros.</p>
                <p class="mb-2 text-right text-sm">TRANSGENDER EUROPE (TGEU). Disponível em: https://transrespect.org. Acesso em: 5 jul. 2022 (adaptado).</p>

                <p class="mb-2 font-bold">TEXTO 2</p>
                <p class="mb-2 text-justify">De acordo com dados do Sistema de Informação de Agravos de Notificação (Sinan), do Ministério da Saúde, houve um crescimento bruto de 5% nas violências contra homossexuais e 37,1% nas violências contra bissexuais, passando de 4 855 registros em 2018 para 5 330 em 2019. No gráfico a seguir são apresentados os dados percentuais de casos notificados em 2019, de acordo com a orientação sexual das vítimas de violência.</p>
                <p class="mb-2 text-right text-sm">CERQUEIRA, D. <i>et al.</i> <b>Atlas da Violência 2021</b>. São Paulo: FBSP/IPEA, 2021.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas no mapa e no gráfico, bem como a situação social dos grupos LGBTQIAPN+, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Os discursos e as práticas contra a diversidade sexual e de gênero são incompatíveis com as premissas éticas e dos direitos humanos que regem as sociedades democráticas.</p>
                <p class="mb-2 pl-6 text-justify">II. A violência contra os grupos LGBTQIAPN+ é histórica, simbólica, psicológica e física, ocorrendo em razão de estereótipos e estigmas vigentes na sociedade e por meio de repressões e abusos.</p>
                <p class="mb-2 pl-6 text-justify">III. A partir dos 40 anos de idade, há uma maior incidência de violência sobre pessoas heterossexuais em relação aos outros grupos, o que indica que a vulnerabilidade independe da orientação sexual.</p>
                <p class="mb-2 pl-6 text-justify">IV. O Brasil é o país onde se identifica o maior número de mortes de pessoas <i>trans</i> entre os países analisados, situação que revela a necessidade de uma política pública mais assertiva de combate aos crimes cometidos contra os grupos LGBTQIAPN+.</p>

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
            'categoria' => 'Formação Geral',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Em 2019, a violência armada foi três vezes maior para a população negra, em comparação com a não negra, tanto para a população geral quanto para o grupo jovem (entre 15 e 29 anos de idade). Quanto à taxa de mortalidade por 100 mil habitantes no grupo de pessoas com até 14 anos de idade, destaca-se, da mesma forma, a desigualdade na vitimização de crianças e adolescentes negros por agressão com arma de fogo, com taxa 3,6 vezes maior do que a de não negros em 2019.</p>
                <p class="mb-2 text-right text-sm">INSTITUTO SOU DA PAZ. <b>Violência armada e racismo:</b> o papel da arma de fogo na desigualdade racial. Disponível em: https://soudapaz.org. Acesso em: 6 jul. 2022 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. O fator racial é um importante condicionante na análise de dados relativos a homicídios e violência no Brasil na população de adolescentes e jovens.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. A população negra sofre mais violência do que a população não negra, em razão do racismo estrutural existente no país, além de outras vulnerabilidades sociais associadas a essa forma de preconceito.</p>

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
            'categoria' => 'Formação Geral',
            'contextualizacao' => '
                <p class="mb-2 font-bold">TEXTO 1</p>
                <p class="mb-2 text-justify">Além de tramitar no Judiciário um processo a respeito do Marco Temporal, há também, na Câmara dos Deputados, um projeto em que se tenta transformar a tese do Marco Temporal em lei. Trata-se do Projeto de Lei n. 490/2007, que determina que devem ter direito às terras consideradas ancestrais somente os povos que as estivessem ocupando no dia da promulgação da Constituição Federal, em 5 de outubro de 1988.</p>
                <p class="mb-2 text-right text-sm">Disponível em: https://g1.globo.com. Acesso em: 21 jun. 2022 (adaptado).</p>

                <p class="mb-2 font-bold">TEXTO 2</p>
                <p class="mb-2 text-justify">O assassinato do indigenista Bruno Pereira e do jornalista Dom Phillips expôs ao mundo a importância da demarcação dos territórios indígenas, assegurada pela Constituição Federal de 1988. Os territórios indígenas, além de preservarem identidades, modos de vida, tradições e culturas desses povos, também são fundamentais para a preservação ambiental. Eles contribuem para conter as emissões de gases de efeito estufa, promover a biodiversidade e potencializar sistemas.</p>
                <p class="mb-2 text-justify">Se mantido o critério do Marco Temporal, a guerra fundiária poderá ser intensificada. Os territórios se tornarão zonas de mais conflitos entre fazendeiros, mineradores, garimpeiros, grileiros, produtores rurais, narcotraficantes, comerciantes de peixes, caçadores e madeireiros, o que resultará na morte de indígenas e de defensores da floresta e, por extensão, dos territórios indígenas.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com base nos textos e na imagem apresentados, avalie as afirmações a seguir.</p>

                <p class="mb-2 pl-6 text-justify">I. Os territórios indígenas, com a regulamentação do Marco Temporal, ficarão formalmente protegidos de invasões, e os povos originários poderão manter suas tradições culturais.</p>
                <p class="mb-2 pl-6 text-justify">II. As ações de grupos de garimpeiros, de pescadores ilegais, de desmatadores e de alguns setores das atividades agropecuárias vêm confrontando os povos originários em disputas territoriais.</p>
                <p class="mb-2 pl-6 text-justify">III. O aumento da criminalidade nos territórios indígenas está associado aos interesses econômicos de exploração insustentável do meio ambiente, como os relacionados aos garimpos ilegais e ao desmatamento de florestas.</p>
                <p class="mb-2 pl-6 text-justify">IV. A existência dos movimentos sociais indígenas é essencial para a luta por direitos sociais, culturais e de acesso à terra pelos povos originários, assim como para a preservação do meio ambiente e do modo de vida dos indígenas.</p>
                <p class="mb-2 pl-6 text-justify">V. O Estado brasileiro está impedido de intervir nas demarcações de territórios indígenas, em respeito à autonomia, à autogestão e à livre determinação dos povos originários, segundo a Constituição Federal de 1988.</p>

                <p class="mb-2 text-justify">É correto apenas o que se afirma em</p>
            ',
            'referencia' => '',
            'opcao_a' => 'I e V.',
            'opcao_b' => 'I, III e V.',
            'opcao_c' => 'II, III e IV.',
            'opcao_d' => 'II, IV e V.',
            'opcao_e' => 'I, II, III e IV.',
            'alternativa_correta' => 'C',
        ]);

        Questao::create([
            'categoria' => 'Formação Geral',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Pesquisa realizada pelo Observatório Brasileiro de Políticas Públicas da Universidade Federal de Minas Gerais (UFMG) aponta que a população em situação de rua aumentou no Brasil em 2022. De janeiro a maio deste ano, mais de 26 mil novas pessoas nessa situação foram registradas no Cadastro Único (CadÚnico) do Governo Federal. No país, mais de 180 mil pessoas estão registradas no CadÚnico.</p>
                <p class="mb-2 text-right text-sm">Disponível em: https://g1.globo.com. Acesso em: 6 jul. 2022 (adaptado).</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando as informações apresentadas, avalie as asserções a seguir e a relação proposta entre elas.</p>

                <p class="mb-2 pl-6 text-justify">I. A existência de pessoas em situação de rua no Brasil deriva, sobretudo, das desigualdades sociais oriundas da pandemia de Covid-19.</p>

                <p class="text-center font-bold my-2">PORQUE</p>

                <p class="mb-2 pl-6 text-justify">II. Um dos efeitos da pandemia de Covid-19 foi a ampliação do número de pessoas em situação de rua no Brasil, o que evidencia a segregação socioespacial das cidades brasileiras.</p>

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
            'categoria' => 'Formação Geral',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Ao final de 2021, cerca de 89,3 milhões de pessoas estavam deslocadas em todo o mundo, em decorrência de violência, perseguições, violações dos direitos humanos ou outros conflitos em seus locais de origem. Esse contingente de deslocamentos forçados já alcançava mais de 100 milhões de pessoas em maio de 2022, sendo motivados por instabilidades como as ocorridas no Afeganistão, em alguns países africanos e nas regiões da Ucrânia ocupadas pela Rússia, além de outros locais onde já perduravam confrontos armados, como, por exemplo, na Síria.</p>
                <p class="mb-2 text-right text-sm">Disponível em: https://www.acnur.org. Acesso em: 21 jun. 2022 (adaptado).</p>
                <p class="mb-2 text-right text-sm">Disponível em: https://operamundi.uol.com.br. Acesso em 24 de jun. de 2022.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Com relação às atuais migrações internacionais forçadas, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'Os interesses em relação ao tipo de tratamento dispensado aos imigrantes no mundo independem de seus países de origem.',
            'opcao_b' => 'A xenofobia, que consiste no preconceito contra estrangeiros, deve-se à falta de normas internacionais para o tratamento de situações de imigração.',
            'opcao_c' => 'Os refugiados são migrantes de países subdesenvolvidos que se deslocam para países centrais do capitalismo global a fim de servir de mão de obra barata.',
            'opcao_d' => 'As migrações internacionais forçadas surgem da globalização econômica, cujos processos são responsáveis pelo aumento do número de refugiados no mundo.',
            'opcao_e' => 'A condição de migrante internacional forçado diferencia-se da condição geral de imigrante na medida em que se refere ao deslocamento motivado por fatores involuntários, que fogem ao controle do migrante e de sua família.',
            'alternativa_correta' => 'E',
        ]);

        Questao::create([
            'categoria' => 'Formação Geral',
            'contextualizacao' => '
                <p class="mb-2 font-bold">TEXTO 1</p>
                <p class="mb-2 text-justify">Resultados de pesquisa da Comissão Econômica para a América Latina e o Caribe (CEPAL), vinculada à Organização das Nações Unidas (ONU), apontam que, além do feminicídio íntimo, aquele perpetrado por parceiros ou ex-parceiros da vítima, e do feminicídio sexual sistêmico, em que a vítima é sequestrada e estuprada, há o feminicídio lesbofóbico ou bifóbico, configurado quando a vítima é bissexual ou lésbica e é assassinada porque o agressor entende que deve puni-la por sua orientação sexual.</p>
                <p class="mb-2 text-right text-sm">Disponível em: http://agenciabrasil.ebc.com.br. Acesso em: 22 ago. 2022 (adaptado).</p>

                <p class="mb-2 font-bold">TEXTO 2</p>
                <p class="mb-2 text-justify">Gráfico: América Latina, Caribe (21 países): Feminicídio ou femicídio (2021) — em números absolutos e taxas por 100 mil mulheres.</p>
                <p class="mb-2 text-right text-sm">Disponível em: https://oig.cepal.org. Acesso em: 20 abr. 2022.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">A partir do gráfico e das informações do texto, assinale a opção correta.</p>
            ',
            'referencia' => '',
            'opcao_a' => 'O gráfico apresentado ranqueia os países a partir de um cálculo de proporção e, nessa perspectiva, Santa Lúcia apresenta uma das taxas mais baixas de feminicídio na região.',
            'opcao_b' => 'As políticas públicas voltadas às mulheres partem do pressuposto de que elas devem ser as principais responsáveis por sua própria segurança, evitando comportamentos de risco.',
            'opcao_c' => 'Os países da América Latina que apresentam as maiores taxas de ocorrência de feminicídios a cada 100 mil mulheres, de acordo com o gráfico apresentado, são Brasil, México e Argentina.',
            'opcao_d' => 'As formas de violência que afetam as mulheres são determinadas não somente pela condição sexual e de gênero, mas também por diferenças econômicas, etárias, raciais, culturais e religiosas.',
            'opcao_e' => 'O número relativo a cada 100 mil mulheres vítimas de feminicídio no Brasil explica a posição elevada do país no ranking, diferentemente de Honduras, que registra, relativamente, menos ocorrências que o Brasil.',
            'alternativa_correta' => 'D',
        ]);

        Questao::create([
            'categoria' => 'Formação Geral',
            'contextualizacao' => '
                <p class="mb-2 text-justify">Inicialmente, a natureza transgressora do grafite foi encarada pelo Estado como vandalismo no espaço público e como um perigo para a conservação da propriedade privada, devendo-se, portanto, combatê-lo. Com o tempo, contudo, essa concepção marginal transformou-se, incidindo em uma valorização aceitável pelo Estado e positiva para a sociedade. Essa transição do grafite, de arte marginal para manifestação artística reconhecida e aceita, tem revelado aspectos importantes não somente para os profissionais do grafite, mas para a sociedade como um todo, pois incorpora a possibilidade de ele ser um produto artístico de valor cultural, econômico e ideológico.</p>
                <p class="mb-2 text-right text-sm">PIRES, E. M.; SANTOS, F. A. A cidade de São Paulo e suas dinâmicas: graffiti, Lei Cidade Limpa e publicidade urbana. <b>Anais do Museu Paulista</b>: História e Cultura Material. v. 26, São Paulo, 2018 (adaptado).</p>
                <p class="mb-2 text-right text-sm">Grafite: Eduardo Kobra. Foto: Charles Humpreys. São Paulo. Disponível em: https://www.bbc.com. Acesso em: 22 ago. 2022.</p>
            ',
            'enunciado' => '
                <p class="mb-2 text-justify">Considerando-se o texto e a imagem apresentados, é correto afirmar que o grafite consiste em uma</p>
            ',
            'referencia' => '',
            'opcao_a' => 'expressão popular associada à contestação e, por isso, não é reconhecido como arte.',
            'opcao_b' => 'expressão convencional de hierarquias consolidadas ao longo do tempo e ainda presentes na sociedade.',
            'opcao_c' => 'expressão cultural que problematiza os valores e as relações da sociedade com os espaços onde é produzida.',
            'opcao_d' => 'intervenção urbana que traz prejuízos para a sociedade porque gera conflitos latentes entre diferentes classes sociais.',
            'opcao_e' => 'intervenção estética realizada com o propósito de embelezamento padronizado dos espaços urbanos pelo uso de cores intensas e contrastantes.',
            'alternativa_correta' => 'C',
        ]);
    }
}
