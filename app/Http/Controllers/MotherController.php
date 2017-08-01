<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mother;
use Session;
use Auth;
use Redirect;

class MotherController extends Controller
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
        $mothers = new Mother;

        $currentUserId=Auth::user()->id;

        $mothers->mUid=$currentUserId;
        $mothers->mFirstname=$request->mFirstname;
        $mothers->mMiddlename=$request->mMiddlename;
        $mothers->mLastname=$request->mLastname;
        $mothers->mBirthday=$request->mBirthday;
        $mothers->mMaritalStatus=$request->mMaritalStatus;
        $mothers->mLivingStatus=$request->mLivingStatus;
        $mothers->mGender=$request->mGender;

        $mothers->save();

        Session::flash('success_msg', 'Successfully Added Your Mother!');
        return Redirect::back();
    }

    public function show($id)
    {
        $mothers=Mother::all();
        return View::make('show')->with('mother', $mothers);
    }

    public function edit($id)
    {
        $mothers = Mother::find($id);
        return view('mother.edit',['mother'=> $mothers]);
    }

    public function update(Request $request, $id)
    {
        $mothers = Mother::find($id);

        $mothers->mFirstname=$request->mFirstname;
        $mothers->mMiddlename=$request->mMiddlename;
        $mothers->mLastname=$request->mLastname;
        $mothers->mBirthday=$request->mBirthday;
        $mothers->mMaritalStatus=$request->mMaritalStatus;
        $mothers->mLivingStatus=$request->mLivingStatus;
        $mothers->mGender=$request->mGender;
        
        $mothers->save();

    
    }

    public function destroy($id)
    {
        $mothers = Mother::find($id);
        $mothers->delete();      
    }
}
