<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Child;
use Auth;
use Session;
use Redirect;
use View;

class ChildController extends Controller
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
        $children = new Child;
        $currentUserId=Auth::user()->id;
        $children->cUid=$currentUserId;
        $children->cFirstname=$request->cFirstname;
        $children->cMiddlename=$request->cMiddlename;
        $children->cLastname=$request->cLastname;
        $children->cBirthday=$request->cBirthday;
        $children->cMaritalStatus=$request->cMaritalStatus;
        $children->cLivingStatus=$request->cLivingStatus;
        $children->cGender=$request->cGender;
        $children->save();

        Session::flash('success_msg', 'Successfully Added Your Child!');
        return Redirect::back();
    }

    
    public function show()
    {
        $children=Child::all();
        return View::make('tree/show')->with('child', $children);
    }

    public function edit($id)
    {
        $children = Child::find($id);
        return view('child.edit',['child'=> $children]);
    }
 
    public function update(Request $request, $id)
    {
        $children = Child::find($id);
        $children->cFirstname=$request->cFirstname;
        $children->cMiddlename=$request->cMiddlename;
        $children->cLastname=$request->cLastname;
        $children->cBirthday=$request->cBirthday;
        $children->cMaritalStatus=$request->cMaritalStatus;
        $children->cLivingStatus=$request->cLivingStatus;
        $children->cGender=$request->cGender;
        $children->save();
    }

    public function destroy($id)
    {
        $children = Child::find($id);
        $children->delete();      
    }
}
