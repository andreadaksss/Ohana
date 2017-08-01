<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Spouse;

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
    // public function indextwo()
    // {
    //     $spouses = user::find(1)->spouse;
    //     return view('home', compact('spouses'));
    // }
    // public function indextwo()
    // {
    //     $spouses = Spouses::all();
    //     return View::make('home')->with('spouses', $spouses);
    // }
}
