<?php
   $con = mysqli_connect("localhost", "root", "root", "test") or die("Failed to connect Mysql!");

   $ID = $_POST["ID"];

   $sql = "DELETE FROM test_db WHERE id='".$ID."'";

   $ret = mysqli_query($con, $sql);

   if($ret)
   {
        echo $ID." Successfully Deleted!";
   }

   else
   {
        echo "Failed to delete your account!";
        echo "<br>Error : ".mysqli_error($con);
   }

   mysqli_close($con);

   echo "<br><br><center><a href='login.html'>Start Login!</a>";
?>

