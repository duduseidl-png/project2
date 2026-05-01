<x-layout :title="'Simulado - ' . ($cursoTitulo ?? 'Curso')">
    <div>
        <h1 class="text-3xl font-bold text-left mt-7 mb-5" style="margin-left: 5%">{{ $cursoTitulo ?? 'Simulado' }}</h1>
        <style>
            /* Define colors based on theme */
            :root[data-theme="light"] {
                --correct-bg: #b6ffd0;
                --correct-border: #34d399;
                --correct-text: #15803d;
                --wrong-bg: #fee2e2;
                --wrong-border: #f87171;
                --wrong-text: #b91c1c;
                --hover-bg: #f1f5f9;
                --modal-bg: #ffffff;
                --modal-text: #1f2937;
                --modal-warning-bg: #fff8b9;
                --modal-warning-text: #78350f;
                --text-color: #3d3d3d;
            }

            :root[data-theme="dark"] {
                --correct-bg: #064e3b;
                --correct-border: #10b981;
                --correct-text: #6ee7b7;
                --wrong-bg: #7f1d1d;
                --wrong-border: #ef4444;
                --wrong-text: #fca5a5;
                --hover-bg: #374151;
                --modal-bg: #1f2937;
                --modal-text: #f6f4f3;
                --modal-warning-bg: #251919ce;
                --modal-warning-text: #ffe4a1;
                --text-color: #b1afaf;
            }

            .option-label {
                transition: background-color 0.2s ease, border-color 0.2s ease;
            }

            .option-label:hover {
                background-color: var(--hover-bg);
            }

            .option-correct {
                background-color: var(--correct-bg);
                border-color: var(--correct-border);
            }

            .option-wrong {
                background-color: var(--wrong-bg);
                border-color: var(--wrong-border);
            }

            .question-result {
                font-weight: 600;
            }

            .question-result.correct {
                color: var(--correct-text);
            }

            .question-result.wrong {
                color: var(--wrong-text);
            }

            /* Modal de Confirmação */
            #confirmation-modal {
                backdrop-filter: blur(1px);
                -webkit-backdrop-filter: blur(1px);
                transition: opacity 0.3s ease;
            }

            #confirmation-modal.hidden {
                display: none;
            }

            #confirmation-modal:not(.hidden) {
                display: flex;
                background-color: rgba(0, 0, 0, 0.4);
            }

            #confirmation-modal > div {
                background-color: var(--modal-bg);
                color: var(--modal-text);
                box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
                animation: slideIn 0.3s ease-out;
            }

            #confirmation-modal > div > section {
                background-color: var(--modal-warning-bg);
                color: var(--modal-warning-text);
            }

            @keyframes slideIn section
                from {
                    opacity: 0;
                    transform: translateY(-20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            html {
                scroll-behavior: smooth;
            }
        </style>
        <!-- Modal de Confirmação -->
        <div id="confirmation-modal" class="hidden fixed inset-0 flex items-center justify-center z-50">
            <div class="rounded-lg shadow-lg p-8 max-w-md mx-auto">
                <h2 class="text-2xl font-bold mb-4">Confirmar Envio</h2>
                <p class="mb-6">Tem certeza que deseja enviar suas respostas? Você não poderá alterá-las após o envio.</p>
                
                <!-- Aviso de questões não respondidas -->
                <section id="unanswered-warning" class="hidden mb-4 p-4 border border-yellow-400 rounded-lg">
                    <p class="text-sm">
                        <strong>Aviso:</strong> Você tem <span id="unanswered-count">0</span> questão(ões) não respondida(s). Deseja continuar assim mesmo?
                    </p>
                </section>
                
                <div class="flex gap-4 justify-end">
                    <button id="cancel-btn" type="button" class="btn btn-outline">Cancelar</button>
                    <button id="confirm-btn" type="button" class="btn btn-primary">Confirmar</button>
                </div>
            </div>
        </div>

        <form id="simulado-form">
            <ul class="space-y-6">
                @foreach ($questoes as $questao)
                    <li class="p-4 mb-20 border rounded-xl shadow-sm questao-item"
                        data-correct="{{ $questao->alternativa_correta }}"
                        style="margin-left: 5%;margin-right: 22%;margin-top: 10px;">
                        <h2 id="questao{{ $loop->iteration }}" class="text-lg font-bold mb-2">QUESTÃO {{ $loop->iteration }}
                        </h2>
                        <div class="mb-2 ml-5">
                            @if(str_contains($questao->contextualizacao, '<'))
                                {!! html_entity_decode($questao->contextualizacao) !!}
                            @else
                                {!! nl2br(e($questao->contextualizacao)) !!}
                            @endif
                        </div>
                        <p class="mb-1 ml-5" style="text-align:right; font-size: small;">
                            @if(str_contains($questao->referencia, '<'))
                                {!! html_entity_decode($questao->referencia) !!}
                            @else
                                {{ $questao->referencia }}
                            @endif
                        </p>
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
                                    <input type="radio" name="resposta_{{ $questao->id }}" value="A"
                                        class="form-radio mr-2">
                                    <span class="font-semibold">A)</span> {!! $questao->opcao_a !!}
                                </label>
                            </li>
                            <li>
                                <label class="option-label block p-3 border rounded-lg cursor-pointer" data-value="B">
                                    <input type="radio" name="resposta_{{ $questao->id }}" value="B"
                                        class="form-radio mr-2">
                                    <span class="font-semibold">B)</span> {!! $questao->opcao_b !!}
                                </label>
                            </li>
                            <li>
                                <label class="option-label block p-3 border rounded-lg cursor-pointer" data-value="C">
                                    <input type="radio" name="resposta_{{ $questao->id }}" value="C"
                                        class="form-radio mr-2">
                                    <span class="font-semibold">C)</span> {!! $questao->opcao_c !!}
                                </label>
                            </li>
                            <li>
                                <label class="option-label block p-3 border rounded-lg cursor-pointer" data-value="D">
                                    <input type="radio" name="resposta_{{ $questao->id }}" value="D"
                                        class="form-radio mr-2">
                                    <span class="font-semibold">D)</span> {!! $questao->opcao_d !!}
                                </label>
                            </li>
                            <li>
                                <label class="option-label block p-3 border rounded-lg cursor-pointer" data-value="E">
                                    <input type="radio" name="resposta_{{ $questao->id }}" value="E"
                                        class="form-radio mr-2">
                                    <span class="font-semibold">E)</span> {!! $questao->opcao_e !!}
                                </label>
                            </li>
                        </ul>
                    </li>
                @endforeach
            </ul>
        </form>

        <section id="resultado-panel" class="hidden rounded-2xl border shadow-lg bg-base-100 p-6 mb-10" style="margin-left: 5%; margin-right: 22%;">
            <h2 class="text-2xl font-bold mb-4">Resultado do simulado</h2>
            <div class="grid gap-4 lg:grid-cols-2">
                <div class="rounded-xl border p-4 bg-green-50">
                    <p class="text-5xl font-extrabold text-green-700" id="resultado-acertos">0</p>
                    <p class="text-sm uppercase tracking-wide text-green-900">Acertos</p>
                </div>
                <div class="rounded-xl border p-4 bg-red-50">
                    <p class="text-5xl font-extrabold text-red-700" id="resultado-erradas">0</p>
                    <p class="text-sm uppercase tracking-wide text-red-900">Erradas</p>
                </div>
                <div class="rounded-xl border p-4 bg-slate-50">
                    <p class="text-5xl font-extrabold text-slate-700" id="resultado-nao-respondidas">0</p>
                    <p class="text-sm uppercase tracking-wide text-slate-900">Não respondidas</p>
                </div>
                <div class="rounded-xl border p-4 bg-blue-50">
                    <p class="text-5xl font-extrabold text-blue-700" id="resultado-porcentagem">0%</p>
                    <p class="text-sm uppercase tracking-wide text-blue-900">Porcentagem de respostas certas</p>
                </div>
            </div>
            <div class="mt-6 grid gap-4 lg:grid-cols-3">
                <div class="rounded-xl border p-4 bg-base-200">
                    <p class="text-2xl font-bold" id="resultado-nota">0 / 0</p>
                    <p class="text-sm text-slate-600">Nota</p>
                </div>
                <div class="rounded-xl border p-4 bg-base-200 lg:col-span-2">
                    <p class="text-2xl font-bold" id="resultado-tempo">00h 00m 00s</p>
                    <p class="text-sm text-slate-600">Tempo de simulado</p>
                </div>
            </div>
        </section>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var form = document.getElementById('simulado-form');
                var questoes = document.querySelectorAll('.questao-item');
                var modal = document.getElementById('confirmation-modal');
                var cancelBtn = document.getElementById('cancel-btn');
                var confirmBtn = document.getElementById('confirm-btn');
                var submitButton = document.querySelector('button[form="simulado-form"]');
                var sidecard = document.querySelector('.card');
                var resultPanel = document.getElementById('resultado-panel');
                var resultadoAcertos = document.getElementById('resultado-acertos');
                var resultadoErradas = document.getElementById('resultado-erradas');
                var resultadoNaoRespondidas = document.getElementById('resultado-nao-respondidas');
                var resultadoNota = document.getElementById('resultado-nota');
                var resultadoPorcentagem = document.getElementById('resultado-porcentagem');
                var resultadoTempo = document.getElementById('resultado-tempo');
                var formSubmitted = false;
                var startTime = Date.now();

                function formatDuration(duration) {
                    var totalSeconds = Math.floor(duration / 1000);
                    var hours = Math.floor(totalSeconds / 3600);
                    var minutes = Math.floor((totalSeconds % 3600) / 60);
                    var seconds = totalSeconds % 60;
                    return String(hours).padStart(2, '0') + 'h ' + String(minutes).padStart(2, '0') + 'm ' + String(seconds).padStart(2, '0') + 's';
                }

                // Event listener para detectar quando uma alternativa é selecionada
                questoes.forEach(function (questao, index) {
                    var inputs = questao.querySelectorAll('input[type="radio"]');
                    var questionNumber = index + 1;
                    var questionButton = document.getElementById('btn-questao-' + questionNumber);

                    inputs.forEach(function (input) {
                        input.addEventListener('change', function () {
                            // Adiciona a classe 'answered' quando uma alternativa é selecionada
                            if (questionButton) {
                                questionButton.classList.add('answered');
                                questionButton.classList.remove('answered-correct', 'answered-wrong');
                            }
                        });
                    });
                });

                // Mostrar modal quando clicar no botão submit
                if (submitButton) {
                    submitButton.addEventListener('click', function (event) {
                        if (!formSubmitted) {
                            event.preventDefault();
                            
                            // Contar questões não respondidas
                            var unansweredCount = 0;
                            questoes.forEach(function (questao) {
                                var selectedInput = questao.querySelector('input[type="radio"]:checked');
                                if (!selectedInput) {
                                    unansweredCount++;
                                }
                            });
                            
                            // Mostrar ou ocultar aviso de questões não respondidas
                            var warningDiv = document.getElementById('unanswered-warning');
                            var unansweredCountSpan = document.getElementById('unanswered-count');
                            
                            if (unansweredCount > 0) {
                                unansweredCountSpan.textContent = unansweredCount;
                                warningDiv.classList.remove('hidden');
                            } else {
                                warningDiv.classList.add('hidden');
                            }
                            
                            modal.classList.remove('hidden');
                            sidecard.classList.add('modal-active');
                        }
                    });
                }

                // Fechar modal ao clicar em Cancelar
                cancelBtn.addEventListener('click', function () {
                    modal.classList.add('hidden');
                    sidecard.classList.remove('modal-active');
                });

                // Confirmar e enviar formulário
                confirmBtn.addEventListener('click', function () {
                    formSubmitted = true;
                    modal.classList.add('hidden');
                    sidecard.classList.remove('modal-active');
                    form.dispatchEvent(new Event('submit'));
                    stopCountdown();
                });

                form.addEventListener('submit', function (event) {
                    if (!formSubmitted) {
                        event.preventDefault();
                    }

                    var questoes = document.querySelectorAll('.questao-item');
                    var correctCount = 0;
                    var wrongCount = 0;
                    var unansweredCount = 0;

                    questoes.forEach(function (questao, index) {
                        var correctAlternative = questao.dataset.correct;
                        var selectedInput = questao.querySelector('input[type="radio"]:checked');
                        var labels = questao.querySelectorAll('.option-label');
                        var resultText = questao.querySelector('.question-result');
                        var questionNumber = index + 1;
                        var questionButton = document.getElementById('btn-questao-' + questionNumber);

                        labels.forEach(function (label) {
                            label.classList.remove('option-correct', 'option-wrong');
                        });

                        if (!selectedInput) {
                            unansweredCount++;
                            resultText.textContent = 'Sem resposta. A resposta correta é ' + correctAlternative + '.';
                            resultText.classList.remove('correct');
                            resultText.classList.add('wrong');
                            if (questionButton) {
                                questionButton.classList.remove('answered', 'answered-correct', 'answered-wrong');
                                questionButton.classList.add('unanswered');
                            }
                            return;
                        }

                        var selectedValue = selectedInput.value;
                        var selectedLabel = selectedInput.closest('.option-label');
                        var correctLabel = questao.querySelector('.option-label[data-value="' + correctAlternative + '"]');

                        if (selectedValue === correctAlternative) {
                            correctCount++;
                            selectedLabel.classList.add('option-correct');
                            resultText.textContent = 'Correto!';
                            resultText.classList.add('correct');
                            resultText.classList.remove('wrong');

                            if (questionButton) {
                                questionButton.classList.remove('answered', 'answered-wrong', 'unanswered');
                                questionButton.classList.add('answered-correct');
                            }
                        } else {
                            if (questionButton) {
                                questionButton.classList.remove('answered', 'answered-correct', 'unanswered');
                                questionButton.classList.add('answered-wrong');
                            }
                            wrongCount++;
                            selectedLabel.classList.add('option-wrong');
                            if (correctLabel) {
                                correctLabel.classList.add('option-correct');
                            }
                            resultText.textContent = 'Errado. A resposta correta é ' + correctAlternative + '.';
                            resultText.classList.add('wrong');
                            resultText.classList.remove('correct');
                        }
                    });

                    var totalQuestions = questoes.length;
                    var score = correctCount;
                    var percentage = totalQuestions ? Math.round((correctCount / totalQuestions) * 100) : 0;
                    var elapsedTime = formatDuration(Date.now() - startTime);

                    resultadoAcertos.textContent = correctCount;
                    resultadoErradas.textContent = wrongCount;
                    resultadoNaoRespondidas.textContent = unansweredCount;
                    resultadoNota.textContent = score + ' / ' + totalQuestions;
                    resultadoPorcentagem.textContent = percentage + '%';
                    resultadoTempo.textContent = elapsedTime;
                    resultPanel.classList.remove('hidden');
                    resultPanel.scrollIntoView({ behavior: 'smooth' });

                    // Desabilita todas as alternativas após envio
                    questoes.forEach(function (questao) {
                        var inputs = questao.querySelectorAll('input[type="radio"]');
                        inputs.forEach(function (input) {
                            input.disabled = true;
                        });
                    });
                    if (submitButton) {
                        submitButton.disabled = false;
                        submitButton.type = 'button';
                        submitButton.textContent = 'Tentar Novamente';
                        submitButton.classList.remove('opacity-50');
                        submitButton.addEventListener('click', function (event) {
                            event.preventDefault();
                            isDirty = false;
                            window.location.href = window.location.href.split('#')[0] + '#questao1';
                            window.location.reload();
                        }, { once: true });
                    }
                });

                window.addEventListener('load', function () {
                    var firstQuestion = document.getElementById('questao1');
                    if (firstQuestion) {
                        firstQuestion.scrollIntoView();
                    }
                });
            })

            let isDirty = true; // Set to true when form is edited

            window.addEventListener('beforeunload', (event) => {
                if (isDirty) {
                    event.preventDefault();
                    event.returnValue = '';
                }
            });
        </script>
    </div>
    <x-sidecard />
</x-layout>