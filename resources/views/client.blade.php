<x-app-layout>
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
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
			integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<link
			href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap"
			rel="stylesheet"
		/>
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
							<a href="home.html" class="ul--list-link">
								<i class="fa-solid fa-house"></i>Accueil</a
							>
						</li>
						<li class="ul--list">
							<a href="product.html" class="ul--list-link">
								<i class="fa-brands fa-product-hunt"></i>Produits</a
							>
						</li>
						<li class="ul--list">
							<a href="contact.html" class="ul--list-link">
								<i class="fa-solid fa-address-book"></i>Contact</a
							>
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
			<main class="main">
				<div class="main__leftBox">
					<div class="main__leftBox--panier">
						<h2>Panier</h2>
						<img src="assets/images/icones/3035365.png" alt="panier" class="panierAnimation"/>
						<span class="spanPanier"></span>
					</div>
				</div>

				<div class="main__rightBox">
					<div class="main__rightBox--products">
						<div class="product-content">
							<img
								class="product-content--image"
								src="assets/images/carcasse-poulet-cru-planche-decouper-isolee-on-white_109285-1132.jpg"
								alt=""
							/>
							<div class="product-content--imageDesc">
								<p>Poulet de chaire</p>
								<span>3 000 fcfa</span>
								<button class="btnAjoutPanier">Ajouter au panier</button>
							</div>
						</div>
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
					<a
						href="www.facebook.com"
						target="_blank"
						class="footer__socialNetwork--link facebook"
						><i class="fa-brands fa-facebook"></i
					></a>
					<a
						href="www.youtube.com"
						target="_blank"
						class="footer__socialNetwork--link youtube"
						><i class="fa-brands fa-youtube"></i
					></a>
					<a
						href="www.instagram.com"
						target="_blank"
						class="footer__socialNetwork--link instagram"
						><i class="fa-brands fa-square-instagram"></i
					></a>
					<a
						href="www.whatsapp.com"
						target="_blank"
						class="footer__socialNetwork--link whatsapp"
						><i class="fa-brands fa-square-whatsapp"></i
					></a>
					<a
						href="www.twitter.com"
						target="_blank"
						class="footer__socialNetwork--link twitter"
						><i class="fa-brands fa-twitter"></i
					></a>
				</div>

				<div class="copyright">
					<p>©Copyright-2024-GuinarGui</p>
				</div>
			</footer>
		</div>

		<script src="assets/js/home.js"></script>
	</body>
</html>
  
</x-app-layout>


