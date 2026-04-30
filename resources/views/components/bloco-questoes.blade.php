@props(['questoes', 'numero'])

<div>
    <ul class="space-y-6">
        @foreach ($questoes as $questao)
            <li class="p-4 mb-20 border rounded-xl shadow-sm questao-item"
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
                <p class="mb-1 ml-5" style="text-align:right; font-size: small;">{{ $questao->referencia }}</p>
                <div class="mb-2 ml-5">
                    @if(str_contains($questao->enunciado, '<'))
                        {!! html_entity_decode($questao->enunciado) !!}
                    @else
                        {!! nl2br(e($questao->enunciado)) !!}
                    @endif
                </div>
                <p class="question-result mb-3 ml-5"></p>
                <ul style="list-style-type: none; text-align:justify" class="mb-3 ml-5 space-y-2 pl-0 text-md">
                    <li>
                        <label class="option-label block p-3 border rounded-lg cursor-pointer" data-value="A">
                            <input type="radio" name="resposta_{{ $questao->id }}" value="A" class="form-radio mr-2">
                            <span class="font-semibold">A)</span> {{ $questao->opcao_a }}
                        </label>
                    </li>
                    <li>
                        <label class="option-label block p-3 border rounded-lg cursor-pointer" data-value="B">
                            <input type="radio" name="resposta_{{ $questao->id }}" value="B" class="form-radio mr-2">
                            <span class="font-semibold">B)</span> {{ $questao->opcao_b }}
                        </label>
                    </li>
                    <li>
                        <label class="option-label block p-3 border rounded-lg cursor-pointer" data-value="C">
                            <input type="radio" name="resposta_{{ $questao->id }}" value="C" class="form-radio mr-2">
                            <span class="font-semibold">C)</span> {{ $questao->opcao_c }}
                        </label>
                    </li>
                    <li>
                        <label class="option-label block p-3 border rounded-lg cursor-pointer" data-value="D">
                            <input type="radio" name="resposta_{{ $questao->id }}" value="D" class="form-radio mr-2">
                            <span class="font-semibold">D)</span> {{ $questao->opcao_d }}
                        </label>
                    </li>
                    <li>
                        <label class="option-label block p-3 border rounded-lg cursor-pointer" data-value="E">
                            <input type="radio" name="resposta_{{ $questao->id }}" value="E" class="form-radio mr-2">
                            <span class="font-semibold">E)</span> {{ $questao->opcao_e }}
                        </label>
                    </li>
                </ul>
            </li>
        @endforeach
    </ul>
</div>