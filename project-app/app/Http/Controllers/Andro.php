<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Andro extends Controller
{
   function File(){
    return view('home');
   }

   function Menu(){
    return view('about');
   }
   function Con(){
    return view('contact');
   }
}
