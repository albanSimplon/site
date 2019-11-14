@extends('layout')
@section('contenu')
<div class="text-center">
<form action="envois-mb" method="post">
    @csrf
    <label>Selectioné votre sexe: </label>
    <select name="gender">
        <option value="man">Homme</option>
        <option value="woman">Femme</option>
    </select>
    <br>
    <label>Entrez votre poids: </label>
    <br>
    <input type="text" name="weight" maxlength="3" placeholder="Poid" required/>
    <br>
    <label>Entrez votre age:</label>
    <br>
    <input type="text" name="age" maxlength="3" placeholder="Age" required/>
    <br>
    <label>Entrez votre taille (en cm):</label>
    <br>
    <input type="text" name="height" maxlength="3" placeholder="Taille" required/>
    <br>
    <label>Sélectionné votre niveau d'activité: </label>
    <br>
    <select name="activity">
        <option value="1.2">Pas d’activité physique</option>
        <option value="1.375">Activité physique légère (sport 1 fois par semaine)</option>
        <option value="1.55">Activité normale (sport 2 à 3 fois par semaine)</option>
        <option value="1.725">Activité intense (sport de 4 à 5 fois par semaine)</option>
        <option value="1.9">Activité très intense (vous êtes un athlète professionnel)</option>
    </select>
    <br>
    <input type="submit" value="valider" class="btn btn-success" />
</form>
</div>
@endsection