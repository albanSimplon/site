<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function formulaire()
    {
    	return view('connexion');
    }

    public function traitement()
    {
    	Request()->validate([
    		'pseudo' => ['required'],
    		// 'email' => ['required', 'email'],
    		'password' => ['required'],
    	]);

    	$resultat = auth()->attempt([
    		'pseudo' => request('pseudo'),
    		// 'email' => request('email'),
    		'password' => request('password'),
    	]);

    	if ($resultat) {
            flash('Vous êtes bien connecté')->success();
    		return redirect('/mon-compte');
    	}

        flash('Erreur identifiant')->error();
    	return back();
    }
}
