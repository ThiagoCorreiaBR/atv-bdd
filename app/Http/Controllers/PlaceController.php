<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
   // function public places(){
     //   return view('Locais');
    //}

    public function dbz(){
        $power = 800;
        if($power>8000){
            $energy='Mais de 8000!';
        }else{
            $energy='Inseto!';
        }
        return view('dbz',compact('energy'));
    }
}
