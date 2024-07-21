<?php

$dbhost='localhost';
$dbname='employ';
$dbusername='root';
$dbpassword="";

$con=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
//echo "Connected successfully";



/* $sql="SELECT * from employ_master";
 
 //$result = $con->mysqli_query($sql);
 $result = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Name: " . $row["Name"]."<br>";
  }
} else {
  echo "0 results";
} */

?> 