@extends('appBar.bar-export')

@section('title', 'Gestion des Notes - GradeSecure')

@section('content')
 


<!-- Breadcrumbs -->
<nav class="flex flex-wrap gap-2 pb-4 text-sm">
  <a class="text-[#4c669a] dark:text-gray-400 hover:text-primary font-medium" href="{{ route('dashboard') }}">Accueil</a>
  <span class="text-[#4c669a] dark:text-gray-600 font-medium">/</span>
  <span class="text-[#0d121b] dark:text-gray-200 font-medium">Gestion des Notes</span>
</nav>

<!-- Page Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
  <div>
    <h1 class="text-[#0d121b] dark:text-white text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em] mb-2">
      Gestion des Notes
    </h1>
    <p class="text-[#4c669a] dark:text-gray-400 text-base font-normal">
      Consultez, filtrez et validez les notes par promotion, semestre et session.
    </p>
  </div>

  <div class="flex gap-3">
    <a href="{{ route('gradevalidation') }}"
       class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-gray-800 border border-[#e7ebf3] dark:border-gray-700 rounded-lg text-[#0d121b] dark:text-white hover:bg-gray-50 dark:hover:bg-gray-700 transition-all shadow-sm">
      <span class="material-symbols-outlined text-[20px]">check_circle</span>
      <span class="text-sm font-medium">Validation</span>
    </a>

    <a href="{{ route('export') }}"
       class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-lg hover:bg-blue-700 transition-all shadow-md shadow-blue-500/20">
      <span class="material-symbols-outlined text-[20px]">download</span>
      <span class="text-sm font-bold">Exporter</span>
    </a>
  </div>
</div>

<!-- Content Grid -->
<div class="grid grid-cols-1 xl:grid-cols-12 gap-8 items-start">

  <!-- LEFT: Filters / Summary -->
  <div class="xl:col-span-4 flex flex-col gap-6">

    <!-- Filters Card -->
    <div class="bg-white dark:bg-[#1a202c] rounded-xl shadow-sm border border-[#e7ebf3] dark:border-gray-700 p-6">
      <h2 class="text-[#0d121b] dark:text-white text-lg font-bold mb-5 flex items-center gap-2">
        <span class="material-symbols-outlined text-primary">tune</span>
        Filtres
      </h2>

      <div class="flex flex-col gap-5">
        <div>
          <label class="block text-sm font-medium text-[#4c669a] dark:text-gray-400 mb-1">Promotion</label>
          <select class="w-full h-10 px-3 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-white dark:bg-gray-800 text-[#0d121b] dark:text-white text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none appearance-none">
            <option>Licence 3 - Informatique (2023-2024)</option>
            <option>Licence 2 - Informatique (2023-2024)</option>
            <option>Master 1 - Big Data (2023-2024)</option>
            <option>Master 2 - Big Data (2023-2024)</option>
          </select>
        </div>

        <div class="flex gap-4">
          <div class="flex-1">
            <label class="block text-sm font-medium text-[#4c669a] dark:text-gray-400 mb-1">Semestre</label>
            <select class="w-full h-10 px-3 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-white dark:bg-gray-800 text-[#0d121b] dark:text-white text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none">
              <option>Semestre 5</option>
              <option>Semestre 6</option>
              <option>Annuel</option>
            </select>
          </div>
          <div class="flex-1">
            <label class="block text-sm font-medium text-[#4c669a] dark:text-gray-400 mb-1">Session</label>
            <select class="w-full h-10 px-3 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-white dark:bg-gray-800 text-[#0d121b] dark:text-white text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none">
              <option>Normale</option>
              <option>Rattrapage</option>
            </select>
          </div>
        </div>

        <div>
          <label class="block text-sm font-medium text-[#4c669a] dark:text-gray-400 mb-1">Recherche</label>
          <div class="flex items-center rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-white dark:bg-gray-800 h-10 px-3 gap-2">
            <span class="material-symbols-outlined text-[20px] text-[#4c669a]">search</span>
            <input class="w-full bg-transparent outline-none text-sm text-[#0d121b] dark:text-white placeholder:text-[#4c669a] dark:placeholder:text-gray-500"
                   placeholder="Matricule, nom, UE..." />
          </div>
        </div>

        <div class="pt-4 border-t border-[#e7ebf3] dark:border-gray-700">
          <div class="grid grid-cols-2 gap-3">
            <div class="bg-background-light dark:bg-gray-800 border border-[#e7ebf3] dark:border-gray-700 rounded-xl p-4">
              <p class="text-xs font-medium text-[#4c669a] dark:text-gray-400">Étudiants</p>
              <p class="text-2xl font-black text-[#0d121b] dark:text-white mt-1">128</p>
            </div>
            <div class="bg-background-light dark:bg-gray-800 border border-[#e7ebf3] dark:border-gray-700 rounded-xl p-4">
              <p class="text-xs font-medium text-[#4c669a] dark:text-gray-400">Notes saisies</p>
              <p class="text-2xl font-black text-[#0d121b] dark:text-white mt-1">742</p>
            </div>
            <div class="bg-background-light dark:bg-gray-800 border border-[#e7ebf3] dark:border-gray-700 rounded-xl p-4">
              <p class="text-xs font-medium text-[#4c669a] dark:text-gray-400">À valider</p>
              <p class="text-2xl font-black text-orange-600 mt-1">36</p>
            </div>
            <div class="bg-background-light dark:bg-gray-800 border border-[#e7ebf3] dark:border-gray-700 rounded-xl p-4">
              <p class="text-xs font-medium text-[#4c669a] dark:text-gray-400">Validées</p>
              <p class="text-2xl font-black text-green-600 mt-1">706</p>
            </div>
          </div>
        </div>

        <div class="bg-primary/5 rounded-xl border border-primary/20 p-4 flex items-start gap-3">
          <span class="material-symbols-outlined text-primary mt-1">security</span>
          <div>
            <h4 class="text-sm font-bold text-primary">Contrôle GradeSecure</h4>
            <p class="text-xs text-[#4c669a] mt-1">
              Les notes en anomalie (hors 0–20, coefficient manquant, UE invalide) sont marquées automatiquement.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- RIGHT: Notes Table -->
  <div class="xl:col-span-8 flex flex-col gap-4">

    <div class="flex items-center justify-between px-2">
      <h2 class="text-[#0d121b] dark:text-white text-lg font-bold flex items-center gap-2">
        <span class="material-symbols-outlined text-[#4c669a]">dataset</span>
        Liste des notes
      </h2>

      <span class="text-xs font-medium bg-green-100 text-green-700 px-2 py-1 rounded-full border border-green-200">
        Données à jour
      </span>
    </div>

    <div class="bg-white dark:bg-[#1a202c] rounded-xl shadow-sm border border-[#e7ebf3] dark:border-gray-700 overflow-hidden">
      <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
          <thead class="bg-background-light dark:bg-gray-800 border-b border-[#e7ebf3] dark:border-gray-700">
            <tr>
              <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a] dark:text-gray-400">Matricule</th>
              <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a] dark:text-gray-400">Étudiant</th>
              <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a] dark:text-gray-400">UE</th>
              <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a] dark:text-gray-400">Matière</th>
              <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a] dark:text-gray-400 text-right">Coeff.</th>
              <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a] dark:text-gray-400 text-right">Note</th>
              <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a] dark:text-gray-400">Statut</th>
              <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a] dark:text-gray-400 text-right">Actions</th>
            </tr>
          </thead>

          <tbody class="text-sm text-[#0d121b] dark:text-gray-200">
            @php
              $rows = [
                ['2023-INF-001','Awa DIOP','UE INF301','Algo Avancée',4,'14.50','VALIDÉE'],
                ['2023-INF-002','Mamadou NDIAYE','UE INF302','Bases de Données',4,'16.00','VALIDÉE'],
                ['2023-INF-003','Fatou SARR','UE MAT205','Proba & Stats',3,'10.25','À VALIDER'],
                ['2023-INF-004','Cheikh BA','UE ANG101','Anglais Technique',2,'15.00','VALIDÉE'],
                ['2023-INF-005','Aminata FALL','UE PROJ30','Projet Tutoré',5,'17.50','VALIDÉE'],
                ['2023-INF-006','Ibrahima DIALLO','UE INF305','Réseaux',3,'08.00','ANOMALIE'],
                ['2023-INF-007','Khady GUEYE','UE INF306','Sécurité',3,'19.00','À VALIDER'],
                ['2023-INF-008','Ousmane SECK','UE INF307','Web Laravel',4,'13.25','VALIDÉE'],
                ['2023-INF-009','Marième CISSE','UE INF308','Systèmes',3,'11.75','VALIDÉE'],
                ['2023-INF-010','Abdoulaye SOW','UE INF309','IA',4,'07.50','ANOMALIE'],
                // Duplique pour “beaucoup de notes”
                ['2023-INF-011','Awa DIOP','UE INF302','Bases de Données',4,'15.25','VALIDÉE'],
                ['2023-INF-012','Mamadou NDIAYE','UE INF301','Algo Avancée',4,'12.00','À VALIDER'],
                ['2023-INF-013','Fatou SARR','UE INF307','Web Laravel',4,'16.75','VALIDÉE'],
                ['2023-INF-014','Cheikh BA','UE MAT205','Proba & Stats',3,'09.50','À VALIDER'],
                ['2023-INF-015','Aminata FALL','UE ANG101','Anglais Technique',2,'18.00','VALIDÉE'],
                ['2023-INF-016','Ibrahima DIALLO','UE INF306','Sécurité',3,'20.00','VALIDÉE'],
                ['2023-INF-017','Khady GUEYE','UE INF305','Réseaux',3,'05.00','ANOMALIE'],
                ['2023-INF-018','Ousmane SECK','UE PROJ30','Projet Tutoré',5,'14.00','À VALIDER'],
                ['2023-INF-019','Marième CISSE','UE INF308','Systèmes',3,'12.50','VALIDÉE'],
                ['2023-INF-020','Abdoulaye SOW','UE INF309','IA',4,'17.25','VALIDÉE'],
              ];
            @endphp

            @foreach($rows as $r)
              @php
                [$mat,$etu,$ue,$matier,$coef,$note,$stat] = $r;

                $badge = 'bg-green-100 text-green-700 border-green-200';
                if ($stat === 'À VALIDER') $badge = 'bg-orange-100 text-orange-700 border-orange-200';
                if ($stat === 'ANOMALIE') $badge = 'bg-red-100 text-red-700 border-red-200';

                $noteColor = 'text-green-600';
                if ((float)$note < 10) $noteColor = 'text-orange-600';
                if ($stat === 'ANOMALIE') $noteColor = 'text-red-600';
              @endphp

              <tr class="border-b border-[#e7ebf3] dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors">
                <td class="px-5 py-4 font-mono text-xs text-[#4c669a] dark:text-gray-400">{{ $mat }}</td>
                <td class="px-5 py-4 font-semibold">{{ $etu }}</td>
                <td class="px-5 py-4 text-xs font-medium text-[#4c669a] dark:text-gray-400">{{ $ue }}</td>
                <td class="px-5 py-4">{{ $matier }}</td>
                <td class="px-5 py-4 text-right">{{ $coef }}</td>
                <td class="px-5 py-4 text-right font-bold {{ $noteColor }}">{{ $note }}</td>
                <td class="px-5 py-4">
                  <span class="text-xs font-semibold px-2 py-1 rounded-full border {{ $badge }}">
                    {{ $stat }}
                  </span>
                </td>
                <td class="px-5 py-4 text-right">
                  <div class="inline-flex gap-2">
                    <button class="size-9 rounded-full bg-[#e7ebf3] dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors flex items-center justify-center">
                      <span class="material-symbols-outlined text-[20px]">edit</span>
                    </button>
                    <button class="size-9 rounded-full bg-[#e7ebf3] dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors flex items-center justify-center">
                      <span class="material-symbols-outlined text-[20px]">visibility</span>
                    </button>
                    <button class="size-9 rounded-full bg-red-50 dark:bg-red-900/20 hover:bg-red-100 dark:hover:bg-red-900/30 transition-colors flex items-center justify-center">
                      <span class="material-symbols-outlined text-[20px] text-red-500">delete</span>
                    </button>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <!-- Footer / Pagination mock -->
      <div class="p-4 border-t border-[#e7ebf3] dark:border-gray-700 flex flex-col sm:flex-row items-center justify-between gap-3">
        <p class="text-sm text-[#4c669a] dark:text-gray-400">Affichage : 1–20 sur 742</p>
        <div class="flex items-center gap-2">
          <button class="px-3 py-2 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors text-sm">
            Précédent
          </button>
          <button class="px-3 py-2 rounded-lg bg-primary text-white text-sm font-bold hover:bg-blue-700 transition-colors">
            1
          </button>
          <button class="px-3 py-2 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors text-sm">
            2
          </button>
          <button class="px-3 py-2 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors text-sm">
            Suivant
          </button>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection








