<x-layout title="Simulados">
    <h1 style="text-align:center;font-size:200%;padding: 30px">Gerador de Simulados</h1>
    <div style="text-align:center;margin: 20px;">
        <select id="curso-select" class="select">
            <option disabled selected>Selecione o curso</option>
            <option value="engenharia-civil">Engenharia Civil</option>
            <option value="engenharia-de-computacao">Engenharia de Computação</option>
            <option value="engenharia-de-controle-e-automacao">Engenharia de Controle e Automação</option>
            <option value="engenharia-de-producao">Engenharia de Produção</option>
            <option value="engenharia-eletrica">Engenharia Elétrica</option>
            <option value="engenharia-mecanica">Engenharia Mecânica</option>
            <option value="engenharia-quimica">Engenharia Química</option>
        </select>
        <div>
            <button id="gerar-simulado" type="button" class="btn btn-soft btn-primary" style="margin-top: 30px;">
                Gerar simulado
            </button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var select = document.getElementById('curso-select');
            var button = document.getElementById('gerar-simulado');

            button.disabled = true;

            select.addEventListener('change', function () {
                button.disabled = !select.value;
            });

            button.addEventListener('click', function () {
                if (!select.value) {
                    return;
                }
                window.location.href = '/simulado/' + select.value;
            });
        });
    </script>
</x-layout>