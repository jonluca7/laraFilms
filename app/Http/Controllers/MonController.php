<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;





class MonController extends Controller
{
    
 
    // Methode qui contiendra la logique d'une Premiere route

    public function greetings(string $name)
    {
        return '<header> Bienvenue chez toi : '.$name.' !!! </header>';

    }
}



  

    

