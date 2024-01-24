<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-2">Liste des Produits</h3>
                    <a href="{{ route('produit.index') }}" class="text-blue-500">Voir la liste des produits</a>
                </div>

                <!-- 1. Stock de Poulet -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-2">Stock de Poulet</h3>
                    <p>Quantité actuelle en stock : 500</p>
                </div>

                <!-- 2. Statistiques des Ventes -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-2">Statistiques des Ventes</h3>
                    <p>Total des ventes ce mois-ci : $25,000</p>
                    <!-- Ajoutez des graphiques ou d'autres statistiques si nécessaire -->
                </div>

                <!-- 3. Commandes en Attente -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-2">Commandes en Attente</h3>
                    <ul>
                        <li>Commande #123 - En attente de traitement</li>
                        <li>Commande #124 - En attente de confirmation de paiement</li>
                    </ul>
                </div>

                <!-- 4. Produits les plus Vendus -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-2">Produits les plus Vendus</h3>
                    <p>Poulet Rôti - 120 unités vendues</p>
                    <p>Poulet Grillé - 90 unités vendues</p>
                </div>

                <!-- 5. Statut de Livraison -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-2">Statut de Livraison</h3>
                    <p>Commande #123 - En transit</p>
                    <p>Commande #124 - Livrée</p>
                </div>

                <!-- 6. Alertes de Stock Faible -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-2">Alertes de Stock Faible</h3>
                    <p>Alerte : Stock de Poulet Grillé faible</p>
                </div>

                <!-- 7. Feedback Client -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-2">Feedback Client</h3>
                    <ul>
                        <li>Avis positif de Client #1 - "Excellent service!"</li>
                        <li>Avis négatif de Client #2 - "Délai de livraison trop long"</li>
                    </ul>
                </div>

                <!-- 8. Promotions en Cours -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-2">Promotions en Cours</h3>
                    <p>Promotion spéciale : 10% de réduction sur le Poulet Rôti</p>
                </div>

                <!-- 9. Rappels de Commande -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-2">Rappels de Commande</h3>
                    <p>Rappel : Prochaine livraison pour l'abonnement mensuel le 25 janvier</p>
                </div>

                <!-- 10. Statut du Site -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold mb-2">Statut du Site</h3>
                    <p>Le site fonctionne normalement</p>
                </div>

            </div>
        </div>
    </div>

    
</x-app-layout>
