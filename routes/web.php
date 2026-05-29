<?php

use Illuminate\Support\Facades\Route;
use App\Models\Questao;
use App\Models\Simulado;
use App\Http\Controllers\SimPas_Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/instrucoes', function () {
    return view('instrucoes');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/simulados', function () {
    return view('simulados');
});

Route::get('/simulados/simulados_passados', SimPas_Controller::class);

Route::get('/simulados/gerar_simulado', function () {
    return view('gerar_simulado');
});

Route::post('/simulados/gerar_simulado', function () {
    $curso = request('curso');
    $limitefg = intval(request('limitefg', 38));
    $limitece = intval(request('limitece', 38));
    $tempoInput = request('tempo', null);
    $tempo = is_numeric($tempoInput) ? intval($tempoInput) : null;

    if ($limitefg < 0 || $limitefg > 100) {
        $limitefg = 38;
    }
    if ($limitece < 0 || $limitece > 100) {
        $limitece = 38;
    }
    if ($tempo !== null && ($tempo < 0 || $tempo > 86400)) {
        $tempo = null;
    }

    // Criar novo simulado com seed
    $seed = Simulado::gerarSeed();
    $simulado = Simulado::create([
        'seed' => $seed,
        'curso' => $curso,
        'ano' => null,
        'limite_fg' => $limitefg,
        'limite_ce' => $limitece,
        'tempo_limite' => $tempo,
    ]);

    // Gerar questões usando seed determinístico
    $simulado->gerarQuestoes();

    return redirect('/simulado/' . $simulado->id);
});

// Rota antiga para simulados passados (com ano)
Route::get('/simulado/{curso}/{ano}/{limitefg?}/{limitece?}', function ($curso, $ano, $limitefg = 38, $limitece = 38) {
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

    if (! array_key_exists($curso, $cursos)) {
        abort(404);
    }
    
    $cursoTitulo = $cursos[$curso];
    
    $queryFG = Questao::query()->where('categoria', 'Formação Geral');
    $queryCE = Questao::query()->where('categoria', $cursoTitulo);
    
    // Filtrar por ano
    $queryFG->where('ano', $ano);
    $queryCE->where('ano', $ano);
    
    $questoesFG = $queryFG->limit($limitefg)->get();
    $questoesCE = $queryCE->limit($limitece)->get();

    $totalQuestions = $questoesFG->count() + $questoesCE->count();
    return view('simulado_em_andamento', compact('questoesFG', 'questoesCE', 'cursoTitulo', 'limitefg', 'totalQuestions', 'ano'));

})->name('simulado_curso_ano');

// Rota nova para simulados gerados (com seed)
Route::get('/simulado/{id}', function ($id) {
    $simulado = Simulado::findOrFail($id);
    
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
    
    $cursoTitulo = $cursos[$simulado->curso] ?? $simulado->curso;
    $questoes = $simulado->questoes()->get();
    
    // Separar questões por categoria
    $questoesFG = $questoes->filter(fn($q) => $q->categoria === 'Formação Geral');
    $questoesCE = $questoes->filter(fn($q) => $q->categoria !== 'Formação Geral');
    
    $totalQuestions = $questoes->count();
    $timeLimit = $simulado->tempo_limite;
    
    return view('simulado_em_andamento', compact('questoesFG', 'questoesCE', 'cursoTitulo', 'totalQuestions', 'timeLimit', 'simulado'));

})->name('simulado_gerado');