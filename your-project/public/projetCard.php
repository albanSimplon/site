<?php require('header.php'); ?>

<div class="container">
  <div class="row">
    <div class="card text-center col-md-6">
      <img class="card-img-top" src="img/dietcal1.png" alt="screenshot projet dietcal">
      <div class="card-body">
        <p class="card-text"><a class="btn btn-success text-white" data-toggle="modal" data-target="#infos">Info sur ce
            projet</a></p>
      </div>
    </div>

    <div class="card text-center col-md-6">
      <img class="card-img-top" src="img/netflix2.png" alt="screenshot projet dietcal">
      <div class="card-body">
        <p class="card-text"><a class="btn btn-success text-white" data-toggle="modal" data-target="#infos2">Info sur ce
            projet</a></p>
      </div>
    </div>

  </div>
</div>



<div class="modal" id="infos">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Projet DietCal</h4>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="container">
      <p>Ce projet est un site Internet créé grâce au Framework Laravel qui permet de calculer son métabolisme de base,
        et d’avoir un suivi régulier du nombre de calories consommées chaque jour sous forme de graphique, ainsi qu’un journal de suivi
        permettant d’enregistrer son cardio avec une indication du temps et du nombre de calories perdues.<br>
        Une partie est réservée à la musculation avec un journal de suivi des exercices effectués chaque jour.<br>
        Mise en ligne complète en LAMP.<br>
        <a href="dietcal/public">Lien vers ce projet</a>
        </div>
      </p>
    </div>
  </div>
</div>


<div class="modal" id="infos2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Projet Netflix</h4>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="container">
      <p>Ce projet personnel permet pour les utilisateurs de netflix d'avoir le choix a +200 catégories de films et series
        alors que sur le site netflix nous avons accès a seulement 15 catégories <br>
        <a href="/netflix">Lien vers ce projet</a>
        </div>
      </p>
    </div>
  </div>
</div>

<?php require('footer.php'); ?>