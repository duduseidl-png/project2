@props(['questoes', 'numero'])

<div>
    @if (!$questoes->isEmpty())
    <ul class="border rounded-xl shadow-sm space-y-6 mb-6">
        @foreach ($questoes as $questao)
            <li class="px-4 pt-2 questao-item"
                data-correct="{{ $questao->alternativa_correta }}">
                <h2 id="questao{{ $loop->iteration + $numero }}" class="text-lg font-bold mb-2">QUESTÃO {{ $loop->iteration + $numero }}
                </h2>
                <div class="mb-2 ml-5">
                    @if(str_contains($questao->contextualizacao, '<'))
                        {!! html_entity_decode($questao->contextualizacao) !!}
                    @else
                        {!! nl2br(e($questao->contextualizacao)) !!}
                    @endif
                </div>
                <p class="mb-1 ml-5 text-right text-xs">{!! html_entity_decode($questao->referencia) !!}</p>
                <div class="mb-2 ml-5">
                    @if(str_contains($questao->enunciado, '<'))
                        {!! html_entity_decode($questao->enunciado) !!}
                    @else
                        {!! nl2br(e($questao->enunciado)) !!}
                    @endif
                </div>
                <p class="question-result mb-3 ml-5"></p>
                <ul class="list-none space-y-2 mb-3 ml-5 pl-0 text-justify text-md">
                    <li>
                    <label class="option-label flex items-center gap-3 p-3 border rounded-lg cursor-pointer" data-value="A">
                        <input type="radio" name="resposta_{{ $questao->id }}" value="A" class="form-radio mr-2 flex-shrink-0">
                        <span class="font-semibold flex-shrink-0">A)</span>
                        <span class="flex-1 min-w-0">
                            @if(str_contains($questao->opcao_a, '<'))
                                {!! html_entity_decode($questao->opcao_a) !!}
                            @else
                                {!! nl2br(e($questao->opcao_a)) !!}
                            @endif
                        </span>
                    </label>
                    </li>
                    <li>
                    <label class="option-label flex items-center gap-3 p-3 border rounded-lg cursor-pointer" data-value="B">
                        <input type="radio" name="resposta_{{ $questao->id }}" value="B" class="form-radio mr-2 flex-shrink-0">
                        <span class="font-semibold flex-shrink-0">B)</span>
                        <span class="flex-1 min-w-0">
                            @if(str_contains($questao->opcao_b, '<'))
                                {!! html_entity_decode($questao->opcao_b) !!}
                            @else
                                {!! nl2br(e($questao->opcao_b)) !!}
                            @endif
                        </span>
                    </label>
                    </li>
                    <li>
                    <label class="option-label flex items-center gap-3 p-3 border rounded-lg cursor-pointer" data-value="C">
                        <input type="radio" name="resposta_{{ $questao->id }}" value="C" class="form-radio mr-2 flex-shrink-0">
                        <span class="font-semibold flex-shrink-0">C)</span>
                        <span class="flex-1 min-w-0">
                            @if(str_contains($questao->opcao_c, '<'))
                                {!! html_entity_decode($questao->opcao_c) !!}
                            @else
                                {!! nl2br(e($questao->opcao_c)) !!}
                            @endif
                        </span>
                    </label>
                    </li>
                    <li>
                    <label class="option-label flex items-center gap-3 p-3 border rounded-lg cursor-pointer" data-value="D">
                        <input type="radio" name="resposta_{{ $questao->id }}" value="D" class="form-radio mr-2 flex-shrink-0">
                        <span class="font-semibold flex-shrink-0">D)</span>
                        <span class="flex-1 min-w-0">
                            @if(str_contains($questao->opcao_d, '<'))
                                {!! html_entity_decode($questao->opcao_d) !!}
                            @else
                                {!! nl2br(e($questao->opcao_d)) !!}
                            @endif
                        </span>
                    </label>
                    </li>
                    <li class=" mb-10">
                    <label class="option-label flex items-center gap-3 p-3 border rounded-lg cursor-pointer" data-value="E">
                        <input type="radio" name="resposta_{{ $questao->id }}" value="E" class="form-radio mr-2 flex-shrink-0">
                        <span class="font-semibold flex-shrink-0">E)</span>
                        <span class="flex-1 min-w-0">
                            @if(str_contains($questao->opcao_e, '<'))
                                {!! html_entity_decode($questao->opcao_e) !!}
                            @else
                                {!! nl2br(e($questao->opcao_e)) !!}
                            @endif
                        </span>
                    </label>
                    </li>
                    @if(!$loop->last)
                        <hr>
                    @endif
                </ul>
            </li>
        @endforeach
    </ul>
    @endif
</div>