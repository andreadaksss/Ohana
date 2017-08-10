@extends('layouts.app')

@section('content')

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><h1>PROFILE</h1></center>
                </div>
                 <div class="panel-body" align="center">

<!-- 
use App\User;

$data = User::where('uFirstname', '=', $uFirstname)
            ->where('uMiddlename', '=', $uMiddlename)
            ->where('uLastname', '=', $uLastname)
            ->where('uBirthday', '=', $uBirthday)
            ->where('uGender', '=', $uGender)
            ->where('uLivingStatus', '=', $uLivingStatus)
            ->where('uMaritalStatus', '=', $uMaritalStatus)->get();

            if ($data == null) {
    
}
   -->

                <button type="button" class="btn btn-primary btn-block" align="center" style="position= right;"><a href="uedit/{{ Auth::user()->id }}">Edit Profile</a></button>
                <!-- <button type="button" class="btn btn-primary btn-block" align="center" data-toggle="collapse" data-target="#collapse_user" style="position= right;"><a href="uedit/{{Auth::user()->id}}">Edit Profile</a></button> -->
                
                <br>
                <center>
                     @if(Session::has('success_msg'))
                        <div class="row">
                            <div class="col-md-8">
                            <div class="alert alert-success">
                                {{Session::get('success_msg')}}
                                </div>
                            </div>
                        </div>
                    @endif
                </center>
                     <form action ="uedit/{{ Auth::user()->id }}"  class="collapse" id="collapse_user" method="POST">

                        <div id="data_user">
                            <div class="form-group">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="text" class="form-control" name="uFirstname" id="uFirstname" placeholder="First Name">
                            </div>

                            <div class="form-group">
                            <input type="text" class="form-control" name="uMiddlename" id="uMiddlename" placeholder="Middle Name">
                            </div>

                            <div class="form-group">
                            <input type="text" class="form-control" name="uLastname" id="uLastname" placeholder="Last Name">
                            </div>

                            <div class="form-group">
                            <input type="date" class="form-control" name="uBirthday" id="uBirthday" placeholder="Birth Date">
                            </div>

                            <div class="radio-inline">
                            <h4>Marital Status:</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="uMaritalStatus" id="uMaritalStatus" value="Single">Single
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="uMaritalStatus" id="uMaritalStatus" value="Married">Married
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="uMaritalStatus" id="uMaritalStatus" value="Divorced">Divorced
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="uMaritalStatus" id="uMaritalStatus" value="Widowed">Widowed
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>

                            <div class="radio-inline">
                            <h4>Living Status:</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="uLivingStatus" id="uLivingStatus" value="Deceased">Deceased
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="uLivingStatus" id="uLivingStatus" value="Living">Living
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>

                            
                            <div class="radio-inline">
                            <h4>Gender:</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="uGender" id="uGender" value="Female">Female
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="uGender" id="uGender" value="Male">Male
                            </div>

                             <br><br>
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" data-dismiss="collapse" name="submit">Done</button>
                            </div>

                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>


    


@endsection
