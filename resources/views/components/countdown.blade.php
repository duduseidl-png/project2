@props(['timePerQuestion'])
<div>
    <div id="timer" style="font-size: xx-large">
        <span id="hours" >00</span>h : 
        <span id="minutes">00</span>m : 
        <span id="seconds">00</span>s
    </div>

    <script>
        // Variáveis globais para o countdown
        window.countdownStartTime = null;
        window.timerInterval = null;
        window.timeLimit = {{ $timePerQuestion ?? 'null' }}; // Tempo limite em segundos (14400 = 4 horas, null = ilimitado)

        // Função para atualizar o contador a cada segundo (tempo regressivo)
        const updateTimer = () => {
            if (!window.countdownStartTime) return;
            
            const now = new Date().getTime();
            const elapsed = now - window.countdownStartTime;
            const elapsedSeconds = Math.floor(elapsed / 1000);
            
            let remainingSeconds;
            if (window.timeLimit !== null) {
                // Countdown regressivo
                remainingSeconds = Math.max(0, window.timeLimit - elapsedSeconds);
            } else {
                // Cronômetro crescente (sem limite)
                remainingSeconds = elapsedSeconds;
            }

            const hours = Math.floor(remainingSeconds / 3600);
            const minutes = Math.floor((remainingSeconds % 3600) / 60);
            const seconds = remainingSeconds % 60;

            // Exibe no HTML com formatação 00
            document.getElementById("hours").innerText = String(hours).padStart(2, '0');
            document.getElementById("minutes").innerText = String(minutes).padStart(2, '0');
            document.getElementById("seconds").innerText = String(seconds).padStart(2, '0');

            // Se o tempo acabou
            if (window.timeLimit !== null && remainingSeconds <= 0) {
                window.stopCountdown();
                document.getElementById("timer").innerHTML = "<span style='color: red;'>TEMPO ESGOTADO</span>";
            }
        };

        // Função para iniciar o countdown
        window.startCountdown = () => {
            if (!window.countdownStartTime) {
                window.countdownStartTime = new Date().getTime();
                if (!window.timerInterval) {
                    window.timerInterval = setInterval(updateTimer, 1000);
                    updateTimer(); // Executa imediatamente
                }
            }
        };
        
        // Função para parar o countdown
        window.stopCountdown = () => {
            if (window.timerInterval) {
                clearInterval(window.timerInterval);
                window.timerInterval = null;
            }
        };
    </script>
</div>