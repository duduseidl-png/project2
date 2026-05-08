<x-layout :title="'Simulado - ' . ($cursoTitulo ?? 'Curso')">
    <div>
        <h1 class="text-3xl font-bold text-left mt-7 mb-5" style="margin-left: 5%">{{ $cursoTitulo ?? 'Simulado' }}</h1>

        <style>
            
        </style>
        <!-- Modal de Confirmação -->
        <div id="confirmation-modal" class="hidden fixed inset-0 flex items-center justify-center z-50">
            <div class="rounded-lg shadow-lg p-8 max-w-md mx-auto">
                <h2 class="text-2xl font-bold mb-4">Confirmar Envio</h2>
                <p class="mb-6">Tem certeza que deseja enviar suas respostas? Você não poderá alterá-las após o envio.
                </p>

                <!-- Aviso de questões não respondidas -->
                <section id="unanswered-warning" class="hidden mb-4 p-4 border border-yellow-400 rounded-lg">
                    <p class="text-sm">
                        <strong>Aviso:</strong> Você tem <span id="unanswered-count">0</span> questão(ões) não
                        respondida(s). Deseja continuar assim mesmo?
                    </p>
                </section>

                <div class="flex gap-4 justify-end">
                    <button id="cancel-btn" type="button" class="btn btn-outline">Cancelar</button>
                    <button id="confirm-btn" type="button" class="btn btn-primary">Confirmar</button>
                </div>
            </div>
        </div>

        <form id="simulado-form">
            <div class="ml-16 mr-76">
                <h2 class="text-center mb-3 text-2xl">Formação Geral</h2>
                <x-bloco-questoes :questoes="$questoesFG" :numero="0" />
                <h2 class="text-center mb-3 text-2xl">Componente Específico</h2>
                <x-bloco-questoes :questoes="$questoesCE" :numero="$limitefg" />
            </div>
        </form>

        <section id="resultado-panel" class="hidden rounded-2xl border shadow-lg bg-base-100 p-6 my-10 ml-16 mr-76">
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
                // Previne que o navegador restaure a posição anterior de scroll
                window.history.scrollRestoration = 'manual';

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
                            window.location.reload();
                        }, { once: true });
                    }
                });

                window.addEventListener('load', function () {
                    // Inicia no topo da página
                    window.scrollTo({ top: 0, behavior: 'auto' });
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
    <x-sidecard :limite="$limitefg+$limitece" />
</x-layout>