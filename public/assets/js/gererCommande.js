
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
    sauvegarderPanierCount(panier.length);w
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
