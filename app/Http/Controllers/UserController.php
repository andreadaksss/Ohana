<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Child;
use App\User;
use View;
use Auth;
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

    public function show()
    {
        $users=User::all();
        return View::make('user.profile')->with('user', $users);
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('user.edit',['user'=> $users]);
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        // $users = Auth::user()->id;
        $users->uFirstname=$request->uFirstname;
        $users->uMiddlename=$request->uMiddlename;
        $users->uLastname=$request->uLastname;
        $users->uBirthday=$request->uBirthday;
        $users->uMaritalStatus=$request->uMaritalStatus;
        $users->uLivingStatus=$request->uLivingStatus;
        $users->uGender=$request->uGender;
        $users->save();
      
    }

    public function destroy($id)
    {
          
    }
}
