@extends('layouts.app')

@section('content')

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><h1>FAMILY TREE</h1></center>
                </div>
                <div class="panel-body" align="center">
  <button type="button" class="btn btn-info btn-lg" data-toggle="collapse" data-target="#collapse_father" style="position= right;">Add Father</button>
  <button type="button" class="btn btn-info btn-lg" data-toggle="collapse" data-target="#collapse_mother" style="position= right;">Add Mother</button>
  <button type="button" class="btn btn-info btn-lg" data-toggle="collapse" data-target="#collapse_spouse" style="position= right;">Add Spouse</button>
  <button type="button" class="btn btn-info btn-lg" data-toggle="collapse" data-target="#collapse_child" style="position= right;">Add Child</button>
<br>


  @if(Session::has('success_msg'))
  <div class="row">
    <div class="col-md-8">
      <div class="alert alert-success">
  		{{Session::get('success_msg')}}
  		</div>
    </div>
  </div>
@endif


      <!-- MAMAAAAAAAAAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaA -->
      <form action ="action_mother"  class="collapse" id="collapse_mother" method="POST">

      <div id="data_mother">
        <h2>Input Your Mother's Information..</h2>
        <div class="form-group">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
          <!-- <div class="col-sm-10"> -->
          <!-- <label for="mFirstname">First Name:</label> -->
          <input type="text" class="form-control" name="mFirstname" id="mFirstname" placeholder="First Name">
        </div>

        <div class="form-group">
          <!-- <div class="col-sm-10"> -->
          <!-- <label for="mFirstname">Middle Name:</label> -->
          <input type="text" class="form-control" name="mMiddlename" id="mMiddlename" placeholder="Middle Name">
        </div>

        <!-- <input type="text" class="form-control" name="mUid" id="mUid" value=" {{ Auth::user()->id }} " hidden> -->

        <div class="form-group">
          <!-- <div class="col-sm-10"> -->
          <!-- <label for="mLastname">Last Name:</label> -->
          <input type="text" class="form-control" name="mLastname" id="mLastname" placeholder="Last Name">
        </div>

        <div class="form-group">
          <!-- <div class="col-sm-10"> -->
          <!-- <label for="mBirthday">Birth Date:</label> -->
          <input type="date" class="form-control" name="mBirthday" id="mBirthday" placeholder="Birth Date">
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
          <button type="submit" class="btn btn-primary" data-dismiss="collapse" name="submit">Submit</button>
        </div>

      </div>
        
   
    </form>
    <!-- END SA MAMA BRAD -->

    <!-- PAPAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
  
      <form action="action_father" id="collapse_father" class="collapse" method="POST">

      <div id="data_father">
        <h2>Input Your Father's Information..</h2>
        <div class="form-group">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
          <!-- <div class="col-sm-10"> -->
          <!-- <label for="mFirstname">First Name:</label> -->
          <input type="text" class="form-control" name="fFirstname" id="fFirstname" placeholder="First Name">
        </div>

        <div class="form-group">
          <!-- <div class="col-sm-10"> -->
          <!-- <label for="mFirstname">Middle Name:</label> -->
          <input type="text" class="form-control" name="fMiddlename" id="fMiddlename" placeholder="Middle Name">
        </div>

        <div class="form-group">
          <!-- <div class="col-sm-10"> -->
          <!-- <label for="mLastname">Last Name:</label> -->
          <input type="text" class="form-control" name="fLastname" id="fLastname" placeholder="Last Name">
        </div>

        <div class="form-group">
          <!-- <div class="col-sm-10"> -->
          <!-- <label for="mBirthday">Birth Date:</label> -->
          <input type="date" class="form-control" name="fBirthday" id="fBirthday" placeholder="Birth Date">
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
          <button type="submit" class="btn btn-primary" data-dismiss="collapse">Add</button>
        </div>

      </div>
    </form>

    <!-- END SA PAPAAAAA -->

    <!-- ANAAAAAAAAAAKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK -->
  
      <form action="action_child"  id ="collapse_child" class="collapse" method="POST">

      <div id="data_child">
        <h2>Input Your Child's Information..</h2>

        <div class="form-group">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
          <!-- <div class="col-sm-10"> -->
          <!-- <label for="mFirstname">First Name:</label> -->
          <input type="text" class="form-control" name="cFirstname" id="cFirstname" placeholder="First Name">
        </div>

        <div class="form-group">
          <!-- <div class="col-sm-10"> -->
          <!-- <label for="mFirstname">Middle Name:</label> -->
          <input type="text" class="form-control" name="cMiddlename" id="cMiddlename" placeholder="Middle Name">
        </div>

        <div class="form-group">
          <!-- <div class="col-sm-10"> -->
          <!-- <label for="mLastname">Last Name:</label> -->
          <input type="text" class="form-control" name="cLastname" id="cLastname" placeholder="Last Name">
        </div>

        <div class="form-group">
          <!-- <div class="col-sm-10"> -->
          <!-- <label for="mBirthday">Birth Date:</label> -->
          <input type="date" class="form-control" name="cBirthday" id="cBirthday" placeholder="Birth Date">
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
          <input type="radio" name="cGender" id="cGender" value="Male">Male
        </div>

<br><br>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" data-dismiss="collapse">Add</button>
        </div>

      </div>
    </form>


    <!-- ASAWAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->

      <form action="action_spouse" id="collapse_spouse" class="collapse" method="POST">
      <div id="data_spouse">
        <h2>Input Your Spouse's Information..</h2>
        <div class="form-group">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
          <!-- <div class="col-sm-10"> -->
          <!-- <label for="mFirstname">First Name:</label> -->
          <input type="text" class="form-control" name="sFirstname" id="sFirstname" placeholder="First Name">
        </div>

        <div class="form-group">
          <!-- <div class="col-sm-10"> -->
          <!-- <label for="mFirstname">Middle Name:</label> -->
          <input type="text" class="form-control" name="sMiddlename" id="sMiddlename" placeholder="Middle Name">
        </div>

        <div class="form-group">
          <!-- <div class="col-sm-10"> -->
          <!-- <label for="mLastname">Last Name:</label> -->
          <input type="text" class="form-control" name="sLastname" id="sLastname" placeholder="Last Name">
        </div>

        <div class="form-group">
          <!-- <div class="col-sm-10"> -->
          <!-- <label for="mBirthday">Birth Date:</label> -->
          <input type="date" class="form-control" name="sBirthday" id="sBirthday" placeholder="Birth Date">
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
          <input type="radio" name="sGender" id="sGender" value="Female">Female
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="sGender" id="sGender" value="Male">Male
        </div>

<br><br>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" data-dismiss="collapse">Add</button>
        </div>

      </div>
    </form>

    <!-- END SA ASAWAAAAAAA -->

		</div>
        </div>
        
      </div>
      
    </div>
  </div>
  
</div>


</div>
</div>
</div>
<!--End of Modal-->
@endsection