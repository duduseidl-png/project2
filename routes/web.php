<?php

use App\Models\Questao;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/simulados', function () {
    return view('simulados');
});

Route::get('/gerar_simulado', function () {
    return view('gerar_simulado');
});

Route::get('/simulado/{curso}/{limitefg?}/{limitece?}', function ($curso, $limitefg = 38, $limitece = 38) {
    $cursos = [
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

    // Valida o limite para evitar valores inválidos
    $limitefg = intval($limitefg);
    $limitece = intval($limitece);
    if ($limitefg <= 0 || $limitefg > 100) {
        $limitefg = 38;
    }
    if ($limitece <= 0 || $limitece > 100) {
        $limitece = 38;
    }

    $cursoTitulo = $cursos[$curso];
    $questoesFG = Questao::where('categoria', 'Formação Geral')
        /* ->inRandomOrder() */
        ->limit($limitefg)
        ->get();
    $questoesCE = Questao::where('categoria', $cursoTitulo)
        /* ->inRandomOrder() */
        ->limit($limitece)
        ->get();

    return view('simulado_em_andamento', compact('questoesFG', 'questoesCE', 'cursoTitulo', 'limitece'));

})->name('simulado_curso');
