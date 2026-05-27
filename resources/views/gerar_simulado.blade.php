<x-layout title="Simulados">
    <h1 style="background-color: #b39202; text-align: center; font-size: 200%; padding-top: 15px; padding-bottom: 15px">
        Gerador de Simulados</h1>
    <h6 class="text-center text-lg mt-8">Pratique em um simulado personalizado do seu curso
        com o número de questões que preferir.</h6>
    <p class="text-center text-gray-600 mb-8">As questões de componente específico são
        selecionadas aleatoriamente com
        base no conteúdo do seu curso.</p>
    <div style="text-align:center">
        <form id="simulado-form" method="POST" action="/simulados/gerar_simulado" style="display: none;">
            @csrf
            <input type="hidden" name="curso" id="form-curso">
            <input type="hidden" name="limitefg" id="form-limite-fg">
            <input type="hidden" name="limitece" id="form-limite-ce">
            <input type="hidden" name="tempo" id="form-tempo" value="14400">
        </form>

        <div class="flex flex-col items-center justify-center gap-6">
            <div class="flex flex-wrap items-start justify-center gap-10">
                <div class="pb-25 w-80">
                    <h3 class="text-left mb-2 font-semibold">Curso</h3>
                    <select id="curso-select" class="select w-full">
                        <option disabled selected>-</option>
                        <option value="administracao">Administração</option>
                        <option value="engenharia-civil">Engenharia Civil</option>
                        <option value="engenharia-de-computacao">Engenharia de Computação</option>
                        <option value="engenharia-de-controle-e-automacao">Engenharia de Controle e Automação</option>
                        <option value="engenharia-de-producao">Engenharia de Produção</option>
                        <option value="engenharia-eletrica">Engenharia Elétrica</option>
                        <option value="engenharia-mecanica">Engenharia Mecânica</option>
                        <option value="engenharia-quimica">Engenharia Química</option>
                    </select>
                </div>
                <div class="w-80">
                    <h3 class="text-left mb-2 font-semibold">Quantidade de questões</h3>
                    <h4 class="text-left mt-4 mb-2">Formação Geral</h4>
                    <div class="flex flex-wrap items-center gap-4 w-80">
                        <section id="numero-questoes-badge-fg"
                            class="badge badge-soft badge-lg font-bold min-w-12 flex-shrink-0">10
                        </section>
                        <input id="numero-questoes-input-fg" type="range" min="0" max="20" value="10" step="1"
                            class="range range-sm flex-1" />
                    </div>
                    <h4 class="text-left mt-4 mb-2">Componente Específico</h4>
                    <div class="flex flex-wrap items-center gap-4 w-80">
                        <section id="numero-questoes-badge-ce"
                            class="badge badge-soft badge-lg font-bold min-w-12 flex-shrink-0">30
                        </section>
                        <input id="numero-questoes-input-ce" type="range" min="0" max="40" value="30" step="1"
                            class="range range-sm flex-1" />
                    </div>
                </div>
                <div class="w-80">
                    <h3 class="text-left mb-2 font-semibold">Tempo limite</h3>
                    <div class="flex flex-col flex-wrap items-start gap-4 w-80">
                        <div class="flex flex-wrap items-center gap-4 w-80">
                            <input id="tempo-toggle" type="checkbox" checked="checked"
                                class="toggle checked:border-orange-500 checked:bg-orange-400 checked:text-orange-800"/>
                            <section id="tempo-status-badge"
                                class="badge badge-soft badge-lg font-bold min-w-12 flex-shrink-0">Ativado
                            </section>
                        </div>
                        <div id="tempo-container" class="grid justify-items-start items-center gap-2 w-80 border-gray-500 border-transparent">
                            <div class="flex items-center gap-2">
                                <section id="tempo-badge"
                                    class="badge badge-soft badge-lg font-bold min-w-12">4h
                                </section>
                                <input id="tempo-input" type="number" min="1" max="24" value="4" step="1"
                                    class="input input-bordered w-20"/>
                                <span class="text-sm text-gray-500">horas</span>
                            </div>
                            <button id="tempo-auto-btn" type="button" class="btn btn-sm btn-outline mt-2">Deixe que o sistema
                                decida</button>
                        </div>
                    </div>
                </div>
            </div>
            <button id="gerar-simulado" type="button" class="btn btn-soft btn-primary mt-4">
                Gerar simulado
            </button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var cursoSelect = document.getElementById('curso-select');
            var NQInputFG = document.getElementById('numero-questoes-input-fg');
            var NQBadgeFG = document.getElementById('numero-questoes-badge-fg');
            var NQInputCE = document.getElementById('numero-questoes-input-ce');
            var NQBadgeCE = document.getElementById('numero-questoes-badge-ce');
            var tempoToggle = document.getElementById('tempo-toggle');
            var tempoStatusBadge = document.getElementById('tempo-status-badge');
            var tempoInput = document.getElementById('tempo-input');
            var tempoBadge = document.getElementById('tempo-badge');
            var tempoAutoBtn = document.getElementById('tempo-auto-btn');
            var tempoContainer = document.getElementById('tempo-container');
            var button = document.getElementById('gerar-simulado');
            var form = document.getElementById('simulado-form');
            var formCurso = document.getElementById('form-curso');
            var useAutomaticTime = false;

            button.disabled = true;

            function updateColors() {
                var fgValue = parseInt(NQInputFG.value);
                var ceValue = parseInt(NQInputCE.value);

                if (fgValue == 10) {
                    NQInputFG.classList.add('range-primary');
                } else {
                    NQInputFG.classList.remove('range-primary');
                }

                if (ceValue == 30) {
                    NQInputCE.classList.add('range-primary');
                } else {
                    NQInputCE.classList.remove('range-primary');
                }
            }

            function updateBadgeFG() {
                NQBadgeFG.textContent = NQInputFG.value;
            }

            function updateBadgeCE() {
                NQBadgeCE.textContent = NQInputCE.value;
            }

            function updateBadgeTempo() {
                tempoBadge.textContent = tempoInput.value + 'h';
                if (useAutomaticTime) {
                    tempoBadge.textContent = 'Auto';
                }
            }

            function setAutomaticTime(value) {
                useAutomaticTime = value;
                tempoInput.disabled = value;
                if (value) {
                    tempoInput.classList.add('input-disabled');
                    tempoAutoBtn.classList.remove('btn-outline');
                    tempoAutoBtn.classList.add('btn-primary');
                    tempoAutoBtn.textContent = 'Tempo decidido pelo sistema';
                } else {
                    tempoInput.classList.remove('input-disabled');
                    tempoAutoBtn.classList.remove('btn-primary');
                    tempoAutoBtn.classList.add('btn-outline');
                    tempoAutoBtn.textContent = 'Deixe que o sistema decida';
                }
                updateBadgeTempo();
            }

            function checkSelect() {
                button.disabled = !cursoSelect.value;
            }

            cursoSelect.addEventListener('change', checkSelect);
            NQInputFG.addEventListener('input', function () {
                updateBadgeFG();
                updateColors();
                if (useAutomaticTime) {
                    setAutomaticTime(false);
                }
            });
            NQInputCE.addEventListener('input', function () {
                updateBadgeCE();
                updateColors();
            });
            tempoInput.addEventListener('input', function () {
                if (useAutomaticTime) {
                    setAutomaticTime(false);
                }
                updateBadgeTempo();
            });
            tempoAutoBtn.addEventListener('click', function () {
                setAutomaticTime(!useAutomaticTime);
            });
            tempoToggle.addEventListener('change', function () {
                if (tempoToggle.checked) {
                    tempoStatusBadge.textContent = 'Ativado';
                    tempoStatusBadge.classList.add('font-bold');
                    tempoContainer.classList.remove('hidden');
                    tempoContainer.classList.remove('opacity-40');
                } else {
                    tempoStatusBadge.textContent = 'Desativado';
                    tempoStatusBadge.classList.remove('font-bold');
                    tempoContainer.classList.add('hidden');
                    tempoContainer.classList.remove('opacity-40');
                }
            });

            updateColors(); // Aplica estilo inicial
            updateBadgeTempo();
            if (!tempoToggle.checked) {
                tempoContainer.classList.add('hidden');
            }

            button.addEventListener('click', function () {
                if (!cursoSelect.value) {
                    return;
                }
                formCurso.value = cursoSelect.value;
                document.getElementById('form-limite-fg').value = NQInputFG.value;
                document.getElementById('form-limite-ce').value = NQInputCE.value;
                if (useAutomaticTime) {
                    document.getElementById('form-tempo').value = '';
                } else {
                    var tempoValue = parseInt(tempoInput.value, 10);
                    if (isNaN(tempoValue) || tempoValue < 1) {
                        tempoValue = 4;
                        tempoInput.value = tempoValue;
                        updateBadgeTempo();
                    }
                    document.getElementById('form-tempo').value = tempoValue * 3600;
                }
                form.submit();
            });
        });
    </script>
</x-layout>