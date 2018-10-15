<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Socialite;

class socialcontroler extends Controller
{
    public function redirect() {
    	return Socialite::driver('facebook')->redirect();	
    }
    public function callback(){
    	$user = Socialite::driver('facebook')->user();

    	//return ($user->getId());
    	return view('horario');
    }

