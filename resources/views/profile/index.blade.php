@extends('layouts.app')

@section('content')

<button type="button" class="btn btn-info btn-lg" style="position= right;" onclick="/tree2">View Tree</button>

<br><br>
MOTHER:
<ul>
    @foreach($mothers as $mother)
        <li>{{ $mother->mFirstname }}</li>
        <li>{{ $mother->mMiddlename }}</li>
        <li>{{ $mother->mLastname }}</li>
        <li>{{ $mother->mBirthday }}</li>
        <li>{{ $mother->mMaritalStatus }}</li>
        <li>{{ $mother->mLivingStatus }}</li>
        <li>{{ $mother->mGender }}</li>
        <a href="edit/{{$mother->id}}">Update</a>
        <a href="edit/{{$mother->id}}">Delete</a>
    @endforeach
</ul>

<br><br>
FATHER:
<ul>
    @foreach($fathers as $father)
        <li>{{ $father->fFirstname }}</li>
        <li>{{ $father->fMiddlename }}</li>
        <li>{{ $father->fLastname }}</li>
        <li>{{ $father->fBirthday }}</li>
        <li>{{ $father->fMaritalStatus }}</li>
        <li>{{ $father->fLivingStatus }}</li>
        <li>{{ $father->fGender }}</li>
        <a href="edit/{{$father->id}}">Update</a>
        <a href="edit/{{$father->id}}">Delete</a>
    @endforeach
</ul>

</body>
</html>

@endsection