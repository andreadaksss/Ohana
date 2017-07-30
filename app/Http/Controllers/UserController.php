<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Child;
use Session;
use Redirect;

class UserController extends Controller
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
        // $user = new User;
        // $user->uFirstname=$request->uFirstname;
        // $user->uMiddlename=$request->uMiddlename;
        // $user->uLastname=$request->uLastname;
        // $user->uBirthday=$request->uBirthday;
        // $user->uMaritalStatus=$request->uMaritalStatus;
        // $user->uLivingStatus=$request->uLivingStatus;
        // $user->uGender=$request->uGender;
        // $user->save();

        // Session::flash('success_msg', 'Successfully Added Your Child!');
        // return Redirect::back();
    }

    public function show($id)
    {
        // $user =User::all();
        // return View::make('show')->with('show', $children);
    }

    public function edit($id)
    {
        $mothers = Mother::find($id);
        return view('profile.userprofile',['user'=> $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->uFirstname=$request->uFirstname;
        $user->uMiddlename=$request->uMiddlename;
        $user->uLastname=$request->uLastname;
        $user->uBirthday=$request->uBirthday;
        $user->uMaritalStatus=$request->uMaritalStatus;
        $user->uLivingStatus=$request->uLivingStatus;
        $user->uGender=$request->uGender;
        $user->save();
       // return redirect('profile.index');
       return view('profile.userprofile',['user'=> $user]);

        // Session::flash('success_msg', 'Successfully Edited Your Profile!');
        // return Redirect::back();
    }

    public function destroy($id)
    {
          
    }
}
