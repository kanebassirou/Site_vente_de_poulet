<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vente de poulet</title>
    {{-- <link rel="stylesheet" href="assets/css/home/panier.css"> --}}
    <link rel="stylesheet" href="assets/css/home/footer.css" />
    <link rel="stylesheet" href="assets/css/home/header.css" />
    {{-- <link rel="stylesheet" href="assets/css/home/main.css" /> --}}
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
                <img src="assets/images/logo.png" alt="panier" class="header__logo--h1" /> 
                
                {{-- <div class="header__logo--h1">GuinarGui</div> --}}
            </div>

            <!-- Barre de navigation -->
            <nav class="header__nav">
                <ul class="header__nav--ul">
                    <li class="ul--list">
                        <a href="{{ route('acceuil1')}}" class="ul--list-link">
                            <i class="fa-solid fa-house"></i>Accueil</a>
                    </li>
                    <li class="ul--list">
                        <a href="/" class="ul--list-link">
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




        </header>
        



        <!-- MAIN -->
        <main>

        <div class="backImg" style="background-image: url('assets/images/background.png'); background-size: cover ;background-repeat: no-repeat;   width: 100%;  height: 300vh; image-rendering: optimizeQuality;">
        </div>

                    {{-- <h2>des poulets de qualite</h2> --}}
                  {{-- <img src="assets/images/background.png" alt=""> --}}
                  



                      {{-- formulaire pour valider la commande avec laravel --}}
                {{-- <form action="{{ route('valider-commande') }}" method="post" id="commandeForm">
                    @csrf
                    <input type="hidden" name="totalPayer" id="totalPayerInput" value="0">
                    <button type="submit" class="btn btn-secondary mt-2 ml-2">Valider la commande</button>
                </form> --}}


            </div>

            <div class="main__rightBox">
                <div class="main__rightBox--products">
                  
 
                </div>
                {{-- <div class="position-relative mt-5">
                    {{ $Produit->links() }}
               </div>
  --}}
           </div>
            </div>
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
  
</body>

</html>
