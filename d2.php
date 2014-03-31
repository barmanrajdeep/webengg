<?php
$con=mysqli_connect("localhost","jharvard","crimson","my_db");
// Check connection
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }

$sql="INSERT INTO Quotations (TIME, QUOTE) VALUES ('$_POST[moment]','$_POST[line]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

echo "1 record added";

mysqli_close($con);
?>
