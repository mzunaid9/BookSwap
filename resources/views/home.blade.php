@extends('layouts.base')

@section('body')
        @foreach ($livres as $livre)
        <div class="card" style="width: 18rem;">
            <img src="img.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">{{ $livre->nom }}</p>
                <p class="card-text">{{ $livre->auteur }}</p>
                <p class="card-text">{{ $livre->description }}</p>
            </div>
            <button type="button" class="btn btn-success">Voir</button>
            <button type="button" class="btn btn-danger">Supprimer</button>
            <button type="button" class="btn btn-warning">Modifier</button>
        </div>
        @endforeach
@endsection