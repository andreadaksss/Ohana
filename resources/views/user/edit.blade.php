@extends('layouts.app')


@section('content')
 <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><h1>UPDATE PROFILE</h1></center>
                </div>
                 <div class="panel-body" align="center">

      <!-- MAMAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaA -->
      
      <form action ="/update/{{Auth::user()->id}}"  method="POST">

      <div id="data_mother">

        <div class="form-group">
           <input type="hidden" name="_token" value="{{csrf_token()}}"><br>
          <input type="text" class="form-control" name="uFirstname" id="uFirstname" placeholder="First Name" value="{{$user->uFirstname}}">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="uMiddlename" id="uMiddlename" placeholder="Middle Name" value="{{$user->uFirstname}}">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="uLastname" id="uLastname" placeholder="Last Name" value="{{$user->uFirstname}}">
        </div>

        <div class="form-group">
          <input type="date" class="form-control" name="uBirthday" id="uBirthday" placeholder="Birth Date" value="{{$user->uFirstname}}">
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
          <button type="submit" class="btn btn-primary"  value="update" name="update">Update</button>
        </div>

      </div>
        
   
    </form>
    <!-- END SA MAMA BRAD -->

    @endsection