<?php
include_once 'connection.php';

	$sql= "SELECT passenger.passengerID as 'Pas ID',passenger.passengerName as 'Name',passenger.National_ID_Number as 'ID Number',origin,destination,busLiscence as 'Bus Number' FROM journey journey LEFT JOIN passenger ON journey.journeyId = passenger.journeyId;";
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);

	if ($resultCheck>0) {
		while ($row=mysqli_fetch_assoc($result)) {
			echo $row['Name']."<br>";
		}
	}
    ?>