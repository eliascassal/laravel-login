<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docente;
use Socialite;

class socialcontroler extends Controller
{
    public function redirect() {
    	return Socialite::driver('facebook')->redirect();	
    }
    public function callback(){
    	$user = Socialite::driver('facebook')->user();

    	$docentes = Docente::All();
        return view('docente.index', compact('docentes'));
    }

}