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
        $trees =Tree::all();
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
