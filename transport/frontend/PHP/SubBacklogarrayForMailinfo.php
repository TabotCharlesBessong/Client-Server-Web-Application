<?php
include_once 'connection.php';

	$sql= "SELECT * FROM mail;";
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);

	if ($resultCheck>0) {
		while ($row=mysqli_fetch_assoc($result)) {
			echo $row['mailId']."<br>";
		}
	}
    ?>