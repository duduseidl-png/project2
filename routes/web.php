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

Route::get('/simulado_em_andamento', function () {
    $questoes = Questao::inRandomOrder()->limit(38)->get();
    return view('simulado_em_andamento', compact('questoes'));
})->name('simulado_em_andamento');