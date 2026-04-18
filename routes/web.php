<?php

use Illuminate\Support\Facades\Route;
use App\Models\Questao;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/simulados', function () {
    //$questoes = Questao::all();
    return view('simulados');
});

Route::get('/simulado/{curso}', function ($curso) {
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

    $cursoTitulo = $cursos[$curso];
    $questoes = Questao::where('curso', $cursoTitulo)
        ->inRandomOrder()
        ->limit(38)
        ->get();

    return view('simulado_em_andamento', compact('questoes', 'cursoTitulo'));
})->name('simulado_curso');