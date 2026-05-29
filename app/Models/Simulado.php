<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
     * Relação muitos-para-muitos com Questoes
     */
    public function questoes(): BelongsToMany
    {
        return $this->belongsToMany(Questao::class, 'simulado_questoes')
            ->withPivot('ordem')
            ->orderBy('pivot_ordem');
    }

    /**
     * Gera um seed único baseado em caracteres aleatórios
     */
    public static function gerarSeed(): string
    {
        return uniqid('sim_', true);
    }

    /**
     * Busca questões aleatoriamente usando seed determinístico
     */
    public function gerarQuestoes(): void
    {
        // Inicializa o gerador de números aleatórios com o seed
        mt_srand(crc32($this->seed));

        $cursoTitulo = $this->obterCursoTitulo($this->curso);

        // Query para Formação Geral
        $queryFG = Questao::query()->where('categoria', 'Formação Geral');
        if ($this->ano) {
            $queryFG->where('ano', $this->ano);
        }
        $allQuestoesFG = $queryFG->pluck('id')->toArray();
        
        // Seleciona questões de forma determinística
        $selectedFG = $this->selecionarAleatororiamente($allQuestoesFG, $this->limite_fg);

        // Query para Componente Específico
        $queryCE = Questao::query()->where('categoria', $cursoTitulo);
        if ($this->ano) {
            $queryCE->where('ano', $this->ano);
        }
        $allQuestoesCE = $queryCE->pluck('id')->toArray();
        $selectedCE = $this->selecionarAleatororiamente($allQuestoesCE, $this->limite_ce);

        // Combina e embaralha com seed
        $allSelected = array_merge($selectedFG, $selectedCE);
        $this->embaralharComSeed($allSelected);

        // Salva no banco
        $questoesData = [];
        foreach ($allSelected as $index => $questaoId) {
            $questoesData[$questaoId] = ['ordem' => $index + 1];
        }

        $this->questoes()->sync($questoesData);
    }

    /**
     * Seleciona questões aleatoriamente de forma determinística
     */
    private function selecionarAleatororiamente(array $ids, int $quantidade): array
    {
        if (empty($ids)) {
            return [];
        }

        $quantidade = min($quantidade, count($ids));
        $selected = [];
        $available = $ids;

        for ($i = 0; $i < $quantidade; $i++) {
            $randomIndex = mt_rand(0, count($available) - 1);
            $selected[] = $available[$randomIndex];
            unset($available[$randomIndex]);
            $available = array_values($available);
        }

        return $selected;
    }

    /**
     * Embaralha array usando seed
     */
    private function embaralharComSeed(array &$array): void
    {
        $n = count($array);
        for ($i = $n - 1; $i > 0; $i--) {
            $j = mt_rand(0, $i);
            [$array[$i], $array[$j]] = [$array[$j], $array[$i]];
        }
    }

    /**
     * Converte slug do curso para título
     */
    private function obterCursoTitulo(string $slug): string
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
