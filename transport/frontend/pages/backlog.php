<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>backlog</title>
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="../styles/specialStyles.css">
    <link rel="stylesheet" href="../styles/mediaQuery.css">
    <link rel="stylesheet" href="../styles/backlog.css">
</head>
<body onload="loader()">
    <div class="container">
        <header class="header">
    <nav class="nav">
      <div class="nav-left">
        <h2 class="logo" > <a href="./index.html">SupLex</a> </h2>
      </div>
      <div class="nav-center">
        <ul class="nav-links" >
          <li tabindex="1"> <a href="./AdminHomepage.html"> home </a> </li>
          <li> <a href="./createSubAdmin.html"> create sub-admin</a> </li>
          <li> <a href="./assignBus.php">assign buses</a> </li>
          <li> <a href="./backlog.html"> backlog </a> </li>
        </ul>
      </div>
      <div class="nav-right">
        <a href="./Adminlogin.html">
          <img src="../assets//avatar.jfif" alt="">
          
        </a>
      </div>
    </nav>
  </header>
          <div class="title">
            <h1>Backlog</h1>
        </div>
          <div class="backlog-content">
            <div class="agency">
                <div class="btn">
                    <button id="btn-primary" onclick="hideTable()">Agencies</button>
                </div>
                <div class="agency-table" id="agencyTable">
                   <!-- Insert Table Here from Javscript -->
                   <table class="suplex">
                    <tr>
                      <th>agency id</th>
                      <th>agency name</th>
                      <th>sub-admin </th>
                    
                    </tr>

                    <?php

                    include_once 'connection.php';

$sql= "SELECT agencylocation.agencyId as 'Agency ID',agencylocation.agencyName as 'Agency',SubAdminName as 'Sub Admin' FROM subadmin subadmin LEFT JOIN agencylocation ON subadmin.agencyId = agencylocation.agencyId;";
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);

	if ($resultCheck>0) {
		while ($row=mysqli_fetch_assoc($result)) {
		//	echo $row['Agency']."<br>";

      echo  "<tr>
      <td>".$row["Agency ID"]."</td>
      <td>".$row["Agency"]."</td>
      <td>".$row["Sub Admin"]."</td>
    </tr>";
		}
	}
                  

                    ?>
                    
                  </table>
                </div>
            </div>
            <div class="passenger-info">
                <div class="btn">
                    <button id="btn-primary" onclick="hidePassenger()">Passenger Info</button>
                </div>
                <div class="agency-table" id="pTable">
                   <!-- Insert Table Here from Javscript -->
                   <table class="suplex">
                    <tr>
                      <th>pass id</th>
                      <th> name</th>
                      <th class="u" >nic </th>
                      <th>origin </th>
                      <th>destination </th>
                      <th>bus number </th>
                    </tr>

                    <?php

include_once 'connection.php';

$sql= "SELECT passenger.passengerID as 'Pas ID',passenger.passengerName as 'Name',passenger.National_ID_Number as 'ID Number',origin,destination,busLiscence as 'Bus Number' FROM journey journey LEFT JOIN passenger ON journey.journeyId = passenger.journeyId;";
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);

	if ($resultCheck>0) {
		while ($row=mysqli_fetch_assoc($result)) {
			//echo $row['Name']."<br>";

      echo  "<tr>
<td>".$row["Pas ID"]."</td>
<td>".$row["Name"]."</td>
<td>".$row["ID Number"]."</td>
<td>".$row["origin"]."</td>
<td>".$row["destination"]."</td>
<td>".$row["Bus Number"]."</td>
</tr>";

		}
	}


?>
                    
                  </table>
                </div>
            </div>
            <div class="journey-info">
                <div class="btn">
                    <button id="btn-primary" onclick="hideJourney()">Journey Info</button>
                </div>
                <div class="agency-table" id="jTable">
                   <!-- Insert Table Here from Javscript -->
                   <table class="suplex">
                    <tr>
                      <th>bus id</th>
                      <th>origin </th>
                      <th>destination </th>
                      <th>number of Passenger </th>
                    </tr>

                    <?php

include_once 'connection.php';

$sql= "SELECT LicenseNum,journey.origin,journey.destination,journey.passengerCount,journey.state FROM bus bus LEFT JOIN journey ON bus.LicenseNum = journey.busLiscence;";
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);

	if ($resultCheck>0) {
		while ($row=mysqli_fetch_assoc($result)) {
			//echo $row['origin']."<br>";

      echo  "<tr>
<td>".$row["LicenseNum"]."</td>
<td>".$row["origin"]."</td>
<td>".$row["destination"]."</td>
<td>".$row["passengerCount"]."</td>
</tr>";

		}
	}


?>
                  
                    
                  </table>
                </div>
            </div>
            </div>
          </div>
    </div>
  <!-- <script src="../js/backlog.js"></script> -->
</body>
</html>