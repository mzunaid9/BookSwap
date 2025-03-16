@extends('layouts.base')

@section('body')
<div class="container">
    <div class="row g-4">
        @if ($livres->count() > 0)
            @foreach ($livres as $livre)
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card" style="width: 100%;"> 
                    <img src="img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">{{ $livre->titre }}</p>
                        <p class="card-text">{{ $livre->auteur }}</p>
                        <p class="card-text">{{ $livre->description }}</p>
                    </div>
                    <a href="{{ route('showLivres', ['id'=>$livre->id]) }}" class="btn btn-primary">Voir</a>
                    <a href="{{ route('updateLivres1', ['id'=>$livre->id]) }}" class="btn btn-warning">Modifier</a>
                    <a href="{{ route('deleteLivres', ['id'=>$livre->id]) }}" class="btn btn-danger">Supprimer</a>
                </div>
            </div>
            @endforeach
        @else
            <p class="card-text">Aucun livre</p>
        @endif
    </div>
</div>
@endsection
