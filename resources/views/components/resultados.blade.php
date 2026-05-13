<section id="resultado-panel" class="hidden rounded-2xl border shadow-lg bg-base-100 p-6 my-10 ml-16 mr-76">
    <h2 class="text-2xl font-bold mb-4">Resultado do simulado</h2>
    <div class="grid gap-4 lg:grid-cols-2">
        <div class="rounded-xl border p-4 bg-green-50">
            <p class="text-5xl font-extrabold text-green-700" id="resultado-acertos">0</p>
            <p class="text-sm uppercase tracking-wide text-green-900">Acertos</p>
        </div>
        <div class="rounded-xl border p-4 bg-red-50">
            <p class="text-5xl font-extrabold text-red-700" id="resultado-erradas">0</p>
            <p class="text-sm uppercase tracking-wide text-red-900">Erradas</p>
        </div>
        <div class="rounded-xl border p-4 bg-slate-50">
            <p class="text-5xl font-extrabold text-slate-700" id="resultado-nao-respondidas">0</p>
            <p class="text-sm uppercase tracking-wide text-slate-900">Não respondidas</p>
        </div>
        <div class="rounded-xl border p-4 bg-blue-50">
            <p class="text-5xl font-extrabold text-blue-700" id="resultado-porcentagem">0%</p>
            <p class="text-sm uppercase tracking-wide text-blue-900">Porcentagem de respostas certas</p>
        </div>
    </div>
    <div class="mt-6 grid gap-4 lg:grid-cols-3">
        <div class="rounded-xl border p-4 bg-base-200">
            <p class="text-2xl font-bold" id="resultado-nota">0 / 0</p>
            <p class="text-sm text-slate-600">Nota</p>
        </div>
        <div class="rounded-xl border p-4 bg-base-200 lg:col-span-2">
            <p class="text-2xl font-bold" id="resultado-tempo">00h 00m 00s</p>
            <p class="text-sm text-slate-600">Tempo de simulado</p>
        </div>
    </div>
</section>