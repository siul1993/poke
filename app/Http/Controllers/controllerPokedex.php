<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class controllerPokedex extends Controller{
	public function mPokedex() {
		$pokemon = \App\pokedex::all();
	    return view('pokedex', compact('pokemon'));
	}
	public function mPlanta($tipo_id) {
		$pokemon = \App\tipo::find($tipo_id)->pokemon;
	    return view('pokedex', compact('pokemon'));
	}
	public function mPDF($id) {
		$pokemon = \App\pokedex::find($id);
		$vista=view('pdf', compact('pokemon'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream();
	}

}
