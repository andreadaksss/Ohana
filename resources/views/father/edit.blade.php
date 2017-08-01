@extends('layouts.app')


@section('content')

      <!-- MOTHER EDIT BLADE -->
      
      <form action ="update/{{$father->id}}"  method="POST">

      <div id="data_mother">
        <h2>Edit Your Father's Information..</h2>

        <div class="form-group">
           <input type="hidden" name="_token" value="{{csrf_token()}}"><br>
          <input type="text" class="form-control" name="fFirstname" id="fFirstname" placeholder="First Name" value="{{$father->fFirstname}}">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="fMiddlename" id="fMiddlename" placeholder="Middle Name" value="{{$father->fMiddlename}}">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="fLastname" id="fLastname" placeholder="Last Name" value="{{$father->fLastname}}">
        </div>

        <div class="form-group">
          <input type="date" class="form-control" name="fBirthday" id="fBirthday" placeholder="Birth Date" value="{{$father->fBirthday}}">
        </div>

        <div class="radio-inline">
         <h4>Marital Status:</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="fMaritalStatus" id="fMaritalStatus" value="Single">Single
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="fMaritalStatus" id="fMaritalStatus" value="Married">Married
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="fMaritalStatus" id="fMaritalStatus" value="Divorced">Divorced
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="fMaritalStatus" id="fMaritalStatus" value="Widowed">Widowed
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>

         <div class="radio-inline">
         	 <h4>Living Status:</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="fLivingStatus" id="fLivingStatus" value="Deceased">Deceased
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="fLivingStatus" id="fLivingStatus" value="Living">Living
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>

        
         <div class="radio-inline">
         	<h4>Gender:</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="fGender" id="fGender" value="Female" disabled>Female
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="fGender" id="fGender" value="Male" checked>Male
        </div>

<br><br>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"  value="update" name="update">Update</button>
        </div>

      </div>
        
   
    </form>
    <!-- END SA MAMA BRAD -->

    @endsection