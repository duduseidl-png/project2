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
            background-color: #f6f6f6;
            min-width: 230px;
            border: 1px solid #ddd;
            z-index: 1;
            max-height: 300px;
            overflow-y: auto;
        }

        /* Links inside the searchbar */
        .searchbar-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of searchbar links on hover */
        .searchbar-content a:hover {
            background-color: #f1f1f1
        }

        /* Show the searchbar menu (use JS to add this class to the .searchbar-content container when the user clicks on the searchbar button) */
        .show {
            display: block;
        }
    </style>

    <div class="grid grid-cols-3 gap-4">
        <div id="sb-content" class="searchbar-content col-start-2 mt-20">
            <div class="search-container">
                <input type="text" placeholder="Encontrar curso" id="inputField" onkeyup="filterFunction()"
                    class="w-auto md:w-100">
                <button type="button" class="clear-search hidden" id="clearBtn">✕</button>
            </div>
            <section id="optionBox">
                <input type="hidden" id="selectedCourseId" value="">
                @foreach ($cursos as $curso)
                <a href="#" data-id="{{ $curso['id'] }}" class="course-option">{{ $curso['nome'] }}</a>
                @endforeach
            </section>
        </div>
        <div class="col-start-2">
            <ul class=" bg-base-200 rounded-box w-56" id="yearsList">
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

                // Esconder a caixa de opções
                document.getElementById("optionBox").classList.add("hidden");
                document.getElementById("yearsList").classList.remove("hidden");
                
                // Mostrar anos do curso selecionado
                showYearsByEng(courseId);

                console.log('Curso selecionado:', courseName, 'ID:', courseId);
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
                const courseId = document.getElementById('selectedCourseId').value;
                
                console.log('Ano selecionado:', year, 'Curso ID:', courseId);
                // Aqui você pode adicionar lógica para fazer algo com ano e curso selecionados
            });
        });
    </script>
</x-layout>