<?php
// Create connection
$con=mysqli_connect("klbcedmmqp7w17ik.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","ja1jjwzl3da927c4","cly6xs20orqad776","hzfrszw32fvsfza6");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>