<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $tittle = 'Mashely';
        return view('pages.about') ->with('tittle',$tittle);
    }
}
