<!DOCTYPE html>

<html>
<body style="background-color: orange;">

<?php
session_start();

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'db');

$s = "SELECT epsID, formID, epDesc, epName FROM dbeps where epsID = 3";
$result = mysqli_query($con, $s);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<br><strong> Episode ID: ".$row["epsID"]."<br> Form ID: ".$row["formID"]."<br> Episode Description: ".$row["epDesc"]."<br> Episode Name: ".$row["epName"]."</strong><br>";
  }
}

$con -> close();
?>

<a href="MainPage.php">Go home</a>


</body>
</html>