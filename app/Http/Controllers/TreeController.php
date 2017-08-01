<?php

namespace App\Http\Controllers;

use Request;
use Session;
use Redirect;
use App\Tree;
use App\Mother;
use App\Father;
use App\Child;
use App\Spouse;
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

    public function show()
    {
        $trees =Tree::all();
        $mothers = Mother::all();
        $fathers = Father::all();
        $spouses = Spouse::all();
        $children = Child::all();
        $spouses = Spouse::all();
        return View::make('user.show', compact('mothers', 'fathers', 'spouses', 'children'));
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
