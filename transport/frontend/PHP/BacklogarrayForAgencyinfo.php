<?php
include_once 'connection.php';

	$sql= "SELECT agencylocation.agencyId as 'Agency ID',agencylocation.agencyName as 'Agency',SubAdminName as 'Sub Admin' FROM subadmin subadmin LEFT JOIN agencylocation ON subadmin.agencyId = agencylocation.agencyId;";
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);

	if ($resultCheck>0) {
		while ($row=mysqli_fetch_assoc($result)) {
			echo $row['Agency']."<br>";
		}
	}
    ?>