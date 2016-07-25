<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AgeController extends Controller
{
    //
    public function getDashboard(){
      return view('dashboard');
    }

    public function getRestricted(){

      return view('restricted');
    }
}
