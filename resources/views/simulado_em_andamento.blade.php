<x-layout title="Simulado">
    <div>
        <form>
            <ul class="space-y-6">
                @foreach ($questoes as $questao)
                    <li class="p-4 border rounded-xl bg-white shadow-sm" style="margin-left: 100px;margin-right: 100px;margin-top: 20px;">
                        <h2 class="text-lg font-bold mb-2">Questão {{ $loop->iteration }}</h2>
                        <p class="font-semibold mb-3 ml-5" style="text-align:justify">{!! nl2br(e($questao->contextualizacao)) !!}</p>
                        <p class="mb-3 ml-5" style="text-align:right; font-size: small;">{{ $questao->referencia }}</p>
                        <p class="font-semibold mb-3 ml-5" style="text-align:justify">{!! nl2br(e($questao->enunciado)) !!}</p>
                        <ul style="list-style-type: none; text-align:justify" class="mb-3 ml-5 space-y-1 list-disc pl-5 text-md">
                            <li>A) {{ $questao->opcao_a }}</li>
                            <li>B) {{ $questao->opcao_b }}</li>
                            <li>C) {{ $questao->opcao_c }}</li>
                            <li>D) {{ $questao->opcao_d }}</li>
                            <li>E) {{ $questao->opcao_e }}</li>
                        </ul>
                        <div class="flex flex-wrap gap-3 text-sm">
                            <label class="inline-flex items-center gap-2">
                                <input type="radio" name="resposta_{{ $questao->id }}" value="A" class="form-radio">
                                A
                            </label>
                            <label class="inline-flex items-center gap-2">
                                <input type="radio" name="resposta_{{ $questao->id }}" value="B" class="form-radio">
                                B
                            </label>
                            <label class="inline-flex items-center gap-2">
                                <input type="radio" name="resposta_{{ $questao->id }}" value="C" class="form-radio">
                                C
                            </label>
                            <label class="inline-flex items-center gap-2">
                                <input type="radio" name="resposta_{{ $questao->id }}" value="D" class="form-radio">
                                D
                            </label>
                            <label class="inline-flex items-center gap-2">
                                <input type="radio" name="resposta_{{ $questao->id }}" value="E" class="form-radio">
                                E
                            </label>
                        </div>
                    </li>
                @endforeach
            </ul>
            <button type="submit" class="my-6 mx-auto display: block px-4 py-2 bg-blue-600 text-white rounded" style="width: 200px;">Enviar Respostas</button>
        </form>
    </div>
</x-layout>