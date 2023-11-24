<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cocktail;

class PageController extends Controller
{
    public function index(){
        $drinks = Cocktail::all();
        //dd($drinks);
        return view('home' , compact('drinks'));
    }
}
