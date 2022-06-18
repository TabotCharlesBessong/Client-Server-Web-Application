<?php

if (isset(($_POST['submit']))) {
        
    include_once 'connection.php';

$bus=mysqli_real_escape_string($conn, $_POST['bus']);
$agency=mysqli_real_escape_string($conn, $_POST['agency']);

if (empty($bus) || empty($agency)) {
    echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    header("Location: ../pages/createSubAdmin.html?creation=empty");
    exit();
    }
    else{

	$sql= "INSERT INTO bus(LicenseNum,Agency) VALUES ('$bus','$agency');";
  //  $sql1= "INSERT INTO agencylocation(agencyName) VALUES ('$agency');";
    $result=mysqli_query($conn,$sql);
   // $result=mysqli_query($conn,$sql1);

	header("Location: ../pages/AdminHomepage.html?Assignment=successful");//this takes us back to our index file.
	
}
}

 else{
    header("Location: ../pages/assignBus.html");
}

	?>