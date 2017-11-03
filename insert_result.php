<?php
   $con = mysqli_connect("localhost", "root", "root", "test") or die("Failed to connect Mysql!");

   $ID = $_POST['ID'];
   $PW = $_POST['PW'];

   $sql = "INSERT INTO test_db VALUES('".$ID."', '".$PW."');";

   $ret = mysqli_query($con, $sql);

   if($ret)
   {
      echo "<center><h1> Successfully Enrolled!";
   }

   else
   {
      echo "Failed to enroll...";
      echo "Error: ".mysqli_error($con);
   }

   mysqli_close($con);

   echo "<br><br><a href = 'login.html'>Start Login</a>";
?>
