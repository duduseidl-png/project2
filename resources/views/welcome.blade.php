<x-layout title="Home">
    <style>
        .button-gradient {
            background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .button-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
    </style>
    <h1 class="text-3xl text-left mt-7 mb-5" style="margin-left: 5%">
        Bem-vindo(a) ao Simulador do <a href="https://www.feevale.br/institucional/avaliacao-institucional/enade"
            target="_blank" title="O que é o ENADE?"><ins><strong>ENADE</strong></ins></a> da Feevale!
    </h1>
    <div class="flex flex-col items-center justify-center gap-6">
        <p class="background-gradient w-3/4 p-6 rounded-lg text-center text-lg mb-8">
            Prepare-se para o ENADE com nosso simulador personalizado! Pratique questões objetivas de anos anteriores
            e teste seus conhecimentos em um ambiente que simula a experiência real do exame. Acesse agora e
            comece a se preparar para o sucesso no ENADE!
        </p>
        <section class="bg-gray-200 dark:bg-gray-800 w-full p-3 text-center">
            <button class="button-gradient">
                <a href="/simulados">
                    COMEÇAR
                </a>
            </button>
        </section>
    </div>
</x-layout>