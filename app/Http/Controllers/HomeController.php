<?php

namespace App\Http\Controllers;

/**
* Home Controller
*/
class HomeController extends Controller
{
    
    public function index()
    {
        return view('home');
    }
}
?>