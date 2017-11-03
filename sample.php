<!DOCTYPE html>
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>IPPC Smart Managent System</title>
    </head>

    <style>
	body {background-color:#2c3338;}
	h4 {color:#ffff66; font-family:Open Sans;}
	th,td {color:#ffff66;}
    </style>

    <body>
     <center>
	<br>
      <font face="Arial Rounded MT Bold" size="6" color="#ffff66">IPPC Smart Mangement System</font>
	<h4>2017년 10월 16일 월요일 오후 8시 30분</h4>
		<br>
	<table width=600px; height=300px;>
	    <tr>
		 <th colspan=3><font color="#ffff66">Location<font></th>
 		 <th colspan=3>Area Data</th>
	    </tr>
	    <tr>
		<td colspan=3>
		  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.537841838458!2d126.94419524992317!3d37.56595097969882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9886fa2a4453%3A0x480cd76cb6798c74!2z67SJ7JuQ6rOg6rCA7LCo64-E!5e0!3m2!1sko!2skr!4v1503377765884" width="300px" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
	       </td>
		<td colspan=3>
		  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		  <script type="text/javascript">
 			   google.charts.load("current", {packages:['corechart']});
 			   google.charts.setOnLoadCallback(drawChart);

			   function drawChart() {
 				  var data = google.visualization.arrayToDataTable([["Element", "Density", { role: "style" } ], ["A", 1, "#b87333"], ["B", 5, "silver"], ["C", 2, "gold"], ["D", 7, "color: #e5e4e2"]]);
   				  var view = new google.visualization.DataView(data);
    				  view.setColumns([0, 1, { calc: "stringify", sourceColumn: 1, type: "string", role: "annotation" }, 2]);

     			  var options = {title: "", width: 300, height: 300, bar: {groupWidth: "95%"}, legend: { position: "none" },};
   			  var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      			  chart.draw(view, options);}
			  function getValueAt(column, dataTable, row) {return dataTable.getFormattedValue(row, column);}
 		 </script>
		 <div id="columnchart_values" style="width: 300px; height:300px;"></div>
	    </td>
	    </tr>
	   <tr></tr><tr></tr><tr></tr><tr></tr>
	   <tr>
	   <th colspan=6></th>
	 </tr>
	 <tr align="center">
		<td colspan=2>Location</td>
		<td colspan=2>Proximity</td>
		<td colspen=2>Time</td>
	</tr>

<?php
	$db_host = "localhost";
	$db_user = "root";
	$db_passwd = "root";
	$db_name = "test";

	$conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

	if(mysqli_connect_errno($conn))
	{
	   echo "DB connect failed", mysqli_connect_error();
	}

	else
	{
	    $number = 1;
	    $result = mysqli_query($conn, "SELECT * FROM ex;");

	    while($row = mysqli_fetch_array($result))
	    {
	        echo "<tr align='center'>";
	        echo "<td colspan=2>".$row[CarLo]."</td>";
	        echo "<td colspan=2>".$row[PValue]."</td>";
	        echo "<td colspan=2>".$row[Time]."</td>";
	        echo "</tr>";

	        $number++;
	    }
	}

	mysqli_close($conn);
?>

       </table>
    </center>
  </body>
</html>
