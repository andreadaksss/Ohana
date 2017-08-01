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
        $child = new Child;
        $currentUserId=Auth::user()->id;
        $child->cUid=$currentUserId;
        $child->cFirstname=$request->cFirstname;
        $child->cMiddlename=$request->cMiddlename;
        $child->cLastname=$request->cLastname;
        $child->cBirthday=$request->cBirthday;
        $child->cMaritalStatus=$request->cMaritalStatus;
        $child->cLivingStatus=$request->cLivingStatus;
        $child->cGender=$request->cGender;
        $child->save();

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
        //
    }

    public function update(Request $request, $id)
    {
        $child = Child::find($id);
        
        $child->cFirstname=$request->cFirstname;
        $child->cMiddlename=$request->cMiddlename;
        $child->cLastname=$request->cLastname;
        $child->cBirthday=$request->cBirthday;
        $child->cMaritalStatus=$request->cMaritalStatus;
        $child->cLivingStatus=$request->cLivingStatus;
        $child->cGender=$request->cGender;
        
        $child->save();
    }

    public function destroy($id)
    {
        $child = Child::find($id);
        $child->delete();      
    }
}
