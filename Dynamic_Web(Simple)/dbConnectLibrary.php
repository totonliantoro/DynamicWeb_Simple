<?php
  $USER     = "root"; //Connect to database
  $PASSWORD = "pass";
  $DBNAME   = "Library";
  $conn     = mysqli_connect("localhost", $USER, $PASSWORD, $DBNAME) 
     or die("mySQL server connection failed");
?>