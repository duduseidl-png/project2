<div class="flex flex-col items-center gap-4">
    <style>
        .card {
            position: fixed;
            top: 15%;
            right: 20px;
            width: 20%;
            height: 70%;
            z-index: 1000;
        }
    </style>
    <div class="card card-border bg-base-100">
        <div class="card-body">
            <h2 class="card-title">Controle do simulado</h2>
            <h5>Tempo restante:</h5>
            <x-countdown />
            <div class="join-vertical w-full">
                <input class="join-item btn" type="radio" name="Q1" aria-label="1" />
                <input class="join-item btn" type="radio" name="Q2" aria-label="2" />
                <input class="join-item btn" type="radio" name="Q3" aria-label="3" />
                <input class="join-item btn" type="radio" name="Q4" aria-label="4" />
                <input class="join-item btn" type="radio" name="Q5" aria-label="5" />
                <input class="join-item btn" type="radio" name="Q6" aria-label="6" />
                <input class="join-item btn" type="radio" name="Q7" aria-label="7" />
                <input class="join-item btn" type="radio" name="Q8" aria-label="8" />
                <input class="join-item btn" type="radio" name="Q9" aria-label="9" />
                <input class="join-item btn" type="radio" name="Q10" aria-label="10" />
            </div>
            <div type="submit" class="card-actions justify-end pt-4">
                <button class="btn btn-primary">Enviar Respostas</button>
            </div>
        </div>
    </div>
</div>