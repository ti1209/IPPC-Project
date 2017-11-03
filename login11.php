<?php

   $a = $_GET['id'];
   $b = $_GET['pw'];

   $connect = mysqli_connect("localhost", "root", "root") or die("DB Connection Error!");
   mysqli_select_db("test", $connect);

   $str = "SELECT * FROM test_db WHERE id='$a' AND pw='$b'";
   $result = mysqli_query($str, $connect);
   $row = mysqli_fetch_row($result);

   if($row)
	echo "<script>location.href='./sample.php';</script>";
   else
	echo "<script>alert('Error!'); location.href='./fail.html';</script>";

   mysql_close($connect);

?>
