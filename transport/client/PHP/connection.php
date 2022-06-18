<?php

$dbServerName="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="client_server";

$conn=mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);

if( $conn->connect_error ) { 
      die('Could not connect: ' . $conn->connect_error);
     }
            
//    echo 'Connected successfully';
//   // mysql_close($conn); 
// 