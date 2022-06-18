
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
        <h2 class="logo" >SupLex</h2>
      </div>
      <div class="nav-center">
        <ul class="nav-links" >
          <li tabindex="1"> <a href="./subAdmin.html"> home </a> </li>
          
          <li> <a href="./mail.html">send mail</a> </li>
          <li> <a href="./addNotification.html">add notification</a> </li>
          <li> <a href="./subBaglog.php"> backlog </a> </li>
        </ul>
      </div>
      <div class="nav-right">
        <a href="./subAdminLogin.html">
          <img src="../assets/sub.png" alt="">
          
        </a>
      </div>
    </nav>
  </header>
          <div class="title">
            <h1>Backlog</h1>
        </div>
          <div class="backlog-content">
            <div class="passenger-info">
                <div class="btn">
                    <button id="btn-primary" onclick="hidePassenger()">Mail History</button>
                </div>
                <div class="agency-table" id="pTable">
                   <!-- Insert Table Here from Javscript -->
                   <table class="suplex">
                    <tr>
                      <th>mail id</th>
                      <th>package</th>
                      <th>sender's name </th>
                      <th>receiver's name </th>
                      <th>origin </th>
                      <th>destination </th>
                    </tr>

                    <?php

include_once 'connection.php';

$sql= "SELECT * FROM mail;";
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);

	if ($resultCheck>0) {
		while ($row=mysqli_fetch_assoc($result)) {
		//	echo $row['mailId']."<br>";

      echo  "<tr>
<td>".$row["mailId"]."</td>
<td>".$row["Package_description"]."</td>
<td>".$row["senderName"]."</td>
<td>".$row["recieverName"]."</td>
<td>".$row["origin"]."</td>
<td>".$row["destination"]."</td>
</tr>";

		}
	}


?>
                    

                  </table>
                </div>
                <!-- <hr> -->
            </div>
            <div class="agency">
                <div class="btn">
                <!--    <button id="btn-primary" onclick="hideTable()">Passenger Info</button>-->
                </div>
                <div class="agency-table" id="agencyTable">
                   <!-- Insert Table Here from Javscript -->
                </div>
                <!-- <hr> -->
            </div>
            
            <div class="journey-info">
                <div class="btn">
                    <button id="btn-primary" onclick="hideJourney()">Bus Info</button>
                </div>
                <div class="agency-table" id="jTable">
                   <!-- Insert Table Here from Javscript -->
                   <table class="suplex">
                    <tr>
                      <th>bus id</th>
                      <th>seats available</th>
                      <th>origin </th>
                      <th>destination </th>
                    </tr>

                    <?php

include_once 'connection.php';

$sql= "SELECT LicenseNum,capacity,journey.origin,journey.destination,journey.passengerCount,journey.state FROM bus bus inner JOIN journey ON bus.LicenseNum = journey.busLiscence;";
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);

	if ($resultCheck>0) {
		while ($row=mysqli_fetch_assoc($result)) {
			//echo $row['origin']."<br>";

      echo  "<tr>
<td>".$row["LicenseNum"]."</td>
<td>".$row["capacity"]."</td>
<td>".$row["origin"]."</td>
<td>".$row["destination"]."</td>
</tr>";

		}
	}


?>
                  
                    
                  </table>
                   
                </div>
                <!-- <hr> -->
            </div>
            </div>
          </div>
    </div>
  <!-- <script src="../js/subBacklog.js"></script> -->
</body>
</html>