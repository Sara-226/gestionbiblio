<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/index.css') }}" rel="stylesheet">
    <link href="{{asset('fonts/css/all.css') }}" rel="stylesheet">
</head>

<body>
    <div class="info ">
        <div class="admin col-2">
            <h1>ADMIN</h1>
        </div>
        <div class="ajou col-10">
            <h1>AJOUTER DES INFORMATION</h1>
        </div>
    </div>
    <div class="corp ">
        <div class="menu col-2">
            <div class="menue mt-5">
                <a href="">
                    <h4>Document</h4>
                </a>
            </div>
            <div class="menue  mt-5">
                <a href="">
                    <h4>Ajouter</h4>
                </a>
            </div>
            <div class="menue  mt-5">
                <a href="">
                    <h4>Modification</h4>
                </a>
            </div>
            <div class="mend  mt-5">
                <a href="{{route('param')}}">
                    <h4>Paramètre</h4>
                </a>
            </div>
            <div class="menue  mt-5">
                <a href="">
                    <h4>Adhérant</h4>
                </a>
            </div>
            <div class="menue  mt-5">
                <a href="">
                    <h4>Déconnexion</h4>
                </a>
            </div>
        </div>
        <div class="compartiment col-10">
            <div class="livre">
                <div class="liv">
                    <h3>LIVRES</h3>
                </div>
            </div>
            <div class="liste">
                <div class="col-lg-5 col-md-6 col-sm-12 carr">
                    <h1 class="text-center mt-1 afterwork">Ajouter un livre</h1>
                    @if(Session::has('message'))
                    <p class="alert {{Session::get('alert-class','alert-success')}} ">
                        {{Session::get('message')}}
                    </p>
                    @endif
                    <form action="{{ url('livr') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">TITRE</label>
                            <input type="text" placeholder="Titre" name="titre" class="form-control ">
                            <label for="" class=" mt-2">Date de parrution</label>
                            <input type="date" name="anneparution" placeholder="Année de parution" class="form-control">
                            <label for="" class=" mt-2">Auteurs</label>
                            <select name="auteur_id" class=" form-control" placeholder="Auteur">

                                <option>choisir l'auteur</option>
                                @foreach($auteur as $us)
                                <option value="{{ $us->id }}">
                                    {{ $us->auteurs }}
                                </option>
                                @endforeach
                            </select>
                            <label for="" class=" mt-2">Pays</label>
                            <select name="pay_id" class="form-control" placeholder="Pays">
                                <option>choisir un pays</option>
                                @foreach($pays as $us)
                                <option value="{{ $us->id }}">
                                    {{ $us->pays }}
                                </option>
                                @endforeach
                            </select>
                            <label for="" class=" mt-2">Types</label>
                            <select name="type_id" class="form-control" placeholder="Types">

                                <option>choisir une catégorie</option>
                                @foreach($type as $us)
                                <option value="{{ $us->id }}">
                                    {{ $us->types }}
                                </option>
                                @endforeach
                            </select>
                            <div class="row">
                                <div class="col-12 bouton">
                                    <button type="submit" class="btn btn-info mt-3 ">Ajouter</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class=" footeur">
        <div class="row footer">
            <p class="copyright">2021-le SAVAN BF/AUF</p>
        </div>
    </footer>

</body>

</html>
