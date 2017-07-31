@extends('layout')

@section('title', 'Google Chart Sample')

@section('head')

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        google.charts.load('current', {packages:["orgchart"]});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart()
        {   
            var tree = <?php echo json_encode($tree);?>;

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Firstname');
            data.addColumn('string', 'Parent'); // this column is on top; parent column
            data.addColumn('string', 'Tooltip'); // tooltip

            for(var i in tree)
            {
                var user = tree[i];

                data.addRow([user.uFirstname, user.mFirstname, '']);
                data.addRow([user.uFirstname, user.fFirstname, '']);
                data.addRow([user.cFirstname, user.uFirstname, '']);
                data.addRow([user.sFirstname, '', user.uFirstname]);
                data.addRow([user.fFirstname, '', user.mFirstname]);
            }

            // Create the chart.
            var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
            // Draw the chart, setting the allowHtml option to true for the tooltips.
            chart.draw(data, {allowHtml:true});
        }
    </script>
    
@section('content')

    <div id="chart_div"></div>

@endsection