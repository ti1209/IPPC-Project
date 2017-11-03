<?php
   $con = mysqli_connect("localhost", "root", "root", "test") or die("Dailed to connect Mysql!");

   $ID = $_POST["ID"];
   $PW = $_POST["PW"];

   $sql = "UPDATE test_db SET pw='".$PW."' WHERE id='".$ID."'";

   $ret = mysqli_query($con, $sql);

   if($ret)
   {
	echo "Successfully Modified!";
   }

   else
   {
	echo "Failed to modify your account!";
	echo "<br>Error : ".mysqli_error($con);
   }

   mysqli_close($con);

   echo "<br><br><center><a href='login.html'>Start Login!</a>";
?>
