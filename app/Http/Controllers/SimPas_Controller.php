<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Questao;

class SimPas_Controller extends Controller
{
    public function __invoke()
    {
        $cursos = Questao::select('id', 'categoria')
        ->groupBy('categoria')
        ->orderBy('categoria')
        ->get()
        ->map(fn($q) => [
            'id' => $q->id, 
            'nome' => $q->categoria,
            'slug' => Str::slug($q->categoria)
        ])
        ->values();
    
    // Array de anos por curso ID
    $anos = [
        1 => [2023, 2019, 2017, 2014], // Engenharia de Computação
        30 => [2023, 2019, 2017, 2014], // Engenharia Civil
        59 => [2023, 2019, 2017, 2014], // Engenharia de Produção
        88 => [2023, 2019, 2017, 2014], // Engenharia Elétrica
        117 => [2023, 2019, 2017, 2014], // Engenharia Mecânica
        147 => [2024, 2023, 2022], // ADM
        173 => [2023, 2019, 2017, 2014], // Engenharia Química
    ];
    return view('simulados_passados', ['cursos' => $cursos, 'anos' => $anos]);
    }
}
