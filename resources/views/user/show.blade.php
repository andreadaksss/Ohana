@extends('layouts.app')

@section('content')


<br><br>
MOTHER:
    @foreach($mothers as $mother)
        <tr>
            <td>{{ $mother->mLastname }} , {{ $mother->mFirstname }} {{ $mother->mMiddlename }} </td>
        </tr>
        <a href="medit/{{$mother->id}}"> Edit</a>
    @endforeach

<br>
FATHER:
    @foreach($fathers as $father)
        <tr>
            <td>{{ $father->fLastname }} , {{ $father->fFirstname }} {{ $father->fMiddlename }} </td>
        </tr>
       
        <a href="fedit/{{$father->id}}">Edit</a>
    @endforeach

<br>
SPOUSE:
    @foreach($spouses as $spouse)
        <tr>
            <td>{{ $spouse->sLastname }} , {{ $spouse->sFirstname }} {{ $spouse->sMiddlename }} </td>
        </tr>
        <a href="sedit/{{$spouse->id}}"> Edit</a>
    @endforeach

<br>
CHILD/CHILDREN:
    @foreach($children as $child)
        <tr>
            <td>{{ $child->cLastname }} , {{ $child->cFirstname }} {{ $child->cMiddlename }} </td>
        </tr>
        <a href="cedit/{{$child->id}}"> Edit</a>
    @endforeach

</body>
</html>

@endsection