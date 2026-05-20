<?php

use Illuminate\Support\Facades\Route;
use App\Models\Questao;
use App\Http\Controllers\SimPas_Controller;

Route::get('/', function () {
    return view('welcome');
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
/*
    if (! $curso) {
        return redirect('/simulados/gerar_simulado');
    }*/

    if ($limitefg < 0 || $limitefg > 100) {
        $limitefg = 38;
    }
    if ($limitece < 0 || $limitece > 100) {
        $limitece = 38;
    }

    session(['simulado_limite_fg' => $limitefg, 'simulado_limite_ce' => $limitece]);

    return redirect('/simulado/' . $curso);
});

Route::get('/simulado/{curso}/{limitefg?}/{limitece?}', function ($curso, $limitefg = 38, $limitece = 38) {
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
    
    $limitefg = session('simulado_limite_fg', $limitefg);
    $limitece = session('simulado_limite_ce', $limitece);
    
    $cursoTitulo = $cursos[$curso];
    $questoesFG = Questao::query()->where('categoria', 'Formação Geral')
        /* ->inRandomOrder() */
        ->limit($limitefg)
        ->get();
    $questoesCE = Questao::query()->where('categoria', $cursoTitulo)
        /* ->inRandomOrder() */
        ->limit($limitece)
        ->get();

    $totalQuestions = $questoesFG->count() + $questoesCE->count();
    return view('simulado_em_andamento', compact('questoesFG', 'questoesCE', 'cursoTitulo', 'limitefg', 'totalQuestions'));

})->name('simulado_curso');