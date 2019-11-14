<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Musculation;
use App\Cardio;
use DB;

class MusculationController extends Controller
{
    public function acceuil()
	{

    	if (auth()->guest()) {
    		flash('Vous devez être connecté')->error();
        	return redirect('/connexion');

    }
    	return view('musculation');
	}

	public function infoPerso() {

        $utilisateurs = Auth::user();
        $musculations = Musculation::where('utilisateurs_id', $utilisateurs->id)->get();
        $cardios = Cardio::where('utilisateurs_id', $utilisateurs->id)->get();
       

        
       
        
               

    return view('musculation', [
       
        'utilisateurs' => $utilisateurs,
        'musculations' => $musculations,
        'cardios' => $cardios,
       
        

           ]);
    
    }

    public function envoisMusculation(Request $request)
    {
        request()->validate([
        'date' => ['required'],
        'exercise' => ['required', 'max:20'],
        'repetition' => ['required', 'max:20'],
        'kilos' => ['required', 'max:10'],
        'note' => [],
    ]);
        Musculation::create([

        'jour' => request('date'),
        'utilisateurs_id' => auth()->id(),
        'exercise' => request('exercise'),
        'repetition' => request('repetition'),
        'kilos' => request('kilos'),
        'note' => request('note'),
  

    ]);
        flash('Vos infos ont bien été modifié')->success();

        return redirect('/musculation');
    }

    public function envoisCardio(Request $request)
    {
        request()->validate([
        'date' => ['required'],
        'cardio_temps' => ['required', 'max:3'],
        'cardio_calories' => ['required', 'max:4'],
        'note' => [],
    ]);
        Cardio::create([

        'jour' => request('date'),
        'utilisateurs_id' => auth()->id(),
        'cardio_temps' => request('cardio_temps'),
        'cardio_calories' => request('cardio_calories'),
        'note' => request('note'),
  

    ]);
        flash('Vos infos ont bien été modifié')->success();

        return redirect('/musculation');
    }

    public function deleteMusculation($id)
    {
         DB::delete('delete from musculations where id = ?',[$id]);
         return redirect('/musculation');
    } 

    public function deleteCardio($id)
    {
         DB::delete('delete from cardios where id = ?',[$id]);
         return redirect('/musculation');
    } 

}
