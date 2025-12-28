@extends('appBar.bar-export')

@section('title', 'Ajouter Étudiant - GradeSecure')

@section('content')
  {{-- Ici tu mets uniquement le contenu de la page (breadcrumb + formulaire + etc.) --}}
   
  {{-- <h1 class="text-2xl font-bold">Ajouter un étudiant</h1> --}}

<!-- Breadcrumbs -->
<nav class="flex flex-wrap gap-2 pb-4 text-sm">
  <a class="text-[#4c669a] dark:text-gray-400 hover:text-primary font-medium" href="{{ route('export') }}">Accueil</a>
  <span class="text-[#4c669a] dark:text-gray-600">/</span>
  <span class="text-[#0d121b] dark:text-gray-200 font-medium">Ajout Étudiant</span>
</nav>

<!-- Header -->
<div class="mb-8">
  <h1 class="text-3xl md:text-4xl font-black text-[#0d121b] dark:text-white mb-2">
    Ajouter un Étudiant
  </h1>
  <p class="text-[#4c669a] dark:text-gray-400">
    Saisissez les informations académiques et personnelles de l’étudiant.
  </p>
</div>

<!-- Form Card -->
<div class="bg-white dark:bg-[#1a202c] rounded-xl shadow-sm border border-[#e7ebf3] dark:border-gray-700 p-6">

  <form class="grid grid-cols-1 md:grid-cols-2 gap-6">

    <!-- Matricule -->
    <div>
      <label class="block text-sm font-medium mb-2">Matricule</label>
      <input
        name="matricule"
        placeholder="2024-INF-001"
        class="w-full h-12 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-[#f8f9fc] dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
    </div>

    <!-- Numéro étudiant -->
    <div>
      <label class="block text-sm font-medium mb-2">Numéro étudiant</label>
      <input
        name="numero_etudiant"
        placeholder="ETU-45879"
        class="w-full h-12 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-[#f8f9fc] dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
    </div>

    <!-- Nom -->
    <div>
      <label class="block text-sm font-medium mb-2">Nom</label>
      <input
        name="nom"
        placeholder="DIOP"
        class="w-full h-12 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-[#f8f9fc] dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
    </div>

    <!-- Prénom -->
    <div>
      <label class="block text-sm font-medium mb-2">Prénom</label>
      <input
        name="prenom"
        placeholder="Awa"
        class="w-full h-12 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-[#f8f9fc] dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
    </div>

    <!-- Sexe -->
    <div>
      <label class="block text-sm font-medium mb-2">Sexe</label>
      <select
        name="sexe"
        class="w-full h-12 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-white dark:bg-gray-800 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
        <option>Masculin</option>
        <option>Féminin</option>
      </select>
    </div>

    <!-- Date de naissance -->
    <div>
      <label class="block text-sm font-medium mb-2">Date de naissance</label>
      <input
        type="date"
        name="date_naissance"
        class="w-full h-12 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-[#f8f9fc] dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
    </div>

    <!-- Email -->
    <div>
      <label class="block text-sm font-medium mb-2">Email</label>
      <input
        type="email"
        name="email"
        placeholder="etu@email.com"
        class="w-full h-12 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-[#f8f9fc] dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
    </div>

    <!-- Téléphone -->
    <div>
      <label class="block text-sm font-medium mb-2">Téléphone</label>
      <input
        name="telephone"
        placeholder="+221 77 000 00 00"
        class="w-full h-12 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-[#f8f9fc] dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
    </div>

    <!-- Filière -->
    <div>
      <label class="block text-sm font-medium mb-2">Filière</label>
      <select
        name="filiere"
        class="w-full h-12 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-white dark:bg-gray-800 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
        <option>Informatique</option>
        <option>Mathématiques</option>
        <option>Réseaux & Télécoms</option>
      </select>
    </div>

    <!-- Niveau -->
    <div>
      <label class="block text-sm font-medium mb-2">Niveau</label>
      <select
        name="niveau"
        class="w-full h-12 rounded-lg border border-[#e7ebf3] dark:border-gray-700 bg-white dark:bg-gray-800 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none"
      >
        <option>Licence 1</option>
        <option>Licence 2</option>
        <option>Licence 3</option>
        <option>Master 1</option>
        <option>Master 2</option>
      </select>
    </div>

    <!-- Promotion -->
    <div>
      <label class="block text-sm font-medium mb-2">Promotion</label>
      <input
        name="promotion"
        placeholder="2023 - 2024"
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
        <option>Actif</option>
        <option>Suspendu</option>
        <option>Abandonné</option>
      </select>
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
        Enregistrer l’étudiant
      </button>
    </div>

  </form>
</div>

@endsection









