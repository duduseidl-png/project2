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
    return view('gerar_simulado');
});

Route::post('/gerar_simulado', function () {
    $curso = request('curso');
    $limite = intval(request('limite', 38));
    
    // Valida o limite
    if ($limite <= 0 || $limite > 100) {
        $limite = 38;
    }
    
    // Armazena na sessão
    session(['simulado_limite' => $limite]);
    
    return redirect('/simulado/' . $curso);
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
    
    // Pega o limite da sessão, padrão 38
    $limite = session('simulado_limite', 38);
    
    $cursoTitulo = $cursos[$curso];
    $questoes = Questao::where('curso', $cursoTitulo)
        /*->inRandomOrder()*/
        ->limit($limite)
        ->get();
    return view('simulado_em_andamento', compact('questoes', 'cursoTitulo', 'limite'));

})->name('simulado_curso');