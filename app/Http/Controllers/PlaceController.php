<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
   // function public places(){
     //   return view('Locais');
    //}

    public function hello(){
        $name = 'Joao';
        return view('hello',compact('name'));
    }
}
