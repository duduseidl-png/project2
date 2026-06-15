<x-layout :title="'Simulado - ' . ($cursoTitulo ?? 'Curso')">
    @vite(['resources/css/simulado.css', 'resources/js/simulado.js'])
    <x-tela-informativa :curso-titulo="$cursoTitulo ?? 'Curso'" :numeroQuestoesFG="$questoesFG->count()"
        :numeroQuestoesCE="$questoesCE->count()" :ano-simulado="$ano ?? null" />
    <div>
        <h1 class="text-3xl font-bold text-left mt-7 mb-5" style="margin-left: 5%">{{ $cursoTitulo ?? 'Simulado' }}</h1>
        <h2 class="text-xl text-left tracking-wider -mt-4" style="margin-left: 5%">{{ $ano ?? null }}</h2>
        @if (isset($simulado))
            <div class="flex items-center gap-3 mb-5" style="margin-left: 5%">
                <div class="tooltip tooltip-right tooltip-info -mr-2">
                    <div class="tooltip-content rounded-xl outline -outline-offset-5 outline-dotted" >
                        <p class="text-sm text-justify font-medium px-3 py-2">O <i>seed</i> é um código único que garante a reprodução exata do
                            simulado, permitindo que você compartilhe ou refaça o teste com as mesmas questões e ordem.</p>
                    </div>
                    <img class="h-3" src="/img/figuras/info.png" alt="info">
                </div>
                <span class="text-sm">Seed:</span>
                <code class="text-xs bg-blue px-3 py-1 rounded" id="seed-display">{{ $simulado->seed }}</code>
                <button type="button" id="copy-seed-btn" class="btn btn-xs btn-outline" onclick="copiarSeed()">
                    Copiar
                </button>
            </div>
        @endif
        <form id="simulado-form">
            <div class="ml-16 mr-96 pr-20">
                <div class="divider"></div>
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
</x-layout>