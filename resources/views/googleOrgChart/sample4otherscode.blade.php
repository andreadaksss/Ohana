<html>
<head>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type='text/javascript' src='http://www.google.com/jsapi'></script>

    <script type="text/javascript">
        google.load('visualization', '1', {packages:['orgchart']});
        //google.setOnLoadCallback(drawChart2);
// -----------------------------------------------------------------------------------------------
        function theDo()
        {
            var theArray = new Array();
            //These next two should be an already sorted (on manager) pair of Associate/Managers

            var colAssociate = $('.theAssociate'); //collection of associates
            var colManager = $('.theManager'); //collection of their respective managers.   //Next, loop through everyone. "Trick" the org chart to place them differently if they have multiple reports
            
            for( var i = 1 ; i < colAssociate.length ; i++ )
            { 
                if( colManager.find(':contains("' + colAssociate[i].innerText + '")').length == 0 && colManager[i].innerText == colManager[i-1].innerText )
                { 
                    theArray[theArray.length] = [colAssociate[i].innerText , colAssociate[i-1].innerText];
                    //Report to the last person reporting to the manager causing the downward look
                }
                else
                {
                    theArray[theArray.length] = [colAssociate[i].innerText , colManager[i].innerText];
                    //Report to the manager
                }
            }

            drawChart2(theArray); //do the regular chart drawing
        }

        function drawChart2(theArray)
        {
            var data = new google.visualization.DataTable();

            data.addColumn('string', 'Name');
            data.addColumn('string', 'Manager');

            data.addRows(theArray);

            var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
            chart.draw(data, {allowHtml:true});
        }
// -----------------------------------------------------------------------------------------------
// Org Chart Sample
        function drawChart()
        {
            var data = new google.visualization.DataTable();
            
            data.addColumn('string', 'Name');
            data.addColumn('string', 'Manager');
            data.addColumn('string', 'ToolTip');

            // For each orgchart box, provide the name, manager, and tooltip to show.
            data.addRows([
                [{v:'Mike', f:'Mike<div style="color:red; font-style:italic">President</div>'}, '', 'The President'],
                [{v:'Jim', f:'Jim<div style="color:red; font-style:italic">Vice President</div>'}, 'Mike', 'VP'],
                ['Alice', 'Mike', ''],
                ['Bob', 'Jim', 'Bob Sponge'],
                ['Carol', 'Bob', ''],
                [{v:'Jim',f:'Mike'},'father1','']
                [{v:'Alice',f:'Mike'},'father2','']
            ]);

            // Create the chart.
            var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
            // Draw the chart, setting the allowHtml option to true for the tooltips.
            chart.draw(data, {allowHtml:true});
        }
// -----------------------------------------------------------------------------------------------
// my own original code
        function drawChart()
        {   
            var tree = <?php echo json_encode($tree);?>;

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Firstname');
            data.addColumn('string', 'Parent'); // this column is on top; parent column
            data.addColumn('string', 'Spouse');
            data.addColumn('string', 'Lastname');

            for(var i in tree)
            {
                var user = tree[i];

                // data.addRow([user.mFirstname + user.fFirstname, '']);
                data.addRow([user.uFirstname, user.mFirstname, user.fFirstname, user.uLastname]);
                data.addRow([user.cFirstname, user.uFirstname, '', user.uLastname]);
                data.addRow([user.sFirstname, '', user.uFirstname, user.uLastname]);
                data.addRow([user.fFirstname, '', user.mFirstname, user.uLastname]);
            }

            // Create the chart.
            var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
            // Draw the chart, setting the allowHtml option to true for the tooltips.
            chart.draw(data, {allowHtml:true});
        }
    </script>

</head>
<body onload="theDo()">

    <div class="theAssociate">Manager1</div>
    <div class="theManager"></div>

    <div class="theAssociate">Lacky1</div>
    <div class="theManager">Manager1</div>

    <div class="theAssociate">Lacky2</div>
    <div class="theManager">Manager1</div>

    <div class="theAssociate">Lacky3</div>
    <div class="theManager">Manager1</div>

    <div id='chart_div'></div>
    
</body>