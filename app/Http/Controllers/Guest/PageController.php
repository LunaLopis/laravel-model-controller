<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index(){
        $comics = Comic::all();
        // dd($comics);
        return view('home', compact('comics'));
    }
    public function details(){
        return view('details');
    }
}

