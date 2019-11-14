<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projet oeuvre</title>

        <script src="https://kit.fontawesome.com/cd098baae3.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>  
        <script type="text/javascript" src="js/app.js"></script>
        <link rel="stylesheet" type="text/css" href="css/app.css"> 
         </head>
    <body>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <div class="container">
            <header class="">
                <img src="../public/img/header.jpg" alt="banniere avec des fruits" class="img-fluid">
            </header>
            
            <nav class="navbar navbar-expand-md bg-success navbar-dark ">
    <!-- Brand -->
    <a class="navbar-brand" href="../public">Accueil</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            @if (Auth::guest()) 
            <li class="nav-item">
                <a class="nav-link text-white" href="inscription">Inscription</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="connexion">Connexion</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link text-white" href="mon-compte">Mon-compte</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="musculation">Musculation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="maj-mb">Mes besoins caloriques journalier</a>
            </li>
             <li class="nav-item">
                <a class="nav-link text-white" href="maj-mdp">changer mdp</a>
            </li>
            <li>
                <a href="deconnexion" class="nav-link text-white btn btn-danger float-right">Déconnexion</a>
            </li>
            @endif


          
        </ul>
    </div>
</nav>

            @include('flash::message')

            @yield('contenu')


        <footer class="bg-success">
				<div class="text-center">
        		<a href="https://github.com/albanSimplon"><i class="fab fa-github fa-2x text-white"></i></a>
                <br>
                <a href="https://www.linkedin.com/in/alban-veux-254a01189/"><i class="fab fa-linkedin fa-2x text-white"></i></a>
				</div>
        </footer>
</div>
    </body>
</html>
