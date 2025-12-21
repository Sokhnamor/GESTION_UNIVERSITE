@extends('appBar.bar-export')

@section('title', 'Scolarité')

@section('content')

<div class="flex flex-col flex-1 min-h-0">
<div class="flex-1 min-h-0">

  <!-- Header -->
  <div class="flex items-end justify-between gap-4 mb-8">
    <div>
      <h1 class="text-3xl md:text-4xl font-black text-[#0d121b] dark:text-white mb-2">
        Scolarité
      </h1>
      <p class="text-[#4c669a] dark:text-gray-400">
        Liste des inscriptions académiques.
      </p>
    </div>

    <button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-lg hover:bg-blue-700 shadow-md shadow-blue-500/20">
      <span class="material-symbols-outlined text-[20px]">add</span>
      <span class="text-sm font-bold">Inscrire un étudiant</span>
    </button>
  </div>

  <!-- Table -->
  <div class="bg-white dark:bg-[#1a202c] rounded-xl shadow-sm border border-[#e7ebf3] dark:border-gray-700 overflow-hidden">
    <div class="overflow-x-auto">
      <table class="w-full text-left border-collapse">
        <thead class="bg-background-light dark:bg-gray-800 border-b border-[#e7ebf3] dark:border-gray-700">
          <tr>
            <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Matricule</th>
            <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Nom & Prénom</th>
            <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Filière</th>
            <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Niveau</th>
            <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Année</th>
            <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Statut</th>
            <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a] text-right">Actions</th>
          </tr>
        </thead>

        <tbody class="text-sm text-[#0d121b] dark:text-gray-200">
          @php
            $inscriptions = [];
            for ($i=1; $i<=25; $i++) {
              $inscriptions[] = [
                'MAT-2025-'.str_pad($i, 3, '0', STR_PAD_LEFT),
                'Etudiant '.$i,
                'Informatique',
                ($i % 2 == 0) ? 'Licence 3' : 'Licence 2',
                '2024-2025',
                ($i % 4 == 0) ? 'Suspendu' : 'Actif',
              ];
            }
          @endphp

          @foreach($inscriptions as $r)
            @php
              [$mat,$nom,$fil,$niv,$annee,$stat] = $r;
              $badge = $stat === 'Actif'
                ? 'bg-green-100 text-green-700 border-green-200'
                : 'bg-orange-100 text-orange-700 border-orange-200';
            @endphp

            <tr class="border-b border-[#e7ebf3] dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800/50">
              <td class="px-5 py-4 font-mono text-xs text-[#4c669a]">{{ $mat }}</td>
              <td class="px-5 py-4 font-semibold">{{ $nom }}</td>
              <td class="px-5 py-4">{{ $fil }}</td>
              <td class="px-5 py-4">{{ $niv }}</td>
              <td class="px-5 py-4">{{ $annee }}</td>
              <td class="px-5 py-4">
                <span class="text-xs font-semibold px-2 py-1 rounded-full border {{ $badge }}">
                  {{ $stat }}
                </span>
              </td>
              <td class="px-5 py-4 text-right">
                <div class="inline-flex gap-2">
                  <button class="size-9 rounded-full bg-[#e7ebf3] dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600">
                    <span class="material-symbols-outlined text-[20px]">visibility</span>
                  </button>
                  <button class="size-9 rounded-full bg-[#e7ebf3] dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600">
                    <span class="material-symbols-outlined text-[20px]">edit</span>
                  </button>
                </div>
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>
    </div>

    <div class="p-4 border-t border-[#e7ebf3] dark:border-gray-700 flex justify-between items-center">
      <p class="text-sm text-[#4c669a]">{{ count($inscriptions) }} inscriptions</p>
      <span class="text-xs text-[#4c669a]">Scolarité</span>
    </div>
  </div>

</div>
</div>

@endsection
