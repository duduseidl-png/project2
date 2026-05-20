@props(['title' => 'Default Title'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="html-root">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">

  <title>{{ $title }}</title>

  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/katex.min.css" rel="stylesheet" />
  @vite('resources/css/app.css')
  <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/katex.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/contrib/auto-render.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <!-- Script para gerenciar tema -->
  <script>
    (function () {
      const htmlRoot = document.getElementById('html-root');
      const savedTheme = localStorage.getItem('theme') || 'light';

      function updateLogo(theme) {
        const logo = document.getElementById('feevale-logo');
        if (!logo) {
          return;
        }
        logo.src = theme === 'dark'
          ? '/img/figuras/Feevale_White.png'
          : '/img/figuras/Feevale_Black.png';
      }

      function applyTheme(theme) {
        htmlRoot.setAttribute('data-theme', theme);
        if (theme === 'dark') {
          htmlRoot.classList.add('dark');
        } else {
          htmlRoot.classList.remove('dark');
        }
        updateLogo(theme);
        localStorage.setItem('theme', theme);
      }

      applyTheme(savedTheme);

      // Expor função global para ser usada pelo toggle
      window.toggleTheme = function () {
        const current = localStorage.getItem('theme') || 'light';
        const newTheme = current === 'light' ? 'dark' : 'light';
        applyTheme(newTheme);
      };
    })();
  </script>
</head>

<div class="navbar bg-base-100 shadow-sm" style="z-index: 1000;">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
      <ul tabindex="-1" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
        <li><a>Item 1</a></li>
        <li>
          <a>Parent</a>
          <ul class="p-2">
            <li><a>Submenu 1</a></li>
            <li><a>Submenu 2</a></li>
          </ul>
        </li>
        <li><a>Item 3</a></li>
      </ul>
    </div>
    <a class="btn btn-ghost text-xl" href="/">Simulador ENADE</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a href="/">Início</a></li>
      <li>
        <details><summary>Simulados</summary>
          <ul class="p-2 bg-base-100 w-50 z-1">
            <li><a href="/simulados/gerar_simulado">Gerador de Simulados</a></li>
            <li><a href="/simulados/simulados_passados">Revisitar Provas Passadas</a></li>
          </ul>
        </details>
      </li>
      <!--<li>
        <details>
          <summary>Parent</summary>
          <ul class="p-2 bg-base-100 w-40 z-1">
            <li><a>Submenu 1</a></li>
            <li><a>Submenu 2</a></li>
          </ul>
        </details>
      </li>
      -->
      <li><a href="/sobre">Sobre</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    <label class="toggle text-base-content">
      <input type="checkbox" value="teste" class="theme-controller" id="theme-toggle" onchange="window.toggleTheme()" />
      <svg aria-label="sun" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor">
          <circle cx="12" cy="12" r="4"></circle>
          <path d="M12 2v2"></path>
          <path d="M12 20v2"></path>
          <path d="m4.93 4.93 1.41 1.41"></path>
          <path d="m17.66 17.66 1.41 1.41"></path>
          <path d="M2 12h2"></path>
          <path d="M20 12h2"></path>
          <path d="m6.34 17.66-1.41 1.41"></path>
          <path d="m19.07 4.93-1.41 1.41"></path>
        </g>
      </svg>
      <svg aria-label="moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor">
          <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
        </g>
      </svg>
    </label>
    <div>
      <a href="https://www.feevale.br/" target="_blank">
        <img id="feevale-logo" class="mx-5" width="100" height="100" padding="10" src="/img/figuras/Feevale_Black.png" alt="Logo">
      </a>
    </div>
    <!--<div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img alt="Tailwind CSS Navbar component"
            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
        </div>
      </div>
      <ul tabindex="-1" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
        <li>
          <a class="justify-between">
            Profile
            <span class="badge">New</span>
          </a>
        </li>
        <li><a>Settings</a></li>
        <li><a>Logout</a></li>
      </ul>
    </div>-->
  </div>
</div>

<body>

  <main>
    {{ $slot }}
  </main>

  <script>
    // Sincronizar o estado do toggle com o tema salvo no carregamento
    document.addEventListener('DOMContentLoaded', function () {
      const savedTheme = localStorage.getItem('theme') || 'light';
      const themeToggle = document.getElementById('theme-toggle');
      if (themeToggle) {
        themeToggle.checked = (savedTheme === 'dark');
      }

      const logo = document.getElementById('feevale-logo');
      if (logo) {
        logo.src = savedTheme === 'dark'
          ? '/img/figuras/Feevale_White.png'
          : '/img/figuras/Feevale_Black.png';
      }

      // Renderizar matemática do KaTeX
      if (typeof renderMathInElement === 'function') {
        renderMathInElement(document.body, {
          delimiters: [
            { left: '$$', right: '$$', display: true },
            { left: '\\(', right: '\\)', display: false }
          ]
        });
      }
    });
  </script>

</body>

</html>