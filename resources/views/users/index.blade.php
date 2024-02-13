@extends('layouts/layout')

@section('title', 'Accueil')

@section('content')

<!-- Barre de navigation -->
<div class="flex justify-between items-center my-2">
    <a href="{{ route('dashboard')}}" class="px-4 py-2 bg-blue-500 text-white rounded">Retour</a>

    <!-- Formulaire de recherche -->
    <div class="relative">
        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
            <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                <path d="M0 0h24v24H0z" fill="none"/>
                <path d="M4 4v3h16V4h2v16h-2v-3H4v3H2V4h2zm2 5h12v7H6V9z"/>
            </svg>
        </span>
        <form method="GET" action="#" class="flex">
            <input type="text" name="search" placeholder="Rechercher" class="w-full pl-10 bg-white border border-gray-300">
            <button type="submit">Rechercher</button>
        </form>   
    </div>
</div>

<!-- Titre de la page -->
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
  {{ __('la liste des clients') }}
</h2>

<!-- Tableau des clients -->
<div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Nom
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Prenom
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Email
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        TELEPHONE
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Adresse
                    </th>
             
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $client->name }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $client->prenom }}</p>
                            
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{$client->email }} </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                <p class="text-gray-900 whitespace-no-wrap">{{$client->numeroTelephone }}</p>
                            </p>
                
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $client->adresse }}</p>

                
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
