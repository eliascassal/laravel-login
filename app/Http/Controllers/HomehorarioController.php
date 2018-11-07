<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;

class HomehorarioController extends Controller
{
    
public function index()
    {
        
        return view('horario.index');

    }



}
