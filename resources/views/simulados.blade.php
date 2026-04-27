<x-layout :title="'Simulados'">

    <style>
        .card {
            width: 300px;
            padding: 20px;
            border: 1px solid #85858542;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Smooth animation */
            cursor: pointer;
        }

        /* The Hover Effect */
        .card:hover {
            transform: translateY(-5px);
            /* Moves the card up */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            /* Deepens the shadow */
        }
    </style>

    <div class="flex w-full flex-col lg:flex-row mt-8 justify-center items-center gap-8">
        <div class="card bg-base-100 w-auto shadow-sm grid place-items-center">
            <figure class="px-1 pt-1">
                <img src="/img/figuras/stock-exam.png" alt="Exame" class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center">
                <h2 class="card-title">Revisitar provas passadas</h2>
                <p>Acesse as provas do ENADE de anos anteriores e pratique as questões objetivas.</p>
                <div class="card-actions">

                </div>
            </div>
        </div>

        <a href="/gerar_simulado" class="card-link">
            <div class="card bg-base-100 w-auto shadow-sm grid place-items-center">
                <figure class="px-1 pt-1">
                    <img src="/img/figuras/gears.jpg" alt="Exame" class="rounded-xl" height="100"/>
                </figure>
                <div class="card-body items-center text-center">
                    <h2 class="card-title">Gerador de simulados</h2>
                    <p>Gere um simulado personalizado do seu curso a partir do nosso banco de questões.</p>
                    <div class="card-actions">
                    </div>
                </div>
            </div>
        </a>
    </div>
    </div>
    </div>
</x-layout>