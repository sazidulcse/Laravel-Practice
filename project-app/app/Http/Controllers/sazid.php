<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sazid extends Controller
{
    

function home (){


    return view('bood',['name'=>'sazidul rahman', 'roll'=>'435372', 'university'=>'Dhaka university']);

}


}
