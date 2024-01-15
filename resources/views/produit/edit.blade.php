@extends('layouts/layout')
@section('title', 'Accueil')
@section('content')

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __("Modification d'un produit") }}
    </h2>
    <br>
    <br>
    {{-- @if ($produit instanceof \Illuminate\Database\Eloquent\Collection)
    @foreach ($produit as $item) --}}

    <form action="{{ route('produit.update', $produit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nomProduit">Nom du produit</label>
            <input value="@isset($produit->nomProduit)
                {{ $produit->nomProduit }} @endisset"
                type="text" class="form-control @error('nomProduit') is-invalid @enderror" id="nomProduit" name="nomProduit"
                required>
            @error('nomProduit')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="descriptionProduit">Description du produit</label>
            <textarea class="form-control @error('descriptionProduit') is-invalid @enderror" id="descriptionProduit"
                name="descriptionProduit" required>
                @isset($produit->descriptionProduit)
                   {{ $produit->descriptionProduit }}  
                @endisset
            </textarea>


            @error('descriptionProduit')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="prixProduit">Prix du produit</label>
            <input value="@isset($produit->prixProduit)
                {{ $produit->prixProduit }} @endisset"
                type="number" class="form-control @error('prixProduit') is-invalid @enderror" id="prixProduit"
                name="prixProduit" required>
            @error('prixProduit')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <div class="form-group">
            <label for="poidsProduit">Poids du produit</label>
            <input value="@isset($produit->poidsProduit)
                {{ $produit->poidsProduit }} @endisset"
                type="number" class="form-control @error('poidsProduit') is-invalid @enderror" id="poidsProduit"
                name="poidsProduit" required>
            @error('poidsProduit')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <div class="form-group">
            <label for="imageProduit">adress de l'image du produit</label>
            <input value="@isset($produit->imageProduit)
                {{ $produit->imageProduit }} @endisset"
                type="text" class="form-control @error('imageProduit') is-invalid @enderror" id="imageProduit"
                name="imageProduit" required>

            @error('imageProduit')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <div class="form-group">
            <label for="statusProduit">Statut du produit</label>
            <select class="form-control" id="statusProduit" name="statusProduit" required>
                <option value="1">Actif</option>
                <option value="0">Inactif</option>
            </select>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">
                Modifier le produit
            </button>
        </div>

    </form>
@endsection
