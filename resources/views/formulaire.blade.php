@extends('layouts.base')

@section('body')
@if ($situation=='create')
    <form method="POST" action="{{ route('saveLivre') }}" class="container mt-4">
        @csrf
        <div class="mb-3">
            <label for="titre" class="form-label">Titre du livre</label>
            <input type="text" class="form-control" id="titre" name="titre" placeholder="Entrez le titre du livre" required>
        </div>

        <div class="mb-3">
            <label for="auteur" class="form-label">Nom de l'auteur</label>
            <input type="text" class="form-control" id="auteur" name="auteur" placeholder="Entrez le nom de l'auteur" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Entrez une description" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@elseif ($situation=='update')
<form method="POST" action="{{ route('updateLivres2', ['id'=>$livre->id]) }}" class="container mt-4">
        @csrf
        <div class="mb-3">
            <label for="titre" class="form-label">Titre du livre</label>
            <input type="text" class="form-control" id="titre" name="titre" placeholder="Entrez le titre du livre" value="{{ $livre->titre }}" required>
        </div>

        <div class="mb-3">
            <label for="auteur" class="form-label">Nom de l'auteur</label>
            <input type="text" class="form-control" id="auteur" name="auteur" placeholder="Entrez le nom de l'auteur" value="{{ $livre->auteur }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Entrez une description" required>{{ $livre->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endif


@endsection