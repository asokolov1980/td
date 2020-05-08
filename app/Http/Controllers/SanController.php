<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SanController extends Controller
{
	public function __construct()
  	{

  	}

  	public function show()
  	{
  		$towns = \App\Town::all();
  		return view('cityList', compact('towns'));
  	}

  	public function addTown(Request $request)
  	{
        try{
	  		$newTown = new \App\Town;
	    	$newTown->title = $request->title;
	    	$newTown->lat = $request->lat;
	    	$newTown->lon = $request->lon;
	    	$newTown->numpop = $request->numpop;
	    	$mes = $newTown->save();
	    	$towns = \App\Town::all();
  			echo view('listAjax', compact('towns'));
    	}catch(\Illuminate\Database\QueryException $e){
    		echo "error";
    	}




  	}
}
