@extends('layouts.app')


@section('content')
 <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><h1>Update Child Profile</h1></center>
                </div>
                 <div class="panel-body" align="center">
      <!-- MOTHER EDIT BLADE -->
      
      <form action ="update/{{$child->id}}"  method="POST">

      <div id="data_mother">

        <div class="form-group">
           <input type="hidden" name="_token" value="{{csrf_token()}}"><br>
          <input type="text" class="form-control" name="cFirstname" id="cFirstname" placeholder="First Name" value="{{$child->cFirstname}}">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="cMiddlename" id="cMiddlename" placeholder="Middle Name" value="{{$child->cMiddlename}}">
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="cLastname" id="cLastname" placeholder="Last Name" value="{{$child->cLastname}}">
        </div>

        <div class="form-group">
          <input type="date" class="form-control" name="cBirthday" id="cBirthday" placeholder="Birth Date" value="{{$child->cBirthday}}">
        </div>

        <div class="radio-inline">
         <h4>Marital Status:</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="cMaritalStatus" id="cMaritalStatus" value="Single">Single
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="cMaritalStatus" id="cMaritalStatus" value="Married">Married
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="cMaritalStatus" id="cMaritalStatus" value="Divorced">Divorced
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="cMaritalStatus" id="cMaritalStatus" value="Widowed">Widowed
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>

         <div class="radio-inline">
         	 <h4>Living Status:</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="cLivingStatus" id="cLivingStatus" value="Deceased">Deceased
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="cLivingStatus" id="cLivingStatus" value="Living">Living
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>

        
         <div class="radio-inline">
         	<h4>Gender:</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="cGender" id="cGender" value="Female">Female
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="cGender" id="cGender" value="Male" >Male
        </div>

<br><br>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"  value="update" name="update">Update</button>
        </div>

      </div>
        
   
    </form>
    <!-- END SA MAMA BRAD -->

    @endsection