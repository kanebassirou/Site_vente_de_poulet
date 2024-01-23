<style>
    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .btn {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #007bff;
    }
</style>

<form id="valider-commande-form" action="{{ route('valider-commande.store') }}" method="POST" >
    @csrf

    <div class="form-group">
        <label for="totalPayerInput">Total à payer</label>
        <!-- Ajoutez readonly pour empêcher l'utilisateur de modifier la valeur -->
        <input type="text" name="totalPayer" id="totalPayerInput" value="" readonly>
    </div>
        <div class="form-group">
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

        <button type="submit" class="btn btn-primary">Valider la commande</button>
        </form>


        <script>
            document.addEventListener('DOMContentLoaded', function () {
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