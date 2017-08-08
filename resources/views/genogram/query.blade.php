@extends('layouts.app')

@section('content')
    <?php echo $query;?>;


    <script type="text/javascript">

    var query = <?php echo $query;?>;

    document.write(query);

    </script>

@endsection
