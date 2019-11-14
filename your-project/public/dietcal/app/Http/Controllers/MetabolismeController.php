<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabolismeController extends Controller
{
    
    public function calculMetabolisme(Request $request)
    {
    	if ($request->has('form1')) {
    		$realHeight = $request->height/100;
    		$result = 0;
			if ($request->gender == 'man') {
				$result = round((13.7516*$request->weight+500.33*$realHeight-6.7550*$request->age+66.473)*$request->activity);
			}
			else {
			 	$result = round((9.5634*$request->weight+184.96*$realHeight-4.6756*$request->age+655.0955)*$request->activity);
			} 	
				
		session(['gender'=>$request->gender, 'calculmeta'=>$result]);
    	return view('welcome')->with(['gender'=>$request->gender, 'calculmeta'=>$result]);
    		
    	}
    	else  {
        
    	$resultKcalday = $request->kcalday-session('calculmeta');
    	return view('welcome')->with('diffkal', $resultKcalday);

    	}
	}	
}