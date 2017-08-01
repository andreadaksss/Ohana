@extends('layouts.app')


@section('content')
 <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><h1>Update Mother Profile</h1></center>
                </div>
                 <div class="panel-body" align="center">
      <!-- MOTHER EDIT BLADE -->
      
      <form action ="update/{{$mother->id}}"  method="POST">

      <div id="data_mother">

        <div class="form-group">
           <input type="hidden" name="_token" value="{{csrf_token()}}"><br>
          <input type="text" class="form-control" name="mFirstname" id="mFirstname" placeholder="First Name" value="{{$mother->mFirstname}}">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="mMiddlename" id="mMiddlename" placeholder="Middle Name" value="{{$mother->mMiddlename}}">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="mLastname" id="mLastname" placeholder="Last Name" value="{{$mother->mLastname}}">
        </div>

        <div class="form-group">
          <input type="date" class="form-control" name="mBirthday" id="mBirthday" placeholder="Birth Date" value="{{$mother->mBirthday}}">
        </div>

        <div class="radio-inline">
         <h4>Marital Status:</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="mMaritalStatus" id="mMaritalStatus" value="Single">Single
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="mMaritalStatus" id="mMaritalStatus" value="Married">Married
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="mMaritalStatus" id="mMaritalStatus" value="Divorced">Divorced
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="mMaritalStatus" id="mMaritalStatus" value="Widowed">Widowed
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>

         <div class="radio-inline">
         	 <h4>Living Status:</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="mLivingStatus" id="mLivingStatus" value="Deceased">Deceased
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="mLivingStatus" id="mLivingStatus" value="Living">Living
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>

        
         <div class="radio-inline">
         	<h4>Gender:</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="mGender" id="mGender" value="Female" checked>Female
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="mGender" id="mGender" value="Male" disabled>Male
        </div>

<br><br>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"  value="update" name="update">Update</button>
        </div>

      </div>
        
   
    </form>
    <!-- END SA MAMA BRAD -->

    @endsection