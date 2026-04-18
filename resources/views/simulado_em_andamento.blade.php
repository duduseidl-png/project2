<x-layout :title="'Simulado - ' . ($cursoTitulo ?? 'Curso')">
    <div>
        <h1 class="text-5xl font-bold text-black text-center mt-10 mb-10">{{ $cursoTitulo ?? 'Simulado' }}</h1>
        <style>
            .option-label {
                transition: background-color 0.2s ease, border-color 0.2s ease;
            }
            .option-correct {
                background-color: #dcfce7;
                border-color: #34d399;
            }
            .option-wrong {
                background-color: #fee2e2;
                border-color: #f87171;
            }
            .question-result {
                font-weight: 600;
            }
            .question-result.correct {
                color: #15803d;
            }
            .question-result.wrong {
                color: #b91c1c;
            }
        </style>
        <form id="simulado-form">
            <ul class="space-y-6">
                @foreach ($questoes as $questao)
                    <li class="p-4 border rounded-xl bg-white shadow-sm questao-item" data-correct="{{ $questao->alternativa_correta }}" style="margin-left: 100px;margin-right: 100px;margin-top: 20px;">
                        <h2 class="text-lg font-bold mb-2">QUESTÃO {{ $loop->iteration }}</h2>
                        <p class="font-semibold mb-3 ml-5" style="text-align:justify">{!! nl2br(e($questao->contextualizacao)) !!}</p>
                        <p class="mb-3 ml-5" style="text-align:right; font-size: small;">{{ $questao->referencia }}</p>
                        <p class="font-semibold mb-3 ml-5" style="text-align:justify">{!! nl2br(e($questao->enunciado)) !!}</p>
                        <p class="question-result mb-3 ml-5"></p>
                        <ul style="list-style-type: none; text-align:justify" class="mb-3 ml-5 space-y-2 pl-0 text-md">
                            <li>
                                <label class="option-label block p-3 border rounded-lg cursor-pointer hover:bg-slate-100" data-value="A">
                                    <input type="radio" name="resposta_{{ $questao->id }}" value="A" class="form-radio mr-2">
                                    <span class="font-semibold">A)</span> {{ $questao->opcao_a }}
                                </label>
                            </li>
                            <li>
                                <label class="option-label block p-3 border rounded-lg cursor-pointer hover:bg-slate-100" data-value="B">
                                    <input type="radio" name="resposta_{{ $questao->id }}" value="B" class="form-radio mr-2">
                                    <span class="font-semibold">B)</span> {{ $questao->opcao_b }}
                                </label>
                            </li>
                            <li>
                                <label class="option-label block p-3 border rounded-lg cursor-pointer hover:bg-slate-100" data-value="C">
                                    <input type="radio" name="resposta_{{ $questao->id }}" value="C" class="form-radio mr-2">
                                    <span class="font-semibold">C)</span> {{ $questao->opcao_c }}
                                </label>
                            </li>
                            <li>
                                <label class="option-label block p-3 border rounded-lg cursor-pointer hover:bg-slate-100" data-value="D">
                                    <input type="radio" name="resposta_{{ $questao->id }}" value="D" class="form-radio mr-2">
                                    <span class="font-semibold">D)</span> {{ $questao->opcao_d }}
                                </label>
                            </li>
                            <li>
                                <label class="option-label block p-3 border rounded-lg cursor-pointer hover:bg-slate-100" data-value="E">
                                    <input type="radio" name="resposta_{{ $questao->id }}" value="E" class="form-radio mr-2">
                                    <span class="font-semibold">E)</span> {{ $questao->opcao_e }}
                                </label>
                            </li>
                        </ul>
                    </li>
                @endforeach
            </ul>
            <button type="submit" class="my-6 mx-auto display: block px-4 py-2 bg-blue-600 text-white rounded" style="width: 200px;">Enviar Respostas</button>
        </form>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var form = document.getElementById('simulado-form');

                form.addEventListener('submit', function (event) {
                    event.preventDefault();

                    var questoes = document.querySelectorAll('.questao-item');

                    questoes.forEach(function (questao) {
                        var correctAlternative = questao.dataset.correct;
                        var selectedInput = questao.querySelector('input[type="radio"]:checked');
                        var labels = questao.querySelectorAll('.option-label');
                        var resultText = questao.querySelector('.question-result');

                        labels.forEach(function (label) {
                            label.classList.remove('option-correct', 'option-wrong');
                        });

                        if (!selectedInput) {
                            resultText.textContent = 'Selecione uma alternativa para ver o resultado.';
                            resultText.classList.remove('correct', 'wrong');
                            return;
                        }

                        var selectedValue = selectedInput.value;
                        var selectedLabel = selectedInput.closest('.option-label');
                        var correctLabel = questao.querySelector('.option-label[data-value="' + correctAlternative + '"]');

                        if (selectedValue === correctAlternative) {
                            selectedLabel.classList.add('option-correct');
                            resultText.textContent = 'Correto!';
                            resultText.classList.add('correct');
                            resultText.classList.remove('wrong');
                        } else {
                            selectedLabel.classList.add('option-wrong');
                            if (correctLabel) {
                                correctLabel.classList.add('option-correct');
                            }
                            resultText.textContent = 'Errado. A resposta correta é ' + correctAlternative + '.';
                            resultText.classList.add('wrong');
                            resultText.classList.remove('correct');
                        }
                    });

                    // Desabilita todas as alternativas após envio
                    questoes.forEach(function (questao) {
                        var inputs = questao.querySelectorAll('input[type="radio"]');
                        inputs.forEach(function (input) {
                            input.disabled = true;
                        });
                    });
                    var submitButton = form.querySelector('button[type="submit"]');
                    if (submitButton) {
                        submitButton.disabled = true;
                        submitButton.textContent = 'Respostas Enviadas';
                        submitButton.classList.add('opacity-50');
                    }
                });
            });
        </script>
    </div>
</x-layout>