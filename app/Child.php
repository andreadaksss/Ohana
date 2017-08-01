<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
  // public function getID()
  // {
  //     return User::where('id', $this->cUid)->first()->id;
  // }
    protected $table = 'children';

    // $children = Child::all();

    // foreach ($children as $child) {
    //     echo $child->cFirstname;
    //     echo $child->cMiddlename;
    //     echo $child->cLastname;
    //     echo $child->cBirthday;
    //     echo $child->cGender;
}
