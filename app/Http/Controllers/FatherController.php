<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Father;
use App\User;
use Auth;
use Session;
use Redirect;

class FatherController extends Controller
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
        $fathers = new Father;

        $currentUserId=Auth::user()->id;

        $fathers->fUid=$currentUserId;
        $fathers->fFirstname=$request->fFirstname;
        $fathers->fMiddlename=$request->fMiddlename;
        $fathers->fLastname=$request->fLastname;
        $fathers->fBirthday=$request->fBirthday;
        $fathers->fMaritalStatus=$request->fMaritalStatus;
        $fathers->fLivingStatus=$request->fLivingStatus;
        $fathers->fGender=$request->fGender;

        $fathers->save();

        Session::flash('success_msg', 'Successfully Added Your Father!');
        return Redirect::back();
    }

    public function show($id)
    {
        $fathers=Father::all();
        return View::make('show')->with('father', $fathers);
    }

    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        $fathers = Father::find($id);

        $fathers->fFirstname=$request->fFirstname;
        $fathers->fMiddlename=$request->fMiddlename;
        $fathers->fLastname=$request->fLastname;
        $fathers->fBirthday=$request->fBirthday;
        $fathers->fMaritalStatus=$request->fMaritalStatus;
        $fathers->fLivingStatus=$request->fLivingStatus;
        $fathers->fGender=$request->fGender;
        
        $fathers->save();
    }

    public function destroy($id)
    {
        $fathers = Father::find($id);
        $fathers->delete();
    }
}
