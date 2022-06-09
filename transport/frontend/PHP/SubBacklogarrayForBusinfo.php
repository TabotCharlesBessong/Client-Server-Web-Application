<?php
include_once 'connection.php';

	$sql= "SELECT LicenseNum,capacity,journey.origin,journey.destination,journey.passengerCount,journey.state FROM bus bus LEFT JOIN journey ON bus.LicenseNum = journey.busLiscence;";
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);

	if ($resultCheck>0) {
		while ($row=mysqli_fetch_assoc($result)) {
			echo $row['origin']."<br>";
		}
	}
    ?>