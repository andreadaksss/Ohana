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
        $tree = DB::table('users')
                ->leftJoin('spouses',   'users.id',     '=', 'spouses.sUid')
                ->leftJoin('children',  'users.id',     '=', 'children.cUid')
                ->leftJoin('mothers',   'users.id',     '=', 'mothers.mUid')
                ->leftJoin('fathers',   'users.id',     '=', 'fathers.fUid')
                ->select('users.*', 'spouses.*', 'children.*', 'mothers.*', 'fathers.*')
                ->where('users.id', $id)
                ->get();

        $tree2 = DB::table('users')
                ->join('spouses',   'users.id',     '=', 'spouses.sUid')
                ->join('children',  'users.id',     '=', 'children.cUid')
                ->join('mothers',   'users.id',     '=', 'mothers.mUid')
                ->join('fathers',   'users.id',     '=', 'fathers.fUid')
                ->select('users.*', 'spouses.*', 'children.*', 'mothers.*', 'fathers.*')
                ->orderBy('users.id')
                ->chunk(100, function($users) {
                    foreach($users as $user) {

                    }
                });

        return view('genogram.sample1mine', array('tree' => $tree, 'tree2' => $tree2));
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
