<?php
   $con = mysqli_connect("localhost", "root", "root", "test") or die("Failed to connect Mysql!");

   $sql = "SELECT * FROM test_db";

   $ret = mysqli_query($con, $sql);

   if($ret)
   {
	$count = mysqli_num_rows($ret);
   }

   else
   {
	echo "Failed to seaarch data!"."<br>";
	echo "Error : ".mysqli_error($con);
	exit();
   }

   echo "<center><h1>Search Result</h1>";
   echo "<table border=1>";
   echo "<tr>";
   echo "<th>ID</th><th>PW</th>";
   echo "</tr>";

   while($row = mysqli_fetch_array($ret))
   {
	echo "<tr>";
	echo "<td>", $row['id'], "</td>";
	echo "<td>", $row['pw'], "</td>";
	echo "</tr>";
   }

   mysqli_close($con);

   echo "</table><br><br>";
   echo "<a href='login.html'>Start Login</a>";
?>
