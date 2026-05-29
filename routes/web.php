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

    // Gerar seed e codificar parâmetros
    $seed = Simulado::gerarSeed();
    $codigo = Simulado::codificarParametros([
        'seed' => $seed,
        'curso' => $curso,
        'limite_fg' => $limitefg,
        'limite_ce' => $limitece,
        'tempo_limite' => $tempo,
    ]);

    return redirect('/simulado/codigo/' . $codigo);
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

// Rota para simulados gerados por código (sem dependência do banco)
Route::get('/simulado/codigo/{codigo}', function ($codigo) {
    $parametros = Simulado::decodificarParametros($codigo);
    
    if (!$parametros) {
        abort(404);
    }
    
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
    
    $cursoTitulo = $cursos[$parametros['curso']] ?? $parametros['curso'];
    
    // Regenera questões on-the-fly usando parâmetros codificados
    $resultado = Simulado::regenerarQuestoesPorParametros($parametros);
    $questoesFG = $resultado['questoesFG'];
    $questoesCE = $resultado['questoesCE'];
    
    $totalQuestions = $questoesFG->count() + $questoesCE->count();
    $timeLimit = $parametros['tempo_limite'] ?? null;
    $codigo_para_view = $codigo;
    
    return view('simulado_em_andamento', compact('questoesFG', 'questoesCE', 'cursoTitulo', 'totalQuestions', 'timeLimit', 'codigo_para_view'));

})->name('simulado_codigo');

// Recuperar simulado usando código
Route::post('/simulados/recuperar_seed', function () {
    $codigo = request('seed'); // ainda chamamos de 'seed' no form para compatibilidade

    if (!$codigo) {
        return redirect('/simulados/gerar_simulado')->with('error', 'Código não fornecido');
    }

    $parametros = Simulado::decodificarParametros($codigo);

    if (!$parametros) {
        return redirect('/simulados/gerar_simulado')->with('error', 'Código inválido');
    }

    return redirect('/simulado/codigo/' . $codigo);
})->name('recuperar_codigo');