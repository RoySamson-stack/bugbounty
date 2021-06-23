<?php
include_once "db.php";
include_once "header.php";
include_once "sidebar.php";
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Employee', 'Count'],
          ['Ethical hackers',     2],
          ['Threats',      14],
          ['Reception',  4],
          ['Other hackers', 5],
        
        ]);

        var options = {
          title: 'Cyber space statistics',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
<style>
#piechart_3d{
		width: 400px; 
		height: 400px;
	        margin-left : 300px;
            }
#barchart_values{
		width: 400px; 
		height: 400px;
	        margin-left : 800px;
		margin-top :-400px;
            }
#calendar_basic{
		width: 1000px; 
		height: 250px;
	        margin-left : 300px;
            }


</style>
 <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Type", "Expense", { role: "style" } ],
        ["Servers", 8.94, "#b87333"],
        ["Salary", 10.49, "silver"],
        ["Rent", 19.30, "gold"],
        ["External Services", 21.45, "color: #e5e4e2"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Equipment Expense",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>
  <script type="text/javascript">
      google.charts.load("current", {packages:["calendar"]});
      google.charts.setOnLoadCallback(drawChart);

   function drawChart() {
       var dataTable = new google.visualization.DataTable();
       dataTable.addColumn({ type: 'date', id: 'Date' });
       dataTable.addColumn({ type: 'number', id: 'Room Booked' });
       dataTable.addRows([
          [ new Date(2017, 3, 13), 6   ],
          [ new Date(2017, 3, 14), 7   ],
          [ new Date(2017, 3, 15), 2   ],
          [ new Date(2017, 3, 16), 3   ],
          [ new Date(2017, 3, 17), 3   ],
           //
          [ new Date(2017, 4, 13), 5   ],
          [ new Date(2017, 4, 14), 9 ],
          [ new Date(2017, 4, 15), 5 ],
          [ new Date(2017, 4, 16), 6 ],
          [ new Date(2017, 4, 17), 2 ],
          // Many rows omitted for brevity.
          [ new Date(2017, 9, 4), 3 ],
          [ new Date(2017, 9, 5), 5],
          [ new Date(2017, 9, 12), 6],
          [ new Date(2017, 9, 13), 7],
          [ new Date(2017, 9, 19), 1 ],
          [ new Date(2017, 9, 23), 3],
          [ new Date(2017, 9, 24), 5],
          [ new Date(2017, 9, 30), 2 ]
        ]);

       var chart = new google.visualization.Calendar(document.getElementById('calendar_basic'));

       var options = {
         title: "Cyber threat map per Day",
         height: 350,
       };

       chart.draw(dataTable, options);
   }
</script>
  </head>
  <body>
    <div id="piechart_3d"></div>
    <div id="barchart_values"></div><br><br><br>
    <div id="calendar_basic"></div>
  </body>
  <p><!--  widget to render cyber threat map -->
<iframe width="1640" height="640" src="https://cybermap.kaspersky.com/en/widget/dynamic/dark" frameborder="0"></p>
</html>
<?php
include_once "footer.php";
?>
