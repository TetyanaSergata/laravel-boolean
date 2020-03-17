<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function index(){
      return view('staticpages.index');
    }

    public function domande(){
      return view('staticpages.domande');
    }

    public function lezione(){
      return view('staticpages.lezione');
    }

    public function pricacy(){
      return view('staticpages.privacy');
    }

}
