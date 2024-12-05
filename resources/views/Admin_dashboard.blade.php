<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Vente de poulets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<x-app-layout>  
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Page d'administateur") }}
        </h2>
    </x-slot> --}}


    <div class="py-12 container mt-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <!-- Ventes -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Ventes</h3>
                        <div class="mt-2 max-w-xl text-sm text-white-500 btn btn-info">
                            <p>Total des ventes ce mois-ci : {{$totalVentesMois}}</p>
                        </div>
                    </div>
                </div>

                <!-- Commandes -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Commandes</h3>
                        <div class="mt-2 max-w-xl text-sm text-white-500 btn btn-info">
                            <p>Nombre total de commandes :{{$totalCommandes }}</p>
                        </div>
                        <div class="mt-5">
                            <a href="{{ route('commande.index') }}" class="text-white-500 btn btn-success">Voir les commandes</a>
                        </div>
                    </div>
                </div>

                <!-- Clients -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Clients</h3>
                        <div class="mt-2 max-w-xl text-sm text-white-500 btn btn-info">
                            <p>Nombre total de clients :    {{ $totalClients }}</p>
                        </div>
                        <div class="mt-5">
                            <a href="{{ route('clients.index')}}" class="text-white-500 btn btn-success">Voir les clients</a>
                        </div>
                    </div>
                </div>

                <!-- Produits -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Produits</h3>
                        <div class="mt-2 max-w-xl text-sm text-white-500 btn btn-info">
                            <p>Nombre total de produits : 679000</p>
                        </div>
                        <div class="mt-5">
                            <a href="{{ route("produit.index")}}" class="text-white-500 btn btn-success">Voir les produits</a>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
    
</body>
{{-- @endsection --}}
