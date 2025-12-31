@extends('appBar.bar-export')

@section('title', 'Enregistrement Jury')

@section('content')
  {{-- Ici tu mets uniquement le contenu de la page (breadcrumb + formulaire + etc.) --}}
<!-- Breadcrumbs -->
<nav class="flex flex-wrap gap-2 pb-4 text-sm">
  <a class="text-[#4c669a] dark:text-gray-400 hover:text-primary font-medium" href="{{ route('dashboard') }}">Accueil</a>
  <span class="text-[#4c669a] dark:text-gray-600">/</span>
  <span class="text-[#0d121b] dark:text-gray-200 font-medium">Enregistrement Jury</span>
</nav>

<!-- Header -->
<div class="mb-8">
  <h1 class="text-3xl md:text-4xl font-black text-[#0d121b] dark:text-white mb-2">
    Enregistrer un Jury
  </h1>
  <p class="text-[#4c669a] dark:text-gray-400">
    Renseignez les informations du jury, la session, la promotion et les membres.
  </p>
</div>

<!-- Form Card -->
<div class="bg-white dark:bg-[#1a202c] rounded-xl shadow-sm border border-[#e7ebf3] dark:border-gray-700 p-6">

  <form class="grid grid-cols-1 md:grid-cols-2 gap-6" method="post">
 @csrf
    <!-- Code Jury -->
    <div>
      <label class="block text-sm font-medium mb-2">Code Jury</label>
      <input
        name="code_jury"
        placeholder="JURY-154"
        class="w-full h-12 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-[#f8f9fc] dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
    </div>

    <!-- Nom du Jury -->
    <div>
      <label class="block text-sm font-medium mb-2">Nom du Jury</label>
      <input
        name="nom_jury"
        placeholder="Jury S5 - Informatique"
        class="w-full h-12 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-[#f8f9fc] dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
    </div>

    <!-- Promotion -->
    <div>
      <label class="block text-sm font-medium mb-2">Promotion</label>
      <input
        name="promotion"
        placeholder="Licence 3 - Informatique (2023-2024)"
        class="w-full h-12 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-[#f8f9fc] dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
    </div>

    <!-- Semestre -->
    <div>
      <label class="block text-sm font-medium mb-2">Semestre</label>
      <select
        name="semestre"
        class="w-full h-12 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-white dark:bg-gray-800 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
        <option>Semestre 1</option>
        <option>Semestre 2</option>
        <option>Semestre 3</option>
        <option>Semestre 4</option>
        <option selected>Semestre 5</option>
        <option>Semestre 6</option>
        <option>Annuel</option>
      </select>
    </div>

    <!-- Session -->
    <div>
      <label class="block text-sm font-medium mb-2">Session</label>
      <select
        name="session"
        class="w-full h-12 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-white dark:bg-gray-800 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
        <option selected>Normale</option>
        <option>Rattrapage</option>
      </select>
    </div>

    <!-- Année académique -->
    <div>
      <label class="block text-sm font-medium mb-2">Année académique</label>
      <input
        name="annee_academique"
        placeholder="2023-2024"
        class="w-full h-12 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-[#f8f9fc] dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
    </div>

    <!-- Date de délibération -->
    <div>
      <label class="block text-sm font-medium mb-2">Date de délibération</label>
      <input
        type="date"
        name="date_deliberation"
        class="w-full h-12 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-[#f8f9fc] dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
    </div>

    <!-- Statut -->
    <div>
      <label class="block text-sm font-medium mb-2">Statut</label>
      <select
        name="statut"
        class="w-full h-12 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-white dark:bg-gray-800 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
        <option selected>Actif</option>
        <option>Clôturé</option>
        <option>Archivé</option>
      </select>
    </div>

    <!-- Président du jury -->
    <div>
      <label class="block text-sm font-medium mb-2">Président du jury</label>
      <input
        name="president"
        placeholder="Pr. Nom Prénom"
        class="w-full h-12 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-[#f8f9fc] dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
    </div>

    <!-- Secrétaire du jury -->
    <div>
      <label class="block text-sm font-medium mb-2">Secrétaire du jury</label>
      <input
        name="secretaire"
        placeholder="Dr. Nom Prénom"
        class="w-full h-12 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-[#f8f9fc] dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
    </div>

    <!-- Membres (liste) -->
    <div class="md:col-span-2">
      <label class="block text-sm font-medium mb-2">Membres du jury</label>
      <textarea
        name="membres"
        rows="4"
        placeholder="Ex:\n- Mme Awa DIOP\n- M. Mamadou NDIAYE\n- Mme Fatou SARR"
        class="w-full rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-[#f8f9fc] dark:bg-white/5 px-4 py-3 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none resize-none"
      ></textarea>
      <p class="text-xs text-[#4c669a] dark:text-gray-400 mt-2">
        Saisissez un membre par ligne (format libre). Plus tard on le rendra dynamique (ajout/suppression).
      </p>
    </div>

    <!-- Remarques -->
    <div class="md:col-span-2">
      <label class="block text-sm font-medium mb-2">Remarques</label>
      <textarea
        name="remarques"
        rows="3"
        placeholder="Observations, décisions, mentions..."
        class="w-full rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-[#f8f9fc] dark:bg-white/5 px-4 py-3 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none resize-none"
      ></textarea>
    </div>

    <!-- Actions -->
    <div class="md:col-span-2 flex justify-end gap-3 pt-4 border-t border-[#e7ebf3] dark:border-gray-700">
      <button
        type="reset"
        class="px-6 py-2 rounded-lg border border-[#e7ebf3] dark:border-gray-600 text-sm hover:bg-gray-50 dark:hover:bg-gray-700"
      >
        Annuler
      </button>
      <button
        type="submit"
        class="px-8 py-2 rounded-lg bg-primary text-white font-bold hover:bg-blue-700 shadow-md shadow-blue-500/20"
      >
        Enregistrer le jury
      </button>
    </div>

  </form>
</div>

@endsection







