<?php

namespace App\Http\Controllers;

use App\EmulsionInterior;
use App\EmulsionExterior;
use App\TexcoteInterior;
use App\TexcoteExterior;
use App\Gloss;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function search(Request $request){
        $searchkey = $request->search;
        $emlint_result = EmulsionInterior::where('title', 'like', '%' .$searchkey. '%')->get();
        $emlext_result = EmulsionExterior::where('title', 'like', '%' .$searchkey. '%')->get();
        $texint_result = TexcoteInterior::where('title', 'like', '%' .$searchkey. '%')->get();
        $texext_result = TexcoteExterior::where('title', 'like', '%' .$searchkey. '%')->get();
        $gloss_result = Gloss::where('title', 'like', '%' .$searchkey. '%')->get();
        return view('find', compact('searchkey', 'emlint_result', 'emlext_result', 'texint_result', 'texext_result', 'gloss_result'));
    }
}
