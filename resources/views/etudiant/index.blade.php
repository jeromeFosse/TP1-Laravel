@extends('layouts.app')
@section('title', 'Etudiant - Etudiants')
@section('content')
    <div class="row">
        <div class="col-12 text-center pt-3">
            <h1 class="display-3 mt-3">Liste des étudiants</h1>
        </div>
    </div>
    <div class="row mt-5 mb-3 justify-content-center">
        <div class="col-md-8 mb-5">
            <div class="card">
                <div class="card-body table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th class="p-3">#</th>
                                <th class="p-3">Nom</th>
                                <th class="p-3">Téléphone</th>
                                <th class="p-3">Courriel</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($etudiants as $etudiant)
                            <tr>
                                <td class="py-3 text-center"><a href="{{ route('etudiant.show', $etudiant->id) }}" class="lien-neutre">{{ $etudiant->id }}</a></td>
                                <td class="py-3"><a href="{{ route('etudiant.show', $etudiant->id) }}" class="lien-neutre"><strong>{{ $etudiant->nom }}</strong></a></td>
                                <td class="py-3 text-truncate"><a href="{{ route('etudiant.show', $etudiant->id) }}" class="lien-neutre">{{ $etudiant->telephone }}</a></td>
                                <td class="py-3 text-truncate"><a href="{{ route('etudiant.show', $etudiant->id) }}" class="lien-neutre">{{ $etudiant->courriel }}</a></td>
                                <td class="text-center"><a href="{{ route('etudiant.show', $etudiant->id) }}" class="btn btn-outline-dark">Voir</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-center p-3">
                    <div class="row col-md-12 align-items-center">
                        {{ $etudiants }}
                    </div>
                </div>
            </div>

        </div>
    </div>
    
@endsection