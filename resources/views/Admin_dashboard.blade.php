<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <!-- Ventes -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Ventes</h3>
                        <div class="mt-2 max-w-xl text-sm text-gray-500">
                            <p>Total des ventes ce mois-ci : 2222222222222222</p>
                        </div>
                    </div>
                </div>

                <!-- Commandes -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Commandes</h3>
                        <div class="mt-2 max-w-xl text-sm text-gray-500">
                            <p>Nombre total de commandes : 569000</p>
                        </div>
                        <div class="mt-5">
                            <a href="{{ route('valider-commande.index') }}" class="text-blue-500">Voir les commandes</a>
                        </div>
                    </div>
                </div>

                <!-- Clients -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Clients</h3>
                        <div class="mt-2 max-w-xl text-sm text-gray-500">
                            <p>Nombre total de clients : 4567776</p>
                        </div>
                        <div class="mt-5">
                            <a href="#" class="text-blue-500">Voir les clients</a>
                        </div>
                    </div>
                </div>

                <!-- Produits -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Produits</h3>
                        <div class="mt-2 max-w-xl text-sm text-gray-500">
                            <p>Nombre total de produits : 679000</p>
                        </div>
                        <div class="mt-5">
                            <a href="{{ route("produit.index")}}" class="text-blue-500">Voir les produits</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
