<x-layout :title="'Simulado - ' . ($cursoTitulo ?? 'Curso')">
    @vite(['resources/css/simulado.css', 'resources/js/simulado.js'])
    <x-tela-informativa :curso-titulo="$cursoTitulo ?? 'Curso'" :numeroQuestoesFG="$questoesFG->count()"
        :numeroQuestoesCE="$questoesCE->count()" :ano-simulado="$ano ?? null" />
    <div>
        <h1 class="text-3xl font-bold text-left mt-7 mb-5" style="margin-left: 5%">{{ $cursoTitulo ?? 'Simulado' }}</h1>
        @if (isset($simulado))
            <div class="flex items-center gap-3 mb-5" style="margin-left: 5%">
                <span class="text-sm text-gray-600">Seed:</span>
                <code class="text-xs bg-gray-100 px-3 py-1 rounded" id="seed-display">{{ $simulado->seed }}</code>
                <button type="button" id="copy-seed-btn" class="btn btn-xs btn-outline" onclick="copiarSeed()">
                    Copiar
                </button>
            </div>
        @endif
        <form id="simulado-form">
            <div class="ml-16 mr-76">
                @if (!$questoesFG->isEmpty())
                    <h2 class="text-center mb-3 text-2xl">Formação Geral</h2>
                @endif
                <x-bloco-questoes :questoes="$questoesFG" :numero="0" />
                @if (!$questoesCE->isEmpty())
                    <h2 class="text-center mb-3 text-2xl">Componente Específico</h2>
                @endif
                <x-bloco-questoes :questoes="$questoesCE" :numero="$questoesFG->count()" />
            </div>
        </form>
    </div>
    <x-modal />
    <x-sidecard :limite="$totalQuestions ?? ($questoesFG->count() + $questoesCE->count())" :timeLimit="$timeLimit ?? null" />
    <x-resultados />

    <script>
        function copiarSeed() {
            
        }
    </script>
</x-layout>