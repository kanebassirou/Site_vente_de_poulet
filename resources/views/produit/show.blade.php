@extends('layouts/layout')

@section('title', $produit->nomProduit)

@section('content')
    <div class="row col-md-12">
        <div class="col-md-3">
            <img src="{{ $produit->imageProduit}}" class="img img-thumbnail" width="300">
            
        </div>
        <div class="col-md-9">
            <h3> {{ $produit->nomProduit }}</h3>
            <p class="text">{{ $produit->prixProduit}} FCFA</p>
            <p class="text">
                {!! $produit->descriptionProduit !!}
            </p>
            <p class="text">
                <strong>Stock :</strong>{{ $produit->statusProduit }}
            </p>
            <p class="text">
                @if ($produit->statusProduit == true)
                    <span class="badge text-bg-success">
                        Activé
                    </span>
                    @else 
                    <span class="badge text-bg-danger">
                        Désactivé
                    </span>
                @endif
            </p>
            <p>
                <a href="{{ route('produit.index') }}" class="btn btn-primary">
                    Retour à la liste des poulets disponible
                </a>
            </p>
        </div>
    </div>
@endsection