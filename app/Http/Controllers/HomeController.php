<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pack;

class HomeController extends Controller
{
    public function home(){
        $packs = Pack::where('available', true)->orderBy('home_index', 'asc')->get();
        return view('home', compact('packs'));
    }

    public function sitemap(){
        return response()->view('sitemap', [], 200, ['Content-Type' => 'application/xml']);
    }

    public function calculadoras(){
        return view('calculadoras');
    }
}
