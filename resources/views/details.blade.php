<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $produit->nomProduit }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ $produit->imageProduit}}" class="img-thumbnail" width="300">
            </div>
            <div class="col-md-9">
                <h3>{{ $produit->nomProduit }}</h3>
                <p class="text">{{ $produit->prixProduit}} FCFA</p>
                <p class="text">
                    {!! $produit->descriptionProduit !!}
                </p>
                <p class="text">
                    <strong>Stock :</strong>{{ $produit->statusProduit }}
                </p>
                <p class="text">
                    @if ($produit->statusProduit == true)
                        <span class="badge badge-success">
                            Activé
                        </span>
                    @else 
                        <span class="badge badge-danger">
                            Désactivé
                        </span>
                    @endif
                </p>
                <p>
                    <a href="/" class="btn btn-primary">
                        Retour 
                    </a>
                </p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
