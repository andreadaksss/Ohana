@extends('layouts.app')


@section('content')

      <!-- SPOUSE EDIT BLADE -->
      
      <form action ="update/{{$spouse->id}}"  method="POST">

      <div id="data_mother">
        <h2>Edit Your Spouse's Information..</h2>

        <div class="form-group">
           <input type="hidden" name="_token" value="{{csrf_token()}}"><br>
          <input type="text" class="form-control" name="sFirstname" id="mFirstname" placeholder="First Name" value="{{$spouse->sFirstname}}">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="sMiddlename" id="mMiddlename" placeholder="Middle Name" value="{{$spouse->sMiddlename}}">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="sLastname" id="mLastname" placeholder="Last Name" value="{{$spouse->sLastname}}">
        </div>

        <div class="form-group">
          <input type="date" class="form-control" name="sBirthday" id="mBirthday" placeholder="Birth Date" value="{{$spouse->sBirthday}}">
        </div>

        <div class="radio-inline">
         <h4>Marital Status:</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="sMaritalStatus" id="sMaritalStatus" value="Single">Single
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="sMaritalStatus" id="sMaritalStatus" value="Married">Married
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="sMaritalStatus" id="sMaritalStatus" value="Divorced">Divorced
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="sMaritalStatus" id="sMaritalStatus" value="Widowed">Widowed
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>

         <div class="radio-inline">
         	 <h4>Living Status:</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="sLivingStatus" id="sLivingStatus" value="Deceased">Deceased
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="sLivingStatus" id="sLivingStatus" value="Living">Living
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>

        
         <div class="radio-inline">
         	<h4>Gender:</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="sGender" id="sGender" value="Female" checked>Female
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="sGender" id="sGender" value="Male" disabled>Male
        </div>

<br><br>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"  value="update" name="update">Update</button>
        </div>

      </div>
        
   
    </form>
    <!-- END SA MAMA BRAD -->

    @endsection