<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cupon;
use App\Models\Pack;

class HomeController extends Controller
{
    public function home(Request $request){
        $cupon = Cupon::where('codigo', $request->cupon)->first();
        $packs = Pack::where('available', true)->orderBy('home_index', 'asc')->get();
        return view('home', compact('packs', 'cupon'));
    }

    public function sitemap(){
        return response()->view('sitemap', [], 200, ['Content-Type' => 'application/xml']);
    }

    public function calculadoras(){
        return view('calculadoras');
    }
}
