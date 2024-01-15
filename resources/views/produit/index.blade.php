@extends('layouts/layout')
@section('title', 'Accueil')
@section('content')

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('la liste des poulets en stock') }}
    </h2>
    <br>
    <br>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            
              <a href="{{ route('produit.create') }}" class="btn btn-primary">
                  Ajouter un nouveau poulets
              </a>
          </div>
          @if (Session::has('success'))
          <div class="alert alert-success">
              {{ Session::get('success') }}
          </div>
      @endif
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3"> <!-- Utilisation des colonnes selon la taille de l'écran -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Poids</th>
                <th>Description</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Produit as $produit)
            <tr>
                <td>{{ $produit->nomProduit }}</td>
                <td>{{ $produit->prixProduit }}</td>
                <td>{{ $produit->poidsProduit }}</td>
                <td>{{ $produit->descriptionProduit }}</td>
                <td><img src="{{ $produit->imageProduit }}" alt="Product Image" width="50"></td>
                <td class="d-inline-flex gap-1">
                        <a href="{{ route('produit.show', $produit->id) }}" class="btn btn-sm btn-primary">Détail</a>
                        <a href="{{ route('produit.edit', $produit->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                        <form action="{{ route('produit.destroy',$produit->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <input onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')"
                            type="submit" value="Supprimer" class="btn btn-sm btn-danger">
                        </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des poulets disponibles en stock') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Poids</th>
                            <th>Description</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Produit as $produit)
                        <tr>
                            <td>{{ $produit->nomProduit }}</td>
                            <td>{{ $produit->prixProduit }}</td>
                            <td>{{ $produit->poidsProduit }}</td>
                            <td>{{ $produit->descriptionProduit }}</td>
                            <td><img src="{{ $produit->imageProduit }}" alt="Product Image" width="50"></td>
                            <td class="d-inline-flex gap-1">
                                    <a href="{{ route('produit.show', $produit->id) }}" class="btn btn-sm btn-primary">Détail</a>
                                    <a href="{{ route('produit.edit', $produit->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                                    <a href="#"class ="btn btn-danger btn-sm">Supprime</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            

            </div>
        </div>
    </div>
</x-app-layout> --}}
