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

    /*
     * Gera um seed único
    public static function gerarSeed(): string
    {
        return uniqid('sim_', true);
    }
        */

    /**
     * Gera um seed de 6 caracteres alfanuméricos
     */
    public static function gerarSeed(): string
    {
        $caracteres = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $seed = '';

        for ($i = 0; $i < 6; $i++) {
            // Sorteia um índice aleatório de 0 a 35 e concatena
            $seed .= $caracteres[random_int(0, 35)];
        }

        return $seed;
    }

    /**
     * Regenera questões usando seed (não salva no banco)
     * Retorna dois arrays: questões FG e questões CE
     */
    public function regenerarQuestoes(): array
    {
        // Inicializa o gerador com seed determinístico
        mt_srand(crc32($this->seed));

        $cursoTitulo = $this->obterCursoTitulo($this->curso);

        // Query para Formação Geral
        $queryFG = Questao::query()->where('categoria', 'Formação Geral');
        if ($this->ano) {
            $queryFG->where('ano', $this->ano);
        }
        $allQuestoesFG = $queryFG->get();
        $questoesFG = $this->selecionarAleatororiamente($allQuestoesFG, $this->limite_fg);

        // Query para Componente Específico
        $queryCE = Questao::query()->where('categoria', $cursoTitulo);
        if ($this->ano) {
            $queryCE->where('ano', $this->ano);
        }
        $allQuestoesCE = $queryCE->get();
        $questoesCE = $this->selecionarAleatororiamente($allQuestoesCE, $this->limite_ce);

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

