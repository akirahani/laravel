<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;
use App\Models\drink;
use App\Models\cake;
use App\Models\dessert;

class IntroduceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {   
        $recordc = cake::all();
        $recordd = dessert::all();
        $recordr = drink::all();
        $records = food::all();
        return view('home',compact('records','recordr','recordd','recordc'));
    }
    public function travel()
    {   
        $recordc = cake::all();
        $recordd = dessert::all();
        $recordr = drink::all();
        $records = food::all();
        return view('home',compact('records','recordr','recordd','recordc'));
    }
}
