<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function landing(){
        
        return view("landing",);
    }
    
    public function peta(){
        
        return view("peta",);
    }
}
