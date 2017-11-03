<?php
   $con = mysqli_connect("localhost", "root", "root", "test") or die("Failed to connect Mysql!");

   $sql = "SELECT * FROM test_db WHERE id='".$_GET['ID']."'";

   $ret = mysqli_query($con, $sql);

   if($ret)
   {
        $count = mysqli_num_rows($ret);

        if($count == 0)
        {
           echo $_GET['ID']." isn't our member!"."<br>";
           echo "<br><a href='login.html'>Start Login!</a>";
           exit();
        }
   }

    else
   {
        echo "Failed to search your acoount!";
	echo "<br>Error : ".mysqli_error($con);
	echo "<br><br><center><a href='login.html'>Start Login!</a>";
	exit();
   }

   $row = mysqli_fetch_array($ret);

   $ID = $row['id'];
   $PW = $row['pw'];
?>

<html>
<head>
<title>Delete my ccount</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>

<body>
<center>
<h1>Delete my account</h1>
<form method="post" action="delete_result.php">
   ID : <input type="text" name="ID" value=<?php echo $ID ?> readonly>
	<br>
   PW : <input type="text" name="PW" value=<?php echo $PW ?>>
	<br><br>
   Are you sure to delete your account? <input type="submit" value="Delete!">
</form>
</body>
</html>
