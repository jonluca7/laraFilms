<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;





class MonController extends Controller
{
    
 
    // Methode qui contiendra la logique d'une Premiere route

    public function greetings(string $name, request $request)
    {

        $you = $request->get('age') >= 18 ? 'vous' : 'toi';

        return '<header> Bienvenue chez  '.$you.' : '.$name.' !!! </header>';

    }
}



  

    

