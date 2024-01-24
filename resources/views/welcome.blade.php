<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vente de poulet</title>
    <link rel="stylesheet" href="assets/css/home/panier.css">
    <link rel="stylesheet" href="assets/css/home/footer.css" />
    <link rel="stylesheet" href="assets/css/home/header.css" />
    <link rel="stylesheet" href="assets/css/home/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
                <h1 class="header__logo--h1">GuinarGui</h1>
            </div>

            <!-- Barre de navigation -->
            <nav class="header__nav">
                <ul class="header__nav--ul">
                    <li class="ul--list">
                        <a href="#home.html" class="ul--list-link">
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



        <!-- MAIN -->
        <main class="main">

            <div class="main__leftBox">
                <div class="main__leftBox--panier">
                    <h2>Panier</h2>
                    <img src="assets/images/icones/3035365.png" alt="panier" class="panierAnimation" />
                    <span class="spanPanier" id="panierCount">0</span>

                    <div id="panierContent">
                        <!-- Contenu du panier -->

                    </div>


                </div>
                <div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>


                <h5>Total à payer : <span id="totalPayer">0 fcfa</span></h5>
                {{-- <button class="btn btn-success mt-2 ml-2" id="validerCommande" onclick="validerCommande()">Valider la commande</button> --}}
                <a href="{{ route('valider-commande.create') }}"><button class="btn btn-secondary mt-2 ml-2"
                        id="validerCommande" onclick="submitCommande()">Valider la commande</button></a>

                {{-- formulaire pour valider la commande avec laravel --}}
                {{-- <form action="{{ route('valider-commande') }}" method="post" id="commandeForm">
                    @csrf
                    <input type="hidden" name="totalPayer" id="totalPayerInput" value="0">
                    <button type="submit" class="btn btn-secondary mt-2 ml-2">Valider la commande</button>
                </form> --}}


            </div>

            <div class="main__rightBox">
                <div class="main__rightBox--products">
                    @foreach ($Produit as $produit)
                        <div class="product-content">

                            <img class="product-content--image" src="{{ $produit->imageProduit }}"
                                alt="{{ $produit->nomProduit }}" />
                            <div class="product-content--imageDesc">
                                <H6>{{ $produit->nomProdut }}</H6>
                                <span>{{ $produit->prixProduit }} fcfa</span>
                                <button class="btnAjoutPanier"
                                    onclick="ajouterAuPanier(' <H6>{{ $produit->nomProduit }} </H6>', {{ $produit->prixProduit }})">Ajouter
                                    au panier</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <script>
                let panier = [];

                function ajouterAuPanier(nomProduit, prixProduit) {
                    panier.push({
                        nomProduit,
                        prixProduit
                    });
                    updatePanierUI();
                }

                function updatePanierUI() {
                    const panierCount = document.getElementById('panierCount');
                    const panierContent = document.getElementById('panierContent');
                    const totalPayerElement = document.getElementById('totalPayer');

                    panierCount.innerText = panier.length;

                    const panierHTML = panier.map(item => `<div>${item.nomProduit} - ${item.prixProduit} fcfa</div>`).join('');
                    panierContent.innerHTML = panierHTML;

                    const totalPayer = panier.reduce((total, item) => total + item.prixProduit, 0);
                    totalPayerElement.innerText = `${totalPayer} fcfa`;

                    // Sauvegarder le totalPayer dans un cookie ou le stockage local
                    sauvegarderTotalPayer(totalPayer);
                    sauvegarderPanierCount(panier.length);
                }

                function validerCommande() {
                    // Envoyer le panier au backend pour traitement
                    // Vous pouvez utiliser AJAX ou un formulaire pour cette étape
                    // Ensuite, réinitialisez le panier et mettez à jour l'interface utilisateur
                    panier = [];
                    updatePanierUI();
                    alert('Vous voulez validée votre Commande !');
                }

                function sauvegarderTotalPayer(totalPayer) {
                    // Utilisation des cookies (vous pouvez également utiliser localStorage)
                    document.cookie = `totalPayer=${totalPayer}`;
                    // console.log('TotalPayer sauvegardé:', totalPayer);
                    document.cookie = `totalPayer=${totalPayer}`;
                }

                function sauvegarderPanierCount(panierCount) {
                    // Utilisation des cookies (vous pouvez également utiliser localStorage)
                    document.cookie = `panierCount=${panierCount}`;
                }

                function submitCommande() {
                    // Envoyer le formulaire via AJAX

                    const form = document.getElementById('valider-commande-form');
                    const formData = new FormData(form);

                    fetch(form.action, {
                            method: form.method,
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            // Traitez la réponse si nécessaire

                            // Réinitialisez le panier et mettez à jour l'interface utilisateur
                            panier = [];
                            updatePanierUI();
                            alert('Vous voulez valider votre commande !');
                        })
                        .catch(error => {
                            console.error('Erreur lors de la soumission du formulaire:', error);
                        });
                }
            </script>

        </main>

        <footer class="footer">
            <div class="footer__contact">
                <h3 class="footer__contact--h3">Contact</h3>
                <a href="#" class="footer__contact--link">Qui sommes-nous ?</a>
                <a href="#" class="footer__contact--link">Contactez-nous</a>
            </div>
            <div class="footer__socialNetwork">
                <h3 class="footer__socialNetwork--h3">Reseaux sociaux</h3>
                <a href="www.facebook.com" target="_blank" class="footer__socialNetwork--link facebook"><i
                        class="fa-brands fa-facebook"></i></a>
                <a href="www.youtube.com" target="_blank" class="footer__socialNetwork--link youtube"><i
                        class="fa-brands fa-youtube"></i></a>
                <a href="www.instagram.com" target="_blank" class="footer__socialNetwork--link instagram"><i
                        class="fa-brands fa-square-instagram"></i></a>
                <a href="www.whatsapp.com" target="_blank" class="footer__socialNetwork--link whatsapp"><i
                        class="fa-brands fa-square-whatsapp"></i></a>
                <a href="www.twitter.com" target="_blank" class="footer__socialNetwork--link twitter"><i
                        class="fa-brands fa-twitter"></i></a>
            </div>

            <div class="copyright">
                <p>©Copyright-2024-GuinarGui</p>
            </div>
        </footer>
    </div>

    <script src="assets/js/home.js"></script>
</body>

</html>
