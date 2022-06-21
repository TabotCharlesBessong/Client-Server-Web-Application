<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer>alert("Welcome to Geeks for Geeks")</script>
</head>
<body>
<?php

if (isset(($_POST['submit']))) {
        
    include_once 'connection.php';

$bus=mysqli_real_escape_string($conn, $_POST['bus']);
$agency=mysqli_real_escape_string($conn, $_POST['agency']);
echo $agency;

if (empty($bus) || empty($agency)) {
    echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    echo ' <script type="text/javascript">alert("Welcome to Geeks for Geeks")</script>';
    header("Location: ../pages/createSubAdmin.html?creation=empty");
    exit();
    }
    else{
        echo ' <script type="text/javascript">alert("Welcome to Geeks for Geeks")</script>';
	$sql= "UPDATE bus SET Agency='$agency' WHERE LicenseNum='$bus';";
  //  $sql1= "UPDATE `bus` SET `Agency`='$agency' WHERE LicenseNum='$bus';";
    echo "<script>alert('Welcome to Geeks for Geeks')</script>";
  //  $sql1= "INSERT INTO agencylocation(agencyName) VALUES ('$agency');";
    $result=mysqli_query($conn,$sql);
  //  $result=mysqli_query($conn,$sql1);

	header("Location: ../pages/AdminHomepage.html?Assignment=successful,bus=$bus,agency=$agency");//this takes us back to our index file.
	
}
}

 else{
    header("Location: ../pages/assignBus.html");
}

	?>
</body>
</html>
