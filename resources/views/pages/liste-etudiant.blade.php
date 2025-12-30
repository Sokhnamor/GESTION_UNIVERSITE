@extends('appBar.bar-export')

@section('title', 'Scolarité')

@section('content')

<div class="flex flex-col flex-1 min-h-0">
<div class="flex-1 min-h-0">

  <!-- Header -->
  <div class="flex items-end justify-between gap-4 mb-8">
    <div>
      <h1 class="text-3xl md:text-4xl font-black text-[#0d121b] dark:text-white mb-2">
        Liste des Etudiants
      </h1>
      <p class="text-[#4c669a] dark:text-gray-400">
        Liste des inscriptions académiques.
      </p>
    </div>

    <button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-lg hover:bg-blue-700 shadow-md shadow-blue-500/20">
      <span class="material-symbols-outlined text-[20px]">add</span>
      <span class="text-sm font-bold">Ajouter un Etudiant</span>
    </button>
  </div>

  <!-- Table -->
  <div class="bg-white dark:bg-[#1a202c] rounded-xl shadow-sm border border-[#e7ebf3] dark:border-gray-700 overflow-hidden">
    <div class="overflow-x-auto">
      <table class="w-full text-left border-collapse">
        <thead class="bg-background-light dark:bg-gray-800 border-b border-[#e7ebf3] dark:border-gray-700">
          <tr>
            <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Matricule</th>
            <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Numéro étudiant</th>
            <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Nom</th>
            <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Prénom</th>
            <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">sexe</th>
            <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">DAte de naissance</th>
            <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Email</th>
            <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Téléphone</th>  
            <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Filiere</th>
            <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Niveau</th>
             <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Promotion</th>
             <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a]">Statut</th>
            <th class="px-5 py-3 text-xs font-bold uppercase text-[#4c669a] text-right">Actions</th>
          </tr>
        </thead>


        <tbody>
          @foreach ($listeEtudiant as $etudiant)
          <!-- Exemple de ligne de données -->
          <tr class="border-b border-[#e7ebf3] dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-900">
            <td class="px-5 py-3 text-sm text-[#0d121b] dark:text-white">{{ $etudiant->matricule }}</td>
            <td class="px-5 py-3 text-sm text-[#0d121b] dark:text-white">{{ $etudiant->numero_etudiant }}</td>
            <td class="px-5 py-3 text-sm text-[#0d121b] dark:text-white">{{ $etudiant->nom }}</td>
            <td class="px-5 py-3 text-sm text-[#0d121b] dark:text-white">{{ $etudiant->prenom }}</td>
            <td class="px-5 py-3 text-sm text-[#0d121b] dark:text-white">{{ $etudiant->sexe }}</td>
            <td class="px-5 py-3 text-sm text-[#0d121b] dark:text-white">{{ $etudiant->date_naissance }}</td>
            <td class="px-5 py-3 text-sm text-[#0d121b] dark:text-white">{{ $etudiant->email }}</td>
            <td class="px-5 py-3 text-sm text-[#0d121b] dark:text-white">{{ $etudiant->telephone }}</td>
            <td class="px-5 py-3 text-sm text-[#0d121b] dark:text-white">{{ $etudiant->filiere }}</td>
            <td class="px-5 py-3 text-sm text-[#0d121b] dark:text-white">{{ $etudiant->niveau }}</td>
            <td class="px-5 py-3 text-sm text-[#0d121b] dark:text-white">{{ $etudiant->promotion }}</td>
            <td class="px-5 py-3 text-sm text-[#0d121b] dark:text-white">Actif</td>
            <td class="px-5 py-3 text-sm text-right">
              <button class="text-blue-600 hover:underline mr-4">Éditer</button>
              <button class="text-red-600 hover:underline">Supprimer</button>
            </td>
          </tr>
          @endforeach
              
        </tbody>

</div>
</div>

@endsection
