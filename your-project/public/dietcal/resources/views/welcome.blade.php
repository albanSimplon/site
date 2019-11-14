@extends('layout')
@section('contenu')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-lg-6 border border-success text-center">
			<form action="" method="post">
				{{ csrf_field() }}
				<input class="mt-3" type="radio" name="gender" value="man"> Homme
				<input type="radio" name="gender" value="woman"> Femme
				<br>
				
				<label class="mt-3">Entrez votre poid:</label>
				<br>
				<input type="text" name="weight" maxlength="3" placeholder="Votre poids" required/>
				<br>
				<br>
				<label>Entrez votre taille (en cm):</label>
				<br>
				<input type="text" name="height" maxlength="3" placeholder="Votre taille en cm" required/>
				<br>
				<br>
				<label>Entrez votre age:</label>
				<br>
				<input type="text" name="age" maxlength="3" placeholder="votre age" required/>
				<br>
				<br>
				
				
				
				<p>Sélectionné votre niveau d'activité pour calculer votre dépense calorique journalière:</p>
				<br>
				<select name="activity">
					<option value="1.2">Pas d’activité physique</option>
					<option value="1.375">Sport 1 fois par semaine</option>
					<option value="1.55">Sport 2 à 3 fois par semaine</option>
					<option value="1.725">Sport de 4 à 5 fois par semaine</option>
					<option value="1.9">Vous êtes un athlète professionnel</option>
				</select>
				<br>
				<br>
				<input type="submit" name="form1" value="valider" class="btn btn-success d-block m-auto" />
			</form>
			<br>
			@isset ($calculmeta)
			@if ($calculmeta > 0)
			@if($gender == 'man')
			<p>Votre dépense calorique journalière est de {{$calculmeta}} calories</p>
			@else
			<p>Votre dépense calorique journalière est de {{$calculmeta}} calories</p>
			@endif
			@endif
			@endisset
			
			
		</div>
		<div class="col-md-12 col-lg-6 border border-success text-center">
			<form action="" method="post">
				{{ csrf_field() }}
				<br>
				<label class="form2">Entrez les calories ingurgité dans la journée:</label>
				<br>
				<input type="number" name="kcalday" maxlength="5" placeholder="Nombres de calories" required/>
				<br>
				<br>
				<input type="submit" value="valider" name="form2 "class="btn btn-success d-block m-auto" />
			</form>
			@isset ($diffkal)
			@if ($diffkal > 0)
			<p>vous avez manger plus que vos besoin journalier de {{ $diffkal}} calories</p>
			@elseif ($diffkal < 0)
			<p>vous avez mangez moins que vos besoin calorique journalier de {{ $diffkal}} calories</p>
			@else <p> vous avez mangez exactement vos besoin journalier</p>
			@endif
			@endisset
		</div>
	</div>
</div>
<!-- <div class="container">
	<div class="row">
		<div class="col-md-12 col-lg-6 border border-success text-center">
			<label>Entrez votre poids</label>
			<br>
			<input id="poids" maxlength="3" placeholder="Votre poids" required>
			<br>
			<br>
			<label>Entrez votre taille</label>
			<br>
			<input id="taille" maxlength="3" placeholder="Votre taille" required>
			<br>
			<br>
			<label>Entrez votre age</label>
			<br>
			<input id="age" maxlength="3" placeholder="Votre taille" required>
			<br>
			<br>
			<p>Sélectionné votre niveau d'activité pour calculer votre dépense calorique journalière:</p>
			<br>
			<select id="activity">
				<option value="1.2">Pas d’activité physique</option>
				<option value="1.375">Sport 1 fois par semaine</option>
				<option value="1.55">Sport 2 à 3 fois par semaine</option>
				<option value="1.725">Sport de 4 à 5 fois par semaine</option>
				<option value="1.9">Vous êtes un athlète professionnel</option>
			</select>
			<br>
			<br>
			<p>Vous êtes</p>
			<select id="sexe">
				<option value="man">Homme</option>
				<option value="woman">Femme</option>				
			</select>
			<br>
			<br>
			<button class="btn btn-success d-block m-auto" type="button" onclick="calculMeta()">Valider</button>
			<br>
			<p id="resultat"></p>
		</div>
		<div class="col-md-12 col-lg-6 border border-success text-center">
			<p class="form1">Entrez les calories ingurgitées dans la journée:</p>
			<input id="calDay" maxlength="5" placeholder="Nombres de calories" required>
			<br>
			<br>
			<button class="btn btn-success d-block m-auto" type="button" onclick="diffMeta()">Valider</button>
			<br>
			<p id="resultat2"></p>
		</div>
	</div>
</div> -->

@endsection