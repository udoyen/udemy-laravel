<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    //
    public function getWelcome($text = null){
      $text = "george";
      return view('welcome',array('text' => $text));
    }


}
