@extends(layouts.app)

@section('content')

       <button onclick="try">SHOW CHILD</button>

   @foreach ($child as $child)

<p>{{$child->cFirstname}} {{$child-> cMiddlename}} {{$child-> cLastname}}</p>

<h1>IS RELATED TO...</h1>
<!-- <h3>{{$child->getUser()}}</h3> -->



@endforeach


@endsection