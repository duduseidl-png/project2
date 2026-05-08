//
// Event listeners para os botões de questão - scroll sem alterar URL
        document.addEventListener('DOMContentLoaded', function() {
            const questaoButtons = document.querySelectorAll('.btn-questao');
            questaoButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const questaoNumber = this.getAttribute('data-questao');
                    const questaoElement = document.getElementById('questao' + questaoNumber);
                    if (questaoElement) {
                        questaoElement.scrollIntoView({ behavior: 'smooth' });
                    }
                });
            });
        });