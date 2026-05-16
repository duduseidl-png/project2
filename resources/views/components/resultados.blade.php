<style>
    :root[data-theme="light"] {
        --green-bg: #cbffda;
        --red-bg: #ffcfcf;
        --slate-bg: #cbd7e6;
        --blue-bg: #d8deff;
        --base-bg: #fdffe8;
        --green-text: #1b4630;
        --red-text: #8f2c2c;
        --slate-text: #222a35;
        --blue-text: #3f4e6a;
        --base-text: #1d1c19;
    }
    :root[data-theme="dark"] {
        --green-bg: #1b4630;
        --red-bg: #8f2c2c;
        --slate-bg: #222a35;
        --blue-bg: #3f4e6a;
        --base-bg: #1d222b;
        --green-text: #cbffda;
        --red-text: #ffcfcf;
        --slate-text: #cbd7e6;
        --blue-text: #d8deff;
        --base-text: #fafddb;
    }
</style>

<section id="resultado-panel" class="hidden rounded-2xl border shadow-lg bg-base-100 p-6 my-10 ml-16 mr-76">
    <h2 class="text-2xl font-bold mb-4">Resultado do simulado</h2>
    <div class="grid gap-4 lg:grid-cols-2">
        <div class="rounded-xl border p-4" style="background-color: var(--green-bg)">
            <p class="text-5xl font-extrabold" style="color: var(--green-text)" id="resultado-acertos">0</p>
            <p class="text-sm uppercase tracking-wide" style="color: var(--green-text)">Acertos</p>
        </div>
        <div class="rounded-xl border p-4" style="background-color: var(--red-bg)">
            <p class="text-5xl font-extrabold" style="color: var(--red-text)" id="resultado-erradas">0</p>
            <p class="text-sm uppercase tracking-wide" style="color: var(--red-text)">Erradas</p>
        </div>
        <div class="rounded-xl border p-4" style="background-color: var(--slate-bg)">
            <p class="text-5xl font-extrabold" style="color: var(--slate-text)" id="resultado-nao-respondidas">0</p>
            <p class="text-sm uppercase tracking-wide" style="color: var(--slate-text)">Não respondidas</p>
        </div>
        <div class="rounded-xl border p-4" style="background-color: var(--blue-bg)">
            <p class="text-5xl font-extrabold" style="color: var(--blue-text)" id="resultado-porcentagem">0%</p>
            <p class="text-sm uppercase tracking-wide" style="color: var(--blue-text)">Porcentagem de respostas certas</p>
        </div>
    </div>
    <div class="mt-6 grid gap-4 lg:grid-cols-3">
        <div class="rounded-xl border p-4" style="background-color: var(--base-bg)">
            <p class="text-2xl font-bold" style="color: var(--base-text)" id="resultado-nota">0 / 0</p>
            <p class="text-sm" style="color: var(--base-text)">Nota</p>
        </div>
        <div class="rounded-xl border p-4 lg:col-span-2" style="background-color: var(--base-bg)">
            <p class="text-2xl font-bold" style="color: var(--base-text)" id="resultado-tempo">00h 00m 00s</p>
            <p class="text-sm" style="color: var(--base-text)">Tempo de simulado</p>
        </div>
    </div>
</section>