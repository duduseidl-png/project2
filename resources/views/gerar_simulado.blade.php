<x-layout title="Simulados">
    <h1 style="background-color: #b39202; text-align: center; font-size: 200%; padding-top: 15px; padding-bottom: 15px">
        Gerador de Simulados</h1>
    <h6 style="text-align:center; font-size: 120%; margin-top: 20px;">Pratique em um simulado personalizado do seu curso
        com o número de questões que preferir.</h6>
    <p class="text-center text-gray-600 mb-8">As questões de componente específico são
        selecionadas aleatoriamente com
        base no conteúdo do seu curso.</p>
    <div class="flex flex-col items-center justify-center gap-6">
        <div class="w-80">
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
            <div class="flex flex-wrap items-center gap-4 w-80">
                <section id="numero-questoes-badge" class="badge badge-soft badge-lg font-bold flex-shrink-0">38
                </section>
                <input id="numero-questoes-input" type="range" min="4" max="38" value="38" step="2"
                    class="range range-sm flex-1" />
            </div>
        </div>


        <button id="gerar-simulado" type="button" class="btn btn-soft btn-primary mt-4">
            Gerar simulado
        </button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var cursoSelect = document.getElementById('curso-select');
            var NQInput = document.getElementById('numero-questoes-input');
            var NQBadge = document.getElementById('numero-questoes-badge');
            var button = document.getElementById('gerar-simulado');

            button.disabled = true;

            function updateBadge() {
                NQBadge.textContent = NQInput.value;
            }

            function checkSelect() {
                button.disabled = !cursoSelect.value;
            }

            cursoSelect.addEventListener('change', checkSelect);
            NQInput.addEventListener('mousemove', updateBadge);

            button.addEventListener('click', function () {
                window.location.href = '/simulado/' + cursoSelect.value + '/' + NQInput.value;
            });
        });
    </script>
</x-layout>