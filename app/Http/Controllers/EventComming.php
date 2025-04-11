<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventComming extends Controller
{
    public function index(){
        return view('Dashboard');
    }
}
