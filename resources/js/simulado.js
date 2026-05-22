document.addEventListener('DOMContentLoaded', function () {
    // Previne que o navegador restaure a posição anterior de scroll
    window.history.scrollRestoration = 'manual';

    var form = document.getElementById('simulado-form');
    var telaInformativa = document.getElementById('tela-informativa-overlay');
    var startButton = document.getElementById('btn-iniciar-simulado');
    var cancelButton = document.getElementById('btn-cancelar-simulado');
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

    // Tela informativa -> Iniciar simulado ou cancelar
    startButton.addEventListener('click', function () {
        telaInformativa.classList.add('hidden');
        sidecard.classList.remove('modal-active');

        // Inicia o countdown se a função estiver disponível
        if (typeof window.startCountdown === 'function') {
            window.startCountdown();
        }
    });
    cancelButton.addEventListener('click', function () {
        window.history.back();
    });

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

        // Para o countdown se a função estiver disponível
        if (typeof window.stopCountdown === 'function') {
            window.stopCountdown();
        }
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

    window.addEventListener('load', function () {
        // Scroll para topo apenas na primeira carga, não em reloads
        if (!sessionStorage.getItem('pageLoaded')) {
            window.scrollTo({ top: 0, behavior: 'auto' });
            sessionStorage.setItem('pageLoaded', 'true');
        }

    });
});

let isDirty = true; // Set to true when form is edited

window.addEventListener('beforeunload', (event) => {
    if (isDirty) {
        event.preventDefault();
        event.returnValue = '';
    }
});