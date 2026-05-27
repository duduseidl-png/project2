<x-layout title="Simulados passados">
    <style>
        /* The search field container */
        .search-container {
            position: relative;
            width: 100%;
        }

        /* The search field */
        #inputField {
            box-sizing: border-box;
            font-size: 16px;
            padding: 14px 45px 12px 12px;
            border: none;
            border-bottom: 1px solid #ddd;
            width: 100%;
        }

        /* The search field when it gets focus/clicked on */
        #inputField:focus {
            outline: 3px solid #ddd;
        }

        /* Clear button inside search field */
        .clear-search {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            font-size: 20px;
            color: #999;
            cursor: pointer;
            padding: 5px 8px;
            line-height: 1;
        }

        .clear-search:hover {
            color: #666;
        }

        .clear-search.hidden {
            display: none;
        }

        /* The container <div> - needed to position the searchbar content 
        .searchbar {
            position: relative;
            display: inline-block;
        }*/

        /* Dropdown Content (Hidden by Default) */
        .searchbar-content {
            position: relative;
            background-color: var(--bg-standard);
            min-width: 230px;
            border: 1px solid var(--bg-blue);
            z-index: 1;
            max-height: 300px;
            overflow-y: auto;
        }

        /* Links inside the searchbar */
        .searchbar-content a {
            color: ;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of searchbar links on hover */
        .searchbar-content a:hover {
            background-color: var(--hover-bg);
        }
    </style>

    <h1 style="background-color: #b39202; text-align: center; font-size: 200%; padding-top: 15px; padding-bottom: 15px">
        Revisitar provas passadas</h1>
    <div class="grid grid-cols-4 gap-4">
        <div role="alert" class="col-start-2 alert alert-vertical sm:alert-horizontal mt-10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                class="stroke-info h-6 w-6 shrink-0">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <div>
                <h3 class="font-bold">Orientação</h3>
                <div class="text-xs">Selecione o curso e o ano de prova para realizar um simulado com exatamente as mesmas questões objetivas.</div>
            </div>
        </div>
        <div id="sb-content" class="searchbar-content col-start-3 mt-10">
            <div class="search-container">
                <input type="text" placeholder="Encontrar curso" id="inputField" onkeyup="filterFunction()"
                    class="w-auto md:w-100">
                <button type="button" class="clear-search hidden" id="clearBtn">✕</button>
            </div>
            <section id="optionBox">
                <input type="hidden" id="selectedCourseId" value="">
                <input type="hidden" id="selectedCourseSlug" value="">
                @foreach ($cursos as $curso)
                    <a href="#" data-id="{{ $curso['id'] }}" data-slug="{{ $curso['slug'] }}"
                        class="course-option">{{ $curso['nome'] }}</a>
                @endforeach
            </section>
        </div>
        <div class="col-start-3">
            <ul class="menu menu-horizontal rounded-box w-56 hidden" id="yearsList">
                @foreach ($anos as $cursoId => $yearList)
                    <li class="years-group" data-course-id="{{ $cursoId }}" style="display: none;">
                        @foreach ($yearList as $year)
                            <a href="#" class="year-option" data-year="{{ $year }}">{{ $year }}</a>
                        @endforeach
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <script>
        let selectedCourseId = null;
        const inputField = document.getElementById('inputField');
        const clearBtn = document.getElementById('clearBtn');

        // Controlar visibilidade do botão de limpar
        inputField.addEventListener('input', function () {
            document.getElementById("optionBox").classList.remove("hidden");
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
            document.getElementById("optionBox").classList.remove("hidden");
            document.getElementById("yearsList").classList.add("hidden");
        });

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

                // Pegar o nome do curso, o ID e o slug
                const courseName = this.textContent;
                const courseId = this.getAttribute('data-id');
                const courseSlug = this.getAttribute('data-slug');

                // Salvar o ID e slug na variável e no input hidden
                selectedCourseId = courseId;
                document.getElementById('selectedCourseId').value = courseId;
                document.getElementById('selectedCourseSlug').value = courseSlug;

                // Preencher o input com o nome do curso
                document.getElementById('inputField').value = courseName;

                // Mostrar o botão de limpar
                clearBtn.classList.remove('hidden');

                // Esconder a caixa de opções
                document.getElementById("optionBox").classList.add("hidden");
                document.getElementById("yearsList").classList.remove("hidden");

                // Mostrar anos do curso selecionado
                showYearsByEng(courseId);

                console.log('Curso selecionado:', courseName, 'ID:', courseId, 'Slug:', courseSlug);
            });
        });

        // Função para mostrar anos do curso selecionado
        function showYearsByEng(courseId) {
            const yearsGroups = document.querySelectorAll('.years-group');
            yearsGroups.forEach(group => {
                if (group.getAttribute('data-course-id') == courseId) {
                    group.style.display = 'block';
                } else {
                    group.style.display = 'none';
                }
            });
        }

        // Adicionar event listeners aos anos
        document.querySelectorAll('.year-option').forEach(function (option) {
            option.addEventListener('click', function (e) {
                e.preventDefault();
                const year = this.getAttribute('data-year');
                const courseSlug = document.getElementById('selectedCourseSlug').value;

                console.log('Ano selecionado:', year, 'Curso slug:', courseSlug);

                // Redirecionar para o simulado com o ano
                window.location.href = `/simulado/${courseSlug}/${year}`;
            });
        });
    </script>
</x-layout>