<div id="sidecard" class=" flex flex-col items-center gap-4">
    <style>
        @media (max-width: 1024px) {
            .card {
                position: fixed;
                top: 12.5%;
                left: 10%;
                right: 10%;
                z-index: 900;
                background-color: var(--bg-blue);
                border-style: solid;
                border-color: var(--bg-bluer);
                border-width: 2px;
                transition: opacity 0.3s ease;
                animation: slideIn 0.1s ease-out;
            }
        }

        @media (min-width: 1025px) {
            .card {
                position: fixed;
                top: 12.5%;
                align-self: flex-end;
                width: 18rem;
                height: 70%;
                z-index: 900;
            }
        }

        .card.modal-active {
            opacity: 0.5;
            filter: brightness(0.6) blur(3px);
            -webkit-filter: brightness(0.6) blur(3px);
            pointer-events: none;
        }

        .btn-questao.answered {
            background-color: var(--button-answered) !important;
            color: var(--button-answered-font-color) !important;
            border-color: rgba(177, 177, 177, 0.145) !important;
        }

        .btn-questao.answered-correct {
            background-color: var(--button-correct) !important;
            color: white !important;
            border-color: var(--button-correct) !important;
        }

        .btn-questao.answered-wrong {
            background-color: var(--button-wrong) !important;
            color: white !important;
            border-color: var(--button-wrong) !important;
        }

        .btn-questao.unanswered {
            background-color: var(--button-unanswered) !important;
            color: var(--button-unanswered-font-color) !important;
            border-color: #cbd5e1 !important;
        }
    </style>

    <div class="card bg-base-100 modal-active">
        <div class="card-body flex flex-row flex-wrap items-start gap-2">
            <h2 class="card-title flex-1 text-xl md:text-3xl lg:text-xl">Controle do Simulado</h2>
            <div>
                <h5>Tempo restante:</h5>
                <x-countdown :timePerQuestion="$timeLimit" />
            </div>
            <div class="join-horizontal w-auto lg:w-60">
                @for ($i = 1; $i <= $limite; $i++)
                    <button id="btn-questao-{{ $i }}"
                        class="btn-questao join-item btn mb-1 h-10 w-10 md:h-12 md:w-14 lg:h-7 lg:w-3"
                        data-questao="{{ $i }}" type="button">{{ $i }}</button>
                @endfor
            </div>
            <button type="submit" form="simulado-form" class="btn confirm-btn text-white">Enviar Respostas</button>
        </div>
    </div>

    <script>
        // Event listeners para os botões de questão - scroll sem alterar URL
        document.addEventListener('DOMContentLoaded', function () {
            const questaoButtons = document.querySelectorAll('.btn-questao');
            questaoButtons.forEach(button => {
                button.addEventListener('click', function (e) {
                    e.preventDefault();
                    const questaoNumber = this.getAttribute('data-questao');
                    const questaoElement = document.getElementById('questao' + questaoNumber);
                    if (questaoElement) {
                        questaoElement.scrollIntoView({ behavior: 'smooth' });
                    }
                });
            });
        });
    </script>
</div>