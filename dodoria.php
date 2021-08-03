<!DOCTYPE html>

<html>
<body style="background-color: orange;">

<img src="dodoria.png" alt="picture of Dodoria" width='400px' height="400px">
<?php
session_start();

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'db');

$s = "SELECT charID, charnames, powerlevel, gender FROM dbchars where charID = 16";
$result = mysqli_query($con, $s);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<br><strong> Character ID: ".$row["charID"]."<br> Character Name: ".$row["charnames"]."<br> Power Level: ".$row["powerlevel"]."<br> Gender: ".$row["gender"]."</strong><br>";
  }
}

$con -> close();
?>

<a href="MainPage.html">Go home</a>


</body>
</html>