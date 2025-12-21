@extends('appBar.bar-export')

@section('title', 'Emploi du temps des examens')

@section('content')

{{-- ✅ WRAPPER OBLIGATOIRE POUR AUTORISER LE SCROLL --}}
<div class="flex flex-col flex-1 min-h-0">
<div class="flex-1 min-h-0">

<!-- Breadcrumbs -->
<nav class="flex flex-wrap gap-2 pb-4 text-sm">
  <a class="text-[#4c669a] dark:text-gray-400 hover:text-primary font-medium" href="{{ route('dashboard') }}">Accueil</a>
  <span class="text-[#4c669a] dark:text-gray-600">/</span>
  <span class="text-[#0d121b] dark:text-gray-200 font-medium">Examens</span>
</nav>

<!-- Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
  <div>
    <h1 class="text-3xl md:text-4xl font-black text-[#0d121b] dark:text-white mb-2">
      Emploi du temps des examens
    </h1>
    <p class="text-[#4c669a] dark:text-gray-400">
      Planification officielle des examens par promotion, semestre et session.
    </p>
  </div>

  <div class="flex gap-3">
    <button class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-gray-800 border border-[#e7ebf3] dark:border-gray-700 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
      <span class="material-symbols-outlined text-[20px]">print</span>
      <span class="text-sm font-medium">Imprimer</span>
    </button>

    <button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-lg hover:bg-blue-700 shadow-md shadow-blue-500/20">
      <span class="material-symbols-outlined text-[20px]">add</span>
      <span class="text-sm font-bold">Nouvel examen</span>
    </button>
  </div>
</div>

<!-- Filters -->
<div class="bg-white dark:bg-[#1a202c] rounded-xl shadow-sm border border-[#e7ebf3] dark:border-gray-700 p-6 mb-8">
  <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
    <div>
      <label class="block text-sm font-medium mb-2">Promotion</label>
      <select class="w-full h-11 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-white dark:bg-gray-800 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none">
        <option>Licence 3 - Informatique</option>
        <option>Licence 2 - Informatique</option>
        <option>Master 1 - Big Data</option>
      </select>
    </div>

    <div>
      <label class="block text-sm font-medium mb-2">Semestre</label>
      <select class="w-full h-11 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-white dark:bg-gray-800 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none">
        <option>Semestre 5</option>
        <option>Semestre 6</option>
      </select>
    </div>

    <div>
      <label class="block text-sm font-medium mb-2">Session</label>
      <select class="w-full h-11 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-white dark:bg-gray-800 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none">
        <option>Normale</option>
        <option>Rattrapage</option>
      </select>
    </div>

    <div>
      <label class="block text-sm font-medium mb-2">Recherche</label>
      <input
        placeholder="UE, matière, salle..."
        class="w-full h-11 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-[#f8f9fc] dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
    </div>
  </div>
</div>

<!-- Table -->
<div class="bg-white dark:bg-[#1a202c] rounded-xl shadow-sm border border-[#e7ebf3] dark:border-gray-700 overflow-hidden">

  <div class="overflow-x-auto">
    <table class="w-full text-left border-collapse">
      <thead class="bg-background-light dark:bg-gray-800 border-b border-[#e7ebf3] dark:border-gray-700">
        <tr>
          <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Date</th>
          <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Heure</th>
          <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">UE</th>
          <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Matière</th>
          <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Salle</th>
          <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Surveillant</th>
          <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Statut</th>
          <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a] text-right">Actions</th>
        </tr>
      </thead>

      <tbody class="text-sm text-[#0d121b] dark:text-gray-200">

        @php
          // 🔽 DATA ÉTENDUE POUR FORCER LE SCROLL
          $examens = [];
          for ($i = 1; $i <= 30; $i++) {
            $examens[] = [
              '12/01/2025',
              '08:00 - 10:00',
              'UE INF30'.$i,
              'Matière '.$i,
              'Salle A'.(($i % 5) + 1),
              'Surveillant '.$i,
              $i % 3 == 0 ? 'Confirmé' : ($i % 2 == 0 ? 'Programmé' : 'À venir')
            ];
          }
        @endphp

        @foreach($examens as $e)
          @php
            [$date,$heure,$ue,$matiere,$salle,$surv,$stat] = $e;

            $badge = 'bg-blue-100 text-blue-700 border-blue-200';
            if ($stat === 'Programmé') $badge = 'bg-orange-100 text-orange-700 border-orange-200';
            if ($stat === 'Confirmé') $badge = 'bg-green-100 text-green-700 border-green-200';
          @endphp

          <tr class="border-b border-[#e7ebf3] dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800/50">
            <td class="px-5 py-4 font-mono text-xs text-[#4c669a]">{{ $date }}</td>
            <td class="px-5 py-4 font-semibold">{{ $heure }}</td>
            <td class="px-5 py-4 text-xs font-medium text-[#4c669a]">{{ $ue }}</td>
            <td class="px-5 py-4">{{ $matiere }}</td>
            <td class="px-5 py-4">{{ $salle }}</td>
            <td class="px-5 py-4">{{ $surv }}</td>
            <td class="px-5 py-4">
              <span class="text-xs font-semibold px-2 py-1 rounded-full border {{ $badge }}">
                {{ $stat }}
              </span>
            </td>
            <td class="px-5 py-4 text-right">
              <div class="inline-flex gap-2">
                <button class="size-9 rounded-full bg-[#e7ebf3] dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600">
                  <span class="material-symbols-outlined text-[20px]">edit</span>
                </button>
                <button class="size-9 rounded-full bg-[#e7ebf3] dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600">
                  <span class="material-symbols-outlined text-[20px]">visibility</span>
                </button>
                <button class="size-9 rounded-full bg-red-50 hover:bg-red-100">
                  <span class="material-symbols-outlined text-[20px] text-red-500">delete</span>
                </button>
              </div>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
  </div>

  <div class="p-4 border-t border-[#e7ebf3] dark:border-gray-700 flex justify-between items-center">
    <p class="text-sm text-[#4c669a]">30 examens programmés</p>
    <span class="text-xs text-[#4c669a]">Scroll global actif</span>
  </div>

</div>

</div>
</div>

@endsection
