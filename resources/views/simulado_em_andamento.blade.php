<x-layout :title="'Simulado - ' . ($cursoTitulo ?? 'Curso')">
    @vite(['resources/css/simulado.css', 'resources/js/simulado.js'])
    <x-tela-informativa :curso-titulo="$cursoTitulo ?? 'Curso'"
        :numeroQuestoesFG="$questoesFG->count()" :numeroQuestoesCE="$questoesCE->count()" />
    <div>
        <h1 class="text-3xl font-bold text-left mt-7 mb-5" style="margin-left: 5%">{{ $cursoTitulo ?? 'Simulado' }}</h1>
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
    <x-sidecard :limite="$totalQuestions ?? ($questoesFG->count() + $questoesCE->count())" />
    <x-resultados />
</x-layout>