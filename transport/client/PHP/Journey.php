<?php
$url = $_SERVER["REQUEST_URI"]; 
$pos = strrpos($url, "seat-selection.html"); 
$licence=0;
if($pos != false) {
    echo "found it at " . $pos; 

    include_once 'connection.php';

// $first=mysqli_real_escape_string($conn, $_POST['first']);
// $last=mysqli_real_escape_string($conn, $_POST['last']);
// $gender=mysqli_real_escape_string($conn, $_POST['gender']);
// $address=mysqli_real_escape_string($conn, $_POST['address']);


	$sql= "INSERT INTO journey(origin,destination,busliscence,state,passengerCount) VALUES ('Buea','Bamenda',$licence+1,'loading',30);";
	$result=mysqli_query($conn,$sql);
    $licence+=1;
	

}
?>