<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $table = 'questoes';

    protected $fillable = [
        'questao_id',
        'categoria',
        'contextualizacao',
        'enunciado',
        'referencia',
        'opcao_a',
        'opcao_b',
        'opcao_c',
        'opcao_d',
        'opcao_e',
        'alternativa_correta',
    ];
}
