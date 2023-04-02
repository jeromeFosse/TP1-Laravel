<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equip="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="TP1 Laravel : Site étudiants Collège Maisonneuve">
        <meta name="author" content="Jerome Fosse (2285953)">
        
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>

    <body>
        <nav class="navbar bg-dark navbar-expand-lg d-flex p-4" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/MaisonneuveE2295853/">Maisonneuve Étudiant</a> 
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link p-2 me-4" href="{{route('etudiant.index')}}">Liste des étudiants</a>
                        <a class="nav-link p-2" href="{{ route('etudiant.create') }}">Ajouter un étudiant</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">

            @if(session('success'))
                <div class="row justify-content-center mt-2 mb-1">
                    <div class="col-md-6">
                        <div class="alert alert-success alert-dismissible fade show"> {{ session('success')}} 
                        {{-- alert-dismissible class (div) + data (bouton) --}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div> 
                    </div>
                </div>
            @endif

            @yield('content')

        </div>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>       
</html>