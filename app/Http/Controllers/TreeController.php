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
    // nami codes
    public function showTree($id)
    {
        $tree = DB::table('users')
                ->leftJoin('spouses',   'users.id',     '=', 'spouses.sUid')
                ->leftJoin('children',  'users.id',     '=', 'children.cUid')
                ->leftJoin('mothers',   'users.id',     '=', 'mothers.mUid')
                ->leftJoin('fathers',   'users.id',     '=', 'fathers.fUid')
                ->select('users.*', 'spouses.*', 'children.*', 'mothers.*', 'fathers.*')
                ->where('users.id', $id)
                ->get();

        return view('genogram.showTree', array('tree' => $tree));
    }

    public function query($id)
    {
        $tree = DB::table('users')
                ->leftJoin('spouses',   'users.id',     '=', 'spouses.sUid')
                ->leftJoin('children',  'users.id',     '=', 'children.cUid')
                ->leftJoin('mothers',   'users.id',     '=', 'mothers.mUid')
                ->leftJoin('fathers',   'users.id',     '=', 'fathers.fUid')
                ->select('users.*', 'spouses.*', 'children.*', 'mothers.*', 'fathers.*')
                ->where('users.id', $id)
                ->get();

        return view('genogram.query', array('tree' => $tree));
    }

    public function empty1($id)
    {
        $tree = DB::table('users')
                ->leftJoin('spouses',   'users.id',     '=', 'spouses.sUid')
                ->leftJoin('children',  'users.id',     '=', 'children.cUid')
                ->leftJoin('mothers',   'users.id',     '=', 'mothers.mUid')
                ->leftJoin('fathers',   'users.id',     '=', 'fathers.fUid')
                ->select('users.*', 'spouses.*', 'children.*', 'mothers.*', 'fathers.*')
                ->where('users.id', $id)
                ->get();

        return view('genogram.empty', array('tree' => $tree));
    }

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
