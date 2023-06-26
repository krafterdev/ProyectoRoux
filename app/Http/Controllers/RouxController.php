<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouxController extends Controller
{
    public function home()
    {
       return view(''); 
    }
    public function artists()
    {
       return view('artists'); 
    }
    public function register()
    {
       return view('register'); 
    }
    public function shedule()
    {
       return view('shedule'); 
    }
    public function venue()
    {
       return view('venue'); 
    }

}
