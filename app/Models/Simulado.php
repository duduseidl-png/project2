<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Simulado extends Model
{
    protected $table = 'simulados';

    protected $fillable = [
        'seed',
        'curso',
        'ano',
        'limite_fg',
        'limite_ce',
        'tempo_limite',
    ];

    protected $casts = [
        'ano' => 'integer',
        'limite_fg' => 'integer',
        'limite_ce' => 'integer',
        'tempo_limite' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Gera um seed único
     */
    public static function gerarSeed(): string
    {
        return uniqid('sim_', true);
    }

    /**
     * Codifica parâmetros em uma string base64 para compartilhamento
     */
    public static function codificarParametros(array $parametros): string
    {
        $seed = $parametros['seed'] ?? self::gerarSeed();
        
        $dados = [
            'seed' => $seed,
            'curso' => $parametros['curso'],
            'ano' => $parametros['ano'] ?? null,
            'limite_fg' => (int) ($parametros['limite_fg'] ?? 10),
            'limite_ce' => (int) ($parametros['limite_ce'] ?? 30),
            'tempo_limite' => isset($parametros['tempo_limite']) ? (int) $parametros['tempo_limite'] : null,
        ];

        $json = json_encode($dados);
        // Usar URL-safe base64
        $encoded = base64_encode($json);
        $encoded = strtr($encoded, '+/', '-_');
        $encoded = rtrim($encoded, '=');
        
        return $encoded;
    }

    /**
     * Decodifica uma string base64 para parâmetros
     */
    public static function decodificarParametros(string $codigo): ?array
    {
        try {
            // Decodificar URL-safe base64
            $encoded = $codigo;
            $encoded = strtr($encoded, '-_', '+/');
            $encoded .= str_repeat('=', 4 - strlen($encoded) % 4);
            
            $json = base64_decode($encoded, true);
            if ($json === false) {
                return null;
            }
            
            $dados = json_decode($json, true);
            
            if (!isset($dados['seed'], $dados['curso'])) {
                return null;
            }

            return $dados;
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Regenera questões usando parâmetros (sem precisar salvar no banco)
     */
    public static function regenerarQuestoesPorParametros(array $parametros): array
    {
        $seed = $parametros['seed'];
        $curso = $parametros['curso'];
        $ano = $parametros['ano'] ?? null;
        $limite_fg = (int) $parametros['limite_fg'];
        $limite_ce = (int) $parametros['limite_ce'];

        // Inicializa o gerador com seed determinístico
        mt_srand(crc32($seed));

        $cursoTitulo = self::obterCursoTituloEstatico($curso);

        // Query para Formação Geral
        $queryFG = Questao::query()->where('categoria', 'Formação Geral');
        if ($ano) {
            $queryFG->where('ano', $ano);
        }
        $allQuestoesFG = $queryFG->get();
        $questoesFG = self::selecionarAleatororiamenteEstatico($allQuestoesFG, $limite_fg);

        // Query para Componente Específico
        $queryCE = Questao::query()->where('categoria', $cursoTitulo);
        if ($ano) {
            $queryCE->where('ano', $ano);
        }
        $allQuestoesCE = $queryCE->get();
        $questoesCE = self::selecionarAleatororiamenteEstatico($allQuestoesCE, $limite_ce);

        return [
            'questoesFG' => $questoesFG,
            'questoesCE' => $questoesCE,
        ];
    }

    /**
     * Seleciona questões aleatoriamente de forma determinística
     */
    private function selecionarAleatororiamente($questoes, int $quantidade)
    {
        if ($questoes->isEmpty()) {
            return collect([]);
        }

        $quantidade = min($quantidade, $questoes->count());
        $ids = $questoes->pluck('id')->toArray();
        $selectedIds = [];

        for ($i = 0; $i < $quantidade; $i++) {
            $randomIndex = mt_rand(0, count($ids) - 1);
            $selectedIds[] = $ids[$randomIndex];
            unset($ids[$randomIndex]);
            $ids = array_values($ids);
        }

        // Retornar objetos Questao na ordem selecionada
        return collect($selectedIds)->map(fn($id) => Questao::find($id));
    }

    /**
     * Seleciona questões aleatoriamente de forma determinística (versão estática)
     */
    private static function selecionarAleatororiamenteEstatico($questoes, int $quantidade)
    {
        if ($questoes->isEmpty()) {
            return collect([]);
        }

        $quantidade = min($quantidade, $questoes->count());
        $ids = $questoes->pluck('id')->toArray();
        $selectedIds = [];

        for ($i = 0; $i < $quantidade; $i++) {
            $randomIndex = mt_rand(0, count($ids) - 1);
            $selectedIds[] = $ids[$randomIndex];
            unset($ids[$randomIndex]);
            $ids = array_values($ids);
        }

        // Retornar objetos Questao na ordem selecionada
        return collect($selectedIds)->map(fn($id) => Questao::find($id));
    }

    /**
     * Converte slug do curso para título
     */
    private function obterCursoTitulo(string $slug): string
    {
        return self::obterCursoTituloEstatico($slug);
    }

    /**
     * Converte slug do curso para título (versão estática)
     */
    private static function obterCursoTituloEstatico(string $slug): string
    {
        $cursos = [
            'administracao' => 'Administração',
            'engenharia-civil' => 'Engenharia Civil',
            'engenharia-de-computacao' => 'Engenharia de Computação',
            'engenharia-de-controle-e-automacao' => 'Engenharia de Controle e Automação',
            'engenharia-de-producao' => 'Engenharia de Produção',
            'engenharia-eletrica' => 'Engenharia Elétrica',
            'engenharia-mecanica' => 'Engenharia Mecânica',
            'engenharia-quimica' => 'Engenharia Química',
        ];

        return $cursos[$slug] ?? $slug;
    }
}

