<?php

namespace App\Http\Controllers;

use App\Utilisateur;
use App\Suivi;
use Illuminate\Http\Request;



class InscriptionController extends Controller
{
    public function formulaire(){

    	 return view('inscription');
    }

    public function traitement(){

    		request()->validate([
		'pseudo' => ['required','unique:utilisateurs'],
		'email' => ['required', 'email','unique:utilisateurs'],
		'password' => ['required', 'confirmed', 'min:8'],
		'password_confirmation' => ['required'],

	]);

	$utilisateur = Utilisateur::create([
		'pseudo' => request('pseudo'),
		'email' => request('email'),
		'mot_de_passe' => bcrypt(request('password')),
	]);


	        flash('Vous êtes bien inscrit vous pouvez vous connecter')->success();

        return redirect('/connexion');

    }

        public function envoisMB(Request $request)
    {
        request()->validate([
         'gender' => ['required'],
        'weight' => ['required'],
         'height' => ['required'],
        'age' => ['required'],
         'activity' => ['required'],

    ]);

    		$realHeight = $request->height/100;
    		$result = 0;
			if ($request->gender == 'man') {
				$result = round((13.7516*$request->weight+500.33*$realHeight-6.7550*$request->age+66.473)*$request->activity);
			}
			else {
			 	$result = round((9.5634*$request->weight+184.96*$realHeight-4.6756*$request->age+655.0955)*$request->activity);
			} 	
        auth()->user()->update([

        'sexe' => request('gender'),
        'poids' => request('weight'),
        'taille' => request('height')/100,
        'age' => request('age'),
        'activity' => request('activity'),
	
		'mbBase' => $result,	

    ]);

    //     $utilisateur = Utilisateur::create([
    //      'poids' => request('weight'),
    // ]);

    flash('Vos infos ont bien été modifié')->success();

    return redirect('/mon-compte');    
    }

    public function formulaireMb()
    {
            if (auth()->guest()) {
        flash('Vous devez être connecté')->error();
        return redirect('/connexion');

    }
        return view('maj-mb');
    }

    public function envoisSuivi(Request $request)
    {
        request()->validate([
        'date' => ['required'],
        'calories' => ['required', 'max:4'],
    ]);
        Suivi::create([

         'jour' => request('date'),
        'utilisateurs_id' => auth()->id(),
        'calorie' => request('calories'),
  

    ]);
        flash('Vos infos ont bien été modifié')->success();

        return redirect('/mon-compte');
    }

    
    
}

