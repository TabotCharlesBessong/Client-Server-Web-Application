<?php
 if (isset(($_POST['submit']))) {
        
    include_once 'connection.php';

$name=mysqli_real_escape_string($conn, $_POST['sub-admin']);
$pwd=mysqli_real_escape_string($conn, $_POST['password']);
$agency=mysqli_real_escape_string($conn, $_POST['agency']);

if (empty($name) || empty($pwd) || empty($agency)) {
    echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    header("Location: ../pages/createSubAdmin.html?creation=empty");
    exit();
    }
    else{


	$sql= "INSERT INTO `subadmin`( `agencyId`, `subAdminPassword`, `SubAdminName`) VALUES ((SELECT agencyId FROM `agencylocation` WHERE agencyName = '$agency'),'$pwd','$name');";
	$sql1="INSERT INTO `agencylocation`(`agencyName`) VALUES ('$agency')";
    $result1=mysqli_query($conn,$sql1);
    $result=mysqli_query($conn,$sql);

	header("Location: ../pages/createSubAdmin.html?Assignment=successful");//this takes us back to our index file.
	

 }
}

 else{
    header("Location: ../pages/createSubAdmin.html");
}
	?>