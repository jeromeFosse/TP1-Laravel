@extends('layouts.app')
@section('title', 'Etudiant - Etudiant')
@section('content')
    <div class="d-flex flex-column mt-3 align-items-center">
        <div class="row">
        <div class="col-12 text-center pt-3">
            <h1 class="display-3 mt-3">{{$etudiant->nom}}</h1>
        </div>
    </div>
    <hr>
    <div class="card">
        <div class="card-body col-12">
            <p><strong>Adresse : </strong>{{$etudiant->adresse}}</p>
            <p><strong>Courriel : </strong>{{$etudiant->courriel}}</p>
            <p><strong>Telephone : </strong>{{$etudiant->telephone}}</p>
            <p><strong>Date de naissance : </strong>{{$etudiant->date_naissance}}</p>
            <p><strong>Ville : </strong>{{$etudiant->ville->nom}}</p>
        </div>
        <div class="card-footer p-3">
            <div class="row">
                <div class="col-4 text-center">
                    <a href="{{ route('etudiant.index') }}" class="btn btn-dark">Retour</a>
                </div>
                <div class="col-4 text-center">
                    <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="btn btn-success">Modifier</a>
                </div>
                <div class="col-4 text-center">
                    <input type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete" value="Effacer">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Suppression -->
    <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Suppression</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Êtes vous sur de vouloir supprimer : {{ $etudiant->nom }} ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <form method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Effacer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection