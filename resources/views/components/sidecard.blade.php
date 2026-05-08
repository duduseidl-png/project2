<div class="flex flex-col items-center gap-4">
    <style>
        .card {
            position: fixed;
            top: 12.5%;
            right: 20px;
            width: 20%;
            height: 70%;
            z-index: 900;

        }

        .card.modal-active {
            opacity: 0.5;
            filter: brightness(0.6);
            pointer-events: none;
        }

        /* Define colors based on theme */
        :root[data-theme="light"] {
            --button-answered: #d3d3d3e1;
            --button-correct: #22c55e;
            --button-wrong: #ef4444;
            --button-answered-font-color: white;
        }

        :root[data-theme="dark"] {
            --button-answered: #1e2227c7;
            --button-correct: #005c3d;
            --button-wrong: #9e2727;
            --button-answered-font-color: grey;
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
            background-color: #e2e8f0 !important;
            color: #334155 !important;
            border-color: #cbd5e1 !important;
        }
    </style>
    <div class="card bg-base-100">
        <div class="card-body">
            <h2 class="card-title">Controle do simulado</h2>
            <h5>Tempo restante:</h5>
            <x-countdown />
            <div class="join-horizontal w-60 flex-wrap">
                @for ($i = 1; $i <= $limite; $i++)
                    <button id="btn-questao-{{ $i }}" class="btn-questao join-item btn mb-1 h-7 w-3" data-questao="{{ $i }}"
                        type="button">{{ $i }}</button>
                @endfor
            </div>
            <button type="submit" form="simulado-form" class="btn btn-primary">Enviar Respostas</button>
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