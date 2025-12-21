<!DOCTYPE html>
<html class="light" lang="fr">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>@yield('title', 'GradeSecure')</title>

  <link href="https://fonts.googleapis.com" rel="preconnect"/>
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&family=Noto+Sans:wght@400;500;700&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#135bec",
            "background-light": "#f6f6f8",
            "background-dark": "#101622",
          },
          fontFamily: {
            "display": ["Lexend", "Noto Sans", "sans-serif"],
            "body": ["Noto Sans", "sans-serif"]
          },
          borderRadius: {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "2xl": "1rem",
            "full": "9999px"
          },
        },
      },
    }
  </script>
</head>

<body class="bg-background-light dark:bg-background-dark text-[#0d121b] dark:text-white font-display overflow-hidden">
  <div class="flex h-screen w-full flex-col">

    <!-- Top Navbar -->
    <header class="flex-none flex items-center justify-between whitespace-nowrap border-b border-solid border-[#e7ebf3] dark:border-gray-800 bg-white dark:bg-[#1a202c] px-4 sm:px-10 py-3 z-20 shadow-sm">
      <div class="flex items-center gap-8">
        <div class="flex items-center gap-4 text-[#0d121b] dark:text-white">
          <div class="size-8 text-primary">
            <span class="material-symbols-outlined text-3xl">shield_person</span>
          </div>
          <h2 class="text-[#0d121b] dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">GradeSecure</h2>
        </div>

        <div class="hidden md:flex items-center gap-9">
          <a class="text-[#0d121b] dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors text-sm font-medium leading-normal"
             href="{{ route('dashboard') }}">Tableau de bord</a>
          <a class="text-[#0d121b] dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors text-sm font-medium leading-normal"
             href="{{ route('scolarite') }}">Scolarité</a>
          <a class="text-[#0d121b] dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors text-sm font-medium leading-normal"
             href="{{ route('examen') }}">Examens</a>
          {{-- <a class="text-primary text-sm font-medium leading-normal" href="#">Rapports</a> --}}
        </div>
      </div>

      <div class="flex flex-1 justify-end gap-4 sm:gap-8">
        <label class="hidden sm:flex flex-col min-w-40 !h-10 max-w-64">
          <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
            <div class="text-[#4c669a] flex border-none bg-[#e7ebf3] dark:bg-gray-700 items-center justify-center pl-4 rounded-l-lg border-r-0">
              <span class="material-symbols-outlined text-[20px]">search</span>
            </div>
            <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0d121b] dark:text-white focus:outline-0 focus:ring-0 border-none bg-[#e7ebf3] dark:bg-gray-700 focus:border-none h-full placeholder:text-[#4c669a] px-4 rounded-l-none border-l-0 pl-2 text-sm font-normal leading-normal"
                   placeholder="Rechercher..." value=""/>
          </div>
        </label>

        <div class="flex items-center gap-2">
          <button class="flex items-center justify-center rounded-full size-10 bg-[#e7ebf3] dark:bg-gray-700 text-[#0d121b] dark:text-white hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
            <span class="material-symbols-outlined">notifications</span>
          </button>
          <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-white dark:border-gray-600 shadow-sm"
               style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAOwSM0oIU_nf1PjOFgSZBwN8pFPf6KCLremFZ6MYrBSjHZPLK114Z2O3SvZyIaygXcQ1Nv09vxNAHCLfny8GDCevmJcU2uRPkKzKnIziipBH5bILOOFQy2iE78s_uQ1fpzHK0rVCMB_VJ1wya4t_pTtgQc4jM39su91JX2ftYFv0mcvXA0wZ0fT59E7bf8jcnssbsl2kSmk8AXAVX_Miq5DNdeil0kY6kej0bdhL7z63kKYhMIPWX_lKIqcKRepqo_mL1AuFGgkw0");'></div>
        </div>
      </div>
    </header>

    <div class="flex flex-1 overflow-hidden">

      <!-- Side Navbar -->
      <aside class="hidden lg:flex flex-col w-64 bg-white dark:bg-[#1a202c] border-r border-[#e7ebf3] dark:border-gray-800 p-4 gap-4 justify-between">
        <div class="flex flex-col gap-2">
          <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors group"
             href="{{ route('export') }}">
            <span class="material-symbols-outlined text-[#4c669a] group-hover:text-primary">home</span>
            <p class="text-[#0d121b] dark:text-gray-300 text-sm font-medium leading-normal">Accueil</p>
          </a>

          <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors group"
             href="{{ route('etudiant') }}">
            <span class="material-symbols-outlined text-[#4c669a] group-hover:text-primary">school</span>
            <p class="text-[#0d121b] dark:text-gray-300 text-sm font-medium leading-normal">Étudiants</p>
          </a>

          <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors group"
             href="{{ route('notes') }}">
            <span class="material-symbols-outlined text-[#4c669a] group-hover:text-primary">check_circle</span>
            <p class="text-[#0d121b] dark:text-gray-300 text-sm font-medium leading-normal">Notes</p>
          </a>
          <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors group" 
             href="{{ route('jury') }}">
            <span class="material-symbols-outlined text-[#4c669a] group-hover:text-primary">gavel</span>
            <p class="text-[#0d121b] dark:text-gray-300 text-sm font-medium leading-normal">Jurys</p>
         </a>

        </div>

        <div class="flex flex-col gap-2 mt-auto">
          <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors group"
             href="{{ route('profile.edit') }}">
            <span class="material-symbols-outlined text-[#4c669a] group-hover:text-primary">settings</span>
            <p class="text-[#0d121b] dark:text-gray-300 text-sm font-medium leading-normal">Paramètres</p>
          </a>

          <div class="h-px bg-[#e7ebf3] dark:bg-gray-700 my-2"></div>

          <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors group"
             href="{{ route('connexion') }}">
            <span class="material-symbols-outlined text-red-500">logout</span>
            <p class="text-red-500 text-sm font-medium leading-normal">Déconnexion</p>
          </a>
        </div>
      </aside>

      <!-- Main Content Area -->
      <main class="flex-1 flex flex-col overflow-y-auto bg-background-light dark:bg-background-dark p-4 md:p-8">
        @yield('content')
      </main>

    </div>
  </div>

  <style>
    .custom-scrollbar::-webkit-scrollbar { width: 4px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: #f1f1f1; }
    .dark .custom-scrollbar::-webkit-scrollbar-track { background: #2d3748; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: #c1c1c1; border-radius: 4px; }
    .dark .custom-scrollbar::-webkit-scrollbar-thumb { background: #4a5568; }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #a8a8a8; }
  </style>
</body>
</html>
