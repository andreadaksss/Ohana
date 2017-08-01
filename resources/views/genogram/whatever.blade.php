@extends('layouts.app')

@section('title', 'Google Chart Sample')

@section('head')

<script type="text/javascript">
	
	var tree = <?php echo json_encode($tree);?>;

	for (var i = 0; i < nodeDataArray.length; i++)
	{
	    var user = tree[i];

	    console.log(user);

	}

</script>

@section('content')

    <div id="chart_div"></div>

@endsection