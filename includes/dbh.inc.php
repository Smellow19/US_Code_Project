<?php
$dbServername ='localhost';
$dbUserName ='root';
$dbPassword ='';
$dbname="us_code_project";


$conn = mysqli_connect($dbServername, $dbUserName, $dbPassword, $dbname);

if($conn->connect_error){
  die("Connection Failed: " . $conn->connect_error);
} else {
  echo "Connected Successfully";
}
