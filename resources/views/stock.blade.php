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
                <a href="{{route('stock')}}">
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
            </div>

            <div class="row">
    <div class="col-4">
        liste par auteur
        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Auteurs</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($auteurs as $us)
                                <tr>
                                    <td class=""> <a class="btn btn-info" href="{{route('auteur.livre', $us->id)}}"> {{ $us->auteurs }}</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
    </div>
    <div class="col-4">
    liste par pays
    <table class="table">
                            <thead>
                                <tr>
                                     
                                    <th scope="col">pays</th>
                                     
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pays as $us)
                                <tr>
                                    <td class=""> <a class="btn btn-success" href="{{route('pays.livre', $us->id)}} "> {{ $us->pays }}</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
    </div>
    <div class="col-4">
        liste par type
    <table class="table">
                            <thead>
                                <tr>
                                     
                                    <th scope="col">Type</th>
                                     
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($types as $us)
                                <tr>
                                    <td class=""> <a class="btn btn-primary" href="{{route('type.livre', $us->id)}} "> {{ $us->types }}</a></td>
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