<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrondendController extends Controller
{
    function __construct(){

    }

    public function home(){
    	return view('frontend.home');
    }
}
