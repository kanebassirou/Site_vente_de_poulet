<form action="{{ route('produit.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nomProduit">Nom du produit</label>
        <input type="text" class="form-control" id="nomProduit" name="nomProduit" required>
    </div>
    <div class="form-group">
        <label for="descriptionProduit">Description du produit</label>
        <textarea class="form-control" id="descriptionProduit" name="descriptionProduit" required></textarea>
    </div>
    <div class="form-group">
        <label for="prixProduit">Prix du produit</label>
        <input type="number" class="form-control" id="prixProduit" name="prixProduit" required>
    </div>
    <div class="form-group">
        <label for="poidsProduit">Poids du produit</label>
        <input type="number" class="form-control" id="poidsProduit" name="poidsProduit" required>
    </div>
    <div class="form-group">
        <label for="imageProduit">Image du produit</label>
        <input type="file" class="form-control" id="imageProduit" name="imageProduit" required>
    </div>
    <div class="form-group">
        <label for="statusProduit">Statut du produit</label>
        <select class="form-control" id="statusProduit" name="statusProduit" required>
            <option value="1">Actif</option>
            <option value="0">Inactif</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter le produit</button>
</form>