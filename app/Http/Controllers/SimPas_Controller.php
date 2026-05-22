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
        30 => [2024, 2023, 2022, 2021, 2020], // Engenharia Civil
        147 => [2024, 2023, 2022],
        4 => [2024, 2023, 2022, 2021, 2020, 2019],
        5 => [2024, 2023, 2022, 2021],
        6 => [2024, 2023, 2022],
        7 => [2024, 2023, 2022, 2021, 2020],
    ];
    return view('simulados_passados', ['cursos' => $cursos, 'anos' => $anos]);
    }
}
