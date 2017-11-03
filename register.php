<?php
   $con = mysql_connect("localhost","root","root","root");

   $userID = $_POST["userID"];
   $userpassword = $_POST["userpassword"];
   $userName = $_POST["userName"];
   $userPosition = $_POST["userPosition"];

   $statement = mysql_perpare($con,"INSERT INTO USER VALUES (?, ?, ?, ?)");
   mysql_stmt_bind_param($statement, "sssi", $userID, $userpassword, $userName, $userPosition);
   mysql_stmt_execute($statement);

   $response = array();
   $response["success"] = true;

   echo json_encode($response);

?>
