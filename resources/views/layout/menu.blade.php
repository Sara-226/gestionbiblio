<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{asset('css/index.css') }}" rel="stylesheet">
     <link href="{{asset('css/aderan.css') }}" rel="stylesheet">
     <title>Document</title>
 </head>

 <body>
     <div>
         <nav class="navi">
             <div class="container-fluid contenu">
                 <div>
                     <h1 class="savan">
                         LE SAVAN
                     </h1>
                 </div>
                 <div class=" les">
                     <h3 class=" navigation" aria-label="Search">
                         <a href="">Inscription</a>
                     </h3>
                     <h3 class="" type="search" aria-label="Search">
                         <a href="">Connexion</a>
                     </h3>
                 </div>
             </div>
         </nav>
         <div class="font" style="background-image: url({{asset('font/savan.webp')}});">
         @yield('contenu')
         </div>
         <footer class=" footeur">
             <div class="row footer">
                 <p class="copyright">2021-le SAVAN BF/AUF</p>
             </div>
         </footer>
         <!-- <div>
         <h1>
             inscription
         </h1>
         <form action="{{ url('register') }}" method="POST" class="">
             @csrf
             <input type="text" name="name" placeholder="Nom" class="">
             <p class="text-center text-light">@error('name') {{ $message }} @enderror</p>
             <p class="text-center text-light">@error('email') {{ $message }} @enderror</p>
             <input type="email" name="email" placeholder="email" class="">
             <input type="password" name="password" placeholder="password" class="">
             <p class="text-center text-light">@error('password') {{ $message }} @enderror</p>
             <input type="submit" placeholder="soumettre" class="rounded btn-light mt-5 submi">
         </form>
     </div>
     <div>
         <h1>
             connexion
         </h1>
         <form action="{{ url('connexion') }}" method="POST" class="">
             @csrf
             <input type="email" name="email" placeholder="email" class="">
             <p class="text-center text-light">@error('email') {{ $message }} @enderror</p>
             <input type="password" name="password" placeholder="password" class="">
             <p class="text-center text-light">@error('password') {{ $message }} @enderror</p>
             <input type="submit" placeholder="soumettre" class="rounded btn-light mt-5 submi">
         </form>
     </div> -->

     </div>
     <script src="{{asset('js/jquery.min.js') }}"></script>
      <script src="{{asset('js/index.js') }}"></script>
 </body>

 </html>