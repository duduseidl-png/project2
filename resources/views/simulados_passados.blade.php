<x-layout title="Simulados passados">
    <div class="grid grid-cols-3 gap-4">
        <div id="sb-content" class="searchbar-content col-start-2 mt-20">
            <div class="search-container">
                <input type="text" placeholder="Encontrar curso" id="inputField" onkeyup="filterFunction()"
                    class="w-auto md:w-100">
                <button type="button" class="clear-search hidden" id="clearBtn">✕</button>
            </div>
            <input type="hidden" id="selectedCourseId" value="">
            <a href="#" data-id="1" class="course-option">Administração</a>
            <a href="#" data-id="2" class="course-option">Ciências Contábeis</a>
            <a href="#" data-id="3" class="course-option">Ciências Econômicas</a>
            <a href="#" data-id="4" class="course-option">Comunicação Social - Jornalismo</a>
            <a href="#" data-id="5" class="course-option">Comunicação Social - Publicidade</a>
            <a href="#" data-id="6" class="course-option">Design</a>
            <a href="#" data-id="7" class="course-option">Psicologia</a>
            <a href="#" data-id="8" class="course-option">Relações Internacionais</a>
            <a href="#" data-id="9" class="course-option">Gestão Comercial</a>
            <a href="#" data-id="10" class="course-option">Gestão de Recursos Humanos</a>
            <a href="#" data-id="11" class="course-option">Logística</a>
            <a href="#" data-id="12" class="course-option">Marketing</a>
            <a href="#" data-id="13" class="course-option">Comércio Exterior</a>
            <a href="#" data-id="14" class="course-option">Artes Visuais</a>
            <a href="#" data-id="15" class="course-option">Ciências Biológicas</a>
            <a href="#" data-id="16" class="course-option">Ciências Sociais</a>
            <a href="#" data-id="17" class="course-option">Computação</a>
            <a href="#" data-id="18" class="course-option">Educação Física</a>
            <a href="#" data-id="19" class="course-option">Filosofia</a>
            <a href="#" data-id="20" class="course-option">Física</a>
            <a href="#" data-id="21" class="course-option">Geografia</a>
            <a href="#" data-id="22" class="course-option">História</a>
            <a href="#" data-id="23" class="course-option">Letras</a>
            <a href="#" data-id="24" class="course-option">Matemática</a>
            <a href="#" data-id="25" class="course-option">Música</a>
            <a href="#" data-id="26" class="course-option">Pedagogia</a>
            <a href="#" data-id="27" class="course-option">Química</a>
            <a href="#" data-id="28" class="course-option">Agronomia</a>
            <a href="#" data-id="29" class="course-option">Arquitetura e Urbanismo</a>
            <a href="#" data-id="30" class="course-option">Biomedicina</a>
            <a href="#" data-id="31" class="course-option">Enfermagem</a>
            <a href="#" data-id="32" class="course-option">Engenharia Ambiental</a>
            <a href="#" data-id="33" class="course-option">Engenharia Civil</a>
            <a href="#" data-id="34" class="course-option">Engenharia de Alimentos</a>
            <a href="#" data-id="35" class="course-option">Medicina</a>
            <a href="#" data-id="36" class="course-option">Nutrição</a>
        </div>
    </div>

    <script>
        let selectedCourseId = null;
        const inputField = document.getElementById('inputField');
        const clearBtn = document.getElementById('clearBtn');

        // Controlar visibilidade do botão de limpar
        inputField.addEventListener('input', function () {
            if (this.value.trim() !== '') {
                clearBtn.classList.remove('hidden');
            } else {
                clearBtn.classList.add('hidden');
            }
        });

        // Limpar o input ao clicar no botão 'x'
        clearBtn.addEventListener('click', function () {
            inputField.value = '';
            selectedCourseId = null;
            document.getElementById('selectedCourseId').value = '';
            clearBtn.classList.add('hidden');
            filterFunction();
        });

        /* When the user clicks on the button, toggle between hiding and showing the searchbar content */
        function myFunction() {
            document.getElementById("sb-content").classList.toggle("show");
        }

        function filterFunction() {
            var input, filter, a, i;
            input = document.getElementById("inputField");
            filter = input.value.toUpperCase();
            div = document.getElementById("sb-content");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }

        // Adicionar event listeners aos cursos
        document.querySelectorAll('.course-option').forEach(function (option) {
            option.addEventListener('click', function (e) {
                e.preventDefault();

                // Pegar o nome do curso e o ID
                const courseName = this.textContent;
                const courseId = this.getAttribute('data-id');

                // Salvar o ID na variável e no input hidden
                selectedCourseId = courseId;
                document.getElementById('selectedCourseId').value = courseId;

                // Preencher o input com o nome do curso
                document.getElementById('inputField').value = courseName;

                // Mostrar o botão de limpar
                clearBtn.classList.remove('hidden');

                // Limpar a busca para mostrar todos os cursos novamente
                filterFunction();

                console.log('Curso selecionado:', courseName, 'ID:', courseId);
            });
        });
    </script>
</x-layout>