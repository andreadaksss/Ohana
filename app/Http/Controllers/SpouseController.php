<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spouse;
use Session;
use Redirect;

class SpouseController extends Controller
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
        $spouses = new Spouse;

        $currentUserId=Auth::user()->id;

        $spouses->sUid=$currentUserId;
        $spouses->sFirstname=$request->sFirstname;
        $spouses->sMiddlename=$request->sMiddlename;
        $spouses->sLastname=$request->sLastname;
        $spouses->sBirthday=$request->sBirthday;
        $spouses->sMaritalStatus=$request->sMaritalStatus;
        $spouses->sLivingStatus=$request->sLivingStatus;
        $spouses->sGender=$request->sGender;

        $spouses->save();

        Session::flash('success_msg', 'Successfully Added Your SPouse!');
        return Redirect::back();
    }

    public function show($id)
    {
        $spouses =Spouse::all();
        return View::make('show')->with('spouse', $spouses);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $spouses = Spouse::find($id);
        $spouses->sFirstname=$request->sFirstname;
        $spouses->sMiddlename=$request->sMiddlename;
        $spouses->sLastname=$request->sLastname;
        $spouses->sBirthday=$request->sBirthday;
        $spouses->sMaritalStatus=$request->sMaritalStatus;
        $spouses->sLivingStatus=$request->sLivingStatus;
        $spouses->sGender=$request->sGender;
        $spouses->save();
    }

    public function destroy($id)
    {
        $spouses = Spouse::find($id);
        $spouses->delete();      
    }
}
