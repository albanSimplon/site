<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Suivi;
use DB;
use App\Utilisateur;

class CompteController extends Controller
{

public function acceuil()
{

    if (auth()->guest()) {
    	flash('Vous devez être connecté')->error();
        return redirect('/connexion');

    }

    return view('mon-compte');
}
	public function deconnexion()
	{
		auth()->logout();
		flash('Vous êtes déconnecté')->success();
		return redirect('/');
	}

	public function modificationMotDePasse()
	{
		if (auth()->guest()) {
    	flash('Vous devez être connecté')->error();
        return redirect('/connexion');

    }

    request()->validate([
    	'password' => ['required', 'confirmed', 'min:8'],
    	'password_confirmation' => ['required'],


    ]);



    auth()->user()->update([

    	'mot_de_passe' => bcrypt(request('password')),

    ]);

    flash('Votre mot de passe a été modifier')->success();

    return redirect('/mon-compte');
	}

        public function formulaireMdp()
    {
            if (auth()->guest()) {
        flash('Vous devez être connecté')->error();
        return redirect('/connexion');

    }
        return view('maj-mdp');
    }




    public function infoPerso() {

        $utilisateurs = Auth::user();
        $suivis = Suivi::where('utilisateurs_id', $utilisateurs->id)->get();
        $calorie = Suivi::where('utilisateurs_id', $utilisateurs->id)->get()->avg('calorie');
        
               

    return view('mon-compte', [
       
        'utilisateurs' => $utilisateurs,
        'suivis' => $suivis,
        'calorie' => $calorie,
              

    ]);
    
    }

    public function deleteSuivi($id)
    {
         DB::delete('delete from suivis where id = ?',[$id]);
         return redirect('/mon-compte');
    } 


        public function vue()
    {
         $utilisateurs = Utilisateur::all();
         
            return view('admin', [
       
        'utilisateurs' => $utilisateurs,
    ]);
    } 

    public function deleteUser($id)
    {
         DB::delete('delete from utilisateurs where id = ?',[$id]);
         return redirect('/admin');
    } 

    

}