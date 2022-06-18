
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>assignBus Page</title>
  <link rel="stylesheet" href="../styles/form.css">
  <link rel="stylesheet" href="../styles/specialStyles.css">
  <link rel="stylesheet" href="../styles/home.css">
</head>
<body class="bg bg-img" >
    <header class="header">
    <nav class="nav">
      <div class="nav-left">
        <h2 class="logo" ><a href="./index.html">SupLex</a>  </h2>
      </div>
      <div class="nav-center">
        <ul class="nav-links" >
          <li tabindex="1"> <a href="./AdminHomepage.html"> home </a> </li>
        
        
          
          <li> <a href="./createSubAdmin.html"> create sub-admin</a> </li>
          <li> <a href="./assignBus.php">assign buses</a> </li>
          <li> <a href="./backlog.php"> backlog </a> </li>
        </ul>
      </div>
      <div class="nav-right">
        <a href="./Adminlogin.html">
          <img src="../assets/avatar.jfif" alt="">
          
        </a>
      </div>
    </nav>
  </header>
  <div class="form">

    <form method="POST" action="../PHP/assignBus.php" class="form-group">
      
      <div class="form-control">
        <label for="agency">Branch</label>
        <select name="agency" id="agencies">
        <?php

include_once 'connection.php';
$sql= "SELECT * FROM agencylocation;";
$result=mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);

if ($resultCheck>0) {
  while ($row=mysqli_fetch_assoc($result)) {

        echo "<option value='agency'>".$row["agencyName"]."</option>";
  }}

        ?>

</select>
      </div>
      <div class="form-control">
        <label for="agency">Select Bus</label>
        <select name="bus" id="agencies">
          
          <?php
include_once 'connection.php';

$sql= "SELECT * FROM bus;";
$result=mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);

if ($resultCheck>0) {
  while ($row=mysqli_fetch_assoc($result)) {

        echo "<option value='bus'>".$row["LicenseNum"]."</option>";
  }}

        ?>
  
        </select>
      </div>
    
      <div class="form-control">
        <button name="submit" class="btn lg-btn" type="submit" >create agency</button>
      </div>
    </form>
  </div>
</body>
</html>