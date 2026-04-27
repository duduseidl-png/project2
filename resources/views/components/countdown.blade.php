<div>
    <div id="timer" style="font-size: xx-large">
        <span id="hours" >00</span>h : 
        <span id="minutes">00</span>m : 
        <span id="seconds">00</span>s
    </div>

    <script>
        // Recebe a data do Laravel e converte para milissegundos
        const deadline = new Date("{{ $deadline }}").getTime();

        // Função para atualizar o contador a cada segundo
        const updateTimer = () => {
            const now = new Date().getTime();
            const distance = deadline - now;

            // Calcula tempo restante
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Exibe no HTML com formatação 00
            document.getElementById("hours").innerText = String(hours).padStart(2, '0');
            document.getElementById("hours").classList.toggle('style="--value:' + hours + ';"');
            document.getElementById("minutes").innerText = String(minutes).padStart(2, '0');
            document.getElementById("minutes").classList.toggle('style="--value:' + minutes + ';"');
            document.getElementById("seconds").innerText = String(seconds).padStart(2, '0');
            document.getElementById("seconds").classList.toggle('style="--value:' + seconds + ';"');

            // Para o timer quando expira
            if (distance < 0) {
                stopCountdown();
                document.getElementById("timer").innerHTML = "EXPIRADO";
            }
        };

        // Armazena o intervalo globalmente para poder parar
        window.timerInterval = setInterval(updateTimer, 1000);
        
        // Função para parar o countdown
        window.stopCountdown = () => {
            if (window.timerInterval) {
                clearInterval(window.timerInterval);
                window.timerInterval = null;
            }
        };

        updateTimer(); // Executa imediatamente
    </script>
</div>