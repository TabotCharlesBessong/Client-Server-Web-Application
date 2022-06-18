<?php

$dbServerName="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="client_server";

$conn=mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);

if(! $conn ) { 
      die('Could not connect: ' . mysql_error());
     }
            
//    echo 'Connected successfully';
//   // mysql_close($conn); 
// 