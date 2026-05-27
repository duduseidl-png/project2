<div id="confirmation-modal" class="hidden fixed inset-0 flex items-center justify-center z-[1100]">
    <div class="rounded-lg shadow-lg p-8 max-w-md mx-auto">
        <h2 class="text-2xl font-bold mb-4">Confirmar Envio</h2>
        <p class="mb-6">Tem certeza que deseja enviar suas respostas? Você não poderá alterá-las após o envio.</p>

        <section id="unanswered-warning" class="hidden mb-4 p-4 border border-yellow-400 rounded-lg">
            <p class="text-sm">
                <strong>Aviso:</strong> Você tem <span id="unanswered-count">0</span> questão(ões) não
                respondida(s). Deseja continuar assim mesmo?
            </p>
        </section>

        <div class="flex gap-4 justify-end">
            <button id="cancel-btn" type="button" class="btn btn-outline">Cancelar</button>
            <button id="confirm-btn" type="button" class="btn btn-primary">Confirmar</button>
        </div>
    </div>
</div>