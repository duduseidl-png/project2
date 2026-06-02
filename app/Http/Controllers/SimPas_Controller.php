<?php

namespace App\Http\Controllers;

class SimPas_Controller extends Controller
{
    public function __invoke()
    {
        $cursos = [
            ['nome' => 'Administração', 'slug' => 'administracao'],
            ['nome' => 'Engenharia Civil', 'slug' => 'engenharia-civil'],
            ['nome' => 'Engenharia de Computação', 'slug' => 'engenharia-de-computacao'],
            ['nome' => 'Engenharia de Controle e Automação', 'slug' => 'engenharia-de-controle-e-automacao'],
            ['nome' => 'Engenharia de Produção', 'slug' => 'engenharia-de-producao'],
            ['nome' => 'Engenharia Elétrica', 'slug' => 'engenharia-eletrica'],
            ['nome' => 'Engenharia Mecânica', 'slug' => 'engenharia-mecanica'],
            ['nome' => 'Engenharia Química', 'slug' => 'engenharia-quimica'],
        ];

        $anos = [
            'engenharia-de-computacao' => [2023, 2019, 2017, 2014],
            'engenharia-civil' => [2023, 2019, 2017, 2014],
            'engenharia-de-producao' => [2023, 2019, 2017, 2014],
            'engenharia-eletrica' => [2023, 2019, 2017, 2014],
            'engenharia-mecanica' => [2023, 2019, 2017, 2014],
            'administracao' => [2024, 2023, 2022],
            'engenharia-quimica' => [2023, 2019, 2017, 2014],
            'engenharia-de-controle-e-automacao' => [2023, 2019, 2017, 2014],
        ];

        return view('simulados_passados', compact('cursos', 'anos'));
    }
}
