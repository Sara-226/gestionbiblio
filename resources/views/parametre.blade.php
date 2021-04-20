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
            <h1>DOCUMENT</h1>
        </div>
    </div>
    <div class="corp ">
        <div class="menu col-2">
            <div class="mend mt-5">
                <a href="">
                    <h4>Document</h4>
                </a>
            </div>
            <div class="mend  mt-5">
                <a href="">
                    <h4>Ajouter</h4>
                </a>
            </div>
            <div class="mend  mt-5">
                <a href="">
                    <h4>Modification</h4>
                </a>
            </div>
            <div class="mend  mt-5">
                <a href="{{route('param')}}">
                    <h4>Paramètre</h4>
                </a>
            </div>
            <div class="mend  mt-5">
                <a href="">
                    <h4>Adhérant</h4>
                </a>
            </div>
            <div class="mend  mt-5">
                <a href="">
                    <h4>Déconnexion</h4>
                </a>
            </div>
        </div>
        <div class="compartiment col-10">
            <div class="livre">
                <div class="liv">
                    <h3>LIVRES ET STCOK DISPONIBLE</h3>
                </div>
            </div>
            <div class="list">
                <div class="align row">
     
                    <div class="col-lg-5 col-md-5 col-sm-12 carre">
                        <h1>
                            Auteur
                        </h1>
                        <form action="{{ url('auteur') }}" method="POST" class="">
                            @csrf
                            <input type="text" name="auteur" placeholder="titre" class="">
                            <p class="text-center text-light">@error('auteurs') {{ $message }} @enderror</p>

                            <input type="submit" placeholder="soumettre" class="rounded btn-light mt-5 submi">
                        </form>
                    </div>
                </div>
                <div class="align row">
                    <div class="col-lg-5 col-md-5 col-sm-12 carre">
                        <h1>
                            Catégorie
                        </h1>
                        <form action="{{ url('categorie') }}" method="POST" class="">
                            @csrf
                            <input type="text" name="type" placeholder="type" class="">
                            <p class="text-center text-light">@error('auteurs') {{ $message }} @enderror</p>

                            <input type="submit" placeholder="soumettre" class="rounded btn-light mt-5 submi">
                        </form>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 carre">
                        <h1>
                            Pays
                        </h1>
                        <form action="{{ url('pays') }}" method="POST" class="">
                            @csrf
                            <input type="text" name="pays" placeholder="pays" class="">
                            <p class="text-center text-light">@error('auteurs') {{ $message }} @enderror</p>

                            <input type="submit" placeholder="soumettre" class="rounded btn-light mt-5 submi">
                        </form>
                    </div>
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