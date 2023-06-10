<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('/mainsite/main_home');
    }

    public function price()
    {
        return view('/mainsite/main_price');
    }

    public function about()
    {
        return view('/mainsite/main_about');
    }

    public function item()
    {
        return view('/mainsite/main_items');
    }

    public function review()
    {
        return view('/mainsite/main_review');
    }
        
    
}
