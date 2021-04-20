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
            <div class="livr">
                <div class="liv">
                    <a href=''>
                        <h3>livre et stock disponible</h3>
                    </a>

                </div>
                <div class="liv">
                    <a href=''>
                        <h3>auteur</h3>
                    </a>
                </div>
                <div class="liv">
                    <a href=''>
                        <h3>pays</h3>
                    </a>
                </div>
                <div class="liv">
                    <a href=''>
                        <h3>types</h3>
                    </a>
                </div>
            </div>
            <div class="list">
                <div class="align row">
                    <div class="col-lg-5 col-md-5 col-sm-12 carre">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Titres</th>
                                    <th scope="col">Auteurs</th>
                                    <th scope="col">Date de parrution</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($livres as $us)
                                <tr>
                                    <td>{{ $us->titre }}</td>
                                    <td>{{ $us->auteur->auteurs }}</td>
                                    <td>{{ $us->anneparution }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class=" col-lg-5 col-md-5 col-sm-12 carre">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Auteurs</th>
                                    <th scope="col">Nombre de livres</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($auteurs as $us)
                                <tr>
                                    <td>{{ $us->auteurs }}</td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="align row">
                    <div class="col-lg-5 col-md-5 col-sm-12 carre">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Pays</th>
                                    <th scope="col">Nombre de livres</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pays as $us)
                                <tr>
                                    <td>{{ $us->pays}}</td>
                                    <td>{{ $us->count() }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 carre">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Types</th>
                                    <th scope="col">Nombre de livres</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($types as $us)
                                <tr>
                                    <td>{{ $us->types}}</td>
                                    <td>{{ $us->count() }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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