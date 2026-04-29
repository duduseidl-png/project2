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
    </style>
    <div class="card bg-base-100">
        <div class="card-body">
            <h2 class="card-title">Controle do simulado</h2>
            <h5>Tempo restante:</h5>
            <x-countdown />
            <div class="join-horizontal w-60 flex-wrap">
                <button id="btn-questao-1" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao1'">1</button>
                <button id="btn-questao-2" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao2'">2</button>
                <button id="btn-questao-3" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao3'">3</button>
                <button id="btn-questao-4" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao4'">4</button>
                <button id="btn-questao-5" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao5'">5</button>
                <button id="btn-questao-6" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao6'">6</button>
                <button id="btn-questao-7" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao7'">7</button>
                <button id="btn-questao-8" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao8'">8</button>
                <button id="btn-questao-9" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao9'">9</button>
                <button id="btn-questao-10" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao10'">10</button>
                <button id="btn-questao-11" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao11'">11</button>
                <button id="btn-questao-12" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao12'">12</button>
                <button id="btn-questao-13" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao13'">13</button>
                <button id="btn-questao-14" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao14'">14</button>
                <button id="btn-questao-15" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao15'">15</button>
                <button id="btn-questao-16" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao16'">16</button>
                <button id="btn-questao-17" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao17'">17</button>
                <button id="btn-questao-18" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao18'">18</button>
                <button id="btn-questao-19" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao19'">19</button>
                <button id="btn-questao-20" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao20'">20</button>
                <button id="btn-questao-21" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao21'">21</button>
                <button id="btn-questao-22" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao22'">22</button>
                <button id="btn-questao-23" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao23'">23</button>
                <button id="btn-questao-24" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao24'">24</button>
                <button id="btn-questao-25" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao25'">25</button>
                <button id="btn-questao-26" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao26'">26</button>
                <button id="btn-questao-27" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao27'">27</button>
                <button id="btn-questao-28" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao28'">28</button>
                <button id="btn-questao-29" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao29'">29</button>
                <button id="btn-questao-30" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao30'">30</button>
                <button id="btn-questao-31" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao31'">31</button>
                <button id="btn-questao-32" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao32'">32</button>
                <button id="btn-questao-33" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao33'">33</button>
                <button id="btn-questao-34" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao34'">34</button>
                <button id="btn-questao-35" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao35'">35</button>
                <button id="btn-questao-36" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao36'">36</button>
                <button id="btn-questao-37" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao37'">37</button>
                <button id="btn-questao-38" class="btn-questao join-item btn mb-1 h-7 w-3"
                    onclick="location.href='#questao38'">38</button>

            </div>
            <button type="submit" form="simulado-form" class="btn btn-primary">Enviar Respostas</button>
        </div>
    </div>
</div>
</div>