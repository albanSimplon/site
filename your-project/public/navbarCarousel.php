<?php require('header.php'); ?>


  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand text-body" href="">Acceuil</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Mes projets
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="dietcal/public">Dietcal</a>
                  <a class="dropdown-item" href="/netflix">Catégories cachées netflix</a>
    
    
                </div>
              </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="cv">Mon CV</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Contact</a>
          </li>


        </ul>
      </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block m-auto w-50" src="img/fondTransparent.png" alt="">
          <div class="carousel-caption d-block">
            <h5>Bienvenu sur mon site</h5>
            <p>Vous y trouverez mes projets ainsi que différentes infos</p>
            <p>Bonne visite</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block m-auto w-50" src="img/dietcal1.png" alt="Second slide">
          <div class="carousel-caption d-block lienProjet">
            <a class="btn btn-secondary" href="#" role="button">Visiter ce projet</a>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block m-auto w-50" src="img/dietcal2.png" alt="Third slide">
          <div class="carousel-caption d-block lienProjet">
              <a class="btn btn-secondary" href="#" role="button">Visiter ce projet</a>
            </div>
        </div>
        <div class="carousel-item">
          <img class="d-block m-auto w-50" src="img/netflix1.png" alt="Third slide">
          <div class="carousel-caption d-block lienProjet">
              <a class="btn btn-secondary" href="#" role="button">Visiter ce projet</a>
            </div>
        </div>
        <div class="carousel-item">
          <img class="d-block m-auto w-50" src="img/netflix2.png" alt="Third slide">
          <div class="carousel-caption d-block lienProjet">
              <a class="btn btn-secondary" href="#" role="button">Visiter ce projet</a>
            </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>


  <?php require('footer.php'); ?>
