<?php

namespace App\Http\Controllers;

use Request;
use Session;
use Redirect;
use App\Tree;
use Auth;
use View;
use Illuminate\Support\Facades\DB;

class TreeController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $trees = new Tree;

        $currentUserId=Auth::user()->id;
        $trees->tUid=$currentUserId;
        
        $trees->save();
    }
    
    public function show($id)
    {
        // $trees =Tree::all();
        $tree = DB::table('trees')
                ->leftJoin('users',     'trees.tUid',   '=', 'users.id')
                ->leftJoin('spouses',   'users.id',     '=', 'spouses.sUid')
                ->leftJoin('children',  'users.id',     '=', 'children.cUid')
                ->leftJoin('mothers',   'users.id',     '=', 'mothers.mUid')
                ->leftJoin('fathers',   'users.id',     '=', 'fathers.fUid')
                ->select('users.*', 'spouses.*', 'children.*', 'mothers.*', 'fathers.*')
                ->where('users.id', $id)
                ->get();

        return view('genogram.sample1mine', array('tree' => $tree));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        // 
    }

    public function destroy($id)
    {
        $trees = Tree::find($id);
        $trees->delete();      
    }
}
