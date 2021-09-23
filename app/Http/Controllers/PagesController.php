<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{
    //
    public function home(){

        // dd(Auth::user()->hasVerifiedEmail());

    	return view('pages.root');
    }
}
