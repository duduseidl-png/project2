@props(['cursoTitulo', 'numeroQuestoesFG', 'numeroQuestoesCE'])

<div id="tela-informativa-overlay" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-[1100] backdrop-blur-sm">
    <div class="bg-standard rounded-lg shadow-2xl p-8 max-w-2xl w-full mx-4 transform duration-300">
        <div class="mb-4">
            <h1 class="text-3xl font-bold mb-4">Simulado de {{ $cursoTitulo }}</h1>
        </div>

        <div class="bg-blue border-l-4 border-blue-500 p-6 mb-8 rounded">
            <h2 class="text-xl font-semibold mb-4">Informações Importantes:</h2>
            <ul class="space-y-3">
                <li class="flex items-start">
                    <span class="inline-block w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                    <span>Você tem tempo limitado para completar o simulado.</span>
                </li>
                <li class="flex items-start">
                    <span class="inline-block w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                    <span><strong>{{ $numeroQuestoesFG }}</strong> questões de Formação Geral.</span>
                </li>
                <li class="flex items-start">
                    <span class="inline-block w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                    <span><strong>{{ $numeroQuestoesCE }}</strong> questões de Componente Específico.</span>
                </li>
                <li class="flex items-start">
                    <span class="inline-block w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                    <span>Você receberá os resultados e o gabarito ao finalizar.</span>
                </li>
            </ul>
        </div>

        {{-- <div class="bg-amber-50 border-l-4 border-amber-500 p-6 mb-8 rounded">
            <h2 class="text-lg font-semibold text-gray-800 mb-3">Dicas:</h2>
            <p class="text-gray-700">
                Leia cada questão com atenção e escolha a resposta mais adequada. 
                Você pode revisar suas respostas antes de finalizar o simulado.
            </p>
        </div> --}}

        <div class="flex flex-col gap-4 mt-10">
            <button 
                id="btn-iniciar-simulado" 
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-200"
            >
                Iniciar Simulado
            </button>
            <button 
                id="btn-cancelar-simulado" 
                class="w-full bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-3 px-6 rounded-lg transition-colors duration-200"
            >
                Voltar
            </button>
        </div>
    </div>
</div>