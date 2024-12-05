<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vente de poulet</title>
    <link rel="stylesheet" href="{{ asset('assets/css/home/panier.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/home/header.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/css/home/main.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet" />
</head>

<body>

    <div class="home__content">
        <!-- HEADER -->
        <header class="header">
            <!-- logo du site -->
            <div class="header__logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="panier" class="header__logo--h1" />

                {{-- <div class="header__logo--h1">GuinarGui</div> --}}
            </div>

            <!-- Barre de navigation -->
            <nav class="header__nav">
                <ul class="header__nav--ul">
                    <li class="ul--list">
                        <a href="{{ route('acceuil1') }}" class="ul--list-link">
                            <i class="fa-solid fa-house"></i>Accueil</a>
                    </li>
                    <li class="ul--list">
                        <a href="#product.html" class="ul--list-link">
                            <i class="fa-brands fa-product-hunt"></i>Produits</a>
                    </li>
                    <li class="ul--list">
                        <a href="#contact.html" class="ul--list-link">
                            <i class="fa-solid fa-address-book"></i>Contact</a>
                    </li>
                </ul>
            </nav>

            <!-- La barre de recherche -->
            <div class="header__search">
                <div class="hedaer__search--box">
                    <input type="text" placeholder="Rechercher un produit..." />
                    <i class="fa-solid fa-magnifying-glass search-icon"></i>
                </div>
            </div>

            <div
                class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ route('profile.show') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                {{ Auth::user()->name }}</a>
                            <form method="POST" action="{{ route('logout') }}" class="ml-4">
                                @csrf
                                <button type="submit"
                                    class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                    Logout
                                </button>
                            </form>
                        @else
                            <a href="{{ route('login') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 custom-login-link">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 custom-register-link">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif


        </header>




        <div class="text-center mt-5">
            <h3>Valider votre commande :</h3>
                    <p>C'est information seron imprimer dans votre facture</p>

        </div>
          </div>


            <form id="valider-commande-form" action="{{ route('valider-commande.store') }}" method="POST" class="p-4" style="margin: 20px; padding: 20px;">
                @csrf

                <div class="form-group md-3">
                    <label for="totalPayerInput">Total à payer</label>
                    <!-- Ajoutez readonly pour empêcher l'utilisateur de modifier la valeur -->
                    <input type="text" name="totalPayer" id="totalPayerInput" value="" class="form-control md-3" readonly>
                </div>
                <div class="form-group md-3">
                    <label for="user_id">Id user</label>
                    <input type="number" name="user_id" id="user_id" value="{{ Auth::user()->id }}" class="form-control">
                    <!-- Vous n'avez pas besoin de ce champ pour l'ID de l'utilisateur -->
                </div>
                <div class="form-group">
                    <label for="idProduit">Id produit</label>
                    <select name="idProduit" id="idProduit" class="form-control">
                        @foreach ($produits as $produit)
                            <option value="{{ $produit->id }}">{{ $produit->nomProduit }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="quantite">Quantité</label>
                    {{-- <input type="number" name="quantite" id="quantite" class="form-control"> --}}
                    <input type="number" name="quantite" id="panierCountInput" class="form-control" value="{{ old('quantite', '') }}">
                </div>
                <!-- Détails du produit -->
                <div class="form-group">
                    <label for="detailsProduit">Détails du produit</label>
                    <textarea id="detailsProduit" name="detailsProduit" class="form-control" readonly></textarea>
                </div>

                <!-- Méthode de paiement -->
                <div class="form-group">
                    <label for="methodePaiement">Méthode de paiement</label>
                    <select id="methodePaiement" name="methodePaiement" class="form-control">
                        <option value="carte">Carte de crédit</option>
                        <option value="paypal">PayPal</option>
                        <!-- Ajoutez ici d'autres méthodes de paiement -->
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Valider la commande</button>
            </form>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                console.log('Script exécuté après le chargement du DOM');

                // Récupérer la valeur du totalPayer à partir du cookie
                const totalPayerCookie = document.cookie.split(';').find(cookie => cookie.includes('totalPayer='));

                if (totalPayerCookie) {
                    const totalPayerValue = totalPayerCookie.split('=')[1].trim();

                    // Assigner la valeur au champ input
                    document.getElementById('totalPayerInput').value = totalPayerValue;
                }

                // Récupérer la valeur de panierCount à partir du cookie
                const panierCountCookie = document.cookie.split(';').find(cookie => cookie.includes('panierCount='));

                if (panierCountCookie) {
                    const panierCountValue = panierCountCookie.split('=')[1].trim();

                    // Assigner la valeur au champ input
                    document.getElementById('panierCountInput').value = panierCountValue;
                }
            });
        </script>
