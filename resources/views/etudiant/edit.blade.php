@extends('layouts.app')
@section('title', 'Etudiant - Modifier')
@section('content')
    <div class="row">
        <div class="col-12 text-center pt-3">
            <h1 class="display-3 mt-3">Modifier {{ $etudiant->nom }}</h1>
        </div>
    </div>
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6">
            <div class="card mb-5">
                <form method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">   
                        <div class="control-group col-12">
                            <label for="nom">Nom :</label>
                            <input type="text" id="nom" name="nom" class="form-control" placeholder="Votre nom" value="{{ $etudiant->nom }}">
                        </div>
                        <div class="control-group col-12">
                            <label for="adresse">Adresse :</label>
                            <input type="text" id="adresse" name="adresse" class="form-control" value="{{ $etudiant->adresse }}">
                        </div>
                        <div class="control-group col-12">
                            <label for="telephone">Telephone</label>
                            <input type="tel" id="telephone" name="telephone" class="form-control" placeholder="123-456-7891" value="{{ $etudiant->telephone }}">
                        </div>
                        <div class="control-group col-12">
                            <label for="courriel">Courriel : </label>
                            <input type="email" id="courriel" name="courriel" class="form-control" placeholder="courriel@mail.com" value="{{ $etudiant->courriel }}">
                        </div>
                        <div class="control-group col-12">
                            <label for="date_naissance">Date de naissance</label>
                            <input type="date" id="date_naissance" name="date_naissance" class="form-control" placeholder="11-11-1111" value="{{ $etudiant->date_naissance }}">
                        </div>
                        <div class="control-group col-12">
                            <label for="ville_id">Ville</label>
                            <select name="ville_id" id="ville_id" class="form-control">
                                @foreach(\App\Models\Ville::pluck('nom', 'id') as $ville_id => $ville_nom)
                                    <option value="{{ $ville_id }}" @if($ville_id == $etudiant->ville_id) selected @endif>{{ $ville_nom }}</option>
                                @endforeach
                            </select>
                        </div>  
                    </div>
                    <div class="card-footer text-center p-3">
                        <a href="{{ route('etudiant.index') }}" class="col-mb-2 btn btn-dark me-4">Retour</a>
                        <input type="submit" class="col-mb-2 btn btn-success ">
                    </div>          
                </form>
            </div>
        </div>
    </div>
@endsection