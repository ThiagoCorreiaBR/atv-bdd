<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
   // function public places(){
     //   return view('Locais');
    //}

    public function hello(){
        $name = 'Taylor';
        return view('hello',compact('name'));
    }
}
