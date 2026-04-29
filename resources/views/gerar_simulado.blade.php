<x-layout title="Simulados">
    <h1 style="background-color: #b39202; text-align: center; font-size: 200%; padding-top: 15px; padding-bottom: 15px">
        Gerador de Simulados</h1>
    <h6 style="text-align:center; font-size: 120%; margin-top: 20px;">Pratique em um simulado personalizado do seu curso
        com o número de questões que preferir.</h6>
    <p style="text-align:center; color: #9b9b9bc9; margin-bottom: 25px;">As questões são selecionadas aleatoriamente com
        base no conteúdo do seu curso.</p>
    <div style="text-align:center">
        <div class="mb-5">
            <h3 style="text-align: left; margin-left: 39%; margin-bottom: 7px">Curso</h3>
            <select id="curso-select" class="select">
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
        <div class="mb-5">
            <h3 style="text-align: left; margin-left: 39%; margin-bottom: 7px">Número de questões</h3>
            <select id="numero-questoes-select" class="select">
                <option disabled selected>-</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="38">38</option>
            </select>
        </div>
        <div>
            <button id="gerar-simulado" type="button" class="btn btn-soft btn-primary" style="margin-top: 20px;">
                Gerar simulado
            </button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var cursoSelect = document.getElementById('curso-select');
            var NQSelect = document.getElementById('numero-questoes-select');
            var button = document.getElementById('gerar-simulado');

            button.disabled = true;

            // Função para verificar se ambos os selects têm valor
            function checkIfBothSelected() {
                if (cursoSelect.value !== "" && NQSelect.value !== "") {
                    button.disabled = false;
                } else {
                    button.disabled = true;
                }
            }

            cursoSelect.addEventListener('change', checkIfBothSelected);
            NQSelect.addEventListener('change', checkIfBothSelected);

            button.addEventListener('click', function () {
                if (!cursoSelect.value || !NQSelect.value) {
                    return;
                }
                window.location.href = '/simulado/' + cursoSelect.value + '/' + NQSelect.value;
            });
        });
    </script>
</x-layout>