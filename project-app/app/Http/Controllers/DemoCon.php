<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoCon extends Controller
{
    function TestCon($firstName,$middleName,$lastName){
  return view ('demoview',['firstKey'=>$firstName]);
    }
}
