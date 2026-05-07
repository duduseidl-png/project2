<x-layout title="Gerar Simulado">
    <h1 style="background-color: #b39202; text-align: center; font-size: 200%; padding-top: 15px; padding-bottom: 15px">
        Gerador de Simulados</h1>
    <h6 class="text-center text-lg mt-8">Pratique em um simulado personalizado do seu curso
        com o número de questões que preferir.</h6>
    <p class="text-center text-gray-600 mb-8">As questões de componente específico são
        selecionadas aleatoriamente com
        base no conteúdo do seu curso.</p>

    <div class="flex flex-col items-center justify-center gap-6">
        <div class="flex flex-row items-center justify-center gap-10">
            <div class="pb-25 w-80">
                <h3 class="text-left mb-2 font-semibold">Curso</h3>
                <select id="curso-select" class="select w-full">
                    <option disabled selected>-</option>
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
                <h3 class="text-left mb-2 font-semibold">Número de questões</h3>
                <h4 class="mt-4 mb-2">Formação Geral</h4>
                <div class="flex flex-wrap items-center gap-4 w-80">
                    <section id="numero-questoes-badge-fg" class="badge badge-soft badge-lg font-bold min-w-12 flex-shrink-0">9
                    </section>
                    <input id="numero-questoes-input-fg" type="range" min="4" max="20" value="9" step="1"
                        class="range range-sm flex-1" />
                </div>
                <h4 class="mt-4 mb-2">Componente Específico</h4>
                <div class="flex flex-wrap items-center gap-4 w-80">
                    <section id="numero-questoes-badge-ce" class="badge badge-soft badge-lg font-bold min-w-12 flex-shrink-0">29
                    </section>
                    <input id="numero-questoes-input-ce" type="range" min="4" max="32" value="29" step="1"
                        class="range range-sm flex-1" />
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
            var button = document.getElementById('gerar-simulado');

            button.disabled = true;

            function updateColors() {
                var fgValue = parseInt(NQInputFG.value);
                var ceValue = parseInt(NQInputCE.value);

                if (fgValue == 9) {
                    NQInputFG.classList.add('range-primary');
                } else {
                    NQInputFG.classList.remove('range-primary');
                }

                if (ceValue == 29) {
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

            function checkSelect() {
                button.disabled = !cursoSelect.value;
            }

            cursoSelect.addEventListener('change', checkSelect);
            NQInputFG.addEventListener('input', function() {
                updateBadgeFG();
                updateColors();
            });
            NQInputCE.addEventListener('input', function() {
                updateBadgeCE();
                updateColors();
            });

            updateColors(); // Aplica estilo inicial

            button.addEventListener('click', function () {
                window.location.href = '/simulado/' + cursoSelect.value + '/' + NQInputFG.value + '/' + NQInputCE.value;
            });
        });
    </script>
</x-layout>