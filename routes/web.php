<?php

use Illuminate\Support\Facades\Route;
use App\Models\Questao;
use App\Http\Controllers\countdown;

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
    //$questoes = Questao::all();
    return view('gerar_simulado');
});

Route::get('/simulado/{curso}/{limite?}', function ($curso, $limite = 38) {
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
    $limite = intval($limite);
    if ($limite <= 0 || $limite > 100) {
        $limite = 38;
    }
    
    $cursoTitulo = $cursos[$curso];
    $questoes = Questao::where('curso', $cursoTitulo)
        /*->inRandomOrder()*/
        ->limit(38)
        ->get();
    return view('simulado_em_andamento', compact('questoes', 'cursoTitulo'));

})->name('simulado_curso');