@extends('layouts.app')


@section('content')
 <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><h1>Update Father Profile</h1></center>
                </div>
                 <div class="panel-body" align="center">
      
      
      <form action ="update/{{$father->id}}"  method="POST">

      <div id="data_mother">

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