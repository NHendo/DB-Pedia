<!DOCTYPE html>

<html>
<body style="background-color: orange;">

<img src="ginyugok.png" alt="picture of Ginyu in Goku's Body" width='400px' height="400px">
<?php
session_start();

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'db');

$s = "SELECT formID, charID, formnames, power FROM dbforms where formID = 7";
$result = mysqli_query($con, $s);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<br><strong> Form ID: ".$row["formID"]."<br> Character ID: ".$row["charID"]."<br> Form Name: ".$row["formnames"]."<br> Power Level: ".$row["power"]."</strong><br>";
  }
}

$con -> close();
?>

<a href="MainPage.php">Go home</a>


</body>
</html>